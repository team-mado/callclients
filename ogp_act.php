<?
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include('functions.php');




$clients_id = $_SESSION["id"];
$img = $_POST["img"];
$project_overview = $_POST["project_overview"];
$detail = $_POST["detail"];
$production_period = $_POST["production_period"];
$remote_availability = $_POST["remote_availability"];



// var_dump($clients_id);
// var_dump($img);
// var_dump($project_overview);
// var_dump($detail);
// var_dump($production_period);
// var_dump($remote_availability);
// exit;



// include('functions_.php');
$pdo = connect_to_db();



$sql = 'INSERT INTO ogp_table(id, clients_id, img, project_overview, detail, production_period, remote_availability) VALUES(NULL, :clients_id, :img, :project_overview, :detail, :production_period, :remote_availability)';
// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':clients_id', $clients_id, PDO::PARAM_INT);
$stmt->bindValue(':img', $img, PDO::PARAM_STR);
$stmt->bindValue(':project_overview', $project_overview, PDO::PARAM_STR);
$stmt->bindValue(':detail', $detail, PDO::PARAM_STR);
$stmt->bindValue(':production_period', $production_period, PDO::PARAM_STR);
$stmt->bindValue(':remote_availability', $remote_availability, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // header("Location:ogp_check.php");
  // exit();
}


// 入れたばかりのデータを持ってくる
$pdo = connect_to_db();
// $sql = "SELECT * FROM ogp_table where id ";
$sql = "SELECT * FROM ogp_table WHERE id = (SELECT MAX(id) FROM ogp_table); ";
$stmt = $pdo->prepare($sql);
// $stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $posts = $stmt->fetch(PDO::FETCH_ASSOC);
  $id = $posts["id"];
  $clients_id = $posts["clients_id"];
  $img = $posts["img"];
  $project_overview = $posts["project_overview"];
  $detail = $posts["detail"];
  $production_period = $posts["production_period"];
  $remote_availability = $posts["remote_availability"];
  // var_dump($id);
  // exit;

  header("Location:ogp_check.php?id=<?echo($id) ?>");
  exit();
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>