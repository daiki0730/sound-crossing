@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ユーザー一覧</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    {{-- TODO:パンくずリスト実装 --}}
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">ユーザー一覧</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h3 class="card-title">ユーザー一覧</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>写真</th>
                                    <th>名前</th>
                                    <th>名前カナ</th>
                                    <th>性別</th>
                                    <th>最終ログイン日時</th>
                                    <th>アカウント作成日時</th>
                                    <th>詳細</th>
                                </tr>
                            </thead>
                            @foreach($users as $user)
                                <tbody>
                                    <tr>
                                        <td>{{ $user->image }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->name_kana }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->last_login_at }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-warning">
                                                詳細
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        {{-- TODO:ページネーション実装 --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
