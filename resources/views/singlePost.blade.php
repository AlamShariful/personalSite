@extends('blogLayout')



@section('SingleblogPost')
    @foreach($postBody as $postBodys)
        @section('pagetitle')
            {{$postBodys['title']}}
        @endsection


        <div class="no-margin col-lg-12 col-offset-6 centered" style="text-align:left;">
            <div class="font-size-0">
                <p class="h1" id="titleId">{{$postBodys['title']}}</p>
                <p class="text-justify">
                    <span class="glyphicon glyphicon-time" style="color:#7c1a06"></span>
                    Posted on {{$postBodys["updated_at"]}}
                </p>
            </div>
            <div><span>{{strip_tags($postBodys['body'])}} </span></div>

        </div>

    @endforeach

    <script>


            document.title=$('#titleId').val();

    </script>

@endsection