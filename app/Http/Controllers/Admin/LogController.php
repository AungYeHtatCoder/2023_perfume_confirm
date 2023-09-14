<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LogController extends Controller
{
    public function showLog()
    {
        // Define the log file path (adjust the path and filename as needed)
        $logFilePath = storage_path('logs/laravel.log');

        // Check if the log file exists
        if (Storage::exists($logFilePath)) {
            // Read the log file and split it into an array of log entries
            $logEntries = explode("\n", Storage::get($logFilePath));
        } else {
            $logEntries = []; // Log file doesn't exist or is empty
        }

        // Pass the log entries to the view
        return view('admin.log.show', compact('logEntries'));
    }
}