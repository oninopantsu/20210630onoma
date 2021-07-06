<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <h1>お問い合わせ</h1>
  <form action="/" method="POST">
    @csrf
    <div class="name">
      <label for="name">お名前<span>※</span></label>
      <input type="text" name="content">
      <p class="example">例）山田</p>
      <input class="content" type="text" name="content">
      <p class="example">例）太郎</p>
    </div>

    <div class="sex">
      <label for="sex">性別<span>※</span> </label>
      <label><input type="radio" name="sex" value="male">男</label>
      <label><input type="radio" name="sex" value="female">女</label>
    </div>


    <label> メールアドレス<span>※</span></label>
    <input class="content" type="email" name="content">
    <p class="example">例）test@example.com</p>



    <label>郵便番号<span>※</span></label>
    <span　class="postcode">〒</span>
    <input class="content" type="number" name="content"></input>
    <p class="example">例）123-4567 </p>

    </tr>

    <label>住所<span>※</span> </label>
    <input class="content" type="text" name="content">
    <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>



    <label>建物名</label>
    <input class="content" type="text" name="building_name">
    <p class="example">例）千駄ヶ谷マンションマンション101</p>
    </tr>

    <label>ご意見<span>※</span> </label>
    <textarea name="opinion" cols="30" rows="10"></textarea>
    <input type="submit" value="確認">


  </form>
</body>

<style>
</style>

</html>