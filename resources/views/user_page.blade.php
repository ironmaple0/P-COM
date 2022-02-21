<!DOCTYPE html>
<html lang="ja">

 @extends('layouts.app')
 
 @section('content')
 <head>
 <meta charset="utf-8">
 <title>P-COM 探す画面</title>
 </head>

 <body>
 <form action="search" method="POST">
     @csrf
 <div class="box">
  <select name="week_day">
  <option value="null">--</option>
  <option value="月曜日">月曜日</option>  
  <option value="火曜日">火曜日</option>
  <option value="水曜日">水曜日</option>
  <option value="木曜日">木曜日</option>
  <option value="金曜日">金曜日</option>
  <option value="土曜日">土曜日</option>
  <option value="日曜日">日曜日</option>
  <option value="全曜日">全曜日</option>
  </select>

  <select name="location">
  <option value="null">--</option>
  <option value="東京">東京</option>
  <option value="大阪">大阪</option>
  <option value="名古屋">名古屋</option>
  </select>

  <select name="term">
  <option value="null">--</option>
  <option value="１日">1日</option>
  <option value="１週間">1週間</option>
  <option value="1ヶ月">1ヶ月</option>
  <option value="半年">半年</option>
  <option value="1年">1年</option>
  </select>
  <button type="submit" name="search">検索</button>
 </div>
 </form>
  
  <table class="table table-striped">
   <tr id="clr">
     <th>Pナンバー</th>
     <th>曜日</th>
     <th>住所</th>
     <th>期間</th>
     <th>詳細</th>
   </tr>
  </table>
  @endsection