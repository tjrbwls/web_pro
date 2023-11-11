<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>문제 1번</title>
</head>

<body>

<?php
	$a = 10;
	
	function next_odd_or_even($a) {
        if ($a % 2 == 1) {
          return $a + 1;
          echo "{$a}는 홀수 입니다.";
        } else {
          return $a;
          echo "{$a}는 짝수 입니다.";
        }
      }
?>

</body>

</html>