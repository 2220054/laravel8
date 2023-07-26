@extends('layouts.kadai')

@section('pageTitle', 'kadai08_1')
@section('title', 'EloquentORM参照')

@section('content')

<section>
<form action="{{route('kadai06_1.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="bg-white hover:bg-white p-5 mb-10 rounded-md shadow-md">
        <div class="my-5 px-5 py-2 border-b">
            <label class="block text-gray-500 text-sm uppercase" for="title">title</label>
            <input type="text" name="title" id="title" class="w-full font-bold leading-10" value="">
            @error('title')
                <p class="my-2 text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-5 px-5 py-2 border-b">
            <div class="w-4/12 mr-5">
                <label class="block text-gray-500 text-sm uppercase" for="image">image file</label>
                <input type="file" name="image" id="image" class="w-full h-80 text-xs px-3 py-2 border border-gray-300 rounded-md" value="{{old('image')}}">
                @error('image')
                    <p class="my-2 text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="grow">
                <label class="block text-gray-500 text-sm uppercase" for="body">body</label>
                <textarea name="body" class="w-full h-80 px-3 py-2 resize-none" style="height: 160px;"></textarea>
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
