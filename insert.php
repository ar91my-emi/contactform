<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");

$sql = "insert into contactform (name, mail, age, comments) values (?,?,?,?)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(1, $_POST['name']);
$stmt->bindParam(2, $_POST['mail']);
$stmt->bindParam(3, $_POST['age']);
$stmt->bindParam(4, $_POST['comments']);

$stmt->execute();
?>

<!doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
   <title>問い合わせフォームを作る</title>
<link rel="stylesheet"type="text/css" href="style2.css">
</head>

<body>
    <h1>問い合わせフォーム</h1>
    <div class="confirm">
        <p>
            問い合わせ有難うございました。<br>３営業日以内に担当者より連絡差し上げます。
        </p>
    </div>
</body>
</html>