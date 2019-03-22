@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
                    <a class="navbar-brand" href="#">后台管理中心</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">一级分类列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">查看</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">修改</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">删除</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">二级分类列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">查看</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">修改</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">删除</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">三级分类列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">查看</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">修改</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">删除</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-10">
                <h1>欢迎登录管理后台</h1>
                <h2>统计数据</h2>
            </div>
        </div>
    </div>
@endsection
