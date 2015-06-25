<?php namespace App\Http\Controllers\Upload;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ImageUploadController extends Controller {


    public function getUpload()
    {
        return View::make('tinyMCE/image_dialog');
    }

    /**
     * TODO verifier taille total de l'utilisateur + si admin
     * @param ImageRequest $imageRequest
     * @return mixed
     */
    public function postUpload(ImageRequest $imageRequest)
    {
        if(Input::file('imagefile')->isValid()) {

            $user = Auth::user();
            $destinationPath = config('upload.pathUser') . $user->username;
            //$extension = Input::file('imagefile')->getClientOriginalExtension(); // getting image extension
            $fileName =  Input::file('imagefile')->getClientOriginalName(); // full name + extension

            if(file_exists($destinationPath . '/' . $fileName)) {
                $i = 1;
                $fileName = substr_replace($fileName, (string)$i, 0, 0);
                while(file_exists($destinationPath . '/' . $fileName)) {
                    $fileName = substr_replace($fileName, (string)$i, 0, 1);
                    $i++;
                }
            }

            Input::file('imagefile')->move($destinationPath, $fileName); // uploading file to given path

            $array['file_path'] = $destinationPath . '/' . $fileName;
            return View::make('tinyMCE/image_upload')->with($array);

        } else {
            return Redirect::refresh()->with('flash_error', 'upload a rencontré un problème!');
        }
    }

}
