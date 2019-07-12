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
    echo "氏名:" . htmlspecialchars($result['talent_sei'] . $result['talent_mei'], ENT_QUOTES, 'UTF-8') . "<br>\n";
    echo "カナ:" . htmlspecialchars($result['kana_sei'] . $result['kana_mei'], ENT_QUOTES, 'UTF-8') . "<br>\n";
    echo "住所:" . htmlspecialchars($result['zip11'], ENT_QUOTES, 'UTF-8') . "<br>\n";
    echo "メール:" . htmlspecialchars($result['mail'], ENT_QUOTES, 'UTF-8') . "<br>\n";
    echo "電話:" . htmlspecialchars($result['tell1'] . $result['tell2'] . $result['tell3'], ENT_QUOTES, 'UTF- 8') . "<br>\n";
    $dbh = null;
} catch (Exception $e) {
    echo "エラー発生:" . htmlspecialchars(
        $e->getMessage(),
        ENT_QUOTES,
        'UTF-8'
    ) . "<br>";
    die();
}
