<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TermsConditions;

class TermsConditionsController extends Controller
{
    public function getTermsConditions()
    {
        $termsConditions = TermsConditions::first();

        if ($termsConditions) {
            $data = ['description' => $termsConditions->description];
            $code = 200;
        } else {
            $data = ['message' => 'Terms and Conditions not found'];
            $code = 422;
        }

        return response()->json($data, $code);

    }
}
