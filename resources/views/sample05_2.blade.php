@extends('layouts.kadai')

@section('pageTitle', 'sample05_1')
@section('title', 'ファイルのアップロード')

@section('content')
    <h3>アップロードされたファイル</h3>
    <p>{{ asset("storage/{$result['path']}") }}</p>

    <img src={{ asset("storage/{$result['path']}") }}>

    <p class = "w-full h-10 px-3 py-1 text-lg bg-white border-2 border-gray-200 rounded-md">{{$result['name']}}</p>
    <a class = "w-full h-10 px-3 py-1 text-lg bg-white border-2 border-gray-200 rounded-md" href = "{{ route('sample05_1') }}">戻る</a>
@endsection
