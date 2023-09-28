<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
class SystemController extends Controller
{
    public function dbdumps()
    {
        Artisan::call('backup:run', ['--only-db' => true]);
        Session::flash('success', 'Backup Only Database successfully.');
        return redirect()->back();
    }
    public function backupall()
    {
        Artisan::call('backup:run');
        Session::flash('success', 'Backup System Files And Database successfully.');
        return redirect()->back();
    }
    public function clearCache()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('view:clear');
        Artisan::call('optimize:clear');
        Session::flash('success', 'Clear Caches successfully.');
        return redirect()->back();
    }
}
