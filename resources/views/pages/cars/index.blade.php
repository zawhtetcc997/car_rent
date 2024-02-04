@extends('layouts.sb-admin-2.master')

@section('title', 'Mingalar Car Rental')

@section('content')
<h1 class="mb-3">Car list</h1>

<div class="row justify-content-center">
    <div class="col-md-12">
        <x-car.car-search-bar :route="route('cars.index')" type="index" />

        <a href="{{ route('cars.create') }}" class="btn btn-primary btn-block my-4">Add Car</a>

        @if (auth()->user()->name === 'Administrator')
        <a href="{{ route('cars.trash') }}" class="btn btn-warning btn-block my-4">Car Data Delete</a>
        @endif

        <x-car.car-list :cars="$cars" type="index" />
    </div>
</div>
@endsection

@push('styles')
@include('pages.cars.includes._select2-style')
@endpush

@push('scripts')
@include('pages.cars.includes._select2-script')
@include('pages.cars.includes._jquery-mask-script')
@endpush
