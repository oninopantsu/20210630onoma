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

    @if (count($errors) > 0)
    <p>入力に問題があります</p>
    @endif
    <div class="contact">

      <table>

        <tr>
          <th>
            <label for="name">お名前<span>※</span></label>
          </th>
          <td class="name_example">
            <input type="text" name="content">
            <p>例）山田</p>
            <input class="content" type="text" name="content">
            <p>例）太郎</p>
          </td>
        </tr>
        @error('name')
        <tr>
          <th>ERROR</th>
          <td>{{$message}} </td>
        </tr>
        @enderror


        <tr>
          <th>
            <label for="gender">性別<span>※</span> </label>
          </th>
          <td>
            <label><input type="radio" name="sex" value="male" checked>男</label>
            <label><input type="radio" name="sex" value="female">女</label>
          </td>
        </tr>
        @error('gender')
        <tr>
          <th>ERROR</th>
          <td>{{$message}} </td>
        </tr>
        @enderror



        <tr>
          <th>
            <label for="email"> メールアドレス<span>※</span></label>
          </th>
          <td>
            <input class="content" type="email" name="content">
            <p class="example">例）test@example.com</p>
          </td>
        </tr>
        @error('email')
        <tr>
          <th>ERROR</th>
          <td>{{$message}} </td>
        </tr>
        @enderror



        <tr>
          <th>
            <label for="postcode">郵便番号<span>※</span></label>
          </th>
          <td>
            <span　class="postcode">〒</span>
            <input class="content" type="postcode" name="content"></input>
            <p class="example">例）123-4567 </p>
          </td>
        </tr>
        @error('postcode')
        <tr>
          <th>ERROR</th>
          <td>{{$message}} </td>
        </tr>
        @enderror




        <tr>
          <th>
            <label for="address">住所<span>※</span> </label>
          </th>
          <td>
            <input class="content" type="text" name="content">
            <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
          </td>
        </tr>
        @error('address')
        <tr>
          <th>ERROR</th>
          <td>{{$message}} </td>
        </tr>
        @enderror



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
            <textarea name="opinion" cols="50" rows="10"></textarea>
          </td>
        </tr>
        @error('opinion')
        <tr>
          <th>ERROR</th>
          <td>{{$message}} </td>
        </tr>
        @enderror
        
        
        
      </table>
      <input class="submit" type="submit" value="確認">
  </form>
  </div>
</body>

<style>
  body {
    width: 100%;
  }

  .contact{
    width: 90%;
    margin: 0 auto;
    text-align: center;
  }

  h1 {
    text-align: center;
  }
table{
  padding: 30px;
  width: 70%;
  margin: 0 auto;
}
  label {
    font-size: 18px;
  }

  span {
    color: red;
  }
  input {
    width: 80%;
    margin-left: 30px;
  }
.submit {
  width: 30%;
  background-color: black;
  color: white;
  font-size: 12px;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
  align-items: center;
}
.example{
  font-size: 12px;
  color: #bbb;
}
.content{
  padding: ;
}
</style>

</html>