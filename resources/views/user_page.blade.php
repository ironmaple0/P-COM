<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>P-COM 探す画面</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet3.css') }}">
 </head>

 <body>
　<select name="week_day">
　<option value="monday">月</option>
　<option value="Tuesday">火</option>
　<option value="Wednesday">水</option>
　<option value="Thursday">木</option>
　<option value="Friday">金</option>
　<option value="Saturday">土</option>
　<option value="Sunday">日</option>
　<option value="Allday">全</option>
　</select>

  <select name="area">
  <option value="Tokyo">東京</option>
  <option value="Osaka">大阪</option>
  <option value="Nagoya">名古屋</option>
  </select>

  <select name="term">
  <option value="one_day">1日</option>
  <option value="one_week">1週間</option>
  <option value="one_month">1ヶ月</option>
  <option value="half_year">半年</option>
  <option value="one_year">1年</option>
  </select>
