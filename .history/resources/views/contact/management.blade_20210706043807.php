<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>管理システム</h1>
  <div class="management">


    <table>
      <tr>
        <th>お名前</th>
        <td><input type="text" name="name"></td>
      </tr>
  
      <tr>
        <th>登録日</th>
        <td>
          <input type="text" name="datetime" value="{{ $input->created_at}} "><input type="text" name="datetime" value="{{ $input->updated_at}} ">
        </td>

        <th>メールアドレス</th> 
        <input type="email" name="email" value="{{ $input->email}}">

        <th>性別</th>
          <input type="radio" name="gender_all" value="全て" checked> 
          <input type="radio" name="male" value="男性">
          <input type="radio" name="female" value="女性">
      </tr>
    </table>
  
    <input type="submit" value="検索">
    <input type="submit" value="リセット">
  </div>

  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
    </tr>
  </table>
</body>
</html>