@extends('layouts.sb-admin-2.master')

@section('title', 'Mingalar Add Car')

@section('content')
<h1>Add Car</h1>

<x-car.car-form :route="route('cars.store')" :car="null" type="create" />
@endsection

@push('scripts')
@include('pages.cars.includes._jquery-mask-script')
@endpush
