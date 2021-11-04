<?php

namespace App\Services;


class ApiService
{
    protected $acceptableCodes = [
        200, // ok
        204, // No content
        400, // bad request
        401, // incorrect data
    ];

    /**
     * Global api wrapper
     *
     * @param $data
     * @param $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function makeResponse($data, $message = "ok", $code = 200){
        if(!$this->isCodeAcceptable($code)){
            return response()->json([
                'code' => 400,
                'message' => $code. " - is not an acceptable code.",
                'data' => $data
            ]);
        }

        return response()->json([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * Check if the code passed is an acceptable HTTP STATUS CODE
     *
     * @param $code
     * @return bool
     */
    public function isCodeAcceptable($code){
        return in_array($code, $this->acceptableCodes);
    }
}