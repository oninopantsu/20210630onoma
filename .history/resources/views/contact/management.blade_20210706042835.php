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
  <table>
    <tr>
      <th>お名前</th>
      <td><input type="text" name="name"></td>
    </tr>

    <tr>
      <th>登録日</th>
      <td>
        <input type="text" name="datetime" value="{{ $input->timestamp}} "><input type="text" name="datetime" value="{{ $input->timestamp}} ">
      </td>
    </tr>
    <tr>
      <th>メールアドレス</th>
    </tr>
  </table>
</body>
</html>