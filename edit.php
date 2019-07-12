<?php
$user = "keisuke";
$pass = "Talentinfo`kn590720";
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
    $sql = "SELECT * FROM talent_info WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
} catch (Exception $e) {
    echo "エラー発生:" . htmlspecialchars(
        $e->getMessage(),
        ENT_QUOTES,
        'UTF-8'
    ) . "<br>";
    die();
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>タレント登録フォーム</title>
</head>

<body>
    タレント情報登録フォーム　<br>
    <form method="post" action="update.php">
        性:<input type="text" name="talent_sei" value size="10" style="ime-mode:auto" value="<?php echo htmlspecialchars($result['talent_sei'], ENT_QUOTES, 'UTF-8'); ?>"><br>

        名:<input type="text" name="talent_mei" value size="10" style="ime-mode:auto" value="<?php echo htmlspecialchars($result['talent_mei'], ENT_QUOTES, 'UTF-8'); ?>"><br>

        セイ:<input type="text" name="kana_sei" value size="10" style="ime-mode:auto" value="<?php echo htmlspecialchars($result['kana_sei'], ENT_QUOTES, 'UTF-8'); ?>"><br>

        メイ:<input type="text" name="kana_mei" value size="10" style="ime-mode:auto" value="<?php echo htmlspecialchars($result['kana_mei'], ENT_QUOTES, 'UTF-8'); ?>"><br>

        住所:<input type="text" name="addr11" size="60" value="<?php echo htmlspecialchars($result['addr11'], ENT_QUOTES, 'UTF-8'); ?>"><br>

        メールアドレス:<input type="text" name="mail" required value size="40" style="ime-mode:disabled" value="<?php echo htmlspecialchars($result['addr11'], ENT_QUOTES, 'UTF-8'); ?>"><br>

        電話１<input type="text" name="tell1" required value size="5" style="ime-mode:disabled" value="<?php echo htmlspecialchars($result['tel1'], ENT_QUOTES, 'UTF-8'); ?>"><br>

        電話２<input type="text" name="tell2" required value size="5" style="ime-mode:disabled" value="<?php echo htmlspecialchars($result['tel2'], ENT_QUOTES, 'UTF-8'); ?>"><br>

        電話3<input type="text" name="tell3" required value size="5" style="ime-mode:disabled" value="<?php echo htmlspecialchars($result['tel3'], ENT_QUOTES, 'UTF-8'); ?>"><br>

        写真<input type="file" name="img" value size="5" style="ime-mode:disabled" value="<?php echo htmlspecialchars($result['img'], ENT_QUOTES, 'UTF-8'); ?>"><br>



        <input type="hidden" name="id" value="<?php echo htmlcpecialchars($result['id'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="submit" value="登録内容を確認する">
    </form>
</body>

</html>