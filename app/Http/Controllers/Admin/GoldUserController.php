<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class GoldUserController extends Controller
{
    
    public function index()
{
    // Check user access based on gate (permission)
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden | You cannot access this page because you do not have permission');

    // Get the users with the "Diamond" role
    $roleNameToRetrieve = 'Gold';
    $usersWithDiamondRole = User::whereHas('roles', function ($query) use ($roleNameToRetrieve) {
        $query->where('title', $roleNameToRetrieve);
    })->get();

    // Get the count of orders for each user
    $userOrderCounts = User::leftJoin('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.id', 'users.name', DB::raw('count(orders.id) as order_count'))
        ->groupBy('users.id', 'users.name')
        ->get();

    // Get the count of orders and total_price for each user
    $userOrderStats = User::leftJoin('orders', 'users.id', '=', 'orders.user_id')
        ->leftJoin('order_products', 'orders.id', '=', 'order_products.order_id')
        ->select('users.id', 'users.name', DB::raw('count(orders.id) as order_count'), DB::raw('sum(order_products.total_price) as total_price_sum'))
        ->groupBy('users.id', 'users.name')
        ->get();

    // Get the sub_total amount for each order
    $orderSubTotals = Order::select('user_id', DB::raw('sum(sub_total) as sub_total_sum'))
        ->groupBy('user_id')
        ->get();

    // Associate the sub_total amount with the respective user
    $userSubTotals = [];
    foreach ($usersWithDiamondRole as $user) {
        $subTotal = $orderSubTotals->where('user_id', $user->id)->first();
        $userSubTotals[$user->id] = $subTotal ? $subTotal->sub_total_sum : 0;
    }

    // Retrieve the assigned role for each user
    $assignedRoles = [];
    foreach ($usersWithDiamondRole as $user) {
        $assignedRoles[$user->id] = $user->roles->pluck('title')->implode(', ');
    }

    return view('admin.gold_user.index', compact('usersWithDiamondRole', 'userOrderCounts', 'userSubTotals', 'assignedRoles', 'userOrderStats'));
}

    // public function index()
    // {
    //     // Check user access based on gate (permission)
    //     abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden | You cannot access this page because you do not have permission');

    //     // Get the count of orders and total_price for each user with the "Silver" role
    //     $roleNameToRetrieve = 'Gold';

    //     // Use Eloquent to retrieve users with the "Diamond" role
    //     $usersWithGoldRole = User::whereHas('roles', function ($query) use ($roleNameToRetrieve) {
    //         $query->where('title', $roleNameToRetrieve);
    //     })->get();

    //     // Get the count of orders and total_price for each user
    //     $userOrderStats = User::leftJoin('orders', 'users.id', '=', 'orders.user_id')
    //         ->leftJoin('order_products', 'orders.id', '=', 'order_products.order_id')
    //         ->select('users.id', 'users.name', DB::raw('count(orders.id) as order_count'), DB::raw('sum(order_products.total_price) as total_price_sum'))
    //         ->groupBy('users.id', 'users.name')
    //         ->get();

    //     // Retrieve the assigned role for each user
    //     $assignedRoles = [];
    //     foreach ($usersWithGoldRole as $user) {
    //         $assignedRoles[$user->id] = $user->roles->pluck('title')->implode(', ');
    //     }

    //     return view('admin.gold_user.index', compact('usersWithGoldRole', 'userOrderStats', 'assignedRoles'));
    // }

    // public function index()
    // {
    //     // Check user access based on gate (permission)
    //     abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden | You cannot access this page because you do not have permission');

    //     // Get the count of orders and total_price for each user with the "Diamond" role
    //     $roleNameToRetrieve = 'Gold';

    //     // Use Eloquent to retrieve users with the "Diamond" role
    //     $usersWithGoldRole = User::whereHas('roles', function ($query) use ($roleNameToRetrieve) {
    //         $query->where('title', $roleNameToRetrieve);
    //     })->get();
    //     //dd($usersWithGoldRole);

    //     // Get the count of orders and total_price for each user
    //     $userOrderStats = User::leftJoin('orders', 'users.id', '=', 'orders.user_id')
    //         ->leftJoin('order_products', 'orders.id', '=', 'order_products.order_id')
    //         ->select('users.id', 'users.name', DB::raw('count(orders.id) as order_count'), DB::raw('sum(order_products.total_price) as total_price_sum'))
    //         ->groupBy('users.id', 'users.name')
    //         ->get();

    //     return view('admin.gold_user.index', compact('usersWithGoldRole', 'userOrderStats'));
    // }
    // public function index()
    // {
    //      abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
    //     $roleNameToRetrieve = 'Gold';

    //     // Use Eloquent to retrieve all users with the "diamond" role
    //     $users = User::whereHas('roles', function ($query) use ($roleNameToRetrieve) {
    //         $query->where('title', $roleNameToRetrieve);
    //     })->get();

    //     return view('admin.gold_user.index', compact('users'));
    // }
}