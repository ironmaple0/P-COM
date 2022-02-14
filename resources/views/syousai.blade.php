<!DOCTYPE html>
<html lang="ja">

 @extends('layouts.app')

  <head>
   <meta charset="utf-8">
   <title>P-COM 詳細画面</title>
  </head>

  <h1>詳細</h1>
  
  <table class = "table table-striped">
      <thead>
          <tr>
              <th> Pナンバー</th>
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
            <td>{{ $owner->owner_id }}</td>
            <td>{{ $owner->location }}</td>
            <td>{{ $owner->week_day }}</td>
            <td>{{ $owner->term }}</td>
            <td>{{ $owner->number }}</td>
            <td>{{ $owner->start_time }}</td>
            <td>{{ $owner->end_time }}</td>
            <td>{{ $owner->fee }}</td>
            <td>{{ $owner->size }}</td>
            <td>{{ $owner->picture }}</td>
            <td>{{ $owner->status }}</td>
            <td>{{ $owner->remark }}</td>
        </tr>
    </tbody>
 </table>


