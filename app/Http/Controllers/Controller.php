<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="L5 OpenApi",
 *      description="L5 Swagger OpenApi description",
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */
/**
 * @OA\ExternalDocumentation(
 *     description="Find out more about Swagger",
 *     url="http://swagger.io"
 * )
 */
/**
 * @OA\Schema(
 *      schema="Error",
 *      required={"status", "message", "data"},
 *      @OA\Property(
 *          property="status",
 *          type="string",
 *          example="error"
 *      ),
 *      @OA\Property(
 *          property="message",
 *          type="string"
 *      ),
 *      @OA\Property(
 *          property="data",
 *          nullable=true,
 *          type="object"
 *      )
 *  )
 */
/**
 *
 * @OA\SecurityScheme(
 *      securityScheme="Authorization",
 *      in="header",
 *      name="Authorization",
 *      type="apiKey",
 * ),
 */
/**
 * @OA\Parameter(
 *     parameter="Content-Type",
 *     name="Content-type",
 *     in="header",
 *     description="application/json",
 *     example="application/json",
 *     @OA\Property(
 *         type="string"
 *     )
 * )
 * @OA\Parameter(
 *     parameter="Accept",
 *     name="Accept",
 *     in="header",
 *     description="application/json",
 *     example="application/json",
 *     @OA\Property(
 *         type="string"
 *     )
 * )
 * @OA\Parameter(
 *     parameter="Api-Version",
 *     name="Api-Version",
 *     in="header",
 *     description="Api version for api/v1 for separate some changes at handlers",
 *     example="1",
 *     @OA\Property(
 *         type="string"
 *     )
 * )
 * @OA\Parameter(
 *     parameter="XMLHttpRequest",
 *     name="X-Requested-With",
 *     in="header",
 *     description="application/json",
 *     example="application/json",
 *     @OA\Property(
 *         type="string"
 *     )
 * )
 */

// Sign-up
/**
 * @OA\Post(
 * path="/api/auth/sign-up",
 * summary="Sign in",
 * description="Sign Up",
 * operationId="authSignUp",
 * tags={"Auth code"},
 * @OA\RequestBody(
 *    required=true,
 *    description="User Login",
 *    @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="email", type="string", format="email", example="sontana@mail.com"),
 *       @OA\Property(property="password", type="string", format="password", example="123456"),
 *       @OA\Property(property="password_confirmation", type="string", format="password", example="123456"),
 *       @OA\Property(property="user_type", type="text", format="text", example="seller"),
 *       @OA\Property(property="user_status", type="text", format="text", example="active"),
 *       @OA\Property(property="first_name", type="text", format="text", example="jesica"),
 *       @OA\Property(property="last_name", type="text", format="text", example="berder"),
 *       @OA\Property(property="middle_name", type="text", format="text", example=""),
 *       @OA\Property(property="display_name", type="text", format="text", example="display_name"),
 *       @OA\Property(property="dob", type="text", format="text", example="2021-07-06"),
 *       @OA\Property(property="gender", type="text", format="text", example="male"),
 *       @OA\Property(property="race", type="text", format="text", example="race"),
 *       @OA\Property(property="interested_tags", type="text", format="text", example="some1"),
 *       @OA\Property(property="role_id", type="text", format="text", example="1"),
 *       @OA\Property(property="phone", type="string", format="text", example="380970391988"),
 *       @OA\Property(property="phone_type", type="text", format="string", example="home"),
 *       @OA\Property(property="avatar", type="string", format="text", example="data:image/png;base64,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"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="access_token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMmY3ZjIwZGEzOTcwN2IwZmViYzJhNmYyMTZlYWVjZDZkYTdlMTE3MGNiNDFhZjIwMWFhYzdjZTgxMTM3MzZjZjc2ZTkxZDkwMmI0MmJiYTUiLCJpYXQiOjE2MjQ0MzUzMjcsIm5iZiI6MTYyNDQzNTMyNywiZXhwIjoxNjU1OTcxMzI3LCJzdWIiOiIxNiIsInNjb3BlcyI6W119.t-6od888OS_6vwu0sZQaPpX3sFlEs9zWFas2Mj_Sh08iQng1tU2znbvoEc_MkXx3JuMmxQUS05elxWsyfutA8SdSmZoBJyq5OGuirslih8YWGEXJwbgF3yEw4uFT4lGXJg7YTIJ1U327stfSW-gfOY9H9S4RWUs0LzzLMoiGS1Dxhyhsx2E_w0z397BtV_2PkC7zOH9zjMCvUxOFQcuaUVdJnwwq0myE3fiRxoJBHmdoKQgM63LdY5QcklLmm-Ov80Y795bX-mbv3fY9EVQKyq3A_UOCt65fQnMUvLacZ7RYJB-c0f-41zL-AQvCQ1UWFfDQx1f2Bi1hXSBColjzGXQBIp57LKBIeNOgF8OM-O2htiYSSnizq2crfAD0NLa88F_gpGVobkLRkpVLdxEDNv_ypUhzT-AW9cHIMv6f3q6TvlpoBkfPZMOunMHs0FuQ261ILi7F3n5HaXuohduWWdxBRawOPsXiZYVYYOJcU2MnG0v2Ksk1HsOYfKl41E58CEH5_Qrw4pspliAa65u0TAwxoyZVUUt68fkwnNvXA62I30BeqnJypnMXTOWC5nyd2ZJ5ogg0aIwsJYY4ZzDx4IuDgDcgTGFWnUTjqC8zktzUu1hU11LMkOg3Er-vvvSm2yrb2mwXtPCtekaIfilg9qTrmyHbxJrKRDJXK2Wm4Cs"),
 *       @OA\Property(property="token_type", type="string", example="Bearer"),
 *       @OA\Property(property="expires_at", type="string", example="2022-06-23 08:02:07"),
 *       @OA\Property(
 *                property="user",
 *                type="array",
 *                @OA\Items(
 *                  @OA\Property(property="id", type="string", example="17"),
 *                  @OA\Property(property="role_id", type="string", example="2"),
 *                  @OA\Property(property="interest_tags", type="string", example="1"),
 *                  @OA\Property(property="first_name", type="string", example="User3"),
 *                  @OA\Property(property="last_name", type="string", example="User3"),
 *                  @OA\Property(property="display_name", type="string", example="some"),
 *                  @OA\Property(property="email", type="string", example="user10@gmail.com"),
 *                  @OA\Property(property="email_verified_at", type="string", example="null"),
 *                  @OA\Property(property="created_at", type="string", example="2021-06-23T10:03:47.000000Z"),
 *                  @OA\Property(property="updated_at", type="string", example="2021-06-23T10:03:47.000000Z"),
 *                  @OA\Property(
 *                     property="phones",
 *                     type="array",
 *                       @OA\Items(
 *                          @OA\Property(property="id", type="string", example="1"),
 *                          @OA\Property(property="user_id", type="string", example="15"),
 *                          @OA\Property(property="type", type="string", example="home"),
 *                          @OA\Property(property="number", type="string", example="380970391988"),
 *                       ),
 *                  ),
 *             ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="email",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The email field is required.",
 *                              @OA\Items()
 *                          ),
 *                     ),
 *                     @OA\Property(
 *                          property="password",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The email field is required.",
 *                              @OA\Items()
 *                          ),
 *                     )
 *             ),
 *        ),
 *  ))
 * )
 */


// Get user profile
/**
 * @OA\Post(
 *     path="/api/auth/get-user-profile",
 *     operationId="Get user profile",
 *     tags={"Auth code"},
 *     summary="Get user profile",
 *     description="Get user profile",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get user profile",
 *    @OA\JsonContent(
 *       required={"user_id"},
 *       @OA\Property(property="user_id", type="string", format="text", example="45"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="id", type="string", format="text", example="1"),
 *          @OA\Property(property="role_id", type="string", format="text", example="3"),
 *          @OA\Property(property="first_name", type="string", format="text", example="first_name"),
 *          @OA\Property(property="last_name", type="string", format="text", example="last_name"),
 *          @OA\Property(property="middle_name", type="string", format="text", example="last_name"),
 *          @OA\Property(property="display_name", type="string", format="text", example="last_name"),
 *          @OA\Property(property="email", type="string", format="text", example="email"),
 *          @OA\Property(property="dob", type="string", format="text", example="dob"),
 *          @OA\Property(property="user_status", type="string", format="text", example="user_status"),
 *          @OA\Property(property="avatar", type="string", format="text", example="avatar"),
 *          @OA\Property(property="current_team_id", type="string", format="text", example="current_team_id"),
 *          @OA\Property(property="user_type", type="string", format="text", example="user_type"),
 *          @OA\Property(property="interested_tags", type="string", format="text", example="interested_tags"),
 *          @OA\Property(property="rel_status", type="string", format="text", example="rel_status"),
 *          @OA\Property(property="gender", type="string", format="text", example="gender"),
 *          @OA\Property(property="race", type="string", format="text", example="race"),
 *          @OA\Property(property="user_products_status", type="string", format="text", example="user_products_status"),
 *          @OA\Property(
 *                     property="phones",
 *                     type="array",
 *                       @OA\Items(
 *                          @OA\Property(property="id", type="string", example="1"),
 *                          @OA\Property(property="user_id", type="string", example="15"),
 *                          @OA\Property(property="type", type="string", example="home"),
 *                          @OA\Property(property="number", type="string", example="380970391988"),
 *                       ),
 *          ),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="order_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The user_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *    )),
 * )
 */

// Update user profile
/**
 * @OA\Post(
 * path="/api/auth/update-user-profile",
 * summary="Update user profile",
 * description="Update user profile",
 * operationId="Update user profile",
 * tags={"Auth code"},
 * security={{"Authorization":{}}},
 * @OA\RequestBody(
 *    required=true,
 *    description="Update user profile",
 *    @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="user_id", type="string", format="text", example="5"),
 *       @OA\Property(property="first_name", type="text", format="text", example="jesica"),
 *       @OA\Property(property="last_name", type="text", format="text", example="berder"),
 *       @OA\Property(property="middle_name", type="text", format="text", example=""),
 *       @OA\Property(property="password", type="text", format="text", example="jfOW9dIdY0"),
 *       @OA\Property(property="display_name", type="text", format="text", example="display_name"),
 *       @OA\Property(property="dob", type="text", format="text", example="2021-07-06"),
 *       @OA\Property(property="gender", type="text", format="text", example="male"),
 *       @OA\Property(property="race", type="text", format="text", example="race"),
 *       @OA\Property(property="user_type", type="text", format="text", example="seller"),
 *       @OA\Property(property="user_status", type="text", format="text", example="active"),
 *       @OA\Property(property="interested_tags", type="text", format="text", example="some1"),
 *       @OA\Property(property="role_id", type="text", format="text", example="2"),
 *       @OA\Property(property="phone_id", type="text", format="text", example="1"),
 *       @OA\Property(property="phone_type", type="text", format="text", example="home"),
 *       @OA\Property(property="phone", type="text", format="text", example="380970391988"),
 *       @OA\Property(property="avatar", type="string", format="text", example="data:image/png;base64,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"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="User update successfully!"),
 *       @OA\Property(property="user_id", type="string", example="5"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="email",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The email field is required.",
 *                              @OA\Items()
 *                          ),
 *                     ),
 *                     @OA\Property(
 *                          property="password",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The email field is required.",
 *                              @OA\Items()
 *                          ),
 *                     )
 *             ),
 *        ),
 *  ))
 * )
 */

// Change user type
/**
 * @OA\Post(
 * path="/api/auth/change-user-type",
 * summary="Change user type",
 * description="Change user type",
 * operationId="Change user type",
 * tags={"Auth code"},
 * security={{"Authorization":{}}},
 * @OA\RequestBody(
 *    required=true,
 *    description="Change user type",
 *    @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="user_id", type="string", format="text", example="45"),
 *       @OA\Property(property="user_type", type="text", format="text", example="seller"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="User type successfully updated!"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="user_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected user id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                     @OA\Property(
 *                          property="user_type",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected user type is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

// Login
/**
 * @OA\POST(
 *     path="/api/auth/login",
 *     summary="Login",
 *     description="Login",
 *     operationId="authLogin",
 *     tags={"Auth code"},
 *     @OA\RequestBody(
 *     required=true,
 *     description="User authorization",
 *     @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="email", type="text", format="text", example="antonios@gmail.com"),
 *       @OA\Property(property="password", type="text", format="text", example="jfOW9dIdY0"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="access_token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMmY3ZjIwZGEzOTcwN2IwZmViYzJhNmYyMTZlYWVjZDZkYTdlMTE3MGNiNDFhZjIwMWFhYzdjZTgxMTM3MzZjZjc2ZTkxZDkwMmI0MmJiYTUiLCJpYXQiOjE2MjQ0MzUzMjcsIm5iZiI6MTYyNDQzNTMyNywiZXhwIjoxNjU1OTcxMzI3LCJzdWIiOiIxNiIsInNjb3BlcyI6W119.t-6od888OS_6vwu0sZQaPpX3sFlEs9zWFas2Mj_Sh08iQng1tU2znbvoEc_MkXx3JuMmxQUS05elxWsyfutA8SdSmZoBJyq5OGuirslih8YWGEXJwbgF3yEw4uFT4lGXJg7YTIJ1U327stfSW-gfOY9H9S4RWUs0LzzLMoiGS1Dxhyhsx2E_w0z397BtV_2PkC7zOH9zjMCvUxOFQcuaUVdJnwwq0myE3fiRxoJBHmdoKQgM63LdY5QcklLmm-Ov80Y795bX-mbv3fY9EVQKyq3A_UOCt65fQnMUvLacZ7RYJB-c0f-41zL-AQvCQ1UWFfDQx1f2Bi1hXSBColjzGXQBIp57LKBIeNOgF8OM-O2htiYSSnizq2crfAD0NLa88F_gpGVobkLRkpVLdxEDNv_ypUhzT-AW9cHIMv6f3q6TvlpoBkfPZMOunMHs0FuQ261ILi7F3n5HaXuohduWWdxBRawOPsXiZYVYYOJcU2MnG0v2Ksk1HsOYfKl41E58CEH5_Qrw4pspliAa65u0TAwxoyZVUUt68fkwnNvXA62I30BeqnJypnMXTOWC5nyd2ZJ5ogg0aIwsJYY4ZzDx4IuDgDcgTGFWnUTjqC8zktzUu1hU11LMkOg3Er-vvvSm2yrb2mwXtPCtekaIfilg9qTrmyHbxJrKRDJXK2Wm4Cs"),
 *       @OA\Property(property="token_type", type="string", example="Bearer"),
 *       @OA\Property(property="expires_at", type="string", example="2022-06-23 08:02:07"),
 *       @OA\Property(
 *                property="user",
 *                type="array",
 *                @OA\Items(
 *                  @OA\Property(property="id", type="string", example="17"),
 *                  @OA\Property(property="role_id", type="string", example="2"),
 *                  @OA\Property(property="interest_tags", type="string", example="1"),
 *                  @OA\Property(property="first_name", type="string", example="User3"),
 *                  @OA\Property(property="last_name", type="string", example="User3"),
 *                  @OA\Property(property="display_name", type="string", example="some"),
 *                  @OA\Property(property="email", type="string", example="user10@gmail.com"),
 *                  @OA\Property(property="email_verified_at", type="string", example="null"),
 *                  @OA\Property(property="created_at", type="string", example="2021-06-23T10:03:47.000000Z"),
 *                  @OA\Property(property="updated_at", type="string", example="2021-06-23T10:03:47.000000Z"),
 *                  @OA\Property(
 *                     property="phones",
 *                     type="array",
 *                       @OA\Items(
 *                          @OA\Property(property="id", type="string", example="1"),
 *                          @OA\Property(property="user_id", type="string", example="15"),
 *                          @OA\Property(property="type", type="string", example="home"),
 *                          @OA\Property(property="number", type="string", example="380970391988"),
 *                       ),
 *                  ),
 *             ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Unauthorized"),
 *  ))
 * )
 */

// Logout
/**
 * @OA\POST(
 *     path="/api/auth/logout",
 *     operationId="authLogout",
 *     tags={"Auth code"},
 *     summary="Logout",
 *     description="Logout",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="User Logout",
 *    @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="user_id", type="string", format="text", example="1"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Successfully logged out"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Error logged out"),
 *  ))
 * )
 */

//Reset Password
/**
 * @OA\POST(
 *     path="/api/auth/password/reset",
 *     operationId="Reset Password",
 *     tags={"Reset Password"},
 *     summary="Reset Password",
 *     description="Reset Password",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="User Logout",
 *    @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="email", type="string", format="email", example="user10@mail.com"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Email with a new password has already been sent to your inbox"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="email",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected email is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *  ))
 * )
 */

// Get categories
/**
 * @OA\POST(
 *     path="/api/auth/category/get-categories",
 *     operationId="Get categories",
 *     tags={"Category/Auction/Product"},
 *     summary="Get categories",
 *     description="Get categories",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Get categories",
 *     @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="page", type="string", format="text", example="1"),
 *       @OA\Property(property="limit", type="string", format="text", example="15"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="categories",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="title", type="string", example="Sport Cards"),
 *                      @OA\Property(property="image", type="string", example="http://mirus-develop.loc/images/sport_cards.jpg"),
 *                ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Invalid token provided"),
 * ))
 * )
 */

// Get auctions
/**
 * @OA\POST(
 *     path="/api/auth/auction/get-auctions",
 *     operationId="Get auctions",
 *     tags={"Category/Auction/Product"},
 *     summary="Get auctions",
 *     description="Get auctions",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Get auctions",
 *    @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="page", type="string", format="text", example="1"),
 *       @OA\Property(property="limit", type="string", format="text", example="15"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="auctions",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="user_id", type="string", example="45"),
 *                      @OA\Property(property="name", type="string", example="SomeNew5"),
 *                      @OA\Property(property="status", type="string", example="current"),
 *                      @OA\Property(property="start_bid", type="string", example="1.60"),
 *                      @OA\Property(property="...", type="string", example=""),
 *                ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Invalid token provided"),
 * ))
 * )
 */

//Products list
/**
 * @OA\POST(
 *     path="/api/auth/product/get-products-list",
 *     operationId="Products List",
 *     tags={"Category/Auction/Product"},
 *     summary="Products List",
 *     description="Products List",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Products List",
 *     @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="page", type="string", format="text", example="1"),
 *       @OA\Property(property="limit", type="string", format="text", example="15"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="product",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="sold_by_id", type="string", example="1"),
 *                      @OA\Property(property="sale_type", type="string", example="1"),
 *                      @OA\Property(property="location", type="string", example="Los Angeles"),
 *                      @OA\Property(property="...", type="string", example=""),
 *                ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=400,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Invalid token provided"),
 *  ))
 * )
 */

//Products list by User
/**
 * @OA\POST(
 *     path="/api/auth/product/get-products-list-by-user",
 *     operationId="Products list by User ",
 *     tags={"Category/Auction/Product"},
 *     summary="Products list by User ",
 *     description="Products list by User ",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Products list by User ",
 *     @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="page", type="string", format="text", example="1"),
 *       @OA\Property(property="limit", type="string", format="text", example="15"),
 *       @OA\Property(property="user_id", type="string", format="text", example="5"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="product",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="sold_by_id", type="string", example="1"),
 *                      @OA\Property(property="sale_type", type="string", example="1"),
 *                      @OA\Property(property="location", type="string", example="Los Angeles"),
 *                      @OA\Property(property="...", type="string", example=""),
 *                ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=400,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Invalid token provided"),
 *  ))
 * )
 */

//Product Details
/**
 * @OA\POST(
 *     path="/api/auth/product/get-product-details",
 *     operationId="Product Details",
 *     tags={"Category/Auction/Product"},
 *     summary="Product Details",
 *     description="Product Details",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Product Details",
 *    @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="product_id", type="string", format="text", example="1"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="product",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="sold_by_id", type="string", example="1"),
 *                      @OA\Property(property="sale_type", type="string", example="1"),
 *                      @OA\Property(property="location", type="string", example="Los Angeles"),
 *                      @OA\Property(property="...", type="string", example=""),
 *                ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=400,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Invalid token provided"),
 *  ))
 * )
 */

//Filters
/**
 * @OA\POST(
 *     path="/api/auth/product/get-filters",
 *     operationId="Get Filters",
 *     tags={"Category/Auction/Product"},
 *     summary="Get Filters",
 *     description="Get Filters",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Get Filters",
 *     @OA\JsonContent(
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="categories",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="title", type="string", example="Sport Cards"),
 *                      @OA\Property(property="image", type="string", example="http://mirus-develop.loc/images/sport_cards.jpg"),
 *                ),
 *        ),
 *       @OA\Property(
 *                 property="condition_type",
 *                 type="array",
 *                 @OA\Items(
 *                      @OA\Property(property="[0]", type="string", example="news"),
 *                      @OA\Property(property="[1]", type="string", example="used"),
 *                 ),
 *        ),
 *        @OA\Property(
 *                 property="sale_type",
 *                 type="array",
 *                 @OA\Items(
 *                      @OA\Property(property="[0]", type="string", example="auction"),
 *                      @OA\Property(property="[1]", type="string", example="fixed"),
 *                 ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=400,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Invalid token provided"),
 *  ))
 * )
 */

// Products Filters
/**
 * @OA\POST(
 *     path="/api/auth/product/get-products-filters",
 *     operationId="Get Products Filters",
 *     tags={"Category/Auction/Product"},
 *     summary="Get Products Filters",
 *     description="Get Products Filters",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Get Products Filters",
 *     @OA\JsonContent(
 *       required={"category_id","subcategory_id"},
 *       @OA\Property(property="category_id[0]", type="string", format="text", example="1"),
 *       @OA\Property(property="condition_type", type="string", format="text", example="new"),
 *       @OA\Property(property="sale_type", type="string", format="text", example="auction"),
 *       @OA\Property(property="min_price", type="string", format="text", example="150"),
 *       @OA\Property(property="max_price", type="string", format="text", example="1000"),
 *       @OA\Property(property="featured", type="string", format="text", example="on"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="product",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="sold_by_id", type="string", example="1"),
 *                      @OA\Property(property="sale_type", type="string", example="1"),
 *                      @OA\Property(property="location", type="string", example="Los Angeles"),
 *                      @OA\Property(property="...", type="string", example=""),
 *                ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=400,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Invalid token provided"),
 *  ))
 * )
 */
//Category/Auction/Product CRUD //

//Store Auction
/**
 * @OA\POST(
 *     path="/api/auth/auction/store-auction",
 *     operationId="Store Auction",
 *     tags={"Category/Auction/Product CRUD"},
 *     summary="Store Auction",
 *     description="Store Auction",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Store Auction",
 *     @OA\JsonContent(
 *       required={"category_id"},
 *       @OA\Property(property="name", type="string", format="text", example="Some10"),
 *       @OA\Property(property="start_bid", type="string", format="text", example="1.60"),
 *       @OA\Property(property="buyout_price", type="string", format="text", example="1.60"),
 *       @OA\Property(property="min_bid", type="string", format="text", example="1.50"),
 *       @OA\Property(property="basic_information", type="string", format="text", example="Some text"),
 *       @OA\Property(property="category_id", type="string", format="text", example="1"),
 *       @OA\Property(property="subcategory_id", type="string", format="text", example="2"),
 *       @OA\Property(property="certification_id", type="string", format="text", example="1"),
 *       @OA\Property(property="start_time", type="string", format="text", example="2021-06-28 09:00:00"),
 *       @OA\Property(property="end_time", type="string", format="text", example="2021-06-28 15:00:00"),
 *       @OA\Property(property="status", type="string", format="text", example="current"),
 *       @OA\Property(property="picture[0]", type="string", format="text", example="data:image/png;base64,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"),
 *       @OA\Property(property="sku", type="string", format="text", example="Some2200"),
 *       @OA\Property(property="title", type="string", format="text", example="Some"),
 *       @OA\Property(property="color", type="string", format="text", example="Red"),
 *       @OA\Property(property="weight", type="string", format="text", example="50"),
 *       @OA\Property(property="short_disc", type="string", format="text", example="some some"),
 *       @OA\Property(property="long_disc", type="string", format="text", example="Some text"),
 *       @OA\Property(property="features", type="string", format="text", example="1"),
 *       @OA\Property(property="sale_price", type="string", format="text", example="500"),
 *       @OA\Property(property="retail_price", type="string", format="text", example="400"),
 *       @OA\Property(property="price", type="string", format="text", example="300"),
 *       @OA\Property(property="discount", type="string", format="text", example="30"),
 *       @OA\Property(property="discount_percent", type="string", format="text", example="10"),
 *       @OA\Property(property="payload", type="string", format="text", example="some"),
 *       @OA\Property(property="sale_type", type="string", format="text", example="auction"),
 *       @OA\Property(property="product_status", type="string", format="text", example="draft"),
 *       @OA\Property(property="seller_name", type="string", format="text", example="Test Product6"),
 *       @OA\Property(property="product_image[0]", type="string", format="text", example="data:image/png;base64,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"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="auction_id", type="string", example="5"),
 *       @OA\Property(property="product_id", type="string", example="6"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="name",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The name field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="start_bid",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The start_bid field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *        ),
 *  ))
 * )
 */
//Update Auction
/**
 * @OA\POST(
 *     path="/api/auth/auction/update-auction",
 *     operationId="Update Auction",
 *     tags={"Category/Auction/Product CRUD"},
 *     summary="Update Auction",
 *     description="Update Auction",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Update Auction",
 *     @OA\JsonContent(
 *       required={"category_id"},
 *       @OA\Property(property="auction_id", type="string", format="text", example="2"),
 *       @OA\Property(property="name", type="string", format="text", example="Some10"),
 *       @OA\Property(property="start_bid", type="string", format="text", example="1.60"),
 *       @OA\Property(property="buyout_price", type="string", format="text", example="1.60"),
 *       @OA\Property(property="min_bid", type="string", format="text", example="1.50"),
 *       @OA\Property(property="gallery_id", type="string", format="text", example="1"),
 *       @OA\Property(property="basic_information", type="string", format="text", example="Some text"),
 *       @OA\Property(property="category_id", type="string", format="text", example="1"),
 *       @OA\Property(property="subcategory_id", type="string", format="text", example="2"),
 *       @OA\Property(property="certification_id", type="string", format="text", example="1"),
 *       @OA\Property(property="start_time", type="string", format="text", example="2021-06-28 09:00:00"),
 *       @OA\Property(property="end_time", type="string", format="text", example="2021-06-28 15:00:00"),
 *       @OA\Property(property="status", type="string", format="text", example="current"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Successfully updated Auction!"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="auction_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The auction_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="name",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The name field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *        ),
 *  ))
 * )
 */

//Delete Auction
/**
 * @OA\POST(
 *     path="/api/auth/auction/delete-auction",
 *     operationId="Delete Auction",
 *     tags={"Category/Auction/Product CRUD"},
 *     summary="Delete Auction",
 *     description="Delete Auction",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Delete Auction",
 *     @OA\JsonContent(
 *       required={"category_id"},
 *       @OA\Property(property="auction_id", type="string", format="text", example="200"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Successfully deleted Auction!"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="auction_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The auction_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *        ),
 *  ))
 * )
 */

//Store Product
/**
 * @OA\POST(
 *     path="/api/auth/product/store-product",
 *     operationId="Store Product",
 *     tags={"Category/Auction/Product CRUD"},
 *     summary="Store Product",
 *     description="Store Product",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Store Product",
 *     @OA\JsonContent(
 *       required={"category_id"},
 *       @OA\Property(property="category_id", type="string", format="text", example="1"),
 *       @OA\Property(property="subcategory_id", type="string", format="text", example="2"),
 *       @OA\Property(property="auction_id", type="string", format="text", example="2"),
 *       @OA\Property(property="sku", type="string", format="text", example="Some1000"),
 *       @OA\Property(property="title", type="string", format="text", example="Some"),
 *       @OA\Property(property="color", type="string", format="text", example="Red"),
 *       @OA\Property(property="weight", type="string", format="text", example="50"),
 *       @OA\Property(property="short_desc", type="string", format="text", example="some some"),
 *       @OA\Property(property="long_disc", type="string", format="text", example="Some text"),
 *       @OA\Property(property="features", type="string", format="text", example="1"),
 *       @OA\Property(property="picture[0]", type="string", format="base64", example="data:image/png;base64,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"),
 *       @OA\Property(property="sale_price", type="string", format="text", example="500"),
 *       @OA\Property(property="retail_price", type="string", format="text", example="400"),
 *       @OA\Property(property="price", type="string", format="text", example="300"),
 *       @OA\Property(property="discount", type="string", format="text", example="30"),
 *       @OA\Property(property="discount_percent", type="string", format="text", example="10"),
 *       @OA\Property(property="payload", type="string", format="text", example="some"),
 *       @OA\Property(property="status", type="string", format="text", example="draft"),
 *       @OA\Property(property="seller_name", type="string", format="text", example="Test Product6"),
 *       @OA\Property(property="sale_type", type="string", format="text", example="fixed"),
 *       @OA\Property(property="name", type="string", format="text", example="SomeNew65"),
 *       @OA\Property(property="start_bid", type="string", format="text", example="1.60"),
 *       @OA\Property(property="buyout_price", type="string", format="text", example="1.60"),
 *       @OA\Property(property="min_bid", type="string", format="text", example="1.60"),
 *       @OA\Property(property="basic_information", type="string", format="text", example="Some text"),
 *       @OA\Property(property="certification_id", type="string", format="text", example="1"),
 *       @OA\Property(property="start_time", type="string", format="text", example="2021-06-28 09:00:00"),
 *       @OA\Property(property="end_time", type="string", format="text", example="2021-06-28 15:00:00"),
 *       @OA\Property(property="auction_status", type="string", format="text", example="current"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Successfully created Product!"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="category_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The category_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="sku",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The sku field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="title",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The title field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *        ),
 *  ))
 * )
 */

//Update Product
/**
 * @OA\POST(
 *     path="/api/auth/product/update-product",
 *     operationId="Update Product",
 *     tags={"Category/Auction/Product CRUD"},
 *     summary="Update Product",
 *     description="Update Product",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Update Product",
 *     @OA\JsonContent(
 *       required={"category_id"},
 *       @OA\Property(property="product_id", type="string", format="text", example="1"),
 *       @OA\Property(property="category_id", type="string", format="text", example="1"),
 *       @OA\Property(property="subcategory_id", type="string", format="text", example="2"),
 *       @OA\Property(property="auction_id", type="string", format="text", example="2"),
*        @OA\Property(property="title", type="string", format="text", example="Some"),
 *       @OA\Property(property="color", type="string", format="text", example="Red"),
 *       @OA\Property(property="weight", type="string", format="text", example="50"),
 *       @OA\Property(property="short_disc", type="string", format="text", example="some some"),
 *       @OA\Property(property="long_disc", type="string", format="text", example="Some text"),
 *       @OA\Property(property="features", type="string", format="text", example="1"),
 *       @OA\Property(property="picture[0]", type="string", format="text", example="image.jpg"),
 *       @OA\Property(property="sale_price", type="string", format="text", example="500"),
 *       @OA\Property(property="retail_price", type="string", format="text", example="400"),
 *       @OA\Property(property="price", type="string", format="text", example="300"),
 *       @OA\Property(property="discount", type="string", format="text", example="30"),
 *       @OA\Property(property="discount_percent", type="string", format="text", example="10"),
 *       @OA\Property(property="payload", type="string", format="text", example="some"),
 *       @OA\Property(property="sale_type", type="string", format="text", example="auction"),
 *       @OA\Property(property="status", type="string", format="text", example="draft"),
 *       @OA\Property(property="seller_name", type="string", format="text", example="Test Product6"),
 *       @OA\Property(property="expiration_date", type="string", format="text", example="2021-07-08"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Successfully update Product!"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="category_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The category_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="sku",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The sku field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="title",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The title field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *        ),
 *  ))
 * )
 */
//Delete Product
/**
 * @OA\POST(
 *     path="/api/auth/product/delete-product",
 *     operationId="Delete Product",
 *     tags={"Category/Auction/Product CRUD"},
 *     summary="Delete Product",
 *     description="Delete Product",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Delete Product",
 *     @OA\JsonContent(
 *       required={"product_id"},
 *       @OA\Property(property="product_id", type="string", format="text", example="200"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Successfully deleted Product!"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="product_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The product_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *        ),
 *  ))
 * )
 */

// Auction/Bids //

//Get_the_auction_info
/**
 * @OA\POST(
 *     path="/api/auth/auction/get-auction-info",
 *     operationId="Get the auction info",
 *     tags={"Auction/Bids"},
 *     summary="Get the auction info",
 *     description="Get the auction info",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Get the auction info",
 *    @OA\JsonContent(
 *       required={"auction_id"},
 *       @OA\Property(property="auction_id", type="string", format="text", example="2"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="auction",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="user_id", type="string", example="1"),
 *                      @OA\Property(property="name", type="string", example="Some2"),
 *                      @OA\Property(property="status", type="string", example="current"),
 *                      @OA\Property(property="start_bid", type="string", example="1.00"),
 *                      @OA\Property(property="buyout_price", type="string", example="1.00"),
 *                ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="auction_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The auction_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                     ),
 *             ),
 *        ),
 *  ))
 * )
 */

//Get the bidders list
/**
 * @OA\POST(
 *     path="/api/auth/bidder/get-bidders-list",
 *     operationId="Get the bidders list",
 *     tags={"Auction/Bids"},
 *     summary="Get the bidders list",
 *     description="Get the bidders list",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Get the bidders list",
 *    @OA\JsonContent(
 *       required={"auction_id"},
 *       @OA\Property(property="auction_id", type="string", format="text", example="2"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="bidders",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="role_id", type="string", example="1"),
 *                      @OA\Property(property="interest_tags", type="string", example="Some2"),
 *                      @OA\Property(property="first_name", type="string", example="User"),
 *                      @OA\Property(property="last_name", type="string", example="User"),
 *                      @OA\Property(property="display_name", type="string", example="Some"),
 *                      @OA\Property(property="email", type="string", example="user@gmail.com"),
 *                      @OA\Property(property="email_verified_at", type="string", example="null"),
 *                      @OA\Property(property="created_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *                      @OA\Property(property="updated_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *                ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="auction_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The user_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                     ),
 *             ),
 *        ),
 *  ))
 * )
 */

//Get the product info for the auction
/**
 * @OA\POST(
 *     path="/api/auth/auction/get-auction-product",
 *     operationId="Get the product info for the auction",
 *     tags={"Auction/Bids"},
 *     summary="Get the product info for the auction",
 *     description="Get the product info for the auction",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the product info for the auction",
 *    @OA\JsonContent(
 *       required={"auction_id","product_id"},
 *       @OA\Property(property="auction_id", type="string", format="text", example="2"),
 *       @OA\Property(property="product_id", type="string", format="text", example="1"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="product",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="user_id", type="string", example="1"),
 *                      @OA\Property(property="category_id", type="string", example="1"),
 *                      @OA\Property(property="subcategory_id", type="string", example="2"),
 *                      @OA\Property(property="sku", type="string", example="Some8000"),
 *                      @OA\Property(property="title", type="string", example="Some"),
 *                ),
 *        ),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="The given data was invalid."),
 *       @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="auction_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The auction_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="product_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The product_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *             ),
 *        ),
 *  ))
 * )
 */

//Get the Bids history
/**
 * @OA\POST(
 *     path="/api/auth/bidder/get-bids-history",
 *     operationId="Get the Bids history",
 *     tags={"Auction/Bids"},
 *     summary="Get the Bids history",
 *     description="Get the Bids history",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Get the Bids history",
 *    @OA\JsonContent(
 *       required={"auction_id"},
 *       @OA\Property(property="auction_id", type="string", format="text", example="2"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="bids",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="auction_id", type="string", example="2"),
 *                      @OA\Property(property="user_id", type="string", example="2"),
 *                      @OA\Property(property="bid", type="string", example="1.00"),
 *                      @OA\Property(property="won", type="string", example="0"),
 *                      @OA\Property(property="created_at", type="string", example="2021-06-29T11:15:07.000000Z"),
 *                      @OA\Property(property="updated_at", type="string", example="2021-06-29T11:15:08.000000Z"),
 *                ),
 *        ),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="auction_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The auction_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                ),
 *          ),
 *       ),
 *  ))
 * )
 */

//Get the auction status
/**
 * @OA\POST(
 *     path="/api/auth/auction/get-auction-status",
 *     operationId="Get the auction status",
 *     tags={"Auction/Bids"},
 *     summary="Get the auction status",
 *     description="Get the auction status",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Get the auction status",
 *    @OA\JsonContent(
 *       required={"auction_id"},
 *       @OA\Property(property="auction_id", type="string", format="text", example="2"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="status", type="string", example="current"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(property="message2", type="string", example="Auction not found!"),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="auction_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The auction_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                ),
 *          ),
 *       ),
 *  ))
 * )
 */

//My auctions
/**
 * @OA\POST(
 *     path="/api/auth/auction/my-auctions",
 *     operationId="My auctions",
 *     tags={"Auction/Bids"},
 *     summary="My auctions",
 *     description="My auctions",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="My auctions",
 *    @OA\JsonContent(
 *       required={"auction_id"},
 *       @OA\Property(property="user_id", type="string", format="text", example="3"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(
 *                 property="current",
 *                 type="array",
 *                 @OA\Items(
 *                    @OA\Property(property="id", type="string", example="1"),
 *                    @OA\Property(property="user_id", type="string", example="3"),
 *                    @OA\Property(property="status", type="string", example="current"),
 *                    @OA\Property(property="name", type="string", example="Сurrent"),
 *                    @OA\Property(property="start_bid", type="string", example="1.60"),
 *                    @OA\Property(property="buyout_price", type="string", example="1.60"),
 *                    @OA\Property(property="min_bid", type="string", example="1.50"),
 *                    @OA\Property(property="gallery_id", type="string", example="679622064"),
 *                    @OA\Property(property="basic_information", type="string", example="Some text"),
 *                    @OA\Property(property="step", type="string", example="1"),
 *                    @OA\Property(property="category_id", type="string", example="1"),
 *                    @OA\Property(property="subcategory_id", type="string", example="2"),
 *                    @OA\Property(property="certification_id", type="string", example="1"),
 *                    @OA\Property(property="start_time", type="string", example="2021-06-28 09:00:00"),
 *                    @OA\Property(property="end_time", type="string", example="2021-06-28 15:00:00"),
 *         )),
 *         @OA\Property(
 *                 property="won",
 *                 type="array",
 *                 @OA\Items(
 *                    @OA\Property(property="id", type="string", example="2"),
 *                    @OA\Property(property="user_id", type="string", example="3"),
 *                    @OA\Property(property="status", type="string", example="won"),
 *                    @OA\Property(property="name", type="string", example="Won"),
 *                    @OA\Property(property="start_bid", type="string", example="1.60"),
 *                    @OA\Property(property="buyout_price", type="string", example="1.60"),
 *                    @OA\Property(property="min_bid", type="string", example="1.50"),
 *                    @OA\Property(property="gallery_id", type="string", example="679622064"),
 *                    @OA\Property(property="basic_information", type="string", example="Some text"),
 *                    @OA\Property(property="step", type="string", example="1"),
 *                    @OA\Property(property="category_id", type="string", example="1"),
 *                    @OA\Property(property="subcategory_id", type="string", example="2"),
 *                    @OA\Property(property="certification_id", type="string", example="1"),
 *                    @OA\Property(property="start_time", type="string", example="2021-06-28 09:00:00"),
 *                    @OA\Property(property="end_time", type="string", example="2021-06-28 15:00:00"),
 *         )),
 *         @OA\Property(
 *                 property="lost",
 *                 type="array",
 *                 @OA\Items(
 *                    @OA\Property(property="id", type="string", example="1"),
 *                    @OA\Property(property="user_id", type="string", example="3"),
 *                    @OA\Property(property="status", type="string", example="lost"),
 *                    @OA\Property(property="name", type="string", example="Lost"),
 *                    @OA\Property(property="start_bid", type="string", example="1.60"),
 *                    @OA\Property(property="buyout_price", type="string", example="1.60"),
 *                    @OA\Property(property="min_bid", type="string", example="1.50"),
 *                    @OA\Property(property="gallery_id", type="string", example="679622064"),
 *                    @OA\Property(property="basic_information", type="string", example="Some text"),
 *                    @OA\Property(property="step", type="string", example="1"),
 *                    @OA\Property(property="category_id", type="string", example="1"),
 *                    @OA\Property(property="subcategory_id", type="string", example="2"),
 *                    @OA\Property(property="certification_id", type="string", example="1"),
 *                    @OA\Property(property="start_time", type="string", example="2021-06-28 09:00:00"),
 *                    @OA\Property(property="end_time", type="string", example="2021-06-28 15:00:00"),
 *         )),

 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="user_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected user id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//Add bid
/**
 * @OA\POST(
 *     path="/api/auth/bidder/add-bid",
 *     operationId="Add bid",
 *     tags={"Auction/Bids"},
 *     summary="Add bid",
 *     description="Add bid",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Add bid",
 *    @OA\JsonContent(
 *       required={"auction_id", "bid", "bid_timestamp"},
 *       @OA\Property(property="auction_id", type="string", format="text", example="2"),
 *       @OA\Property(property="bid", type="string", format="text", example="1.60"),
 *       @OA\Property(property="bid_timestamp", type="string", format="text", example="2021-06-29 11:44:44"),
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="bid_id", type="string", example="1"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="auction_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The auction_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="bid",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The bid field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="bid_timestamp",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The bid_timestamp field is required.",
 *                              @OA\Items()
 *                          ),
 *                     ),
 *                ),
 *          ),
 *       ),
 *  ))
 * )
 */

// Orders //
//Get the Orders list
/**
 * @OA\Post(
 *     path="/api/auth/order/get-orders-list",
 *     operationId="Get the Orders list",
 *     tags={"Order"},
 *     summary="Get the Orders list",
 *     description="Get the Orders list",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the Orders status",
 *    @OA\JsonContent(
 *       required={"page"},
 *       @OA\Property(property="page", type="string", format="text", example="1"),
 *       @OA\Property(property="limit", type="string", format="text", example="15"),
 *    ),
 * ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="current_page", type="string", example="1"),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                @OA\Property(
 *                     property="data",
 *                     type="array",
 *                      @OA\Items(
 *                              @OA\Property(property="id", type="string", example="1"),
 *                              @OA\Property(property="user_id", type="string", example="45"),
 *                              @OA\Property(property="seller_id", type="string", example="1"),
 *                              @OA\Property(property="order_date", type="string", example="2021-07-08"),
 *                              @OA\Property(property="delivery_date", type="string", example="2021-07-08"),
 *                              @OA\Property(property="order_notes", type="string", example="notes"),
 *                              @OA\Property(property="long_desc", type="string", example="long notes"),
 *                              @OA\Property(property="payment_status", type="string", example="status"),
 *                              @OA\Property(property="payment_error_log", type="string", example="log"),
 *                              @OA\Property(property="subtotal", type="string", example="100.00"),
 *                              @OA\Property(property="shipping_amount", type="string", example="50.00"),
 *                              @OA\Property(property="tax_rate", type="string", example="5.00"),
 *                              @OA\Property(property="tax_amount", type="string", example="15.00"),
 *                              @OA\Property(property="total", type="string", example="165.00"),
 *                              @OA\Property(property="discount_code", type="string", example="sscafa5asd64as4d"),
 *                              @OA\Property(property="status", type="string", example="draft"),
 *                              @OA\Property(property="created_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *                              @OA\Property(property="updated_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *                        ),
 *                ),
 *          ),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="page", type="string", example="1"),
 *       ),
 *  ))
 * )
 */

//Get the Orders list by user id
/**
 * @OA\Post(
 *     path="/api/auth/order/get-orders-list-by-user",
 *     operationId="Get the Orders list by user id",
 *     tags={"Order"},
 *     summary="Get the Orders list by user id",
 *     description="Get the Orders list by user id",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the Orders list by user id",
 *    @OA\JsonContent(
 *       required={"page"},
 *       @OA\Property(property="page", type="string", format="text", example="1"),
 *       @OA\Property(property="limit", type="string", format="text", example="15"),
 *       @OA\Property(property="user_id", type="string", format="text", example="3"),
 *    ),
 * ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="current_page", type="string", example="1"),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                @OA\Property(
 *                     property="data",
 *                     type="array",
 *                      @OA\Items(
 *                              @OA\Property(property="id", type="string", example="1"),
 *                              @OA\Property(property="user_id", type="string", example="45"),
 *                              @OA\Property(property="seller_id", type="string", example="1"),
 *                              @OA\Property(property="order_date", type="string", example="2021-07-08"),
 *                              @OA\Property(property="delivery_date", type="string", example="2021-07-08"),
 *                              @OA\Property(property="order_notes", type="string", example="notes"),
 *                              @OA\Property(property="long_desc", type="string", example="long notes"),
 *                              @OA\Property(property="payment_status", type="string", example="status"),
 *                              @OA\Property(property="payment_error_log", type="string", example="log"),
 *                              @OA\Property(property="subtotal", type="string", example="100.00"),
 *                              @OA\Property(property="shipping_amount", type="string", example="50.00"),
 *                              @OA\Property(property="tax_rate", type="string", example="5.00"),
 *                              @OA\Property(property="tax_amount", type="string", example="15.00"),
 *                              @OA\Property(property="total", type="string", example="165.00"),
 *                              @OA\Property(property="discount_code", type="string", example="sscafa5asd64as4d"),
 *                              @OA\Property(property="status", type="string", example="draft"),
 *                              @OA\Property(property="created_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *                              @OA\Property(property="updated_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *                        ),
 *                ),
 *          ),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="page", type="string", example="1"),
 *       ),
 *  ))
 * )
 */

//Get the Orders status
/**
 * @OA\Post(
 *     path="/api/auth/order/get-order-status",
 *     operationId="Get the Orders status",
 *     tags={"Order"},
 *     summary="Get the Orders status",
 *     description="Get the Orders status",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the Orders status",
 *    @OA\JsonContent(
 *       required={"order_id"},
 *       @OA\Property(property="order_id", type="string", format="text", example="1"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="status", type="string", example="draft"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="status",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The status field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *    )),
 * )
 */

//Get the Order detail
/**
 * @OA\Post(
 *     path="/api/auth/order/get-order-details",
 *     operationId="Get the Order detail",
 *     tags={"Order"},
 *     summary="Get the Order detail",
 *     description="Get the Order detail",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the Order detail",
 *    @OA\JsonContent(
 *       required={"order_id"},
 *       @OA\Property(property="order_id", type="string", format="text", example="1"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="order_id", type="string", example="1"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="order_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The order_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *    )),
 * )
 */

//Add to the card
/**
 * @OA\Post(
 *     path="/api/auth/order/store-order",
 *     operationId="Add to the card",
 *     tags={"Order"},
 *     summary="Add to the card",
 *     description="Add to the card",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Add to the card",
 *    @OA\JsonContent(
 *       required={"order_id"},
 *       @OA\Property(property="product_id",  type="array",
 *                @OA\Items(example="37"),
 *       ),
 *       @OA\Property(property="shipping_id", type="string", format="text", example="1"),
 *       @OA\Property(property="item_status", type="string", format="text", example="pay"),
 *       @OA\Property(property="seller_id", type="string", format="text", example="1"),
 *       @OA\Property(property="order_date", type="string", format="text", example="2021-07-08"),
 *       @OA\Property(property="delivery_date", type="string", format="text", example="2021-07-08"),
 *       @OA\Property(property="order_notes", type="string", format="text", example="notes2"),
 *       @OA\Property(property="long_desc", type="string", format="text", example="long notes"),
 *       @OA\Property(property="payment_status", type="string", format="text", example="pending"),
 *       @OA\Property(property="payment_error_log", type="string", format="text", example="log"),
 *       @OA\Property(property="subtotal", type="string", format="text", example="100"),
 *       @OA\Property(property="shipping_amount", type="string", format="text", example="50"),
 *       @OA\Property(property="tax_rate", type="string", format="text", example="5"),
 *       @OA\Property(property="status", type="string", format="text", example="sold"),
 *       @OA\Property(property="tax_amount", type="string", format="text", example="10"),
 *       @OA\Property(property="total", type="string", format="text", example="165"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="order_id", type="string", example="4"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="seller_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The seller_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="order_date",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The order_date field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                     @OA\Property(
 *                          property="payment_status",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The payment_status field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *    )),
 * )
 */
//Remove to the card
/**
 * @OA\Post(
 *     path="/api/auth/order/delete-order",
 *     operationId="Remove to the card",
 *     tags={"Order"},
 *     summary="Remove to the card",
 *     description="Remove to the card",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Remove to the card",
 *    @OA\JsonContent(
 *       required={"order_id"},
 *       @OA\Property(property="order_id", type="string", format="text", example="7"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="Successfully deleted Order!"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="order_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The order_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="message",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="Order not found!",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *    )),
 * )
 */

//Get the shipping info
/**
 * @OA\Post(
 *     path="/api/auth/order/get-shipping-info",
 *     operationId="Get the shipping info",
 *     tags={"Order"},
 *     summary="Get the shipping info",
 *     description="Get the shipping info",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the shipping info",
 *    @OA\JsonContent(
 *       required={"order_id"},
 *       @OA\Property(property="order_id", type="string", format="text", example="1"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="order_id", type="string", example="1"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="order_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The order_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="message",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="Shipping not found!",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *    )),
 * )
 */

//Get the shipments list
/**
 * @OA\Post(
 *     path="/api/auth/order/get-shipments-list",
 *     operationId="Get the shipments list",
 *     tags={"Order"},
 *     summary="Get the shipments list",
 *     description="Get the shipments list",
 *     security={{"Authorization":{}}},
 *     @OA\RequestBody(
 *     required=true,
 *     description="Get the shipments list",
 *     @OA\JsonContent(
 *       required={"email","password"},
 *    ),
 * ),
 * @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="shipment_label", type="string", example="FedEx"),
 *                      @OA\Property(property="zone", type="string", example="zone"),
 *                      @OA\Property(property="price", type="string", example="15"),
 *                      @OA\Property(property="tax", type="string", example="7"),
 *                      @OA\Property(property="starus", type="string", example="starus"),
 *                      @OA\Property(property="p_id", type="string", example="null"),
 *                      @OA\Property(property="width", type="string", example="180"),
 *                      @OA\Property(property="height", type="string", example="160"),
 *                      @OA\Property(property="weight", type="string", example="600"),
 *                      @OA\Property(property="depth", type="string", example="1000"),
 *                      @OA\Property(property="created_at", type="string", example="2021-07-22T10:23:09.000000Z"),
 *                      @OA\Property(property="updated_at", type="string", example="2021-07-22T10:23:10.000000Z"),
 *    )),
 * @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Shipments not found!"),
 *  ))
 * )
 */

//Get the payment info
/**
 * @OA\Post(
 *     path="/api/auth/payment/get-payment-info",
 *     operationId="Get the payment info",
 *     tags={"Order"},
 *     summary="Get the payment info",
 *     description="Get the payment info",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the payment info",
 *    @OA\JsonContent(
 *       required={"order_id"},
 *       @OA\Property(property="order_id", type="string", format="text", example="1"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="id", type="string", format="text", example="1"),
 *          @OA\Property(property="order_id", type="string", format="text", example="1"),
 *          @OA\Property(property="card_number", type="string", format="text", example="4780384938110300"),
 *          @OA\Property(property="month", type="string", format="text", example="12"),
 *          @OA\Property(property="year", type="string", format="text", example="20"),
 *          @OA\Property(property="cvc", type="string", format="text", example="493"),
 *          @OA\Property(property="owner_name", type="string", format="text", example="Ricardo Robers"),
 *          @OA\Property(property="country", type="string", format="text", example="Sweden"),
 *          @OA\Property(property="phone_number", type="string", format="text", example="79029250474"),
 *          @OA\Property(property="payment_date", type="string", format="text", example="2021-07-14T10:00:00.000000Z"),
 *          @OA\Property(property="created_at", type="string", format="text", example="2021-07-14T11:18:17.000000Z"),
 *          @OA\Property(property="updated_at", type="string", format="text", example="2021-07-14T11:18:18.000000Z"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="order_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The order_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                          @OA\Items(
 *                              type="array",
 *                              example="The order id must be a number.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="message",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="Payment info not found!",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *    )),
 * )
 */

// Checkout Functionality //
// Get the orders price
/**
 * @OA\Post(
 *     path="/api/auth/order/get-order-price",
 *     operationId="Get the orders price",
 *     tags={"Checkout Functionality"},
 *     summary="Get the orders price",
 *     description="Get the orders price",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the orders price",
 *    @OA\JsonContent(
 *       required={"order_id"},
 *       @OA\Property(property="order_id", type="string", format="text", example="1"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="id", type="string", format="text", example="1"),
 *          @OA\Property(property="shipping_amount", type="string", format="text", example="50.00"),
 *          @OA\Property(property="tax_rate", type="string", format="text", example="5.00"),
 *          @OA\Property(property="tax_amount", type="string", format="text", example="10.00"),
 *          @OA\Property(property="total", type="string", format="text", example="165.00"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="order_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The order_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="message",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="Order price not found!",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *    )),
 * )
 */


//Update the payment info
/**
 * @OA\Post(
 *     path="/api/auth/payment/update-payment-info",
 *     operationId="Update the payment info",
 *     tags={"Checkout Functionality"},
 *     summary="Update the payment info",
 *     description="Update the payment info",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Update the payment info",
 *    @OA\JsonContent(
 *       required={"payment_id"},
 *       @OA\Property(property="payment_id", type="string", format="text", example="1"),
 *       @OA\Property(property="card_number", type="string", format="text", example="4780384938118888"),
 *       @OA\Property(property="month", type="string", format="text", example="7"),
 *       @OA\Property(property="year", type="string", format="text", example="21"),
 *       @OA\Property(property="cvc", type="string", format="text", example="493"),
 *       @OA\Property(property="owner_name", type="string", format="text", example="Ricardo de Robers"),
 *       @OA\Property(property="country", type="string", format="text", example="Sweden"),
 *       @OA\Property(property="phone_number", type="string", format="text", example="79029250421"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", format="text", example="Successfully update Payment!"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="The given data was invalid."),
 *          @OA\Property(
 *                property="errors",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="order_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The order_id field is required.",
 *                              @OA\Items()
 *                          ),
 *                          @OA\Items(
 *                              type="array",
 *                              example="The order id must be a number.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                      @OA\Property(
 *                          property="message",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="Order price not found!",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                     @OA\Property(
 *                          property="card_number",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The card number must be 16 digits.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                     @OA\Property(
 *                          property="year",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The year must be between 20 and 99.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *    )),
 * )
 */

// Get Payouts
/**
 * @OA\Post(
 *     path="/api/auth/payment/get-payouts",
 *     operationId="Get Payouts",
 *     tags={"Checkout Functionality"},
 *     summary="Get Payouts",
 *     description="Get Payouts",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get Payouts",
 *    @OA\JsonContent(
 *       required={"payment_id"},
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="payment_id", type="string", format="text", example="1"),
 *       @OA\Property(property="card_number", type="string", format="text", example="4780384938118888"),
 *       @OA\Property(property="month", type="string", format="text", example="7"),
 *       @OA\Property(property="year", type="string", format="text", example="21"),
 *       @OA\Property(property="cvc", type="string", format="text", example="493"),
 *       @OA\Property(property="owner_name", type="string", format="text", example="Ricardo de Robers"),
 *       @OA\Property(property="country", type="string", format="text", example="Sweden"),
 *       @OA\Property(property="phone_number", type="string", format="text", example="79029250421"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="No Result."),
 *    )),
 * )
 */

// Filter payouts
/**
 * @OA\Post(
 *     path="/api/auth/payment/filter-payouts",
 *     operationId="Filter Payouts",
 *     tags={"Checkout Functionality"},
 *     summary="Filter Payouts",
 *     description="Filter Payouts",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Filter Payouts",
 *    @OA\JsonContent(
 *       required={"payment_id"},
 *       @OA\Property(property="order_id", type="string", format="text", example="5"),
 *       @OA\Property(property="date", type="string", format="text", example="2021-07-27"),
 *       @OA\Property(property="buyer_name", type="string", format="text", example="some"),
 *    ),
 * ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(property="payment_id", type="string", format="text", example="1"),
 *       @OA\Property(property="card_number", type="string", format="text", example="4780384938118888"),
 *       @OA\Property(property="month", type="string", format="text", example="7"),
 *       @OA\Property(property="year", type="string", format="text", example="21"),
 *       @OA\Property(property="cvc", type="string", format="text", example="493"),
 *       @OA\Property(property="owner_name", type="string", format="text", example="Ricardo de Robers"),
 *       @OA\Property(property="country", type="string", format="text", example="Sweden"),
 *       @OA\Property(property="phone_number", type="string", format="text", example="79029250421"),
 *    )),
 *   @OA\Response(
 *    response=422,
 *    description="Returns when user is not authenticated",
 *    @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="Payments not definded."),
 *    )),
 * )
 */

//Checkout Functionality //
//Get the knowledge bases list
/**
 * @OA\Post(
 *     path="/api/auth/knowledge/get-knowledge-bases-list",
 *     operationId="Get the knowledge bases list",
 *     tags={"Support and Knowledge base"},
 *     summary="Get the knowledge bases list",
 *     description="Get the knowledge bases list",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the knowledge bases list",
 *    @OA\JsonContent(
 *       required={"payment_id"},
 *       @OA\Property(property="page", type="string", format="text", example="1"),
 *    ),
 *  ),
 *   @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="current_page", type="string", example="1"),
 *          @OA\Property(
 *             property="data",
 *             type="array",
 *                 @OA\Items(
 *                       @OA\Property(property="id", type="string", example="1"),
 *                       @OA\Property(property="author_id", type="string", example="45"),
 *                       @OA\Property(property="title", type="string", example="Some1"),
 *                       @OA\Property(property="description", type="string", example="Some1 description"),
 *                       @OA\Property(property="type", type="string", example="knowledge_base"),
 *                       @OA\Property(property="date", type="string", example="2021-07-23 09:38:52"),
 *                       @OA\Property(property="created_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *                       @OA\Property(property="updated_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *        ),
 *     ),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="page", type="string", example="The page field is required"),
 *       ),
 *  ))
 * )
 */

//Get Knowledge Base Details
/**
 * @OA\Post(
 *     path="/api/auth/knowledge/get-knowledge-base-details",
 *     operationId="Get Knowledge Base Details",
 *     tags={"Support and Knowledge base"},
 *     summary="Get Knowledge Base Details",
 *     description="Get Knowledge Base Details",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get Knowledge Base Details",
 *    @OA\JsonContent(
 *       required={"payment_id"},
 *       @OA\Property(property="knowledge_base_id", type="string", format="text", example="1"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="id", type="string", example="1"),
 *         @OA\Property(property="author_id", type="string", example="45"),
 *         @OA\Property(property="title", type="string", example="Some1"),
 *         @OA\Property(property="description", type="string", example="Some1 description"),
 *         @OA\Property(property="type", type="string", example="knowledge_base"),
 *         @OA\Property(property="date", type="string", example="2021-07-23 09:38:52"),
 *         @OA\Property(property="created_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *         @OA\Property(property="updated_at", type="string", example="2021-06-08T15:17:28.000000Z"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="message", type="string", example="Knowledge Base not found!"),
 *     ),
 *  ))
 * )
 */

//Send the report
/**
 * @OA\Post(
 *     path="/api/auth/report/send-report",
 *     operationId="Send the report",
 *     tags={"Support and Knowledge base"},
 *     summary="Send the report",
 *     description="Send the report",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Send the report",
 *    @OA\JsonContent(
 *       required={"payment_id"},
 *       @OA\Property(property="email", type="string", format="text", example="user10@gmail.com"),
 *       @OA\Property(property="subject", type="string", format="text", example="Subject report"),
 *       @OA\Property(property="user", type="string", format="text", example="3"),
 *       @OA\Property(property="message", type="string", format="text", example="Message report"),
 *       @OA\Property(property="file", type="string", format="text", example="data:image/png;base64,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"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Report submitted successfully!"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="email",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The email must be a valid email address.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="user",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected user is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

// Messaging //

//Get the chat lists
/**
 * @OA\Post(
 *     path="/api/auth/messaging/get-chat-lists",
 *     operationId="Get the chat lists",
 *     tags={"Messaging"},
 *     summary="Get the chat lists",
 *     description="Get the chat lists",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the chat lists",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="page", type="string", format="text", example="1"),
 *       @OA\Property(property="limit", type="string", format="text", example="15"),
 *       @OA\Property(property="user_id", type="string", format="text", example="5"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="current_page", type="string", example="1"),
 *          @OA\Property(
 *                     property="data",
 *                     type="array",
 *                      @OA\Items(
 *                              @OA\Property(property="id", type="string", example="1"),
 *                              @OA\Property(property="name", type="string", example="45"),
 *                              @OA\Property(property="user_from_id", type="string", example="2"),
 *                              @OA\Property(property="user_to_id", type="string", example="2"),
 *                              @OA\Property(property="created_at", type="string", example="2021-08-02T11:17:40.000000Z"),
 *                              @OA\Property(
 *                                  property="user_from",
 *                                  type="array",
 *                                      @OA\Items(
 *                                          @OA\Property(property="id", type="string", example="3"),
 *                                          @OA\Property(property="first_name", type="string", example="jesica"),
 *                                          @OA\Property(property="last_name", type="string", example="berder"),
 *                                          @OA\Property(property="email", type="string", example="user10@gmail.com"),
 *                                      ),
 *                              ),
 *                             @OA\Property(
 *                                  property="user_to",
 *                                  type="array",
 *                                      @OA\Items(
 *                                          @OA\Property(property="id", type="string", example="2"),
 *                                          @OA\Property(property="first_name", type="string", example="Ali"),
 *                                          @OA\Property(property="last_name", type="string", example="Khurram"),
 *                                          @OA\Property(property="email", type="string", example="ali.gguzz@gmail.com"),
 *                                      ),
 *                              ),
 *                      ),
 *           ),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="message_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected message id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//Get the message status
/**
 * @OA\Post(
 *     path="/api/auth/messaging/get-message-status",
 *     operationId="Get the message status",
 *     tags={"Messaging"},
 *     summary="Get the message status",
 *     description="Get the message status",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the message status",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="message_id", type="string", format="text", example="1"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *          @OA\Property(property="status", type="string", example="new"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="message_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected message id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//Create the chat
/**
 * @OA\Post(
 *     path="/api/auth/messaging/create-chat",
 *     operationId="Create the chat",
 *     tags={"Messaging"},
 *     summary="Create the chat",
 *     description="Create the chat",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Create the chat",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="name", type="string", format="text", example="ChatId"),
 *       @OA\Property(property="user_to", type="string", format="text", example="6"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Successfully chat created!"),
 *         @OA\Property(property="chat_id", type="string", example="1"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="name",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The name field is required.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//Delete the chat
/**
 * @OA\Post(
 *     path="/api/auth/messaging/delete-chat",
 *     operationId="Delete the chat",
 *     tags={"Messaging"},
 *     summary="Delete the chat",
 *     description="Delete the chat",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Delete the chat",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="chat_id", type="string", format="text", example="1"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Successfully deleted Chat!"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="chat_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The chat id must be a number.",
 *                              @OA\Items()
 *                          ),
 *                         @OA\Items(
 *                              type="array",
 *                              example="The selected chat id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//Sent the message
/**
 * @OA\Post(
 *     path="/api/auth/messaging/sent-message",
 *     operationId="Sent the message",
 *     tags={"Messaging"},
 *     summary="Sent the message",
 *     description="Sent the message",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Sent the message",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="user_id", type="string", format="text", example="3"),
 *       @OA\Property(property="chat_id", type="string", format="text", example="3"),
 *       @OA\Property(property="message", type="string", format="text", example="some text3"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Successfully message create!"),
 *         @OA\Property(property="message_id", type="string", example="4"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="chat_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected chat id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//Delete the message
/**
 * @OA\Post(
 *     path="/api/auth/messaging/delete-message",
 *     operationId="Delete the message",
 *     tags={"Messaging"},
 *     summary="Delete the message",
 *     description="Delete the message",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Delete the message",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="message_id", type="string", format="text", example="3"),
 *       @OA\Property(property="user_id", type="string", format="text", example="3"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Successfully message deleted!"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="message_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected message id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//Get the chat messages
/**
 * @OA\Post(
 *     path="/api/auth/messaging/get-chat-messages",
 *     operationId="Get the chat messages",
 *     tags={"Messaging"},
 *     summary="Get the chat messages",
 *     description="Get the chat messages",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Get the chat messages",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="chat_id", type="string", format="text", example="3"),
 *       @OA\Property(property="page", type="string", format="text", example="1"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="id", type="string", example="2"),
 *         @OA\Property(property="user_id", type="string", example="3"),
 *         @OA\Property(property="chat_group_id", type="string", example="3"),
 *         @OA\Property(property="message", type="string", example="3"),
 *         @OA\Property(property="created_at", type="string", example="2021-08-02T12:05:12.000000Z"),
 *         @OA\Property(property="updated_at", type="string", example="2021-08-02T12:05:12.000000Z"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="chat_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected chat id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//Add participants to the chat


// Seller Profile //
//Seller store on/off
/**
 * @OA\Post(
 *     path="/api/auth/seller-profile/work-status",
 *     operationId="Seller store on/off",
 *     tags={"Seller Profile"},
 *     summary="Seller store on/off",
 *     description="Seller store on/off",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Seller store on/off",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="seller_id", type="string", format="text", example="3"),
 *       @OA\Property(property="status", type="string", format="text", example="1"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Successfully update seller products status"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="status",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The status must be a number.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//Seller Dashboard
/**
 * @OA\Post(
 *     path="/api/auth/seller-profile/dashboard",
 *     operationId="Seller Dashboard",
 *     tags={"Seller Profile"},
 *     summary="Seller Dashboard",
 *     description="Seller Dashboard",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Seller Dashboard",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="seller_id", type="string", format="text", example="3"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *       @OA\Property(
 *                property="store_start",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(property="sold_items", type="string", example="2"),
 *                      @OA\Property(property="your_revenue", type="string", example="670"),
 *                      @OA\Property(property="seller_rate", type="string", example="5"),
 *                ),
 *        ),
 *       @OA\Property(
 *                 property="your_sales",
 *                 type="array",
 *                 @OA\Items(
 *                      @OA\Property(property="id", type="string", example="2"),
 *                      @OA\Property(property="user_id", type="string", example="3"),
 *                      @OA\Property(property="category_id", type="string", example="1"),
 *                      @OA\Property(property="auction_id", type="string", example="1"),
 *                      @OA\Property(property="sku", type="string", example="1"),
 *                      @OA\Property(property="title", type="string", format="text", example="Some"),
 *                      @OA\Property(property="color", type="string", format="text", example="Red"),
 *                      @OA\Property(property="weight", type="string", format="text", example="50"),
 *                      @OA\Property(property="short_disc", type="string", format="text", example="some some"),
 *                      @OA\Property(property="long_disc", type="string", format="text", example="Some text"),
 *                      @OA\Property(property="features", type="string", format="text", example="1"),
 *                      @OA\Property(property="picture[0]", type="string", format="base64", example="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAEsCAYAAAB5fY51AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAA3cAAAN3ABgpgKWgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAABPzSURBVHic7d17sF5Vfcbx7y8JSUgIkUtGkSKXAEEFFaHesGABq1AuUtsUMMTbzMKA1uI9WmRUHGRwSi2gdSsFuQwOrTDUOsAMCQWNQykUFZQGqeBUBEy8cLhfkl//2DvkRM9JznvO+76/tfZ+PjPvcPjnnGfOnPVk7bX3WtvcHRGREkyLDiAiMlEqLBEphgpLRIqhwhKRYqiwRKQYKiwRKYYKS0SKocISkWKosESkGCosESmGCktEiqHCEpFiqLBEpBgqLBEphgpLRIqhwhKRYqiwRKQYKiwRKYYKS0SKocISkWKosESkGCosESmGCktEiqHCEpFiqLBEpBgqLBEphgpLRIqhwhKRYqiwRKQYKiwRKYYKS0SKocISkWKosESkGCosESnGjOgAUhZPthUwbzOfacCj432s8qcDYktLmLtHZ5BMeLLtgb2BRc1nb2AhMJ+NhTRrij/mWTYtsZ8Dq0d/rPKHpvgzpKVUWB3jyaazsYwW/d7XOwZGG20EuIeNJbbh67s1Q+s2FVbLeTID9gUOBQ4DDgG2DQ01eU8Bq4CVwArgNqt8XWwkGSYVVgt5sj2pC2rDZ0FsooEZAW6mLq+VwJ1W6Q+6zVRYLdCsPR1JPYM6FHhJbKIwa4AbqcvrO1b5L4LzSJ+psArV3K07ElgKHAXMjE2UnfXU5XUJcJVV/lhwHukDFVZhPNlrqEvqeGCH4DileBy4mrq8Vljl64PzyCSpsArgyXYFlgAnUd/Nk8l7ALgcuNQqvys6jPRGhZUpTzYDOAF4D/WdPYtN1Ep3ABcDF1rljwdnkQlQYWXGk82iLqmPA7sGx+mKXwNfAs6zyn8XHUbGp8LKhCebC7wP+DCwU3CcrhoBLgDOtcrXRIeRP6TCCubJXgB8APggWkTPxRPA14BzrPIHosPIRiqsIJ5sAXAacCrlPnneds9Qr3GdbZX/LDiLoMIaOk82D/g0cAowJziOTMw64DJguVX+YHSYLlNhDZEnWwycC7w4OotMyghwOnCB9jDGUGENgSfbi3ox983RWaQvfgAss8pviQ7SNSqsAfJks4FPAh9j6udISV4c+DrwCav8N9FhukKFNSCe7EjgPGCP6CwyUGupn5m7SCdFDJ4Kq8882S7UDyEeF51Fhur71JeJP4oO0mYqrD7yZO8CzgfmBkeRGOuAzwJnaoP1YKiw+qB5Sv0r1JuTRVYC79DZ9P2nwpoiT7YfcCWwT3QWycrDwBKr/IboIG2iwpoCT5ao16tmR2eRLK0HzgLO0HNb/aHCmoTmafWK+hA9kS25GThR+xKnToXVI0+2P/Ul4J7RWaQoa4GlVvm10UFKpsLqgSdbRr21Rg+BymQ4cA71nkTdRZwEFdYENO/2Oxv4aHQWaYVvUd9F1Ethe6TC2oLmqOKvA++MziKtciNwrFX+aHSQkqiwNsOTbU29XnVUdBZppTuAt1rlv4oOUgoV1jg82XbAt4GDorNIq90LvEUHBE6MCmsMnmxn4Dpg3+gs0gkPUc+0fhgdJHfTogPkxpMtAlahspLheRFwkyc7ODpI7lRYo3iyPwa+h16vJcM3H7jek70tOkjOdEnY8GQHUN+5mRedRTptHbDYKr8qOkiOVFg8f4TxKmBBdBYR4GnqhfibooPkpvOF5cl2oi6r3aOziIzyCHCIFuI31ek1LE82H7gWlZXkZz5wrSfT3+YonS0sTzYLuAZ4ZXQWkXHsRL0Qr6WKRicLy5NNA64ADonOIrIFe1HPtLaJDpKDThYW8GX0kggpxwHA1Z5sZnSQaJ0rLE/2GeDk6BwiPToc+EZzckhndaqwPNlS4NPROUQm6Xjg89EhInXmsQZP9jLgv4A50VlEpsCBI63y66KDROhEYXmyOcCtwMujs4j0wVrgVV08I74rl4Tno7KS9tgRuMKTTY8OMmytL6xm3erd0TlE+uxPgM9Fhxi2Vl8SerKXUq9b6dXx0kYOHGGVXx8dZFhaW1jN8ca3onOtpN3WUK9n/TI6yDC0+ZLwPFRW0n4L6NB6VisLy5MtAd4bnUNkSA4GPhMdYhhad0nYHBezGh3EJ92yHni9VX5rdJBBauMM6+9RWUn3TAO+0vZLw1YVlic7jHr7gkgXvRo4JTrEILXmkrDZyf4jYFF0FpFAI8Aiq/yh6CCD0KYZ1kdQWYlsS70s0kqtmGF5st2AnwBbxyYRycbhVvmK6BD91pbCugY4JjpHZ237Qthl//58r3tugmef7M/36rbVwCus8meig/TTjOgAU+XJjkZlFevVb8dOvKAv38qX7w6/vr8v36vjFgEfpWXnZxW9htVsv/nH6BxdZwv2iI4gY/tU2966U3RhAR8HdosO0Xk7qrAytTVwbnSIfiq2sDzZtsDfRufoPDPY43XRKWR8x3qy1rzKrtjCAt5P/bJJibT7a2H+TtEpZPM+FR2gX4osrObIY82uMmD7621pBXi7J2vFM4pFFhaQqI/VkEjTt4ID/zo6hWzZNGB5dIh+KK6wmi04H4nOIcCbToEddo1OIRPzjuYB66IVV1jU57PvHB2i87aejx11enQKmbgZ1HfVi1ZUYXmyVvzS28COPgPm7hAdQ3rz7ua8uGIVVVjACUCrHoQr0uuWwOGnRaeQ3s2i8OWUYgrLk7Vm4bBoi96ELb0wOoVM3smebMfoEJNVTGEBRwMvjQ7RaTvvhy27GmbMjE4ikzcXODU6xGSVVFjviQ7QaW98L7b8FpjzgugkMnXv8mQWHWIyijitoZnCHhGdo5O2no+dVMGBi6OTSP/sBrwR+G5wjp4VUVjUi+1bRYfolOlbwYGLsbedCTvsFp1G+m8pBRZWKZeES6MDdMbc7eGI5dhZ92PvvUxl1V5/5clmR4foVfYzLE/2MuDA6Bytts2OsPD12H5H1Y8szJwTnUgGbz71wZdXRgfpRfaFhWZX/TVrLmz/Elj4BmzhG2DhQfCiVuyLld6dhAqrf5pnr94RnaMIe7wee8M7N/7/zLn15d3c7WDOdvXXc7ar16ZEam/1ZAus8jXRQSYq68ICDgX+KDpEEV60CA4+OTqFlGUG9Q2tYo4Zz33RXZeDIoN1UnSAXmRbWJ5sG+AvonOItNyBnqyYHSTZFhZwOPU2AhEZrGOjA0xUzoV1aHQAkY4oZqypsETkoOYk3+xlWVie7IXAy6NziHTEHKCId7VlWVjAn0YHEOmYIq5oci2sIn55Ii1SxJjLtbA0wxIZrtc27/vMWnaF5cl2AfaMziHSMTOBg6JDbEl2hUUhU1ORFsp+7KmwRGSD7MeeCktENjjAk20bHWJzsiosT7YAnc4gEmU68KroEJuT2/EyOklusm7/V3z1fwznZ738z7AlXx3Oz5JhWwTcHB1iPCqstnj6sfozDCO/Gs7PkQhZj8GsLgmBvaMDiHTcPtEBNie3wsq63UU6IOsxqMISkdF2z/nkhmwKy5NNBxZG5xDpuOlkvNMkm8ICdkdvdxbJQbZXOjkVVra/JJGOyXbhPafC0h1CkTxkO3nIqbCy/SWJdEy2YzGnwto9OoCIALBHdIDx5FRYWW+6FOmQbMdiToU1LzqAiAAw25Pltm0PUGGJyNiyHI8qLBEZS5bjUYUlImPJcjxmUViebDb5HXUj0mUqrM3I8pcj0mFZjkkVloiMJcsxqcISkbFkOSZVWCIylizHpApLRMaS5ZjMpbBERLYol8J6NDqAiGwiyzGpwhKRsWQ5JlVYIjKWLMekCktExpLlmFRhichYshyTWRSWVf4U8Fx0DhF5ngprC7L8BYl0VJbjUYUlImPJcjyqsERkLFmORxWWiPy+p6zyLNeUcyqskegAIgJkPBZzKqz7ogOICAA/iw4wnpwKa3V0ABEBMh6LORXWPdEBRARQYU1Itr8kkY75n+gA48mpsO4Dno0OISL5Th6yKSyrfB3wv9E5RDpuHXBvdIjxZFNYjWybXaQj7rPKn4kOMR4VloiMlvUYzK2wdKdQJFa2C+6QX2Fl3e4iHZD1GFRhichoWY/BrArLKl8D/CI6h0hHrQN+EB1ic7IqrMbK6AAiHXW7VZ7txmdQYYnIRtmPPRWWiGyQ/djLrrCs8v8j4ydtRVrqGWBVdIgtya6wGjdGBxDpmP+0yp+IDrEluRZW9lNTkZYpYszlWliaYYkMlwprsqzyh4EfR+cQ6YgngFuiQ0xEloXVKKLxRVpgVc4nNIymwhKRYsZazoV1A/B4dAiRDrgmOsBEZVtYVvljwFXROURa7jar/O7oEBOVbWE1LokOINJyl0YH6EXuhbUSnd4gMijPAVdEh+hF1oVlla8HLo/OIdJS1zVHOhUj68Jq6LJQZDCKuhyEAgrLKv8JcFt0DpGWeQT4t+gQvcq+sBqaZYn0179Y5U9Fh+hVKYV1BXortEg/FTkJKKKwrPK1wLXROURa4n7ge9EhJqOIwmr8c3QAkZa42Cr36BCTUVJhfRso5olckUw9DlwQHWKyiims5pmss6JziBTuq80SS5GKKazGFcB90SFECvU08MXoEFNRVGFZ5c8BZ0fnECnURVb5g9EhpqKowmpcBDwQHUKkMK34x764wmpORix6WisS4HKr/P7oEFNVXGE1KqCoTZsigVpzw6rIwmren/YP0TlECvEtq3x1dIh+KLKwGudTb+AUkc37fHSAfim2sKzyETTLEtmSa6zyH0aH6JdiC6txNvW+KBH5Q08Cp0WH6KcZ0QGmwip/0pP9DQWe61O0X/4Yv2r5YL73E78dzPftps9b5a160Nq8zD2Qm/Bk1wDHROcQychq4BWlvCB1okq/JNzgg9TTXxGpndq2soKWFFbzQNyZ0TlEMnGFVb4iOsQgtKKwGl+kngaLdNkI8KHoEIPSmsJqpr+nRucQCfZ3VvlD0SEGpTWFBdBMg78ZnUMkyH8DX44OMUitKqzGh4BHo0OIDNl6YJlVvi46yCC1rrCa835Oic4hMmRnWeW3RocYtNYVFoBVfhlwYXQOkSG5GTgjOsQwtLKwGh8A7ooOITJga4AT2n4puEFrC8sqfxJYTP2WEJE2cuAkq/yX0UGGpbWFBWCV343Ws6S9vmCVXx8dYphaXVgAVvkl1OfAi7TJd4HTo0MMW+sLq/F+4MfRIUT6ZC0dWrcarROF1RypvBh4IjqLyBRtWLfq5JujOlFYAFb5T4Bl0TlEpugLVvl10SGidKaw4Pn1rM9G5xCZpG8Cn4oOEakVB/j1ypP9E3BydA6RHtwA/Hkbz7jqRadmWKOcAlwdHUJkgm4Hjut6WUFHZ1gAnmwWcD1wSHQWkc34KXCQVa4XB9PhwgLwZPOBm4BXRmcRGcOD1GXVqhdJTEVXLwkBsMofAY4A9AchuXkEOEJltalOFxY8fxzNW6g3kYrk4Gng2Da9ALVfOl9YAFb5T6lnWjr4T6KtA060ym+KDpIjFVbDKr8dOIx624NIhKeAv7TKr4oOkqtOL7qPxZMtor57uGt0FumUR4BjrPKbo4PkTIU1Bk+2M3AdsG90FumEh4C3as1qy3RJOIZmY+nBwKroLNJ691I/uqCymgAV1jis8t8Cbwb+PTqLtNYd1GX1s+ggpVBhbUZzzPJxwDeis0jr3AgcYpX/KjpISVRYW2CVPwe8GzgnOou0xreoHwrVYzQ90qJ7DzzZMuBcYFZ0FimSU//Dt9wqXx8dpkQqrB55sv2BK4E9o7NIUdYCS63ya6ODlEyXhD2yyu8AXk19mJrIRNwMvEplNXWaYU2BJ0vAl4DZ0VkkS+uBs4AzuvjCiEFQYU2RJ9uP+hJxn+gskpWHgSVW+Q3RQdpEl4RTZJXfCRwIXBqdRbKxkvoSUGXVZ5ph9ZEnexdwPjA3OIrEWEf9kpMzdRdwMFRYfebJdqFe1zouOosM1feBZVb5j6KDtJkKa0A82ZHAecAe0VlkoNYCHwcuskqDadBUWAPkyWYDnwQ+hh42bRsHvg58wir/TXSYrlBhDYEn2wu4gHoztZTvB9SXf7dEB+kaFdYQebLF1Ft7XhydRSZlBDgduEDPVcVQYQ2ZJ5sHfJr6Za5zguPIxKwDLqPeA/hgdJguU2EF8WQLgNOAU4Ftg+PI2J4BLgbO1plVeVBhBfNkLwA+AHwQ2CE4jtSeAL4GnNOcPiuZUGFlwpPNBd4HfBjYKThOV41Q3xw5V6+Gz5MKKzOebBbwHupne/TmnuH4NfXDvudZ5b+LDiPjU2FlypPNAE6gLq9DAItN1Ep3UK9RXWiVPx6cRSZAhVUAT7YrsAQ4CVgUHKd0DwCXA5da5XdFh5HeqLAK48leAywFjkeL9BP1OHA1cAmwQhuTy6XCKpQn2wo4krq8jgJmxibKznrqN9NcAlxllT8WnEf6QIXVAp5se+ryOgw4FHhJbKIwa6hLaiXwHav8F8F5pM9UWC3kyfakLq4NnwWxiQZmhPq89BXUJXWnTkxoNxVWy3kyA/alLq7DqO84lvpk/VPAKupyWgHcpj193aLC6hhPNp36TuPezX9Hf71jYLTRRoB7gNXNZ8PXd1vlT0cGk1gqLHlesxb2+0W2EJgPzGs+Uz3X61ng0VGfn7OxmFYDq63yh6b4M6SlVFjSk+bu5LzNfKaxaSFt8tEMSaZChSUixdBrvkSkGCosESmGCktEiqHCEpFiqLBEpBgqLBEphgpLRIqhwhKRYqiwRKQYKiwRKYYKS0SKocISkWKosESkGCosESmGCktEiqHCEpFiqLBEpBgqLBEphgpLRIqhwhKRYqiwRKQYKiwRKYYKS0SKocISkWKosESkGCosESmGCktEiqHCEpFiqLBEpBgqLBEphgpLRIqhwhKRYqiwRKQYKiwRKcb/A6onALNW3WdFAAAAAElFTkSuQmCC"),
 *                      @OA\Property(property="sale_price", type="string", format="text", example="500"),
 *                      @OA\Property(property="retail_price", type="string", format="text", example="400"),
 *                      @OA\Property(property="price", type="string", format="text", example="300"),
 *                      @OA\Property(property="discount", type="string", format="text", example="30"),
 *                      @OA\Property(property="discount_percent", type="string", format="text", example="10"),
 *                      @OA\Property(property="payload", type="string", format="text", example="some"),
 *                      @OA\Property(property="sale_type", type="string", format="text", example="auction"),
 *                      @OA\Property(property="status", type="string", format="text", example="draft"),
 *                      @OA\Property(property="seller_name", type="string", format="text", example="Test Product6"),
 *                      @OA\Property(property="expiration_date", type="string", format="text", example="2021-07-08"),
 *                 ),
 *        ),
 *        @OA\Property(
 *                 property="recent_payouts",
 *                 type="array",
 *                 @OA\Items(
 *                      @OA\Property(property="id", type="string", example="1"),
 *                      @OA\Property(property="user_id", type="string", example="3"),
 *                      @OA\Property(property="seller_id", type="string", example="3"),
 *                      @OA\Property(property="order_date", type="string", example="2021-07-08"),
 *                      @OA\Property(property="delivery_date", type="string", example="2021-07-08"),
 *                      @OA\Property(property="order_notes", type="string", example="notes2"),
 *                      @OA\Property(property="long_desc", type="string", example="long notes"),
 *                      @OA\Property(property="payment_status", type="string", example="pending"),
 *                      @OA\Property(property="payment_error_log", type="string", example="log"),
 *                      @OA\Property(property="subtotal", type="string", example="100.00"),
 *                      @OA\Property(property="shipping_amount", type="string", example="50.00"),
 *                      @OA\Property(property="tax_rate", type="string", example="5.00"),
 *                      @OA\Property(property="tax_amount", type="string", example="10.00"),
 *                      @OA\Property(property="total", type="string", example="165.00"),
 *                      @OA\Property(property="status", type="string", example="sold"),
 *                      @OA\Property(property="created_at", type="string", example="2021-08-13T08:46:50.000000Z"),
 *                      @OA\Property(property="updated_at", type="string", example="2021-08-13T08:46:50.000000Z"),
 *                 ),
 *        ),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="status",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The status must be a number.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

// My saved items //
//add
/**
 * @OA\Post(
 *     path="/api/auth/save-items/add",
 *     operationId="add",
 *     tags={"My saved items"},
 *     summary="add",
 *     description="add",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="add",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="user_id", type="string", format="text", example="3"),
 *       @OA\Property(property="product_id", type="string", format="text", example="1"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="This product has already been added to your favorites!"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="product_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The product id must be a number.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//receive
/**
 * @OA\Post(
 *     path="/api/auth/save-items/receive",
 *     operationId="receive",
 *     tags={"My saved items"},
 *     summary="receive",
 *     description="receive",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="receive",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="user_id", type="string", format="text", example="3"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="id", type="string", example="1"),
 *         @OA\Property(property="user_id", type="string", example="3"),
 *         @OA\Property(property="product_id", type="string", example="1"),
 *         @OA\Property(
 *                 property="product",
 *                 type="array",
 *                 @OA\Items(
 *                    @OA\Property(property="id", type="string", example="1"),
 *                    @OA\Property(property="user_id", type="string", example="2"),
 *                    @OA\Property(property="category_id", type="string", example="3"),
 *                    @OA\Property(property="auction_id", type="string", example="null"),
 *                    @OA\Property(property="sku", type="string", example="65465629090q550"),
 *                    @OA\Property(property="title", type="string", example="Test Product6"),
 *                    @OA\Property(property="short_desc", type="string", example="some some"),
 *                    @OA\Property(property="status", type="string", example="draft"),
 *                    @OA\Property(property="gallery_id", type="string", example="1126485787"),
 *                    @OA\Property(property="feature_item", type="string", example="off"),
 *                    @OA\Property(
 *                      property="gallery",
 *                      type="array",
 *                         @OA\Items(
 *                            @OA\Property(property="id", type="string", example="1"),
 *                            @OA\Property(property="parent_id", type="string", example="1126485787"),
 *                            @OA\Property(property="path", type="string", example="/images/pictures/1628841089_2247.jpg"),
 *                            @OA\Property(property="created_at", type="string", example="2021-08-13T07:51:29.000000Z"),

 *                         ),
 *                    ),
 *        ),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="user_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The user id must be a number.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */

//delete
/**
 * @OA\Post(
 *     path="/api/auth/save-items/delete",
 *     operationId="delete",
 *     tags={"My saved items"},
 *     summary="delete",
 *     description="delete",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="delete",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="user_id", type="string", format="text", example="3"),
 *       @OA\Property(property="product_id", type="string", format="text", example="2"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Successfully removed a product from my saved!"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *          @OA\Property(property="error", type="string", example="validation_error"),
 *          @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="product_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected product id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */


// Terms and Conditions //
/**
 * @OA\Post(
 *     path="/api/auth/get-terms-conditions",
 *     operationId="Terms and Conditions",
 *     tags={"Terms and Conditions"},
 *     summary="Terms and Conditions",
 *     description="Terms and Conditions",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Terms and Conditions",
 *    @OA\JsonContent(
 *       required={"name"},
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="description", type="string", example="description"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Terms and Conditions not found!"),
 *     ),
 *  ))
 * )
 */

// Rating //

//Add Star Rating
/**
 * @OA\Post(
 *     path="/api/auth/rating/add-star-rating",
 *     operationId="Add Star Rating",
 *     tags={"Rating"},
 *     summary="Add Star Rating",
 *     description="Add Star Rating",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Add Star Rating",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="user_id", type="string", format="text", example="3"),
 *       @OA\Property(property="product_id", type="string", format="text", example="3"),
 *       @OA\Property(property="order_id", type="string", format="text", example="9"),
 *       @OA\Property(property="rating", type="string", format="text", example="4.4"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Rating saved successfully!"),
 *         @OA\Property(property="rating", type="string", example="3.20"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="You have already added a rating for this product!!"),
 *         @OA\Property(property="error", type="string", example="validation_error"),
 *         @OA\Property(
 *                property="message2",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="product_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected product id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */


//Add Review
/**
 * @OA\Post(
 *     path="/api/auth/rating/add-review",
 *     operationId="Add Review",
 *     tags={"Rating"},
 *     summary="Add Review",
 *     description="Add Review",
 *     security={{"Authorization":{}}},
 *    @OA\RequestBody(
 *     required=true,
 *     description="Add Review",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="user_id", type="string", format="text", example="3"),
 *       @OA\Property(property="product_id", type="string", format="text", example="3"),
 *       @OA\Property(property="order_id", type="string", format="text", example="9"),
 *       @OA\Property(property="review", type="string", format="text", example="sometext"),
 *    ),
 *  ),
 *  @OA\Response(
 *    response=200,
 *    description="Success",
 *    @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Review successfully saved!"),
 *    )),
 *    @OA\Response(
 *       response=422,
 *       description="Returns when user is not authenticated",
 *       @OA\JsonContent(
 *         @OA\Property(property="error", type="string", example="validation_error"),
 *         @OA\Property(
 *                property="message",
 *                type="array",
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="user_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected user id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *                @OA\Items(
 *                      @OA\Property(
 *                          property="product_id",
 *                          type="array",
 *                          @OA\Items(
 *                              type="array",
 *                              example="The selected product id is invalid.",
 *                              @OA\Items()
 *                          ),
 *                      ),
 *                ),
 *          ),
 *     ),
 *  ))
 * )
 */


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
