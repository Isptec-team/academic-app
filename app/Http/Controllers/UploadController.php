<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Activitie;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class UploadController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {   
        $request->validate([
            'img' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        if($request->hasFile('img'))
        {
            if($request->file('img')->isValid())
            {
                
                $destination_path = 'public/images/activities';
                $path = $request->file('img')->store($destination_path);

             return response()->json([
                    'success' => true,
                    'data' => $path,
                ], 200);
            }
        }
    }
}
