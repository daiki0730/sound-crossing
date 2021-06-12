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
                    <li class="breadcrumb-item"><a href="{{ route('backend.admin.users.index') }}">ユーザー一覧</a></li>
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

                    <form action="{{ route('backend.admin.users.update', [$user->id]) }}" method="post">
                        @csrf
                        <input name="status" type="hidden" value="1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ニックネーム <span class="text-danger">※</span></label>
                                        <input type="text" name="name" class="form-control @error("name") is-invalid @enderror" value="{{ old('name') ?: $user->name }}">
                                        @error("name")
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("name") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>ニックネーム(カナ) <span class="text-danger">※</span></label>
                                        <input type="text" name="name_kana" class="form-control @error("name_kana") is-invalid @enderror" value="{{ old('name_kana') ?: $user->name_kana }}">
                                        @error("name_kana")
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("name_kana") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>メールアドレス <span class="text-danger">※</span></label>
                                        <input type="text" name="email" class="form-control @error("email") is-invalid @enderror" value="{{ old('email') ?: $user->email }}">
                                        @error("email")
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("email") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>性別 <span class="text-danger">※</span></label>
                                        <input type="text" name="gender" class="form-control @error("gender") is-invalid @enderror" value="{{ old('gender') ?: $user->gender }}">
                                        @error("gender")
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("gender") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>生年月日 <span class="text-danger">※</span></label>
                                        <input type="text" name="birthdate" class="form-control @error("birthdate") is-invalid @enderror" value="{{ old('birthdate') ?: $user->birthdate }}">
                                        @error("birthdate")
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("birthdate") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>パスワード</label>
                                        <input type="text" name="password" class="form-control @error("password") is-invalid @enderror">
                                        @error("password")
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("password") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>パスワード(確認用)</label>
                                        <input type="text" name="password_confirmation" class="form-control @error("password_confirmation") is-invalid @enderror">
                                        @error("password_confirmation")
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("password_confirmation") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>自己紹介文 <span class="text-danger">※</span></label>
                                        <input type="text" name="biography" class="form-control @error("biography") is-invalid @enderror" value="{{ old('biography') ?: $user->biography }}">
                                        @error("biography")
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("biography") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>自己紹介URL <span class="text-danger">※</span></label>
                                        <input type="text" name="url" class="form-control @error("url") is-invalid @enderror" value="{{ old('url') ?: $user->url }}">
                                        @error("url")
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("url") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>アカウント写真</label>
                                        <input type="text" name="image" class="form-control @error("") is-invalid @enderror" placeholder="アカウント写真">
                                        @error('image')
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first("image") }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" id="date-generate">
                            <a href="{{ route('backend.admin.users.index') }}" class="btn btn-secondary float-right">キャンセル</a>
                            <button type="submit" class="btn btn-primary float-right " style="margin-right: 10px">更新</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
@stop

@section('js')
@stop
