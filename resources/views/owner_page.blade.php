<!DOCTYPE html>
<html lang="ja">

 @extends('layouts.app')

 @section('content')
 <head>
  <meta charset="utf-8">
   <title>P-COM 探す画面</title>
 </head>

 <body>
 <form action="user_page" method="POST">
   @csrf 
   <label>曜日<input type="text" name="week_day"></label><br>
   <label>開始時間<input type="datetime" name="start_time"></label><br>
   <label>終了時間<input type="datetime" name="end_time"></label>
   <label>期間<input type="text" name="term"></label><br>
   <label>料金<input type="text" name="fee"></label><br>
   <label>住所<input type="text" name="location"></label>
   <label>台数<input type="text" name="number"></label><br>
   <label>大きさ<input type="text" name="size"></label><br>
   <label>写真<input type="text" name="picture"></label>
   <label>状態<input type="text" name="status"></label><br>
   <label>備考<input type="text" name="remark"></label><br>
   <input type="submit" value="登録">
  </form> 
 </body>
 @endsection