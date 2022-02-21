<!DOCTYPE html>
<html lang="ja">

@extends('layouts.app')

@section('content')

  <head>
   <meta charset="utf-8">
   <title>P-COM 詳細画面</title>
  </head>

  <div class="container">
  <div class="row justify-content-center">
    <h1>詳細</h1>
  <table class="table table-striped">
      <thead>
          <tr>
              <th>Pナンバー</th>
              <th>住所</th>
              <th>曜日</th>
              <th>期間</th>
              <th>台数</th>
              <th>開始時間</th>
              <th>終了時間</th>
              <th>料金</th>
              <th>大きさ</th>
              <th>写真</th>
              <th>状態</th>
              <th>備考</th>
     </thead>
    <tbody>
        <tr>
            <td>{{ optional($owner)->owner_id }}</td>
            <td>{{ optional($owner)->location }}</td>
            <td>{{ optional($owner)->week_day }}</td>
            <td>{{ optional($owner)->term }}</td>
            <td>{{ optional($owner)->number }}</td>
            <td>{{ optional($owner)->start_time }}</td>
            <td>{{ optional($owner)->end_time }}</td>
            <td>{{ optional($owner)->fee }}</td>
            <td>{{ optional($owner)->size }}</td>
            <td>{{ optional($owner)->picture }}</td>
            <td>{{ optional($owner)->status }}</td>
            <td>{{ optional($owner)->remark }}</td>
        </tr>
    </tbody>
 </table>
 <span class="click1"><a href="/chat">話してみる</a></span>
 <span class="click1"><a href="/contract">契約する</a></span>
</div>
</div>
@endsection
</html>

