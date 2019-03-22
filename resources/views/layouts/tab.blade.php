<div class="jumbotron-fluid sticky-top" id="jumbotron">
    <div class="container-fluid">
        <div class="row align-items-end " id="hero">
            <div class="col-md-12" id="category">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item col-md-2"></li>
                    @foreach ($cate as $cat)
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <h1 class="font-weight-bold">{{ $cat->name }}</h1>
                        </a>
                    </li>
                    @endforeach
                    <li class="nav-item col-md-2"></li>
                </ul>
            </div>
        </div>
    </div>
</div>
