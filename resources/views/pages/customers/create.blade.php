@extends('layouts.sb-admin-2.master')

@section('title', 'Mingalar Add Customer')

@section('content')
<h1>Add Customer</h1>

<x-customer.customer-form :route="route('customers.store')" :customer="null" type="create" />
@endsection
