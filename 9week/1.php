<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>문제 1번</title>
</head>

<body>

<?php

    for ($i = 1; $i <= 5; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo chr(65 + $j);
        }
        echo PHP_EOL;
    }

?>

</body>

</html>