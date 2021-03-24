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
    <link rel="stylesheet" href="css/ogp-new.css" />
  </head>
  <body>
    <header>
      <div class="header">
        <div><img class="home-logo" src="img/home-logo.png" alt="" /></div>
      </div>
    </header>
    <main>
      <div class="gray-box">
        <p>
          下記のフォームを全て入力いただくと<br />
          こちらの枠内に自動でバナーが生成されます
        </p>
      </div>
      <p>このプロジェクトに該当するSDGｓ項目を選んでください ※複数選択可</p>
      <div class="icon-box1">
        <img src="img/1-6.png" alt="" />
      </div>
        
      <div class="icon-box2">
        <img src="img/7-12.png" alt="" />
        </div>

        <div class="icon-box3">
        <img src="img/13-18.png" alt="" />
      </div>
      <br />

      <div class="form-box">
      <form action="" method="post" class="row">
        <label for="GET-name">プロジェクト概要</label><br>
        <input class="form-style" id="GET-name" type="text" name="name" />

                <label for="GET-name">詳細</label><br>
        <input class="form-style" id="GET-name" type="text" name="name" />

                <label for="GET-name">制作期間</label><br>
        <input class="form-style" id="GET-name" type="text" name="name" />

                <label for="GET-name">
                  <input class="form" id="GET-name" type="radio" name="remote" value="リモート可"/>リモート可　
                  <input class="form" id="GET-name" type="radio" name="remote" value="リモート不可"/>不可</label><br>

          <br>

          <div class="center">
      <button class="simple_square_btn1">
        <input type="submit" value="" /><a href="ogp-new.php">送信する</a></input>
      </button>
      </div>
      <br>
<br>
      </input>
        </form>
    </main>
  </body>
</html>
