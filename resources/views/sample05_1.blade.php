@extends('layouts.kadai')

@section('pageTitle', 'sample05_1')
@section('title', 'ファイルのアップロード')

@section('content')
    {{-- <form action="sample05_1" method="POST" enctype="multipart/form-data">
        @csrf
        <p><input type="file" name="image_file" value=""></p>
        <p><button type="submit">アップロード</button></p>
    </form> --}}
    <form action="kadai05_1" method="POST" enctype="multipart/form-data">
        @csrf
        <p><input type="file" name="image_file" value="{{old('image_file')}}"></p>
        @error('image_file')
            <p class = "text-xs text-pink-600">{{$message}}</p>
        @enderror
        <br>
        <p><button type="submit" class = "text-white text-center leading-10 bg-pink-600 px-10 hover:bg-pink-500 rounded-md">アップロード</button></p>
    </form>
@endsection
