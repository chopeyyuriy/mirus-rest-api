<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ChatGroups;
use App\Models\ChatGroupToUser;
use App\Models\ChatMessages;
use App\Services\ValidateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function getChatLists(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page' => ['required', 'numeric'],
            'limit' => ['required', 'numeric'],
            'user_id' => ['required', 'numeric', 'exists:users,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $limit = $request->limit;
        $user_id = $request->user_id;

        $chats = ChatGroups::select('id', 'name', 'user_from_id', 'user_to_id', 'created_at')
            ->with(['user_from' => function ($user) {
                $user->select('id', 'first_name', 'last_name');
            }, 'user_to' => function ($user) {
                $user->select('id', 'first_name', 'last_name');
            }])
            ->where('user_from_id', $user_id)
            ->orWhere('user_to_id', $user_id)
            ->paginate($limit);

        return response()->json($chats, 200);
    }

    public function getChatMessages(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'chat_id' => ['required', 'numeric', 'exists:chat_groups,id'],
            'page' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $chat_id = $request->chat_id;
        $messages = ChatMessages::where('chat_group_id', $chat_id)->paginate();

        return response()->json($messages, 200);
    }

    public function getMessageStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message_id' => ['required', 'numeric', 'exists:chat_messages,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $message_id = $request->message_id;
        $message = ChatMessages::find($message_id);


        return response()->json(['status' => $message->status], 200);
    }

    public function createChat(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'user_to' => ['required', 'numeric', 'exists:users,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $chat = new ChatGroups();
        $chat->name = $request->name;
        $chat->user_from_id = Auth::id();
        $chat->user_to_id = $request->user_to;

        if ($chat->save()) {

            $chatGroupUser = new ChatGroupToUser();
            $chatGroupUser->chat_group_id = $chat->id;
            $chatGroupUser->user_id = Auth::id();
            $chatGroupUser->save();

            return response()->json(['message' => 'Successfully chat created', 'chat_id' => $chat->id], 200);
        } else {
            return response()->json(['message' => 'Chat not created'], 422);
        }

    }

    public function deleteChat(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'chat_id' => ['required', 'numeric', 'exists:chat_groups,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $chatId = $request->get('chat_id');

        $chatGroupToUser = ChatGroupToUser::where('chat_group_id', $chatId)->delete();
        $chatMessages = ChatMessages::where('chat_group_id', $chatId)->delete();
        $chatGroup = ChatGroups::where('id', $chatId)->delete();

        if ($chatGroupToUser && $chatMessages && $chatGroup) {
            return response()->json(['message' => 'Successfully deleted Chat!'], 200);
        } else {
            return response()->json(['message' => 'Chat not found!'], 422);
        }

    }

    public function sentMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'chat_id' => ['required', 'numeric', 'exists:chat_groups,id'],
            'message' => ['required', 'max:1024']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $chatMessage = new ChatMessages();
        $chatMessage->user_id = $request->user_id;
        $chatMessage->chat_group_id = $request->chat_id;
        $chatMessage->message = $request->message;
        $chatMessage->status = 'new';

        if ($chatMessage->save()) {
            return response()->json(['message' => 'Successfully message create!', 'message_id' => $chatMessage->id], 200);
        }
    }

    public function deleteMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'message_id' => ['required', 'numeric', 'exists:chat_messages,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $id = $request->message_id;
        $user_id = $request->user_id;

        $message = ChatMessages::where('id', $id)->where('user_id', $user_id)->delete();

        if ($message) {
            return response()->json(['message' => 'Successfully message deleted!'], 200);
        }
    }

    public function addParticipantsToChat(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'chat_id' => ['required', 'numeric', 'exists:chat_groups,id'],
            'user_id' => ['required', 'numeric', 'exists:users,id'],
        ]);

        $validationMessage = ValidateService::validationMessage($validator);
        if ($validationMessage) {
            return $validationMessage;
        }

        $item = new ChatGroupToUser();
        $item->chat_group_id = $request->chat_id;
        $item->user_id = $request->user_id;

        if ($item->save()) {
            return response()->json(['message' => 'The participant was created successfully!'], 200);
        }
    }
}
