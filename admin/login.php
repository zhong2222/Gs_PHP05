<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <header>
            <h1>新しい本の使い方</h1>
    </header>
    <main>
        <h2>ACTION READING</h2>
        <h3>～1日30分でも自分を変える”行動読書”！～ </h3>
        <h4><a class="navbar-brand" href="../index.php">登録画面に戻る</a></h4>

    <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>
</body>
</html>