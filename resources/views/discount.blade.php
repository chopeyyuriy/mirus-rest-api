@extends('layouts.master')

@section('title') Coupons List  @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('addLink') <a href="{{route('discountCreate')}}" class="px-3 py-2 text-light rounded bg-primary">Add Coupon</a> @endslot
        @slot('li_1')  @endslot
        @slot('title') Discount / Coupon @endslot
    @endcomponent
    <livewire:discount-list />
@endsection
