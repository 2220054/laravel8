@extends( 'layouts.kadai' )
@section( 'pageTitle', 'kadai03_1' )
@section('title','BLADEテンプレート')
@section( 'content' )

<section>
    <h3 class="text-3xl font-bold py-5 mb-5 border-b-2 border-black">カレッジ</h3>
    @foreach ($collages as $collage)
        <section class="p-5">
                <h4 class="text-xl font-bold text-pink-600 mb-2">
                <a href={{$collage['url']}}>{{$collage['name']}}</a>
                </h4>
                @foreach ($collage['course'] as $course)
                    <ul>
                    <li class="mb-2">{{$course}}</li>
                    </ul>
                @endforeach
        </section>
    @endforeach
</section>

@endsection
