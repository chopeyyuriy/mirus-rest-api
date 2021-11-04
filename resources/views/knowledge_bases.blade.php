@extends('layouts.master')

@section('title') Knowledge base List  @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('add_knowledge_base') Add knowledge base @endslot
        @slot('li_1')  @endslot
        @slot('title') Knowledge base / list @endslot
    @endcomponent
    <livewire:knowledge-base-list />
@endsection
