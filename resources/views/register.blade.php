<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>/register</title>
</head>
<body>

<header>
<nav>
    <h1>Atte</h1>
</nav>
</header>

<h1>会員登録</h1>

<form action="/register" method="post">
    @csrf
<table cellpadding="30">
<tr>
<td><input type="text" name="name" value="名前"></td>
</tr>

<tr>
<td><input type="email" name="email1" value="メールアドレス"></td>
</tr>
    
<tr>
<td><input type="password" name="password1" value="パスワード"></td>
</tr>
    
<tr>
<td><input type="password" name="password_for_confirmation" value="確認用パスワード"></td>
</tr>

<tr>
<td><input type="submit" name="register" value="会員登録"></td>
</tr>
    
</table>
</form>

<p>アカウントをお持ちの方はこちらから</p>
<p>ログイン</p>

<footer>Atte,icn.</footer>
    
</body>
</html>