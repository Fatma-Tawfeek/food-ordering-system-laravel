<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function storeFile($file,  $path = 'temp', $public_path = 'images')
    {
        $filename  = $file->getClientOriginalName();
        $uniqueFileName   = Carbon::now()->timestamp . '-' . $filename;
        $file->move(public_path($public_path) . '/' . $path, $uniqueFileName);
        return $path . '/' . $uniqueFileName;
    }

    public function remove($path, $public_path="images")
    {
        unlink(public_path($public_path).'/'.$path);
    }
}
