<?php
// print_r($_POST);
// var_dump($_POST);
// exit();


// if (
//     !isset($_POST['name_sei']) || $_POST['name_sei'] == '' ||
//     !isset($_POST['mail']) || $_POST['mail'] == ''
// ) {
//     exit('ParamError');
// }

$name_sei = $_POST['name_sei'];
$name_mei = $_POST['name_mei'];
$kana_sei = $_POST['kana_sei'];
$kana_mei = $_POST['kana_mei'];
$addr11 = $_POST['addr11'];
$mail = $_POST['mail'];
$tell1 = $_POST['tell1'];
$tell2 = $_POST['tell2'];
$tell3 = $_POST['tell3'];
$img = $_POST['img'];


$dbn = 'mysql:dbname=talent_info;charset=utf8;port=3306;host=localhost';
$user = 'keisuke';
$pwd = 'Talentinfo`kn590720';

try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    exit('dbError:' . $e->getMessage());
}

$sql = 'INSERT INTO talent_info(id,name_sei,name_mei,kana_sei,kana_mei,addr11,mail,tell1,tell2,tell3,img) 
VALUES (NULL,:a1,:a2,:a3,:a4,:a5,:a6,:a7,:a8,:a9,:a10)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name_sei, PDO::PARAM_STR);
$stmt->bindValue(':a2', $name_mei, PDO::PARAM_STR);
$stmt->bindValue(':a3', $kana_sei, PDO::PARAM_STR);
$stmt->bindValue(':a4', $kana_mei, PDO::PARAM_STR);
$stmt->bindValue(':a5', $addr11, PDO::PARAM_STR);
$stmt->bindValue(':a6', $mail, PDO::PARAM_STR);
$stmt->bindValue(':a7', $tell1, PDO::PARAM_INT);
$stmt->bindValue(':a8', $tell2, PDO::PARAM_INT);
$stmt->bindValue(':a9', $tell3, PDO::PARAM_INT);
$stmt->bindValue(':a10', $img, PDO::PARAM_STR);

$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    header('Location: talent.html');
}

// echo nl2br(htmlspecialchars($_POST['talent_sei'], ENT_QUOTES, 'UTF-8'));
// echo "<br>";

// echo nl2br(htmlspecialchars($_POST['talent_mei'], ENT_QUOTES, 'UTF-8'));
// echo "<br>";

// echo nl2br(htmlspecialchars($_POST['kana_sei'], ENT_QUOTES, 'UTF-8'));
// echo "<br>";

// echo nl2br(htmlspecialchars($_POST['kana_mei'], ENT_QUOTES, 'UTF-8'));
// echo "<br>";

// echo nl2br(htmlspecialchars($_POST['addr11'], ENT_QUOTES, 'UTF-8'));
// echo "<br>";

// echo nl2br(htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8'));
// echo "<br>";

// echo nl2br(htmlspecialchars($_POST['tell1'], ENT_QUOTES, 'UTF-8'));
// echo "<br>";

// echo nl2br(htmlspecialchars($_POST['tell2'], ENT_QUOTES, 'UTF-8'));
// echo "<br>";

// echo nl2br(htmlspecialchars($_POST['tell3'], ENT_QUOTES, 'UTF-8'));
// echo "<br>";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>出力結果</title>
</head>

<body>
</body>

</html>