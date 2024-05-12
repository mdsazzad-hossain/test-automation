<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ProcessController extends Controller
{
    public function index() {

        // Path to the shell script
        $scriptPath = storage_path('script.sh');
 
        // Execute the script
        $output = shell_exec("bash $scriptPath 2>&1");
 
        // Log the output or do something with it
        info($output);
 
        // Download logs
        return response()->download(storage_path('logs/' . 'laravel.log'));
    }
}
