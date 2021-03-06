@extends('layouts.app')
@section('title')
    Customer List
@endsection
@section('content')
    <div class="col-12">
        <h1>Customer List</h1>
        <p><a href="{{ route('customers.create') }}">Add New Customer</a></p>
    </div>
    

    @foreach($customers as $customer)
        <div class="row">
            <div class="col-2">
                {{ $customer->id }}
            </div>
            
            <div class="col-4">
                <a href="{{ route('customers.show', ['customer' => $customer]) }}">{{ $customer->name }}</a>
            </div>
            
            <div class="col-4">
                {{ $customer->email }}
            </div>

            <div class="col-2">
                {{ $customer->active }}
            </div>
        </div>
    @endforeach
@endsection