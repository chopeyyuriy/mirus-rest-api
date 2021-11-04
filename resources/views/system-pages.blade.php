@extends('layouts.master')

@section('title') System Pages  @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1')  @endslot
        @slot('title') System Pages @endslot
    @endcomponent
    <livewire:system-page />
@endsection
