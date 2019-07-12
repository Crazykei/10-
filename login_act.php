<?php

session_start();
$pdo = db_conn();
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

try {
    $pdo = new PDO('mysql:dbname=gsf_d03_db05 charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DbConnectError :' . $e->getMessage());
}
$sql = 'SELECT * FROM user_table WHERE lid=:lid AND lpw =:lpW AND life_flg=0';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$res = $stmt->execute();

if ($res == false) {
    queryError($stmt);
}
//4. 抽出データ数を取得
$val = $stmt->fetch();

//5. 該当レコードがあればSESSIONに値を代入
if ($val['id'] != '') {
    $_SESSION = array();
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['kanri_flg'] = $val['kanri_flg'];
    $_SESSION['name'] = $val['name'];
    // ログイン成功の場合はセッション変数に値を代入
    header('Location : talent.html');
} else {
    //ログイン失敗の場合はログイン画面へ戻る
    header('Location: login.php');
}

exit();
