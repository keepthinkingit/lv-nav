@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <div class="card ">

                <div class="card-body">
                    <h2>
                        <i class="far fa-edit"></i>
                        一级分类
                    </h2>
                    <hr>
                    <form action="{{ route('cate.delete',['id'=>$category->id]) }}"
                          method="post" accept-charset="UTF-8">
                        @csrf
                        @method('delete')
                        {{--@include('shared._error')--}}

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-7">
                                    <label for="order">一级分类排序</label>
                                    <input type="text" class="form-control"
                                           name="order" value="{{ $category->order }}"
                                           required disabled>
                                    <label for="name">一级分类名称</label>
                                    <input type="text" class="form-control"
                                           name="name" value="{{ $category->name }}"
                                           required disabled>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="well well-sm">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-eraser mr-2"
                                   aria-hidden="true"></i> 删除?
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
