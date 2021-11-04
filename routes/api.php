<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('sign-up', [App\Http\Controllers\Api\AuthController::class, 'signUp']);

    Route::post('password/email', [App\Http\Controllers\Api\AuthController::class, 'forgot']);
    Route::post('password/reset', [App\Http\Controllers\Api\AuthController::class, 'reset'])->name('password-reset');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);

        Route::post('get-user-profile', [App\Http\Controllers\Api\AuthController::class, 'getUserProfile']);
        Route::post('update-user-profile', [App\Http\Controllers\Api\AuthController::class, 'updateUserProfile']);
        Route::post('change-user-type', [App\Http\Controllers\Api\AuthController::class, 'changeUserType']);
        Route::post('get-terms-conditions', [App\Http\Controllers\Api\TermsConditionsController::class, 'getTermsConditions']);

        Route::group(['prefix' => 'category'], static function () {
            Route::post('get-categories', [App\Http\Controllers\Api\CategoryController::class, 'getCategories']);
        });

        Route::group(['prefix' => 'auction'], static function () {
            Route::post('get-auctions', [App\Http\Controllers\Api\AuctionController::class, 'getAuctions']);

            Route::post('store-auction', [App\Http\Controllers\Api\AuctionController::class, 'storeAuction']);
            Route::post('update-auction', [App\Http\Controllers\Api\AuctionController::class, 'updateAuction']);
            Route::post('delete-auction', [App\Http\Controllers\Api\AuctionController::class, 'deleteAuction']);

            Route::post('get-auction-info', [App\Http\Controllers\Api\AuctionController::class, 'getAuctionInfo']);
            Route::post('get-auction-product', [App\Http\Controllers\Api\AuctionController::class, 'getAuctionProduct']);
            Route::post('get-auction-status', [App\Http\Controllers\Api\AuctionController::class, 'getAuctionStatus']);

            Route::post('my-auctions', [App\Http\Controllers\Api\AuctionController::class, 'myAuctions']);
        });

        Route::group(['prefix' => 'product'], static function () {
            Route::post('get-products-list', [App\Http\Controllers\Api\ProductController::class, 'getProductsList']);
            Route::post('get-products-list-by-user', [App\Http\Controllers\Api\ProductController::class, 'getProductsListByUser']);
            Route::post('get-product-details', [App\Http\Controllers\Api\ProductController::class, 'getProductDetails']);

            Route::post('store-product', [App\Http\Controllers\Api\ProductController::class, 'storeProduct']);
            Route::post('update-product', [App\Http\Controllers\Api\ProductController::class, 'updateProduct']);
            Route::post('delete-product', [App\Http\Controllers\Api\ProductController::class, 'deleteProduct']);

            Route::post('get-filters', [App\Http\Controllers\Api\ProductController::class, 'getFilters']);
            Route::post('get-products-filters', [App\Http\Controllers\Api\ProductController::class, 'getProductFromFilters']);
        });

        Route::group(['prefix' => 'bidder'], static function () {
            Route::post('add-bid', [App\Http\Controllers\Api\BidderController::class, 'addBid']);
            Route::post('get-bidders-list', [App\Http\Controllers\Api\BidderController::class, 'getBiddersList']);
            Route::post('get-bids-history', [App\Http\Controllers\Api\BidderController::class, 'getBidsHistory']);
        });

        Route::group(['prefix' => 'order'], static function () {
            Route::post('get-orders-list', [App\Http\Controllers\Api\OrderController::class, 'getOrdersList']);
            Route::post('get-orders-list-by-user', [App\Http\Controllers\Api\OrderController::class, 'getOrdersListByUser']);
            Route::post('get-order-status', [App\Http\Controllers\Api\OrderController::class, 'getOrderStatus']);
            Route::post('store-order', [App\Http\Controllers\Api\OrderController::class, 'storeOrder']);
            Route::post('delete-order', [App\Http\Controllers\Api\OrderController::class, 'deleteOrder']);
            Route::post('get-order-details', [App\Http\Controllers\Api\OrderController::class, 'getOrderDetails']);

            Route::post('get-shipping-info', [App\Http\Controllers\Api\OrderController::class, 'getShippingInfo']);
            Route::post('get-shipments-list', [App\Http\Controllers\Api\OrderController::class, 'getShipmentsList']);
            Route::post('get-order-price', [App\Http\Controllers\Api\OrderController::class, 'getOrderPrice']);
        });

        Route::group(['prefix' => 'payment'], static function () {
            Route::post('get-payment-info', [App\Http\Controllers\Api\PaymentController::class, 'getPaymentInfo']);
            Route::post('update-payment-info', [App\Http\Controllers\Api\PaymentController::class, 'updatePaymentInfo']);
            Route::post('get-payouts', [App\Http\Controllers\Api\PaymentController::class, 'getPayouts']);
            Route::post('filter-payouts', [App\Http\Controllers\Api\PaymentController::class, 'filterPayout']);
        });

        Route::group(['prefix' => 'knowledge'], static function () {
            Route::post('get-knowledge-bases-list', [App\Http\Controllers\Api\KnowledgeBaseController::class, 'getKnowledgeBasesList']);
            Route::post('get-knowledge-base-details', [App\Http\Controllers\Api\KnowledgeBaseController::class, 'getKnowledgeBaseDetails']);
        });

        Route::group(['prefix' => 'report'], static function () {
            Route::post('send-report', [App\Http\Controllers\Api\ReportController::class, 'sendReport']);
        });

        Route::group(['prefix' => 'messaging'], static function () {

            Route::post('get-chat-lists', [App\Http\Controllers\Api\MessageController::class, 'getChatLists']);
            Route::post('get-chat-messages', [App\Http\Controllers\Api\MessageController::class, 'getChatMessages']);
            Route::post('get-message-status', [App\Http\Controllers\Api\MessageController::class, 'getMessageStatus']);

            Route::post('create-chat', [App\Http\Controllers\Api\MessageController::class, 'createChat']);
            Route::post('delete-chat', [App\Http\Controllers\Api\MessageController::class, 'deleteChat']);

            Route::post('sent-message', [App\Http\Controllers\Api\MessageController::class, 'sentMessage']);
            Route::post('delete-message', [App\Http\Controllers\Api\MessageController::class, 'deleteMessage']);

            Route::post('add-participants-chat', [App\Http\Controllers\Api\MessageController::class, 'addParticipantsToChat']);

        });

        Route::group(['prefix' => 'seller-profile'], static function () {
            Route::post('work-status', [App\Http\Controllers\Api\SellerProfileController::class, 'workStatus']);

            Route::post('dashboard', [App\Http\Controllers\Api\SellerProfileController::class, 'sellerDashboard']);
        });

        Route::group(['prefix' => 'save-items'], static function () {
            Route::post('add', [App\Http\Controllers\Api\SaveItemsController::class, 'add']);
            Route::post('receive', [App\Http\Controllers\Api\SaveItemsController::class, 'receive']);
            Route::post('delete', [App\Http\Controllers\Api\SaveItemsController::class, 'delete']);
        });

        Route::group(['prefix' => 'rating'], static function () {
            Route::post('add-star-rating', [App\Http\Controllers\Api\RatingController::class, 'addStarRating']);
            Route::post('get-product-rating', [App\Http\Controllers\Api\RatingController::class, 'getProductRating']);

            Route::post('add-review', [App\Http\Controllers\Api\RatingController::class, 'addReview']);
            Route::post('get-product-review', [App\Http\Controllers\Api\RatingController::class, 'getProductReview']);

        });





    });
});