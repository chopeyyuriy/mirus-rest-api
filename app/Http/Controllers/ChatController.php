<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GetStream\StreamChat\Client;
use Illuminate\Support\Str;


class ChatController extends Controller
{
    //
    public function index()
    {
        $client = new Client("8efhbbhd73ft", "aq8paph9u4h9q5tzb9cgybfncn7cccw93969m56eurw6v2wwhada9uudmmkgcsa8");
        $token = $client->createToken('Ali');/* Str::ucfirst(auth()->user()->name) */
        // dd($token);
        // // $channel = $client->Channel("messaging", "travel");
        // // $response = $client->queryUsers(
        // //     [
        // //         'name' => ['$autocomplete' => '1']
        // //     ]
        // // );
        $filter  = ['type' => ['$in' => ['messaging']]];
        $channels = $client->queryChannels($filter);
        // $ch = $channels['channels'][0];
        $ch = $client->Channel('messaging', 'travel');
        // $user = ['id'=>"AwaisSikander"];
        // $res = $ch->sendFile("/var/www/html/laravel/MirusMarketplace/public/stream-chat/files/messageFile_1621947480.pdf","messageFile_1621947480.pdf" , $user);
        // dd($res);
        // ini_set('');
        // dd(public_path('assets/images/users/no_image.png'));
        // $state   = $conversation->create('thierry');
        // $res = @file_get_contents('http://127.0.0.1:8000/assets/images/users/no_image.png');
        // Sending a message from jenny mentioning bob-1 
        // $message = $ch->sendMessage(
        //     [
        //         'text' => "HI",
        //     ],
        //     'awais'
        // );

        // dd($message);
        // $client->updateUser(['id' => 'awais', 'role' => 'admin', 'book' => 'dune']); 
        // $client->updateUser(['id' => 'ali', 'role' => 'admin', 'book' => 'dune']); 
        // $conversation = $client->Channel('messaging', 'awais-ali', ['members'=>['awais', 'ali']]);
        // $state   = $conversation->create('awais');
        // dd($token);
        // dds($channels);
        return view('chat', ['channels' => $channels['channels'],'token'=>$token]);
        # code...
    }
    public function fileMessage(Request $req)
    {
        
        if ($req->file('msgFile')) {
            $file = $req->file('msgFile');
            $fileName = 'messageFile_' . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path('/stream-chat/files/');
            $file->move($filePath, $fileName);
            $user = ['id' => $req->user];
            $client = new Client("8efhbbhd73ft", "aq8paph9u4h9q5tzb9cgybfncn7cccw93969m56eurw6v2wwhada9uudmmkgcsa8");
            $ch = $client->Channel('messaging', $req->channel);
            $fullPath = ($filePath.$fileName);
            sleep(2);
            $res = $ch->sendFile($fullPath, $fileName, $user);
            sleep(2);
            $message = $ch->sendMessage(
                [
                    'text' => $res['file'],
                ],
                $req->user
            );
            sleep(1);
            $message = $ch->sendMessage(
                [
                    'text' => "File uploaded Successfully",
                ],
                $req->user
            );
            return response($res,200);
        }
        
        # code...
    }
}
