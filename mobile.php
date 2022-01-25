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
        <a href=""><img class="header_icon" src="logo.svg" alt="sai3 icon"></a>
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
            <h3><?php echo $c11 ?></h3>
        </div>
		<div id="hr">
            <img src="file\11.png" alt="">
            <h2>12HR</h2>
            <h1>まさかさかさま</h1>
            <h3><?php echo $c11 ?></h3>
        </div>
		<div id="hr">
            <img src="file\11.png" alt="">
            <h2>13HR</h2>
            <h1>まさかさかさま</h1>
            <h3><?php echo $c11 ?></h3>
        </div>
		<div id="hr">
            <img src="file\11.png" alt="">
            <h2>14HR</h2>
            <h1>まさかさかさま</h1>
            <h3><?php echo $c11 ?></h3>
        </div>
    </div>


	<script type="text/javascript">
	function classify(){
		var waiting11 = <?php echo $c11 ?> ; 
		changeColor(waiting11, 11);

		var waiting12 = <?php echo $c12 ?> ; 
		changeColor(waiting12, 12);

		var waiting13 = <?php echo $c13 ?> ; 
		changeColor(waiting13, 13);

		var waiting14 = <?php echo $c14 ?> ; 
		changeColor(waiting14, 14);

		var waiting15 = <?php echo $c15 ?> ; 
		changeColor(waiting15, 15);

		var waiting16 = <?php echo $c16 ?> ; 
		changeColor(waiting16, 16);

		var waiting17 = <?php echo $c17 ?> ; 
		changeColor(waiting17, 17);

		var waiting21 = <?php echo $c21 ?> ; 
		changeColor(waiting21, 21);

		var waiting22 = <?php echo $c22 ?> ; 
		changeColor(waiting22, 22);

		var waiting23 = <?php echo $c23 ?> ; 
		changeColor(waiting23, 23);

		var waiting24 = <?php echo $c24 ?> ; 
		changeColor(waiting24, 24);

		var waiting25 = <?php echo $c25 ?> ; 
		changeColor(waiting25, 25);

		var waiting26 = <?php echo $c26 ?> ; 
		changeColor(waiting26, 26);
		
	}

	function changeColor(waiting, hr){
		let hr_id = 'cell' + hr ;
		var obj = document.getElementById(hr_id); 
		if(waiting == '準備完了'){
    		obj.style.backgroundColor = '#ff0000b4'; 
		}else if(waiting == '準備中'){
			obj.style.backgroundColor = 'white'; 
		}else{
		}
	}

	window.onload = classify();
	</script>
</body>

</html>
