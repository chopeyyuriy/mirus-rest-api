@extends('layouts.master')

@section('title') @lang('translation.User_List') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('add') Add User @endslot
        @slot('li_1') Contacts @endslot
        @slot('title') Users List @endslot
    @endcomponent
    <livewire:user-search />
@endsection
