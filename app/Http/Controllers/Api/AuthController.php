<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SignUpSend;
use App\Models\Phone_number;
use App\Models\User;
use App\Results;
use App\Services\ValidateService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class AuthController extends Controller
{
    public function signUp(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'phone' => ['required', 'string'],
            'phone_type' => ['required', 'string', Rule::in(Phone_number::$phone_type)],
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
        $user->user_status = $request->user_status;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->middle_name = $request->middle_name;
        $user->display_name = $request->display_name;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->race = $request->race;
        $user->role_id = $request->role_id;
        $user->interested_tags = $request->interested_tags;

        if ($request->avatar) {
            $user->avatar = $user->saveAvatar($request->avatar);
        }

        if ($request->rel_status) {
            $user->rel_status = $request->rel_status;
        }

        if ($request->admission_date) {
            $user->admission_date = $request->admission_date;
        }

        $user->save();

        $phone = new Phone_number();
        $phone->user_id = $user->id;
        $phone->number = $request->phone;
        $phone->type = $request->phone_type;
        $phone->save();


        $title = "Hello $user->first_name $user->last_name, you have registered on the Mirus platform, welcome.";
        Mail::to($user->email)->send(new SignUpSend($user, $request->password, $title));

        $credentials = ([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;


        $user = User::with(['phones' => function ($questions) {
            $questions->select('id', 'user_id', 'type', 'number');
        }])->find(Auth::id());

        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            'user' => $user
        ]);

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ]);

        $credentials = ([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }

        $user = User::with(['phones' => function ($questions) {
            $questions->select('id', 'user_id', 'type', 'number');
        }])->find(Auth::id());

        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            'user' => $user
        ]);

    }

    public function logout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function forgot()
    {
        $credentials = request()->validate(['email' => 'required|string|email']);

        Password::sendResetLink($credentials);

        return response()->json(["message" => 'Reset password link sent on your email id.']);
    }


    public function reset(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users,email']
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $password = Str::random(10);

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($password);
        $user->update();

        $title = "Hello $user->first_name  $user->last_name, here is your new password! ";
        Mail::to($user->email)->send(new SignUpSend($user, $password, $title));

        if ($user) {
            return response()->json(["message" => "Email with a new password has already been sent to your inbox"], 200);
        } else {
            return response()->json(['message' => 'User not found!'], 422);
        }

    }

    public function getUserProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
            'phone_type' => ['string', Rule::in(Phone_number::$phone_type)],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }
        $user_id = $request->user_id;

        $user = User::with(['phones' => function ($questions) {
            $questions->select('id', 'user_id', 'type', 'number');
        }])->with(['ratings' => function ($questions) {
            $questions->select('id', 'user_id')
                ->selectRaw('round(sum(rating) / count(rating), 2) as rating, count(rating) as count');
        }])->find($user_id);

        if ($user) {
            $kod = 200;
            $data = $user;
        } else {
            $kod = 422;
            $data = ['message' => 'User not found!'];
        }

        return response()->json($data, $kod);
    }

    public function updateUserProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'email' => ['string', 'email', 'unique:users'],
            'first_name' => ['string'],
            'last_name' => ['string'],
            'role_id' => ['numeric'],
            'phone_id' => ['numeric', 'exists:phone_numbers,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $user = User::find($request->user_id);

        if ($user) {
            $user->updateProfile($user, $request);
            $user->update();

            if ($request->phone_id) {

                $phone = Phone_number::find($request->phone_id);
                $phone->user_id = $request->user_id;
                $phone->number = $request->phone;
                $phone->type = $request->phone_type;
                $phone->update();
            } else {
                $phone = new Phone_number();
                $phone->user_id = $request->user_id;
                $phone->number = $request->phone;
                $phone->type = $request->phone_type;
                $phone->save();
            }

            return response()->json(['message' => 'User update successfully!', 'user_id' => $user->id], 200);

        } else {
            return response()->json(['message' => 'User not update!'], 422);
        }

    }

    public function changeUserType(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'user_type' => ['required', Rule::in(User::$user_type)],
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $user = User::find($request->user_id);
        $user->user_type = $request->user_type;

        if ($user->update()) {
            return response()->json(['message' => 'User type successfully updated!'], 200);
        } else {
            return response()->json(['message' => 'User type not updated!'], 200);
        }
    }
}
