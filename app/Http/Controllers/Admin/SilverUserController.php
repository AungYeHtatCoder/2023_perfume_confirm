<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class SilverUserController extends Controller
{
    public function index()
    {
        // Check user access based on gate (permission)
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden | You cannot access this page because you do not have permission');

        // Get the count of orders and total_price for each user with the "Silver" role
        $roleNameToRetrieve = 'Silver';

        // Use Eloquent to retrieve users with the "Diamond" role
        $usersWithSilverRole = User::whereHas('roles', function ($query) use ($roleNameToRetrieve) {
            $query->where('title', $roleNameToRetrieve);
        })->get();

        // Get the count of orders and total_price for each user
        $userOrderStats = User::leftJoin('orders', 'users.id', '=', 'orders.user_id')
            ->leftJoin('order_products', 'orders.id', '=', 'order_products.order_id')
            ->select('users.id', 'users.name', DB::raw('count(orders.id) as order_count'), DB::raw('sum(order_products.total_price) as total_price_sum'))
            ->groupBy('users.id', 'users.name')
            ->get();

        // Retrieve the assigned role for each user
        $assignedRoles = [];
        foreach ($usersWithSilverRole as $user) {
            $assignedRoles[$user->id] = $user->roles->pluck('title')->implode(', ');
        }

        return view('admin.silver_user.index', compact('usersWithSilverRole', 'userOrderStats', 'assignedRoles'));
    }

    // public function index()
    // {
    //     // Check user access based on gate (permission)
    //     abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden | You cannot access this page because you do not have permission');

    //     // Get the count of orders and total_price for each user with the "Silver" role
    //     $roleNameToRetrieve = 'Silver';

    //     // Use Eloquent to retrieve users with the "Diamond" role
    //     $usersWithSilverRole = User::whereHas('roles', function ($query) use ($roleNameToRetrieve) {
    //         $query->where('title', $roleNameToRetrieve);
    //     })->get();
    //     //$usersWithSilverRole = User::all();
    //     //dd($usersWithSilverRole);
    //     // Get the count of orders and total_price for each user
    //     $userOrderStats = User::leftJoin('orders', 'users.id', '=', 'orders.user_id')
    //         ->leftJoin('order_products', 'orders.id', '=', 'order_products.order_id')
    //         ->select('users.id', 'users.name', DB::raw('count(orders.id) as order_count'), DB::raw('sum(order_products.total_price) as total_price_sum'))
    //         ->groupBy('users.id', 'users.name')
    //         ->get();

    //     return view('admin.silver_user.index', compact('usersWithSilverRole', 'userOrderStats'));
    // }
    // public function index()
    // {
    //      abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden |You cannot  Access this page because you do not have permission');
    //     $roleNameToRetrieve = 'Silver';

    //     // Use Eloquent to retrieve all users with the "diamond" role
    //     $users = User::whereHas('roles', function ($query) use ($roleNameToRetrieve) {
    //         $query->where('title', $roleNameToRetrieve);
    //     })->get();

    //     return view('admin.silver_user.index', compact('users'));
    // }
}