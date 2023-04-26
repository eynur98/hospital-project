<?php

namespace App\Services;

class FIle_download
{
public function  download($data){

    if($data->hasFile('image')){

        $imgExtension = $data->image->getClientOriginalExtension();
        $imageName = time() . "-" . uniqid() . '.' . $imgExtension;
        $data->image->move(public_path('uploads'),$imageName);

      return 'uploads/'.$imageName;
    };
  return   false;
}
}
