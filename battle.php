<?php
$hands = ['グー', 'チョキ', 'パー'];

if (isset($_POST['player'])) {

  $player = $_POST['player'];

  $key = array_rand($hands);
  
  $pcHand = $hands[$key];

  if ($player == $pcHand) {
    $result ='あいこ';
  } elseif ($player == 'グー' && $pcHand == 'チョキ') {
    $result = '勝ち';
  } elseif ($player == 'チョキ' && $pcHand == 'パー') {
    $result = '勝ち';
  } elseif ($player == 'パー' && $pcHand == 'グー') {
    $result = '勝ち';
  } else {
    $result = '負け';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="battle.css">
</head>
<body>
  <div class="container">
    <h1>勝敗の行方は？？？</h1>
    <div>
      <p><?= $result ?>！</p>

      <p>私：<?= $player ?></p>

      <p>敵(PC)：<?= $pcHand ?></p>

      <button type="button" onclick="history.back();">もう一回勝負！！</button>
  </div>
</body>
</html>