<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Admin\OrderProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'sub_total', 'payment_method', 'payment_photo', 'order_note', 'status'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order_products(){
        return $this->hasMany(OrderProduct::class);
    }

    public function products()
{
    return $this->belongsToMany('App\Models\Admin\Product', 'order_products')
                ->withPivot('size_id', 'qty', 'total_price');
}

//     protected static function booted()
// {
//     static::created(function ($order) {
//         $user = $order->user;
//         if ($user) {
//             $totalAmount = $user->orders->sum(function ($order) {
//                 return $order->order_products->sum('total_price');
//             });
//              // Debug output
//             info("Total Amount: $totalAmount");
//             // assign roles based on $totalAmount
//             if ($totalAmount >= 200000) {
//                 $role = Role::where('title', 'Diamond')->first();
//             } elseif ($totalAmount >= 100000) {
//                 $role = Role::where('title', 'Gold')->first();
//             } elseif ($totalAmount >= 50000) {
//                 $role = Role::where('title', 'Silver')->first();
//             } else {
//                 $role = Role::where('title', 'User')->first(); // Default role
//             }

//             // Debug output
//             info("Assigned Role: " . ($role ? $role->title : 'None'));


//             if ($role) {
//                 $user->roles()->sync([$role->id]); // Assign the role
//             }
//         }
//     });
// }

    protected static function booted()
{
    static::created(function ($order) {
        $user = $order->user;

        if ($user) {
            // Calculate the total order price for the user
            $totalAmount = $user->orders->sum(function ($order) {
                return $order->order_products->sum('total_price');
            });

            // Define an array to store the roles to be assigned
            $rolesToAssign = [];

            // Assign roles based on total order price
            if ($totalAmount >= 200000) {
                $rolesToAssign[] = Role::where('title', 'Diamond')->value('id');
            } elseif ($totalAmount >= 100000) {
                $rolesToAssign[] = Role::where('title', 'Gold')->value('id');
            } elseif ($totalAmount >= 50000) {
                $rolesToAssign[] = Role::where('title', 'Silver')->value('id');
            } else {
                $rolesToAssign[] = Role::where('title', 'User')->value('id');
            }

            // Omit the "Admin" role (Role ID 1)
            $rolesToAssign = array_diff($rolesToAssign, [1]);

            // Debug output
            info("Total Amount: $totalAmount");
            info("Assigned Roles: " . implode(', ', $rolesToAssign));

            // Sync the roles to the user
            if (!empty($rolesToAssign)) {
                $user->roles()->sync($rolesToAssign);
            }
        }
    });
}

}