@extends('layouts.sample')

@section('pageTitle', "sample04")
@section('title', 'sample04')
@section('content')
<form action="/sample04" method="POST">
    @csrf
    <div>
        <label for="user_name">名前</label>
        <input type="text" id = "user_name" name="user_name" value="{{ old('user_name') }}" placeholder="ECC 太郎">
        @error('user_name')
        <p>{{ $message }}</p>
        @enderror

    </div>
    <div>
        <label for="email">メールアドレス</label>
        <input type="email" id = "email" name="email" value="{{ old('email') }}" placeholder="example@ecc.com">
        @error('email')
        <p>{{ $message }}</p>
        @enderror
    </div>
    <button type="submit">送信</button>
    <p>{{ $result['user_name'] }}</p>
    <p>{{ $result['email'] }}</p>
</form>
@endsection

