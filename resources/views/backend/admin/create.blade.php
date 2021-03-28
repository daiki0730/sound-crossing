@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ユーザー作成</h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    {{-- TODO:パンくずリスト実装 --}}
                    <li class="breadcrumb-item"><a href="{{ route('backend.admin.index') }}">ユーザー一覧</a></li>
                    <li class="breadcrumb-item active">ユーザー作成</li>
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
                    <div class="card-header bg-navy text-white">
                        <h3 class="card-title">ユーザー一覧</h3>
                    </div>
                    <form action="{{ route('backend.admin.store') }}" method="post">
                        @csrf
                        <input name="status" type="hidden" value="1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ニックネーム <span class="text-danger">※</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="ニックネーム">
                                    </div>
                                    <div class="form-group">
                                        <label>ニックネーム(カナ) <span class="text-danger">※</span></label>
                                        <input type="text" name="name_kana" class="form-control" placeholder="ニックネーム(カナ)">
                                    </div>
                                    <div class="form-group">
                                        <label>メールアドレス <span class="text-danger">※</span></label>
                                        <input type="email" name="email" class="form-control" placeholder="メールアドレス">
                                    </div>
                                    <div class="form-group">
                                        <label>性別</label>
                                        <input type="text" name="gender" class="form-control" placeholder="性別">
                                    </div>
                                    <div class="form-group">
                                        <label>生年月日</label>
                                        <input type="datetime-local" name="birthdate" class="form-control" placeholder="生年月日">
                                    </div>
                                    <div class="form-group">
                                        <label>パスワード <span class="text-danger">※</span></label>
                                        <input type="password" name="password" class="form-control" placeholder="パスワード">
                                    </div>
                                    <div class="form-group">
                                        <label>パスワード(確認用) <span class="text-danger">※</span></label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="パスワード">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>自己紹介文</label>
                                        <textarea name="biography" class="form-control" rows="1" placeholder="自己紹介文"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>自己紹介URL</label>
                                        <input type="text" name="url" class="form-control" placeholder="URL">
                                    </div>
                                    <div class="form-group">
                                        <label>アカウント写真</label>
                                        <input type="text" name="image" class="form-control" placeholder="アカウント写真">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" id="date-generate">
                            <a href="{{ route('backend.admin.index') }}" class="btn btn-secondary float-right">キャンセル</a>
                            <button type="submit" class="btn btn-primary float-right " style="margin-right: 10px">新規登録</button>
                        </div>
                    </form>
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
