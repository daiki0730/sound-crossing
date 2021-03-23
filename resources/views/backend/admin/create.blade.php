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
                    <div class="card-body">
                        ユーザー作成入力
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
