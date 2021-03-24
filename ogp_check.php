<?
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include('functions.php');

// var_dump($_POST);
// exit;

// $id = $_SESSION["id"];
$img = $_POST["img"];
$project_overview = $_POST["project_overview"];
$detail = $_POST["detail"];
$production_period = $_POST["production_period"];
$remote_availability = $_POST["remote_availability"];

// テキスト画像
$image_text = $_POST["project_overview"];
// var_dump($image_text);
// exit;

?>




<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="twitter:card" content="summary_large_image" >
    <meta name="twitter:site" content="https://royal-goto-8707.lolipop.io/">
    <meta name="twitter:image" content="https://res.cloudinary.com/dlqadjcsc/image/upload/l_text:Sawarabi%20Gothic_30_bold:海洋ゴミを洋服に変える%0AFASHIONxSEAプロジェクト%0A%0Aデザイナー募集%0AUI | DTP | Package | Fashion%0A海のゴミから布を作り、洋服へ。魔法のようなプロジェクトを創り出すデザイン集団、求ム!,co_rgb:333,w_500,c_fit/v1616471824/UbpRDEkE_uqbs0d.png" >
    <meta name="twitter:title" content="デザイナー募集" >
    <meta name="twitter:description" content="海のゴミから布を作り、洋服へ。魔法のようなプロジェクトを創り出すデザイン集団、求ム!" >
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
    <link rel="stylesheet" href="css/ogp_check.css" />
  </head>
  <body>
    <header>
      <div class="header">
        <div><img class="home-logo" src="img/home-logo.png" alt="" /></div>
      </div>
    </header>
    <main>
      <div class="ogp-box">
<img class="ogp-img" src="https://res.cloudinary.com/dlqadjcsc/image/upload/l_text:Sawarabi%20Gothic_30_bold:海洋ゴミを洋服に変える%0AFASHIONxSEAプロジェクト%0A%0Aデザイナー募集%0AUI | DTP | Package | Fashion%0A海のゴミから布を作り、洋服へ。魔法のようなプロジェクトを創り出すデザイン集団、求ム!,co_rgb:333,w_500,c_fit/v1616471824/UbpRDEkE_uqbs0d.png" alt="">
      </div>
<hr color="#C4C4C4" width="100%" size="1">
<br>
<p>この内容でよろしければOGP画像を作成し<br>
  このままツイッターへ移動します</p>
  <br>
<div class="button-box">
<a href="ogp_creation.php"><img src="img/bt-hensyu.png" alt=""><input type="submit" value="" /></a>
<a href="https://twitter.com/intent/tweet?text=グラフィックデザイナー募集中?url=https://royal-goto-8707.lolipop.io/project_recruiting.php"><img src="img/bt-tweet.png" alt=""></a>

<br>
    <div class="center">
    <form action="ogp_act.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="img" value="<?php echo($img) ?>">
    <input type="hidden" name="project_overview" value="<?php echo($project_overview) ?>">
    <input type="hidden" name="detail" value="<?php echo($detail) ?>">
    <input type="hidden" name="production_period" value="<?php echo($production_period) ?>">
    <input type="hidden" name="remote_availability" value="<?php echo($remote_availability) ?>">
    <a href="ogp_act.php"><input type="submit" value=""><img src="img/bt-ichiranhe.png" alt=""></input>
    </a>
  </a>        
  </form>
      </div>
      </div>
      <br>
<br>
      </input>
    </main>
  </body>
</html>
