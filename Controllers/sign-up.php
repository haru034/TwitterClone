<?php
////////////////////////////////////
// サインアップコントローラー
////////////////////////////////////

// 設定を読み込み
include_once '../config.php';
// 便利な関数を読み込む
include_once '../util.php';
//ユーザーデータ操作モデルを読み込み
include_once '../Models/users.php';

//ユーザー設定
// - 今回は$_POSTを使用しているが、filter_inputという便利な関数があるので覚えておく。
if (isset($_POST['nickname']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $data = [
        'nickname' => $_POST['nickname'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];
    if (createUser($data)) {
        //ログイン画面に遷移
        header('Location: ' . HOME_URL .'Controllers/sign-in.php');
        exit;
    }
}

//画面表示
include_once '../Views/sign-up.php';
