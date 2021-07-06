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
    {{ $inputs['name'] }}
    <input type="hidden" name="name" value="{{ $inputs['name'] }} ">

    <label for="gender">性別</label>
    {{ $inputs['gender']}}
    <input type="hidden" name="gender" value="{{ $inputs['gender}}">

    <label for="postcode">郵便番号</label>
    {{ $inputs['postode'] }}
    <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">

    <label for="address"> 住所</label>
    {{ $inputs['address'] }}
    <input type="hidden" name="address" value="{{ $inputs['address'] }}">

    <label for="building_name">建物名</label>
    <input type="hidden" name="building_name" value="{{ $inputs['opinion'] }} ">
  </form>
  <input type="submit" value="送信">
  
  form
</body>

</html>