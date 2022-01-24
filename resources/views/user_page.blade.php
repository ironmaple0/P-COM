<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>P-COM 探す画面</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet3.css') }}">
 </head>

 <body>
 <form action="search" method="POST">
     @csrf
　<select name="week_day">
  <option value="null">--</option>
  <option value="monday">月曜日</option>  
  <option value="Tuesday">火曜日</option>
  <option value="Wednesday">水曜日</option>
  <option value="Thursday">木曜日</option>
  <option value="Friday">金曜日</option>
  <option value="Saturday">土曜日</option>
  <option value="Sunday">日曜日</option>
  <option value="Allday">全曜日</option>
  </select>

  <select name="location">
  <option value="null">--</option>
  <option value="Tokyo">東京</option>
  <option value="Osaka">大阪</option>
  <option value="Nagoya">名古屋</option>
  </select>

  <select name="term">
  <option value="null">--</option>
  <option value="one_day">1日</option>
  <option value="one_week">1週間</option>
  <option value="one_month">1ヶ月</option>
  <option value="half_year">半年</option>
  <option value="one_year">1年</option>
  </select>
  <button type="submit" name="search">検索</button>
 </form>
  
  <table border="1" cellpadding="10">
   <tr id="clr">
     <th>No</Noframes></th>
     <th>曜日</th>
     <th>住所</th>
     <th>期間</th>
     <th></th>
　　</tr>
        @foreach($owners as $owner)
        <tr>
            <td>{{ $owner->owner_id }}</td>
            <td>{{ $owner->week_day }}</td>
            <td>{{ $owner->location }}</td>
            <td>{{ $owner->term }}</td>
        </tr>
        @endforeach
  </table>