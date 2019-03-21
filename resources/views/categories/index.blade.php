@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <div class="card ">

                <div class="card-body">
                    <h2 class="">
                        <i class="far fa-edit"></i>
                        一级分类修改
                    </h2>
                    <hr>

                    <form action="{{ route('categories.update') }}" method="post" accept-charset="UTF-8">
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        @csrf
                        @method('PATCH')

                        {{--@include('shared._error')--}}

                        <div class="form-group">
                            <div class="form-row">
                                @foreach ($cates as $cate)
                                    <div class="col-md-7">
                                        {{--<input name="id" type="hidden" value="{{ $cate->id }}" required>--}}
                                        <label for="cate[{{$cate->id}}][order]">一级分类排序</label>
                                        <input type="text" class="form-control"
                                               name="cate[{{$cate->id}}][order]" value="{{ $cate->order }}"
                                               required>
                                        <label for="cate[{{$cate->id}}][name]">一级分类名称</label>
                                        <input type="text" class="form-control"
                                               name="cate[{{$cate->id}}][name]" value="{{ $cate->name }}"
                                               required>
                                        <hr>
                                    </div>
                                @endforeach
                            </div>
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
