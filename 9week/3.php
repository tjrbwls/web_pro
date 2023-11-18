<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>문제 3번</title>
</head>

<body>

<?php
	$lines = 0;
    $words = 0;
    $letters = 0;
    
    $fp = fopen("exam.txt", "r");
    
    while (!feof($fp)) {
      $line = fgets($fp);
      $lines++;
    
      $words += count(explode(" ", $line));
      $letters += strlen($line);
    }
    
    fclose($fp);
    
    echo "줄 수: $lines\n";
    echo "단어 수: $words\n";
    echo "글자 수: $letters\n";
?>

</body>

</html>
