@extends('layouts.sb-admin-2.master')

@section('title', 'Create Customer')

@section('content')
<h1>Create Customer</h1>

<x-customer.customer-form :route="route('customers.store')" :customer="null" type="create" />
@endsection
