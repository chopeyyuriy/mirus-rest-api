@extends('layouts.master')

@section('title') @lang('translation.Chat') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Messages @endslot
        @slot('title') Chat @endslot
    @endcomponent

    <div class="d-lg-flex">
        <div class="chat-leftsidebar me-lg-4">
            <div class="">
                <div class="py-4 border-bottom">
                    <div class="media">
                        <div class="align-self-center me-3">
                            <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/no_image.png') }}"
                                alt="" class="avatar-xs rounded-circle">
                        </div>
                        <div class="media-body">
                            <h5 class="font-size-15 mt-0 mb-1">{{ Str::ucfirst(Auth::user()->name) }}</h5>
                            <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active
                            </p>
                        </div>

                        <div>
                            <div class="dropdown chat-noti-dropdown active">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-bell bx-tada"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="search-box app-search d-none d-lg-block chat-search-box py-4">
                    <div class="position-relative">
                        <input type="text" class="form-control bg-white" id="srch_grp_input" placeholder="Search...">
                        <span onclick="searchGroup()">
                            <i class="bx bx-search-alt "></i>
                        </span>
                        {{-- <button class="btn btn-primary rounded-pill my-2" type="button" onclick="searchGroup()">
                            Search Group
                        </button> --}}
                    </div>
                </div>

                <div class="chat-leftsidebar-nav">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                <span class="d-none d-sm-block">Display Names</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#groups" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="bx bx-group font-size-20 d-sm-none"></i>
                                <span class="d-none d-sm-block">Last updated on excerpts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contacts" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                                <span class="d-none d-sm-block">Actions</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content py-4">
                        <div class="tab-pane show active" id="chat">
                            <div>
                                <h5 class="font-size-14 mb-3">Recent</h5>
                                <ul class="list-unstyled chat-list" id="chat_group" data-simplebar
                                    style="max-height: 410px;">
                                    @foreach ($channels as $ch)
                                        <li class="channel_name"
                                            onclick="renderMsgs(event,false,'{{ $ch['channel']['id'] }}')">
                                            <a href="#">
                                                <div class="media">
                                                    <div class="align-self-center me-3">
                                                        <i class="mdi mdi-circle font-size-10"></i>
                                                    </div>
                                                    <div class="align-self-center me-3">
                                                        <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}"
                                                            class="rounded-circle avatar-xs" alt="">
                                                    </div>

                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">
                                                            {{ $ch['channel']['id'] }}</h5>
                                                        <span class="text-truncate mb-0">created by
                                                            {{ $ch['channel']['created_by']['id'] }} <span
                                                                class="font-size-11 float-end ">
                                                                {{ gmdate('d/m/y', strtotime($ch['channel']['created_by']['created_at'])) }}</span></span>
                                                    </div>
                                                    {{-- <div class="font-size-11">05 min</div> --}}
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach

                                    {{-- <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="align-self-center me-3">
                                                    <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}"
                                                        class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Adam Miller</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="font-size-11">12 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="avatar-xs align-self-center me-3">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                        K
                                                    </span>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="font-size-11">24 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-warning font-size-10"></i>
                                                </div>
                                                <div class="align-self-center me-3">
                                                    <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}"
                                                        class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Jose Vickery</h5>
                                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                                </div>
                                                <div class="font-size-11">1 hr</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle font-size-10"></i>
                                                </div>

                                                <div class="avatar-xs align-self-center me-3">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                        M
                                                    </span>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Mitchel Givens</h5>
                                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                </div>
                                                <div class="font-size-11">3 hrs</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="align-self-center me-3">
                                                    <img src="{{ URL::asset('/assets/images/users/avatar-6.jpg') }}"
                                                        class="rounded-circle avatar-xs" alt="">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Stephen Hadley</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="font-size-11">5hrs</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="media">
                                                <div class="align-self-center me-3">
                                                    <i class="mdi mdi-circle text-success font-size-10"></i>
                                                </div>
                                                <div class="avatar-xs align-self-center me-3">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                        K
                                                    </span>
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="font-size-11">24 min</div>
                                            </div>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane" id="groups">
                            <h5 class="font-size-14 mb-3">Groups</h5>
                            <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                    G
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">General</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                    R
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Reporting</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                    M
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Meeting</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                    A
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Project A</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="media align-items-center">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                                    B
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <h5 class="font-size-14 mb-0">Project B</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="contacts">
                            <h5 class="font-size-14 mb-3">Contacts</h5>

                            <div data-simplebar style="max-height: 410px;">
                                <div>
                                    <div class="avatar-xs mb-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                            A
                                        </span>
                                    </div>

                                    <ul class="list-unstyled chat-list">
                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Adam Miller</h5>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Alfonso Fisher</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <div class="avatar-xs mb-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                            B
                                        </span>
                                    </div>

                                    <ul class="list-unstyled chat-list">
                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Bonnie Harney</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <div class="avatar-xs mb-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                            C
                                        </span>
                                    </div>

                                    <ul class="list-unstyled chat-list">
                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Charles Brown</h5>
                                            </a>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Carmella Jones</h5>
                                            </a>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Carrie Williams</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <div class="avatar-xs mb-3">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary">
                                            D
                                        </span>
                                    </div>

                                    <ul class="list-unstyled chat-list">
                                        <li>
                                            <a href="#">
                                                <h5 class="font-size-14 mb-0">Dolores Minter</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="w-100 user-chat">
            <div class="card">
                <div class="p-4 border-bottom ">
                    <div class="row">
                        <div class="col-md-4 col-9">
                            <h5 class="font-size-15 mb-1" id="channel_id_h5"></h5>
                            <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active
                                now</p>
                        </div>
                        <div class="col-md-8 col-3">
                            <ul class="list-inline user-chat-nav text-end mb-0">
                                <li class="list-inline-item d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" onclick="hideDropdown()">
                                            <i class="bx bx-search-alt-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md"
                                            id="msg_srch_dropdown">
                                            <div class="p-3">
                                                <div class="form-group m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="msg_srch_inpt"
                                                            placeholder="Search ..." aria-label="Recipient's username">

                                                        <button class="btn btn-primary" type="button"
                                                            onclick="searchMessage()">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div id="message_search">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li class="list-inline-item  d-none d-sm-inline-block">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cog"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">View Profile</a>
                                            <a class="dropdown-item" href="#">Clear chat</a>
                                            <a class="dropdown-item" href="#">Muted</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else</a>
                                        </div>
                                    </div>
                                </li> --}}

                            </ul>
                        </div>
                    </div>
                </div>


                <div>
                    <div class="chat-conversation p-3" id="chat_messages">
                        <ul class="list-unstyled mb-0" data-simplebar style="max-height: 486px;">
                            <li>
                                <div class="chat-day-title">
                                    <span class="title">Today</span>
                                </div>
                            </li>
                            <li>
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Steven Franklin</div>
                                        <p>
                                            Hello!
                                        </p>
                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:00
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li class="right">
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Henry Wells</div>
                                        <p>
                                            Hi, How are you? What about our next meeting?
                                        </p>

                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:02
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Steven Franklin</div>
                                        <p>
                                            Yeah everything is fine
                                        </p>

                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li class="last-chat">
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Steven Franklin</div>
                                        <p>& Next meeting tomorrow 10.00AM</p>
                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li class=" right">
                                <div class="conversation-list">
                                    <div class="dropdown">

                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">Henry Wells</div>
                                        <p>
                                            Wow that's great
                                        </p>

                                        <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:07
                                        </p>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="p-3 chat-input-section">
                        <div class="row">
                            <div class="col">
                                <div class="position-relative">
                                    <input type="text" class="form-control chat-input" id="input_msg"
                                        placeholder="Enter Message...">
                                    <div class="chat-input-links" id="tooltip-container">
                                        <ul class="list-inline mb-0">
                                            {{-- <li class="list-inline-item"><a href="#" title="Emoji"><i
                                                        class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                            <li class="list-inline-item"><a href="#" title="Images"><i
                                                        class="mdi mdi-file-image-outline"></i></a></li> --}}
                                            <li class="list-inline-item">
                                                <input type="file" name="chatFile" style="display: none" id="chatFile"
                                                    onchange="ChatfileAdded()">
                                                <label for="chatFile" role="button">
                                                    <i class="mdi mdi-file-document-outline"></i>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="button" onclick="sendMsg()"
                                    class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span
                                        class="d-none d-sm-inline-block me-2">Send</span> <i
                                        class="mdi mdi-send"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>
        var channel, client;
        var todayDate = new moment();
        var OldchatDateToCompare = new moment('12/10/2010/');
        var chatDateToCompare = new moment();
        var fileAddedInChat = false;
        var authClient = "Ali";/* {{ Str::ucfirst(auth()->user()->name) }} */
        var authClientToken = "{{ $token }}";
        var csrf = "{{ csrf_token() }}";
        $(document).ready(async function() {
            client = initClient();
            connectClient(authClient, authClientToken)
            setTimeout(() => {
                $('.channel_name')[0].click();
            }, 1000)

        });

        async function renderMsgs(event, skip = false, channelId) {
            if (!skip) {
                var targetElement = event.target;
                var parentLi = targetElement.closest('li');
                toggleClass(parentLi);
            }
            var filter = {
                type: 'messaging',
                id: {
                    $in: [channelId]
                }
            };
            var ch = await getChannels(filter)
            renderHtmlInDiv(ch[0]);
            channel = await create_and_get_channel('messaging', ch[0].id)
            watchChannel();
        }

        function renderHtmlInDiv(ch) {
            var div_id = $('#chat_messages');
            var msgs = ch.state.messages;
            $('#channel_id_h5').html(ch.id);
            var html = `<ul class="list-unstyled mb-0" data-simplebar style="max-height: 486px;">`;
            var msg_user_id;
            for (var i = 0; i < msgs.length; i++) {
                var time = msgs[i].created_at;
                var timeToShow = '';
                var dateHeading = false;
                var apiDate = new moment(time);
                /* TIME LOGIC */
                if (getTimeCompare(todayDate, apiDate)) {
                    timeToShow = getTimeRelative(time)
                    dateHeading = true;
                } else {
                    timeToShow = getHourMinutes(new moment(time));
                    dateHeading = false;
                }
                /* DATE HEAD LOGIC */
                if (!getTimeCompare(OldchatDateToCompare, apiDate)) {
                    html += `<li>
                                        <div class="chat-day-title">
                                            <span class="title">${(dateHeading == true ? "Today" : getMonthYear(apiDate))}</span>
                                        </div>
                                    </li>`;
                }
                setOldChatDay(time);
                html += `<li ${msgs[i].user.id != "{{ Str::ucfirst(auth()->user()->name) }}" ?'class="right"':''}>
                                        <div class="conversation-list">
                                            <div class="dropdown">

                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </a>
                                            </div>
                                            <div class="ctext-wrap">
                                                <div class="conversation-name">${msgs[i].user.id}</div>`;
                if(msgs[i].text.indexOf("https://stream-chat-us-east-c4.imgix.net") == -1){                                
                html+=                         `<p class="chat-text">
                                                    ${msgs[i].text}
                                                </p>`
                                            }
                else{
                html+=                          `<p class="chat-text">
                                                    <a href="${msgs[i].text}">Attachment:${msgs[i].text.substring(
                                                        msgs[i].text.lastIndexOf("?dl=") + 4, 
                                                        msgs[i].text.lastIndexOf("&s=")
                                                    )}</a>
                                                 </p>
                                                `;
                }                                
                html+=                          `<p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i>${timeToShow}
                                                </p>
                                            </div>

                                        </div>
                                    </li>`;
                // msg_user_id = msgs[i].user.id;
            }
            html += `</ul>`;
            $(div_id).html(html);
            var allindex = $(".conversation-list:last-child");
            var indexoffset = allindex.last().offset().top;
            setTimeout(() => {
                gotoSelectMsg('', indexoffset);
            }, 500)
        }

        function toggleClass(dom) {
            $('.channel_name').removeClass('active');
            $(dom).addClass('active');
        }

        function initClient() {
            return StreamChat.getInstance("8efhbbhd73ft");
        }
        async function connectClient(id, token) {
            await client.connectUser({
                    id: id,
                },
                token
            );
        }
        async function disconnectClient() {
            await client.disconnectUser()
        }
        async function sendMsg() {
            if (fileAddedInChat) {
                var fd = new FormData();
                fd.append('_token', csrf);
                fd.append('msgFile', $('#chatFile')[0].files[0]);
                fd.append('user', authClient);
                fd.append('channel', channel.id);
                $.ajax({
                    type: "post",
                    url: "{{ route('fileMessage') }}",
                    data: fd,
                    processData: false,
                    contentType: false,
                    success: async function(res) {
                        fileAddedInChat = false;
                    },
                    error: function(err) {
                        console.log(err)
                    }
                });
            }
            var obj = {
                text: $('#input_msg').val()
            }
            if($('#input_msg').val() != '' && $('#input_msg').val() != " "){
                var status = await channel.sendMessage(obj);
                if (status) {
                    $('#input_msg').val("")
                }
            }
        }
        async function create_and_get_channel(type = "messaging", id, obj = {}) {
            ch = await client.channel(type, id, obj);
            return ch;
        }
        async function watchChannel() {
            await channel.watch();
            channel.on('message.new', event => {
                // console.log('received a new message', event.message.text);
                // console.log(`Now have ${channel.state.messages.length} stored in local state`);
                renderHtmlInDiv(channel);

            });
        }
        async function getChannels(filter, sort = [], obj = {
            watch: true,
            state: true
        }) {
            // const filter = { type: 'messaging', members: { $in: ['thierry'] } }; 
            // onst sort = [{ last_message_at: -1 }];            
            var chs = await client.queryChannels(filter, sort, obj);
            return chs;
        }

        function setOldChatDay(val) {
            OldchatDateToCompare = new moment(val);
        }

        function getTimeCompare(val1, val2) {
            if (val1.startOf('day').isSame(val2.startOf('day'))) {
                return true;
            }
            return false;
        }

        function getHourMinutes(val) {
            return val.format('HH : MM');
        }

        function getMonthYear(val) {
            return val.format('DD/MM/YYYY');
        }

        function getMMDDYY(val) {
            return val.format('DD/MM/YY');
        }

        function getTimeRelative(val) {
            var timeAgo = moment(val).fromNow()
            return timeAgo;
        }

        function searchMessage() {
            var txt = $('#msg_srch_inpt').val();
            var list = $('.chat-text:contains("' + txt + '")');
            var html = '';
            $.each(list, function(ind, valOfEle) {

                html +=
                    `<p data-id='${$(valOfEle).closest('.conversation-list').offset().top}' onclick="gotoSelectMsg(event)" class="my-2 d-inline-block text-truncate w-100" role="button">` +
                    $(valOfEle).html() + "</p>"
            });
            $('#message_search').html(html);
            $('#msg_srch_dropdown').show();
        }

        function hideDropdown() {
            $('#msg_srch_dropdown').toggle();
        }

        function gotoSelectMsg(event, val = 0) {
            var offsetVal = val;
            if (val == 0) {
                offsetVal = $(event.target).data('id');
            }
            $('.simplebar-content-wrapper').animate({
                scrollTop: offsetVal
            }, 0);
            console.log(offsetVal);
            $('#msg_srch_dropdown').hide();
        }
        async function searchGroup() {
            var val = $('#srch_grp_input').val();
            var grp_div = $('#chat_group');
            var filter = {
                type: 'messaging',
                id: {
                    $in: [val]
                }
            };
            if (val == "" || val == " ") {
                filter = {
                    type: 'messaging'
                };
            }
            var ch = await getChannels(filter)
            var html = "";
            $.each(ch, function(ind, valE) {
                html += `<li class="channel_name" onclick="renderMsgs(event,false,'${valE.id}')">
                                    <a href="#">
                                        <div class="media">
                                            <div class="align-self-center me-3">
                                                <i class="mdi mdi-circle font-size-10"></i>
                                            </div>
                                            <div class="align-self-center me-3">
                                                <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}"
                                                    class="rounded-circle avatar-xs" alt="">
                                            </div>

                                            <div class="media-body overflow-hidden">
                                                <h5 class="text-truncate font-size-14 mb-1">
                                                    ${valE.id}</h5>
                                                <span class="text-truncate mb-0">created by
                                                    ${valE.data.created_by.id}  <span class="font-size-11 float-end ">
                                                        ${getMMDDYY(new moment(valE.data.created_at))}</span></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>`;
            });
            $(grp_div).html(html)

        }

        function ChatfileAdded() {
            fileAddedInChat = true;
        }

    </script>

@endsection
