<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>문제 5번</title>
</head>

<body>

<?php
	$fp = fopen("client.txt", "r");

    while (!feof($fp)) {
      $line = fgets($fp);
    
      $arr = explode("\t", $line);
    
      if ($arr[1] >= 30) {
        echo "이름: $arr[0] 나이: $arr[1] 성별: $arr[2] 이메일: $arr[3]\n";
      }
    }
    
    fclose($fp);
    
?>

</body>

</html>
