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
    <table>

      <tr>
        <th>
          <label for="name">お名前<span>※</span></label>

        </th>
        <td>
          <div class="name">
            <input type="text" name="content">
            <p class="name__example">例）山田</p>
            <input class="content" type="text" name="content">
            <p class="name__example">例）太郎</p>
          </div>
        </td>
      </tr>

      <tr>
        <th>
          <label for="sex">性別<span>※</span> </label>
        </th>
        <td>
          <label><input type="radio" name="sex" value="male">男</label>
          <label><input type="radio" name="sex" value="female">女</label>
        </td>
      </tr>

      <tr>
        <th>
          <label for="email"> メールアドレス<span>※</span></label>
        </th>
        <td>
          <input class="content" type="email" name="content">
          <p class="example">例）test@example.com</p>
        </td>
      </tr>

      <tr>
        <th>
          <label for="postcode">郵便番号<span>※</span></label>
        </th>
        <td>
          <span　class="postcode">〒</span>
          <input class="content" type="number" name="content"></input>
          <p class="example">例）123-4567 </p>
        </td>
      </tr>


      <tr>
        <th>
          <label for="address">住所<span>※</span> </label>
        </th>
        <td>
          <input class="content" type="text" name="content">
          <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </td>
      </tr>

      <tr>
        <th>
          <label for="building_name">建物名</label>
        </th>
        <td>
          <input class="content" type="text" name="building_name">
          <p class="example">例）千駄ヶ谷マンションマンション101</p>
        </td>
      </tr>

      <tr>
        <th>
          <label for="opinion">ご意見<span>※</span> </label>
        </th>
        <td>
          <textarea name="opinion" cols="30" rows="10"></textarea>
          <input type="submit" value="確認">
        </td>
      </tr>

    </table>
  </form>
</body>

<style>
  body {
    width: 100%;
  }

  form {
    width: 90%;
    margin: 0 auto;
  }

  h1 {
    text-align: center;
  }

  label {
    font-size: 18px;
  }

  span {
    color: red;
  }

  .name {
    display: ;
  }
</style>

</html>