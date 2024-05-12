<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Symfony\Component\Process\Process;
// use Illuminate\Support\Facades\Process;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ProcessController extends Controller
{
    public function index() {
        

        // $process = new Process('/Users/SSS/OneDrive/Desktop/example-app/script.sh');
        // $process->run();

        // // executes after the command finishes
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // echo $process->getOutput();

        // On Windows
        // $process = new Process(['/usr/bin/php', '/exmpale-app/.env']);
        // $process->run();
        // echo $process->getOutput();
        // $process->disableOutput();
        // $process->run();

        // Path to the shell script
        $scriptPath = storage_path('script.sh');
 
        // Execute the script
        $output = shell_exec("bash $scriptPath 2>&1");
 
        // Log the output or do something with it
        \Log::info($output);
 
        // Return a response to the user
        return response("Git push successfully!");
    }
}
