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
    <table>
      <tr>
        <td><label>お名前<span>※</span></td>
        <input type="text" name="name" value="{{ lastname }}">
        <p class="example">例）山田</p>
        <input type="text" name="name " value="{{ firstname }}">
        <p class="example">例）太郎</p>
        </label>

      </tr>

      <tr>
        <td><label class="gender">性別<span>※</span></td>
        <input type="radio" name="gender" value=" {{ $item->gender}}">
        </label>

      </tr>

      <tr>

        <td><label> メールアドレス<span>※</span></td>
        <input type="email" name="email" value="{{ $item->email }} ">
        <p class="example">例）test@example.com</p>
        </label>
      </tr>

      <tr>

        <td><label>郵便番号<span>※</span></td>
        <span　class="postcode">〒</span><input type="number" name="postcode" value="{{ $item->postcode}}"></input>
        <p class="example">例）123-4567 </p>
        </label>
      </tr>

      <tr>
        <td><label>住所<span>※</span></td>
        <input type="text" name="address" value="{{ $item->address }}">
        <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </label>

      </tr>

      <tr>

        <td><label>建物名</td>
        <input type="text" name="building_name" value="{{ $item->address}}">
        <p class="example">例）千駄ヶ谷マンションマンション101</p>
        </label>
      </tr>

      <tr>
        <td><label>ご意見<span>※</span></td>
        <textarea name="opinion" cols="30" rows="10" ></textarea>
        </label>
        <input type="submit" value="確認">
    </tr>
    @endforeach
    </table>


  </form>
</body>

<style>
</style>
</html>