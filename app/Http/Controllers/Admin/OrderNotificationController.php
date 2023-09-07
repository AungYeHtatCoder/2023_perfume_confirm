<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderNotificationController extends Controller
{
    public function OrderfetchNotifications()
{
    $admin = User::where('id', 1)->first();
    $unreadCount = $admin->unreadNotifications->count();

    //return response()->json(['unread_count' => $unreadCount]);
    return response()->json([
    'unread_count' => $unreadCount,
    'notifications' => $admin->unreadNotifications
]);

}

    public function destroy($id)
{
    $user = Auth::user();
    $notification = $user->notifications()->find($id);

    if ($notification) {
        $notification->delete();
        return response()->json(['success' => true], 200);
    } else {
        return response()->json(['success' => false], 404);
    }
}
}