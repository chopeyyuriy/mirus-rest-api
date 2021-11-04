<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GetStream\StreamChat\Client;
use App\Notifications\TestNotification;
use Notification;

class testController extends Controller
{
    //
    public function testget()
    {
        $offerData = [
            'name' => 'BOGO',
            'body' => 'You received an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];

        dd(auth()->user()->notifications);
        Notification::send(auth()->user(), new TestNotification($offerData));

        dd("Job Done");


        // $client = new Client("j8hmyb6fef7j", "5cqexvhv5rm8hc3g3dyqeqe824stmey5n2cq7k67tu4sm9qzvg4zca9wtdab68js");
        // $token = $client->createToken("ali");
        // // $channel = $client->Channel("messaging", "travel");
        // // $response = $client->queryUsers(
        // //     [
        // //         'name' => ['$autocomplete' => '1']
        // //     ]
        // // );
        // $filter  = ['type' => ['$in' => ['messaging'] ]];
        // $channels = $client->queryChannels($filter);
        // dd($channels);
        // $client->updateUser(['id' => 'awais', 'role' => 'admin', 'book' => 'dune']); 
        // $client->updateUser(['id' => 'ali', 'role' => 'admin', 'book' => 'dune']); 
        // $conversation = $client->Channel('messaging', 'awais-ali', ['members'=>['awais', 'ali']]);
        // $state   = $conversation->create('awais');
        // dd($token);
        // return view('test');
    }
    public function testPost(Request $req)
    {
        dd($req->all());
    }
}
