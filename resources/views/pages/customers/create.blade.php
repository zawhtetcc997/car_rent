@extends('layouts.sb-admin-2.master')

@section('title', 'Mingalar Tambah Customer')

@section('content')
<h1>Tambah Customer</h1>

<x-customer.customer-form :route="route('customers.store')" :customer="null" type="create" />
@endsection
