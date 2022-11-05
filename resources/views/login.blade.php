<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>/login</title>
</head>
<body>

<header>
<nav>
    <h1>Atte</h1>
</nav>
</header>

<h1>ログイン</h1>

<form action="/login" method="post">
    @csrf
<table cellpadding="30">
<tr>
<td><input type="email" name="email1" value="メールアドレス"></td>
</tr>

<tr>
<td><input type="password" name="password1" value="パスワード"></td>
</tr>

<tr>
<td><input type="submit" name="login" value="ログイン"></td>
</tr>

</table>
</form>

<p>アカウントをお持ちでない方はこちらから</p>
<p>会員登録</p>

<footer>Atte,icn.</footer>
    
</body>
</html>