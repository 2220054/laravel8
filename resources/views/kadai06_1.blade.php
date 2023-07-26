@extends('layouts.kadai')

@section('pageTitle', 'kadai06_1')
@section('title', 'EloquentORM参照')

@section('content')

<div class="flex justify-end mb-10">
    <a href=" kadai06_1/create" class="text-white text-center leading-10 bg-gray-500 px-10 hover:bg-gray-400 rounded-md">新規投稿</a>
</div>

@foreach ($articles as $article)
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-10">
            <article class="bg-white hover:bg-white rounded-md shadow-md hover:shadow-lg transition-shadow">
                <a href="{{route("kadai06_1.show", $article->id)}}" class="block w-full h-full">
                    <figure class="h-48 overflow-hidden">
                        @foreach ($article ->thumbnails as $thumbnail)
                            @if($loop->first)
                            <img src="{{asset("storage/images/{$thumbnail->name}")}}" class="w-full h-full object-cover object-top">
                            @endif
                        @endforeach
                    </figure>
                    <h3>{{$article->title}}</h3>
                    <p> <time datatime ="{{$article->created_at}}">{{$article->created_at}}</time></p>
                </a>
            </article>
    </section>
@endforeach
{{ $articles -> links()}}


@endsection
