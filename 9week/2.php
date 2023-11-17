<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>문제 1번</title>
</head>

<body>

<?php
	$arr = [1, 2, 3, 4, 5];
	
	function revsort($arr) {
        sort($arr, SORT_DESC);
        return $arr;
    }

    print_r(revsort($arr));
?>

</body>

</html>