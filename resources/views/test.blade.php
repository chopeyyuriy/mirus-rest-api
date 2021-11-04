@extends('layouts.master')

@section('title') @lang('translation.File_Manager') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Apps @endslot
        @slot('title') File Manager @endslot
    @endcomponent
    <div class="card row">
        <div class="col-12">

        </div>
    </div>
    <!-- end row -->

@endsection
@section('css')
    <style type="text/css">

    </style>
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/js/chat.js') }}"></script>

    <script>
        var channel,client;
        var awais121 = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiMTIxQXdhaXMifQ.ABrpRDLUOYtv9tc2V268SazrKDltRd9RVv9FEr00skY";
        var awais = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiYXdhaXMifQ.n0iSTUmUZEG03La21O4KO1OFXg2aPSIjI_kUgVTfUuI";
        var ali = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiYWxpIn0.rInq7eUPWvO4VCmXnVaCEZ19TWBp6Qn6JXmE09G7xMQ";
        async function hi2() {
            await channel.sendMessage({
                text,
                customField: '123',
            });
        }
        $(document).ready(async function() {

            // console.log(StreamChat);
            client = StreamChat.getInstance("j8hmyb6fef7j");

                await client.connectUser({
                        id: "121Awais",
                    },
                    awais121
                );
            channel = await client.channel("messaging", "travel", {
                name: "Awesome channel about traveling",
            });
            const state = await channel.watch();
            console.log(channel);
            // return channel.watch();
            channel.on('message.new', event => {
                console.log('received a new message', event.message.text);
                console.log(`Now have ${channel.state.messages.length} stored in local state`);
            });
            var text;
            await channel.sendMessage({
                text,
                customField: '123',
            });
        });

    </script>

@endsection
