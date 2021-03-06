@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')

<div class="col-12">
    <h1>Contact Us</h1>
</div>
@if(!session()->has('message'))
    <div class="col-12">
        <form action="{{ route('contact.store') }}" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div class="text-danger">{{ $errors->first('name') }}</div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <div class="text-danger">{{ $errors->first('email') }}</div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control">
                    {{ old('message') }}
                </textarea>
                <div class="text-danger">{{ $errors->first('message') }}</div>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endif
@endsection