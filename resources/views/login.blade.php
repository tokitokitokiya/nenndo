<!-- ログインフォーム -->
<form method="POST" action="/login">
    @csrf
    <input type="text" name="username" placeholder="ユーザー名">
    <input type="password" name="password" placeholder="パスワード">
    <button type="submit">ログイン</button>
</form>