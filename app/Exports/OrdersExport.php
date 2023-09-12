<?php

namespace App\Exports;

use App\Models\Admin\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OrdersExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'User ID',
            'Sub Total',
            'Payment Method',
            'Payment Photo',
            'Order Note',
            'Status',
            'Created At',
            'Updated At',
        ];
    }

    public function map($order): array
    {
        return [
            $order->id,
            $order->user_id,
            $order->sub_total,
            $order->payment_method,
            $order->payment_photo,
            $order->order_note,
            $order->status,
            $order->created_at->format('Y-m-d'),
            $order->updated_at->format('Y-m-d'),
        ];
    }

}