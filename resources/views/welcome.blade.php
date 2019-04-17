@extends('layouts.app')

{{--@include('layouts.nav')--}}

@section('content')
    @include('layouts.tab')
    <welcome :types="{{ $types }}" :sites="{{ $sites }}"></welcome>


@endsection
