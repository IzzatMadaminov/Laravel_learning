@extends('layouts.app')
@section('title')
    Contact Us
@endsection
@section('content')
<form action="">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') ?? $customer->name }}" class="form-control">
            {{ $errors->first('name') }}
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') ?? $customer->email }}" class="form-control">
            {{ $errors->first('email') }}
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control">

        </textarea>
    </div>
</form>
@endsection