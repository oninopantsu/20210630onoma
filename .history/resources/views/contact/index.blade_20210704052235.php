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
  <input type="text" name=" {{ $item.lastname }}"> <input type="text" name="{{$item.firstname }} ">
  </label>

  <label>性別<span>※</span>
  <input type="radio" name="" id="">
  </label>
  
  </form>
</body>
</html>