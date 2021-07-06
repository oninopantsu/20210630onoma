<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>お問い合わせ</h1>
  <form action="POST">
    <label>お名前<span>※</span>
      <input type="text" name=" lastname" value="{{ $item.lastname }}">
      <p class="example">例）山田</p>
      <input type="text" name="fisrtname " value="{{$item.firstname }}">
      <p class="example">例）太郎</p>

    </label>

    <label>性別<span>※</span>
      <input type="radio" name="gender" value=" {{ $item.gender:男性}}">
    </label>

    <label> メールアドレス<span>※</span>
      <input type="email" name="email" id="">
      <p class="example">例）test@example.com</p>
    </label>

    <label>郵便番号<span>※</span>
      <span　class="postcode">〒</span><input type="number" name="postcode" value="{{ $item.postcode}}"></input>
      <p class="example">例）山田</p>
    </label>

    <label>住所<span>※</span>
      <input type="text" name="address" value="{{ $item.address }}"></label>

    <label>建物名
      <input type="text" name="building_name" value="{{ $item.address}}"></label>

    <label>ご意見<span>※</span>
      <input type="text" name="opinion" value="{{$item.realtext}}"></label>

  </form>
</body>

</html>