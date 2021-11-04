@extends('layouts.master')

@section('title') Reports List  @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1')  @endslot
        @slot('title') Reports / list @endslot
    @endcomponent
    <livewire:reports-list/>
@endsection
