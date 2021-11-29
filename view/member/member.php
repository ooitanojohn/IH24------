<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/dist.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<h1>アカウント登録</h1>
    <form action="insert.php" method="POST" enctype="multipart/form-data">
    <span class="label">メールアドレス</span>
    <input type="text" name="name" class="input_text" value="<?php echo $_POST['name'] ?? '' ?>"><br>
    <?php echo $_SESSION['error'] ?? ''; ?><br>
    <span class="label">ユーザーID</span>
    <input type="text" name="user" class="input_text" value="<?php echo $_POST['user'] ?? '' ?>"><br>
    <?php echo $_SESSION['error2'] ?? ''; ?>
    <?php echo $_SESSION['error3'] ?? ''; ?><br>
    <span class="label">パスワード</span>
    <input type="password" name="pas" class="input_text" value="<?php echo $_POST['pas'] ?? '' ?>"><br>
    <?php echo $_SESSION['error4'] ?? ''; ?>
    <?php echo $_SESSION['error5'] ?? ''; ?><br>

    <h1>お客様の基本情報</h1>
    <span class="label">氏名（フルネーム）</span>
    <input type="text" name="name" placeholder="例）HAL太郎" value="<?php echo $_POST['name'] ?? '' ?>"><br>
    <?php echo $_SESSION['error6'] ?? ''; ?>
    <?php echo $_SESSION['error7'] ?? ''; ?><br>
    <span class="label">氏名（フリガナ）</span>
    <input type="text" name="hurigana" placeholder="例）ハルタロウ" value="<?php echo $_POST['hurigana'] ?? '' ?>"><br>
    <?php echo $_SESSION['error8'] ?? ''; ?><br>
    <input type="submit" name="touroku" value="登録">
    </form>
    <?php $_SESSION = [] ?>
<div>
</body>
</html>
