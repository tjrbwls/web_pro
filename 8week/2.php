<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>문제 2번</title>
</head>

<body>

<?php
	$n = 10;
	
	function factorial($n) {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
          $result *= $i;
        }
        return $result;
      }

      echo "{$n}의 factorial은 {$result}입니다.";
?>

</body>

</html>