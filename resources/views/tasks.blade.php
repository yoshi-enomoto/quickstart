{{-- 親ページを呼ぶ --}}
@extends('layouts.app')

{{-- 親ページへの挿入内容 --}}
@section('content')

    <!-- Bootstrapの定形コード… -->

    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
        {{-- テンプレートのロードを行う --}}
        @include('common.errors')

        <!-- 新タスクフォーム -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- タスク名 -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">タスク</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- タスク追加ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> タスク追加
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: 現在のタスク -->
@endsection
