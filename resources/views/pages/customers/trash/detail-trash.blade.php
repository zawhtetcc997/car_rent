@extends('layouts.sb-admin-2.master')

@section('title', 'Mingalar Detail Customer')

@section('content')
<div class="row">
    <div class="col-md-6 text-left">
        <h1>Detail Customer Delete</h1>

    </div>
    <div class="col-md-6 text-right">
        <a href="{{ route('customers.trash') }}" class="btn btn-dark">Return</a>
    </div>
</div>

<x-customer.customer-detail :customer="$customer" type="trash" />
@endsection
