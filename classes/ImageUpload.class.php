<?php

class ImageUpload{

    private $file;

    function __construct($file){
        $this->file=$file;

    }

    public function saveImage($lastUserId){

        if(isset($_FILES["userimage"]) && $_FILES["userimage"]['error']===0){
            $imageName=$this->file['name'];
            $imageType=$this->file['type'];
            $imageTmp_name=$this->file['tmp_name'];
            $imageError=$this->file['error'];
            $imageSize=$this->file['size'];
            // print_r($file);

            $imageExtArr=explode(".",$imageName);
            $imageExt=strtolower(end($imageExtArr));
            $allowedFileTypes=array('jpg','png');

            if(in_array($imageExt,$allowedFileTypes)){
                    if($imageSize<1000000){
                        $imageUpdatedName=$lastUserId."-"."userimage-". date("Ymd")."-".date("His").".".$imageExt;
                        $fileDestination="../userimages/".$imageUpdatedName;
                        move_uploaded_file($imageTmp_name,$fileDestination);
                        
                    }else{
                        return "file too large";
                    }
            }else{
                return "file not suppourted format";
            }
        }else{
            return "file upload failed";
        }
    }

}