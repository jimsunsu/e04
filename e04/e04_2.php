<html>



<head>


<?php

	$beg_num = $_POST['beg_num'];
	$end_num = $_POST['end_num'];
	$chk_num = $_POST['chk_num'];


	function calResult($beg_num, $end_num, $chk_num) {


		$i = 0;
		$ret = "";
		$beg = 0;
		$end = 0;
		$chk = $chk_num;


		if ($end_num <= $beg_num) {

			$beg =  $end_num; 
			$end =  $beg_num;

		} else {

			$beg =  $beg_num; 
			$end =  $end_num;

		}


		for ($i=$beg; $i<=$end; $i++) {
	     	

			if (($i%$chk) != 0) {
				continue;
			}
			
			$ret = $i.",";
			$i = $i + $chk;



			while ($i <= $end) {

				$ret = $ret.$i.",";
				$i = $i + $chk;

			}


		return $ret;
		}

	}


?>


<body>





<?php

	if ( $beg_num =="" || $beg_num <=0) {

		echo "<p>起始數字不可為空且必須為正數<br><br>請回上一頁重新輸入</p>";
		return;
	}

	if ( $end_num =="" || $end_num <=0) {

		echo "<p>終止數字不可為空且必須為正數<br><br>請回上一頁重新輸入</p>";
		return;
	}

	if ( $chk_num =="" || $chk_num <=0) {		

		echo "<p>檢查因數不可為空且必須為正數<br><br>請回上一頁重新輸入</p>";
		return;				
	}


?>


	<h1>倍數產生機</h1>

	
	<p>起始數字：<?php echo $beg_num; ?></p>
	<p>終止數字：<?php echo $end_num; ?></p>	
	<p>檢查因數：<?php echo $chk_num; ?></p>


	<p>產生結果：<?php echo calResult($beg_num, $end_num, $chk_num); ?></p><br>


</body>
</html>	 