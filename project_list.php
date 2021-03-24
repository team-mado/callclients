<?php

session_start();
error_reporting(E_ALL & ~E_NOTICE);
include('functions.php');

$clients_id= $_SESSION["id"];
$name = $_SESSION["staff"];

// var_dump($clients_id);
// exit;

// 全件データ表示
// ---------
$pdo = connect_to_db();
$sql = "SELECT * FROM ogp_table where clients_id =$clients_id";
$sql1 = "SELECT * ,COUNT(clients_id=$clients_id) AS project_counts FROM ogp_table where clients_id =$clients_id";

// var_dump($sql);
// exit;

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
$stmt1 = $pdo->prepare($sql1);
$status = $stmt1->execute();

// データ登録処理後
if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);  
  $posts1 = $stmt1->fetch(PDO::FETCH_ASSOC);
  $project_counts = $posts1["project_counts"];
//   var_dump($posts);
//   exit;
//   var_dump($posts);
//   exit;
}







?>



<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DESIGN UP! SDGs</title>

    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />

    <!-- Googleフォント -->

    <!-- Fon Awesome読込み -->
    <link
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      rel="stylesheet"
    />
    <!-- オリジナルcomponent.CSS -->
    <link rel="stylesheet" href="css/component.css" />
    <link rel="stylesheet" href="css/project_list.css" />
  </head>
  <body>
    <header>
      <div class="header">
        <div><img class="home-logo" src="img/home-logo.png" alt="" /></div>
      </div>
    </header>
    <main>
<p><span><?= $name ?></span>  様ありがとうございます。<br>
現在進行中のプロジェクトは<span class="project-kensu"><?= $project_counts ?></span> 件です。</p>

<a href="ogp_creation.php">
  <div class="ogp-ichiran-img">
    <img class="ogp-img" src="img/ogp-mini.png" alt="">
  </div>
  <!-- <hr color="#C4C4C4" width="100%" size="1"> -->
  <br>
</a>

  <br>
<div class="button-box">
<!-- <a href="ogp-edit.php"><img src="img/bt-hensyu.png" alt=""></a><input type="submit" value="" /><a href="ogp-edit.php"></a>
<a href="tweet.php"><img src="img/bt-tweet.png" alt=""></a><input type="submit" value="" /><a href="tweet.php"></a></input> -->

<a href="ogp_creation.php">新規作成</a>
<a href="logout.php">ログアウト</a>
<br>

      </div>
      <br>
<br>
      </input>
        </form>
    </main>
  </body>
</html>
