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
        <th>登録日</th>
        <td>
          <input type="text" name="datetime" value="{{ $item->created_at}} "><input type="text" name="datetime" value="{{ $item->updated_at}} ">
        </td>
        <th>メールアドレス</th> 
        <input type="email" name="email" value="{{ $item->email}}">
        <th>性別</th>
          <input type="radio" name="gender_all" value="全て" checked> 
          <input type="radio" name="male" value="男性">
          <input type="radio" name="female" value="女性">
      </tr>
    </table>
  
    <button></button>
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
    <tr>
      @foreach($items as $item)
      <td>
        <input type="hidden" name="id" value="{{$item->id}}">
      </td>
    </tr>
  </table>
</body>
</html>