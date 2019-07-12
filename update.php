<?php
$user = "keisuke";
$pass = "Talentinfo`kn590720";
$user = "keisuke";
$pass = "Talentinfo`kn590720";

$talent_sei = $_POST['talent_sei'];
$talent_mei = $_POST['talent_mei'];
$kana_sei = $_POST['kana_sei'];
$kana_mei = $_POST['kana_mei'];
$zip11 = $_POST['zip11'];
$mail = $_POST['mail'];
$tel1 = $_POST['tell1'];
$tel2 = $_POST['tell2'];
$tel3 = $_POST['tell3'];
$img = $_POST['img'];

try {
    if (empty($_GET['id'])) throw new Exception('id不正');
    $id = (int)$_GET['id'];
    $dbh = new PDO(
        'mysql:host=localhost;dbname=talent_info;charset=utf8',
        $user,
        $pass
    );
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE talent_info SET talent_name = ?, talent_mei= ?, kana_sei=?, kana_mei=?, zip11=?, mail=?, tell1=?, tell2=?, tell3=?,img=?, WHERE id = ?";
    $stmt->bindValue(1, $talent_sei, PDO::PARAM_STR);
    $stmt->bindValue(2, $talent_mei, PDO::PARAM_STR);
    $stmt->bindValue(3, $kana_sei, PDO::PARAM_STR);
    $stmt->bindValue(4, $kana_mei, PDO::PARAM_STR);
    $stmt->bindValue(5, $zip11, PDO::PARAM_STR);
    $stmt->bindValue(6, $mail, PDO::PARAM_STR);
    $stmt->bindValue(7, $tell1, PDO::PARAM_STR);
    $stmt->bindValue(8, $tell2, PDO::PARAM_STR);
    $stmt->bindValue(9, $tell3, PDO::PARAM_STR);
    $stmt->bindValue(10, $tell3, PDO::PARAM_STR);
    $stmt->bindValue(10, $img, PDO::PARAM_STR);


    $stmt->execute();
    $dbh = null;
    echo "ID: " . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . "登録更新が完了しました";
} catch (Exception $e) {
    echo "エラー発生:" . htmlspecialchars(
        $e->getMessage(),
        ENT_QUOTES,
        'UTF-8'
    ) . "<br>";
    die();
}
