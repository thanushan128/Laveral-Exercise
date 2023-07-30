<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function deleteFromPublic(){
        if(File::exists(public_path('uploads/iphone.jpg'))){
            File::delete(public_path('uploads/iphone.jpg'));
            dd('Public file sucessfully deleted!');
        }else{
            dd('File does not Found!');
        }

    }

    public function deleteFromStorage()
    {
        if(Storage::exists('uploads/iphone.jpg')){
            Storage::delete('uploads/iphone.jpg');
            dd('Storage file sucessfully delete!');
        }else{
            dd('File not found');
        }
    }
}
