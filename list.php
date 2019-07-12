<?php
$user = "keisuke";
$pass = "Talentinfo`kn590720";
try {
    $dbh = new PDO(
            'mysql:host=localhost;dbname=talent_info;charset=utf8',
            $user,
            $pass
        );
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM talent_info";
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchAll(PDO::ATTR_FETCH_ASSOC);
    echo "<table>\n";
    echo "<tr>\n";
    echo "<th>氏名</th><th>カナ</th><th>住所</th><th>メール</th><th>電話番号</th><th>メール</th>\n";
    echo "</tr>\n";
    foreach ($result as $row) {
        echo "<tr>\n";
        echo "<td>" . $row['talent_sei'] . $row['talent_mei'] . "<td>\n";
        echo "<td>" . $row['kana_sei'] . $row['kana_mei'] . "<td>\n";
        echo "<td> " . $row['mail']  . "<td>\n";
        echo "</tr>\n";
    }
    echo "</table>\n";
    // print_r($result);
    $dbh    = null;
} catch (Exception $e) {
    echo "エラー発生: " . htmlspecialchars($e->getMessage(), ENT_QUATES, 'UTF-8 ')    . "<br>";
    die();
}
