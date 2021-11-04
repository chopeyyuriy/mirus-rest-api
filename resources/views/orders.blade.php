@extends('layouts.master')

@section('title') Orders List  @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('add_order') Add Order @endslot
        @slot('li_1')  @endslot
        @slot('title') Orders / list @endslot
    @endcomponent
    <livewire:orders-list />
@endsection
