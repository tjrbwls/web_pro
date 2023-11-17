<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>문제 1번</title>
</head>

<body>

<?php
	$people = [
        "Kim" => "Seoul",
        "Lee" => "Pusan, Daegu",
        "Choi" => "Inchon",
        "Park" => "Suwon, Daejon",
        "Jung" => "Kwangju, Chunchon, Wonju",
      ];
      
      unset($people["Choi"]);
      
      foreach ($people as $name => $cities) {
        echo "$name: $cities\n";
      }
?>

</body>

</html>