<!DOCTYPE html>
<html lang="ja">

@extends('layouts.app')

@section('content')
<head>
 <meta charset="utf-8">
  <title>ホーム画面</title>
   <link rel="stylesheet2" href="{{ asset('css/stylesheet2.css') }}">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">登録完了しました！</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div id="container">
                 <div id="main">
                 <h1>始めよう！</h1>
                 <a href="ownerinfo">貸す</a>
                 <a href="index">借りる</a>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
@endsection
