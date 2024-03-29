@extends('layouts.sb-admin-2.master')

@section('title', 'Mingalar Detail Transactions')

@section('content')
<div class="row">
    <div class="col-md-6 text-left">
        <h1>Detail Transaction</h1>

    </div>
    <div class="col-md-6 text-right">
        <a href="{{ route('transactions.index') }}" class="btn btn-dark">Return</a>
    </div>
</div>

<x-transaction.transaction-detail :transaction="$transaction" type="show" />
@endsection
