<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use App\Models\Review;
use App\Services\ValidateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    public static function addStarRating(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'product_id' => ['required', 'numeric', 'exists:products,id'],
            'order_id' => ['required', 'numeric', 'exists:orders,id'],
            'rating' => ['required', 'numeric', 'between:0,5']
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        if (Rating::addRating($request)) {

            $message = ['message' => 'You have already added a rating for this product!'];
            $kod = 422;

        } else {

            $rating = new Rating();
            $rating->user_id = $request->user_id;
            $rating->product_id = $request->product_id;
            $rating->rating = $request->rating;
            $rating->order_id = $request->order_id;

            if ($rating->save()) {

                $productRating = Rating::selectRaw('round(sum(rating) / count(rating), 2) as rating')
                    ->where('product_id', $request->product_id)
                    ->first();

                $message = ['message' => 'Rating saved successfully!', 'rating' => $productRating->rating];
                $kod = 200;
            } else {

                $message = ['message' => 'Rating not saved!'];
                $kod = 422;
            }
        }

        return response()->json($message, $kod);
    }

    public function getProductRating(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => ['required', 'numeric', 'exists:products,id'],
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $productRating = Rating::selectRaw('round(sum(rating) / count(rating), 2) as rating, count(rating) as count')
            ->where('product_id', $request->product_id)
            ->first();

        return response()->json($productRating, 200);
    }

    public function addReview(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'product_id' => ['required', 'numeric', 'exists:products,id'],
            'order_id' => ['required', 'numeric', 'exists:orders,id'],
            'review' => ['required', 'string', 'max:2000']
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $review = new Review();
        $review->user_id = $request->user_id;
        $review->product_id = $request->product_id;
        $review->review = $request->review;
        $review->order_id = $request->order_id;
        $review->save();

        return response()->json(['message' => 'Review successfully saved!'], 200);
    }

    public function getProductReview(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => ['required', 'numeric', 'exists:products,id'],
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $productReview = Review::where('product_id', $request->product_id)->get();

        if (count($productReview)){

            $message = $productReview;
            $kod = 200;
        } else {

            $message = ['message' => 'There are no reviews for this product!'];
            $kod = 422;
        }

        return response()->json($message, $kod);
    }
}
