@extends('layouts.app')

@section('content')
<div class="create-card">

    <div class="card-title">
        <h1>请填写分类</h1>
    </div>

    <div class="content is-medium">
        <form action="POST" class="box" action="#">

            <div class="field">
                <label class="label">TabOrder</label>
                <div class="control">
                    <input class="input" type="text" name="order" placeholder="请输入标签顺序值" required autofocus>
                </div>
            </div>

            <div class="field">
                <label class="label">TabName</label>
                <div class="control">
                    <input class="input" type="text" name="name" placeholder="请输入名称" required>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">提交</button>
                </div>
                <div class="control">
                    <button class="button is-light">取消</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
