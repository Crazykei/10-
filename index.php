<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タレント情報登録</title>
</head>

<body>
    <h1>登録タレント一覧</h1>
    <a href="talent.html">タレント</a>

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
        echo "<th>氏名</th><th>カナ</th><th>住所</th><th>メール</th><th>電話番号</th><th>メール</th><th><写真></th>\n";
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
