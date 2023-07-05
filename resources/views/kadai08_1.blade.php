@extends('layouts.kadai')

@section('pageTitle', 'kadai08_1')
@section('title', 'EloquentORM参照')

@section('content')

<section>
<form action="{{route('kadai06_1.store')}}" method="POST">
    @csrf
    <div class="bg-white hover:bg-white p-5 mb-10 rounded-md shadow-md">
        <div class="my-5 px-5 py-2 border-b">
            <label class="block text-gray-500 text-sm uppercase" for="title">title</label>
            <input type="text" name="title" id="title" class="w-full font-bold leading-10" value="">
            @error('title')
                <p class="my-2 text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-between py-3">
            <div class="grow">
                <label class="block text-gray-500 text-sm uppercase" for="body">body</label>
                <textarea name="body" class="w-full h-80 px-3 py-2 resize-none"></textarea>
                @error('body')
                    <p class="my-2 text-red-500">{{ $message }}</p>
                @enderror
            </div>
            </div>
        </div>
        <div class="flex justify-end">
        <a href="{{route('kadai06_1.index')}}" class="block w-16 text-white text-center bg-gray-500 hover:bg-gray-400 mr-5 px-3 py-2 rounded-md">戻る</a>
        <button type="submit" class="block w-16 text-white text-center bg-gray-500 hover:bg-gray-400 mr-5 px-3 py-2 rounded-md">投稿</button>
    </div>
</form>
</section>
@endsection
