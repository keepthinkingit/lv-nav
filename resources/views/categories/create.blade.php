@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <div class="card ">

                <div class="card-body">
                    <h2 class="">
                        <i class="far fa-edit"></i>
                        新建一级分类
                    </h2>
                    <hr>

                    <form action="{{ route('categories.store') }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        {{--@include('shared._error')--}}

                        <div class="form-group mr-2">
                            <table class="table table-striped table-hover">
                                <caption>* 现有一级分类与顺序值</caption>
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">分类名称</th>
                                    <th scope="col">分类顺序(值越小越靠前)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($cates as $cate)
                                    <tr>
                                        <th scope="row">{{ $loop->index+1 }}</th>
                                        <td>{{ $cate->name }}</td>
                                        <td>{{ $cate->order }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>



                        <div class="form-group">
                            <input class="form-control" type="text" name="name"
                                   value="{{ old('name') }}"
                                   placeholder="请填写一级分类名称" required/>
                        </div>

                        <div class="form-group">
                            <input name="order" class="form-control"
                                   id="order" value="{{ old('order') }}"
                                   placeholder="请填写一级分类顺序值"
                                   required>
                        </div>

                        <div class="well well-sm">
                            <button type="submit" class="btn btn-primary">
                                <i class="far fa-save mr-2"
                                   aria-hidden="true"></i> 保存
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
