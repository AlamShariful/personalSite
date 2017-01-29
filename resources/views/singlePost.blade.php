@extends('blogLayout')

@section('SingleblogPost')
    @foreach($postBody as $postBodys)


        <div class="no-margin" style="text-align:center">
            <div class="voyager-font"><p class="h1">{{$postBodys['title']}} </p></div>
            <div><span>{{strip_tags($postBodys['body'])}} </span></div>

        </div>

    @endforeach

@endsection