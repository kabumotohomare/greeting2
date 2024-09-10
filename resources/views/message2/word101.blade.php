<?php
// 時間と対応する挨拶を格納する配列
$aisatsu = [
    "朝のあいさつ" => "おはようございます",
    "昼のあいさつ" => "こんにちは",
    "夕方のあいさつ" => "こんばんは",
    "夜のあいさつ" => "おやすみ"
];

//ランダムにkeyを取得する
$random_key = array_rand($aisatsu);

//出力したkeyに対応するvalueを取得する
$selected_value = $aisatsu[$random_key];

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ランダムなメッセージ</title>
</head>
<h1>{{ $random_key }}</h1>
<h2>{{ $selected_value }}</h2>
<body>
    
</body>
</html>
