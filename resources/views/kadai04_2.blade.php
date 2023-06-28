@extends('layouts.kadai')

@section('pageTitle', "kadai04_2")
@section('title', 'データ送信')

@section('content')
<section>

    <h3 class="text-xl border-b-2 border-sky-400 pb-2 mb-10">質問の投稿</h3>

    <div class="flex justify-between flex-col lg:flex-row items-stretch mb-5">
        <div class="flex flex-col w-full lg:w-6/12 mr-5">
            <div class="flex flex-col w-full mb-5">
                <label class="text-gray-400 text-sm">名前</label>
                <p class="w-full h-10 px-3 py-1 text-lg bg-white border-2 border-gray-200 rounded-md">{{ $result['name'] }}</p>
            </div>
            <div class="flex flex-col w-full mb-5">
                <label class="text-gray-400 text-sm">学籍番号</label>
                <p class="w-full h-10 px-3 py-1 text-lg bg-white border-2 border-gray-200 rounded-md">{{ $result['student_id'] }}</p>
            </div>
            <div class="flex flex-col w-full mb-5">
                <label class="text-gray-400 text-sm">メールアドレス</label>
                <p class="w-full h-10 px-3 py-1 text-lg bg-white border-2 border-gray-200 rounded-md">{{ $result['email'] }}</p>
            </div>
            <div class="flex flex-col w-full mb-5">
                <label class="text-gray-400 text-sm">コース</label>
                <p class="w-full h-10 px-3 py-1 text-lg bg-white border-2 border-gray-200 rounded-md">{{ $result['course'] }}</p>
            </div>
        </div>
        <div class="flex flex-col items-stretch flex-grow">
            <label class="text-gray-400 text-sm">メッセージ</label>
            <p class="w-full h-40 lg:h-full px-2 py-2 text-lg bg-white border-2 border-gray-200 rounded-md">{{ $result['note'] }}</p>
        </div>
    </div>
    <div class="flex justify-end">
        <a class="text-white text-center leading-10 bg-gray-500 px-10 hover:bg-gray-400 rounded-md">戻る</a>
    </div>

</section>
@endsection
