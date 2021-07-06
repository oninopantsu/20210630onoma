<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  @extends('layout')

  @section('content')
  <form action="/confirm" method="get">
    @csrf
    <label for="name">名前</label>
    {{ $item['name'] }}
    <input type="hidden" name="name" value="{{ $item['name'] }} ">

    <label for="gender">性別</label>
    {{ $item['gender']}}
    <input type="hidden" name="gender" value="{{ $item['gender}}">

    <label for="postcode">郵便番号</label>
    {{ $item['postode'] }}
    <input type="hidden" name="postcode" value="{{ $item['postcode'] }}">

    <label for="address"> 住所</label>
    {{ $item['address'] }}
    <input type="hidden" name="address" value="{{ $item['address'] }}">

    <label for="building_name">建物名</label>
    <input type="hidden" name="building_name" value="{{ $inputs['opinion'] }} ">
  </form>
  <input type="submit" value="送信">
  
  <form action="/" method="get">修正する</form>
</body>

</html>