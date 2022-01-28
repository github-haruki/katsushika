<?php
// カウント数取得関数
function get_count($file) {
	$filename = 'data/'.$file.'.dat';
	$fp = @fopen($filename, 'r');
	if ($fp) {
		$vote = fgets($fp, 9182);
	} else {
		$vote = 0;
	}
	return $vote;
}

$c11 = get_count('11');
$c12 = get_count('12');
$c13 = get_count('13');
$c14 = get_count('14');
$c15 = get_count('15');
$c16 = get_count('16');
$c17 = get_count('17');
$c21 = get_count('21');
$c22 = get_count('22');
$c23 = get_count('23');
$c24 = get_count('24');
$c25 = get_count('25');
$c26 = get_count('26');
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signage</title>
	<link rel="stylesheet" href="mobile.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
		<div class="justbackground"></div>
        <a href=""><img class="header_icon" src="file/logo.svg" alt="sai3 icon"></a>
		<div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
              </div>
            <nav class="hamburger_list">
                <a href="index.html"><h1 class="header_home">HOME</h1></a>
                <a href="index.html#contents_link"><h1 class="header_contents">CONTENTS</h1></a>
                <a href="articles.html"><h1 class="header_articles">ARTICLES</h1></a>
                <a href="about.html"><h1 class="header_about">ABOUT</h1></a>
            </div>
    </div>
	
    <div class="signage">
		<img src="file\title.svg" alt="" class="title">
		<div class="mokuji">
                <div id="grade"><a href="#kouichi"><p class="kouiti"></p></a><h2>高１</h2></div>
                <div id="grade"><p class="kouni"></p><h2>高２</h2></div>
                <div id="grade"><p class="kousan"></p><h2>高３</h2></div>
                <div id="grade"><p class="buten"></p><h2>部展</h2></div>
            </div>
        <div id="hr">
            <img src="file\11.png" alt="">
            <h2>11HR</h2>
            <h1>まさかさかさま</h1>
            <h3><?php echo $c11 ?>分</h3>
        </div>
		<div id="hr">
            <img src="file\11.png" alt="">
            <h2>12HR</h2>
            <h1>まさかさかさま</h1>
            <h3><?php echo $c12 ?>分</h3>
        </div>
		<div id="hr">
            <img src="file\11.png" alt="">
            <h2>13HR</h2>
            <h1>まさかさかさま</h1>
            <h3><?php echo $c13 ?>分</h3>
        </div>
		<div id="hr">
            <img src="file\11.png" alt="">
            <h2>14HR</h2>
            <h1>まさかさかさま</h1>
            <h3><?php echo $c14 ?>分</h3>
        </div>
    </div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('.hamburger').click(function() {
                $(this).toggleClass('active');
                if ($(this).hasClass('active')) {
                    $('.hamburger_list').addClass('active');
                } else {
                    $('.hamburger_list').removeClass('active');
                }
            });
        });   
    </script>
</body>
</html>
