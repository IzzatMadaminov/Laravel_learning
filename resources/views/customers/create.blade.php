@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
    <div class="col-12">
        <h1>Add New Customer</h1>
    </div>
    <div class="col-12">
        <form action="/customers" method="POST">
        @include('customers.form')
            <button type="submit" class="btn btn-primary">Add Customer</button>
            @csrf
        </form>
    </div>
@endsection