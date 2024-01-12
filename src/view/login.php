<?php session_start(); ?>
<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    
    <header class="container">
        <h1>ログイン</h1>
    </header>
    
    <form action="login.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <label for="email">メールアドレス</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレスを入力してください">
                </div>
                <div class="col-12">
                    <label for="password">パスワード</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="パスワードを入力してください">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">ログイン</button>
                </div>
            </div>
        </div>
        