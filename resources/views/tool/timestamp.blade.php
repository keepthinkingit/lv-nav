@extends('layouts.app')

@section('content')
    <div class="container" id="main">
        <div class="jumbotron">
            <h1>Timestamp Converter</h1>
            <p class="big-title">时间戳与国际时转换工具</p>
        </div>

        <div class="row" id="timestamp">
            <div class="col-md-12">
                <timestamp></timestamp>
            </div>

            <div class="jumbotron jumbotron-fluid fixed-bottom">
                <div class="container">
                    <h1>Unix Time</h1>
                    <span class="fs19">Unix time (also known as POSIX time or Epoch time) is a system
                        for describing instants in time, defined as the number of seconds
                        that have elapsed since 00:00:00 Coordinated Universal Time
                        (UTC), Thursday, 1 January 1970, not counting leap seconds. It is
                        used widely in Unix-like and many other operating systems and
                        file formats. Because it does not handle leap seconds, it is
                        neither a linear representation of time nor a true representation
                        of UTC.
                    </span>
                    <hr>
                    <cite title="Wikipedia">
                        <a href="https://zh.wikipedia.org/wiki/UNIX%E6%97%B6%E9%97%B4">Visit Wikipedia</a>
                    </cite>
                </div>
            </div>

        </div>

    </div>
@endsection
