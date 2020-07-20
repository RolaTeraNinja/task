<?php

namespace App\Helpers;

use File;

class FileHelper
{
    public static function upload_file($folder_path ,$uploaded_file)
    {
        $file_name = time();
        $file_name .= rand();
        $file_name = sha1($file_name); 
        if ($uploaded_file) {
            $ext = $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move(public_path() .$folder_path, $file_name . "." . $ext);
            $local_url = $file_name . "." . $ext;
            $s3_url    =$folder_path.'/' . $local_url;
          
            return  $s3_url ;
        }
        
    }


    public static function delete_picture($picture)
    {
          File::delete(public_path()  . basename($picture));
        return true;
    }

    
 

}