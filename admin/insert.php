<?php
//最初にSESSIONを開始！！
session_start();
require_once('../funcs.php');
loginCheck();

ini_set('display_errors', 'On'); // ここ：エラーを表示させるようにしてください
error_reporting(E_ALL); //ここ：全てのレベルのエラーを表示してください

//1. POSTデータ取得

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

// if(isset($_POST['ta1'])) {
//     $ta1 = $_POST['ta1'];
//     echo '選択1A：' . $ta1 . '<br>';
// } else {
//     echo '問１Aが選択されていません。<br>';
// }

//DB接続します
$pdo = db_conn();

//データ登録SQL作成
//SQL文を用意
$stmt = $pdo->prepare("INSERT INTO
                        gs_bm_table(id, title, author, url, start, end, evaluate, purpuse, thoughts, action, plan, indate)
                        VALUES(NULL, :title, :author, :url, :start, :end, :evaluate, :purpuse, :thoughts, :action, :plan, sysdate() )");

// バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':author', $author, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':start', $start, PDO::PARAM_STR);
$stmt->bindValue(':end', $end, PDO::PARAM_STR);
$stmt->bindValue(':evaluate', $evaluate, PDO::PARAM_STR);
$stmt->bindValue(':purpuse', $purpuse, PDO::PARAM_STR);
$stmt->bindValue(':thoughts', $thoughts, PDO::PARAM_STR);
$stmt->bindValue(':action', $action, PDO::PARAM_STR);
$stmt->bindValue(':plan', $plan, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();
$alert  = "";
//４．データ登録処理後
if ($status === false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    // $error = $stmt->errorInfo();
    // exit('ErrorMessage:' . $error[2]);
    sql_error($stmt);
} else {
    //５．index.phpへリダイレクト
    // header('Location: select.php');
    redirect('select.php');

}


$alert = "<script type='text/javascript'>alert('これはalertです。');</script>";
echo $alert;
?>
