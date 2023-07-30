<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function imageUploadForm(){
        return view('image_upload');
    }

    public function imageUpload(Request $request){
        $request->validate([
            'image'=>'required|image|mimes:png,jpg,jpeg,gif,svg|max:2084'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('image'),$imageName);

        return back()
        ->withSuccess('You have sucessfully upload the image!')
        ->withImageName($imageName);
      }
}
