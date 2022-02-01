<?php
//エラー表示あり
ini_set('display_errors', 1);
//日本時間にする
date_default_timezone_set('Asia/Tokyo');
//URL/ディレクトリ設定
define('HOME_URL', '/TwitterClone01/');
//データベースの接続情報
define('DB_HOST', 'mysql57.haru034.sakura.ne.jp');
define('DB_USER', 'haru034');
define('DB_PASSWORD', 'Kz2bUarET5Xf');
define('DB_NAME', 'haru034_twitter_clone');