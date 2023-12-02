<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function file()
    {
        $path = Storage::path('public\download.pdf');

        return response()->file($path);

        // return response()->download($path); is used to display the image.
    }

    public function file2()
    {
        $path = Storage::path('public\download2.pdf');

        return response()->file($path);

        // return response()->download($path); is used to display the image.
    }
}

