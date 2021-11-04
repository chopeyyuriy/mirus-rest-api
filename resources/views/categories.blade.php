@extends('layouts.master')

@section('title') Categories List  @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('add_category') Add Category @endslot
        @slot('li_1')  @endslot
        @slot('title') Categories / list @endslot
    @endcomponent
    <livewire:categories-list/>
@endsection
