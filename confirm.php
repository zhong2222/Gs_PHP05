<?php
// confirm.phpの中身は、index.php参照
session_start();
require_once('funcs.php');
loginCheck();

// post受け取る
$title = $_POST['title'];
$author = $_POST['author'];
$url = $_POST['url'];
$start = $_POST['start'];
$end = $_POST['end'];
$evaluate = $_POST['evaluate'];
$purpuse = $_POST['purpuse'];
$thoughts = $_POST['thoughts'];
$action = $_POST['action'];
$plan = $_POST['plan'];


$_SESSION['post']['title'] = $_POST['title'];
$_SESSION['post']['author'] = $_POST['author'];
$_SESSION['post']['url'] = $_POST['url'];
$_SESSION['post']['start'] = $_POST['start'];
$_SESSION['post']['end'] = $_POST['end'];
$_SESSION['post']['evaluate'] = $_POST['evaluate'];
$_SESSION['post']['purpuse'] = $_POST['purpuse'];
$_SESSION['post']['thoughts'] = $_POST['thoughts'];
$_SESSION['post']['action'] = $_POST['action'];
$_SESSION['post']['plan'] = $_POST['plan'];


?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="css/bm.css">
    <title>ACTION READING</title>

</head>

<body>
    <header>
        <h1>新しい本の使い方</h1>
    </header>
    <main>
        <h2>ACTION READING</h2>
        <h3>～1日30分でも自分を変える”行動読書”！～ </h3>

        <ul>
            <li><h4><a href="select.php">登録内容一覧</a></h4></li>
            <li><h4><a href="login.php">ログイン</a></h4></li>
            <li><h4><a href="logout.php">ログアウト</a></h4></li>
        </ul>
        
        <form action="insert.php" method="post">

        <label> 書名：  <input id="title" type="text" class="box" name="title" value="<?= $title ?>"></label><br>
        <label> 著者：  <input id="author" type="text" class="box" name="author" value="<?= $author ?>"></label><br>
        <label> URL :   <input id="url" type="text" class="box" name="url" value="<?= $url ?>"></label><br>       
        <label> 開始日: <input id="start" type="date" class="box"  name="start" value="<?= $start ?>"></label><br>
        <label> 完了日: <input id="end" type="date" class="box"  name="end" value="<?= $end ?>"></label><br>
        <label> 評価：  <select id="evaluate" type="text" class="box" name="evaluate" >">
                                <option value="未選択" <?= $evaluate  == '未選択' ? 'selected' : "" ?>>選択してください</option>
                                <option value="◎" <?= $evaluate  == '◎' ? 'selected' : "" ?>>◎</option>
                                <option value="◯" <?= $evaluate  == '◯' ? 'selected' : "" ?>>◯</option>
                                <option value="△" <?= $evaluate  == '△' ? 'selected' : "" ?>>△</option>
                                <option value="✕" <?= $evaluate  == '✕' ? 'selected' : "" ?>>✕</option>
                        </select>
                        </label><br>
                <ul class="list">
                        <div class="option"> ◎：非常によい </div>
                        <div class="option"> ◯：よい。だめではないが今一つ</div>
                        <div class="option"> △：微妙。買わなければよかった、読まなければよかった</div>
                        <div class="option"> ✕：最悪。ひどい本、あきれた</div>
                </ul>

                        <!-- 画像表示 -->
                        <div id="thumbnail"></div>

                <h4>↓↓↓アクション↓↓↓</h4>

                <p id="purpuse">1.　この本を読んだ目的、ねらい</p>
                    <textArea name="purpuse" rows="8" cols="40"><?= $purpuse?></textArea><br>
                <p id="thoughts">2.　読んで良かったこと、感じたこと</p>
                    <textArea name="thoughts" rows="8" cols="40"><?= $thoughts?></textArea><br>
                <p id="action">3.　この本を読んで、自分は今から何をするか</p>
                    <textArea name="action" rows="8" cols="40"><?= $action?></textArea><br>
                <p id="plan">4.　3か月後に何をするか、どうなっていたいか</p>
                    <textArea name="plan" rows="8" cols="40"><?= $plan?></textArea><br>

                <input type="submit" value="登録">

        </form>
        <a href="index.php?re-register=true">前の画面に戻る</a>
    </main>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<script src="js/bm.js"></script>

</body>
</html>