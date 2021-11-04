<?php
/**
 * Created by PhpStorm.
 * User: andyt
 * Date: 07.07.2021
 * Time: 12:55
 */

namespace App\Services;


use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class UploadPicture
{
    public static function savePicture($parentId, $files)
    {
        if ($files) {

            foreach ($files as $file) {

                $imageName = time() . '_' . rand(1, 5000) . '.jpg';
                $save = Storage::disk('pictures')->putFileAs('/', $file, $imageName);

                if ($save) {
                    $gallery = new Gallery();
                    $gallery->parent_id = $parentId;
                    $gallery->image = $imageName;
                    $gallery->path = '/images/pictures/' . $imageName;
                    $gallery->save();

                }
            }

        }
        return true;
    }
}