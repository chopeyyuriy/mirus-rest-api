@extends('layouts.master')

@section('title') Product List  @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('add_p') Add Product @endslot
        @slot('li_1')  @endslot
        @slot('title') products / list @endslot
    @endcomponent
    <livewire:product-list />
@endsection
