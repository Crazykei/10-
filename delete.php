<?php
$sser = "keisuke";
$pass = "Talentinfo`kn590720";
try {
    if (empty($_GET['id'])) throw new Exception('id不正');
    $id = (int)$_GET['id'];
    $dbh = new PDO(
        'mysql:host=localhost;dbname=talent_info;charset=utf8',
        $user,
        $pass
    );
    $sql = "DELETE * FROM talent_info WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $dbh = null;
    echo "ID: " . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . "の削除が完了しました";
} catch (Exception $e) {
    echo "エラー発生:" . htmlspecialchars(
        $e->getMessage(),
        ENT_QUOTES,
        'UTF-8'
    ) . "<br>";
    die();
}
