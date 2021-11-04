<?php
/**
 * Created by PhpStorm.
 * User: andyt
 * Date: 03.08.2021
 * Time: 11:47
 */

namespace App\Services;


class ValidateService
{
    public static function validationMessage($validator)
    {
        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }
    }
}