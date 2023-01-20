<?php
session_start();
require_once('funcs.php');
loginCheck();

$title = '';
$author = '';
$url = '';
$start = '';
$end = '';
$evaluate = '';
$purpuse = '';
$thoughts = '';
$action = '';
$plan = '';

if (isset($_SESSION['post']['title'])) {
    $title = $_SESSION['post']['title'];
}

if (isset($_SESSION['post']['author'])) {
    $author = $_SESSION['post']['author'];
}

if (isset($_SESSION['post']['url'])) {
    $url = $_SESSION['post']['url'];
}

if (isset($_SESSION['post']['start'])) {
    $start = $_SESSION['post']['start'];
}

if (isset($_SESSION['post']['end'])) {
    $end = $_SESSION['post']['end'];
}

if (isset($_SESSION['post']['evaluate'])) {
    $evaluate = $_SESSION['post']['evaluate'];
}

if (isset($_SESSION['post']['purpuse'])) {
    $purpuse = $_SESSION['post']['purpuse'];
}

if (isset($_SESSION['post']['thoughts'])) {
    $thoughts = $_SESSION['post']['thoughts'];
}

if (isset($_SESSION['post']['action'])) {
    $action = $_SESSION['post']['action'];
}

if (isset($_SESSION['post']['plan'])) {
    $plan = $_SESSION['post']['plan'];
}

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
        
        <form action="confirm.php" method="post">

        <label> 書名：  <input id="title" type="text" class="box" name="title"></label><br>
        <label> 著者：  <input id="author" type="text" class="box" name="author"></label><br>
        <label> URL :   <input id="url" type="text" class="box" name="url"></label><br>       
        <label> 開始日: <input id="start" type="date" class="box"  name="start"></label><br>
        <label> 完了日: <input id="end" type="date" class="box"  name="end"></label><br>
        <label> 評価：  <select id="evaluate" type="text" class="box" name="evaluate">
                                <option value="未選択">選択してください</option>
                                <option value="◎">◎</option>
                                <option value="◯">◯</option>
                                <option value="△">△</option>
                                <option value="✕">✕</option>
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
                    <textArea name="purpuse" rows="8" cols="40"></textArea><br>
                <p id="thoughts">2.　読んで良かったこと、感じたこと</p>
                    <textArea name="thoughts" rows="8" cols="40"></textArea><br>
                <p id="action">3.　この本を読んで、自分は今から何をするか</p>
                    <textArea name="action" rows="8" cols="40"></textArea><br>
                <p id="plan">4.　3か月後に何をするか、どうなっていたいか</p>
                    <textArea name="plan" rows="8" cols="40"></textArea><br>
                <input type="submit" id="confirm" value="内容確認">

        </form>

    </main>

        <!-- googleBooks検索 -->
        <div>
                <input type="text" id="key_g" size="50" placeholder="Google ブックスで調べる">
                <button id="send">検索</button>
        </div>

    <div id="search">

        <div id="booklist">
            <table id="list">
                <tr>
                    <td>書籍名</td>
                    <td>著者</td>
                    <td>出版社</td>
                    <td>画像</td>
                </tr>
            </table>
        </div>
    </div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<script src="js/bm.js"></script>

</body>
</html>