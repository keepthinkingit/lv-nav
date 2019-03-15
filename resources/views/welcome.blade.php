@extends('layouts.app')

{{--@include('layouts.nav')--}}

@section('content')
    @include('layouts.tab')
    <div class="container-fluid">
        <div class="row flex-xl-nowrap">
            <div class="col-md-1"></div>
            <ul class="nav nav-pills flex-column col-md-2 jumbotron " id="left-side">
                @foreach ($type as $typ)
                    {{--@if ($typ->category_id == 8)--}}
                    <li class="nav-item"><a class="nav-link active" href="#website1">{{$typ->name}}</a></li>
                    {{--@endif--}}
                @endforeach
                <div class="tile like">
                    <i class="fas fa-thumbs-up"></i>
                </div>
            </ul>

            <div class="col-md-8 " id="right-side">
                @foreach ($type as $typ)
                    <button type="button" class="btn btn-lg btn-secondary btn-block">
                        {{ $typ->name }}
                    </button>
                    <div class="row">
                        @foreach ($site as $sit)
                            @if ($sit->type_id == $typ->id )
                                <div class="col-4 col-md-3">
                                    <div class="card border-success">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $sit->name }}</h5>
                                            <p class="card-text">{{ $sit->intro }} </p>
                                            <a href="{{ $sit->url }}" class="btn btn-primary">Go</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
