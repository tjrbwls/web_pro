<?php 
        include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="header">
                <h2>Home Page</h2> <!--페이지 제목을 "Home Page"로 정의하고 일반 프로필 사진을 <img> 태그를 사용하여 표시합니다-->
        </div>
        <div class="content"> <!--성공 메시지와 프로필 정보를 표시할 컨테이너를 포함합니다-->
                <!-- 알림 메시지 -->
                <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" > <!--스타일 지정을 위한 클래스입니다-->
                                <h3>
                                        <?php 
                                                echo $_SESSION['success']; 
                                                unset($_SESSION['success']);
                                        ?>
                                </h3>
                        </div>
                <?php endif ?>
                <!-- 로그인한 사용자 정보 -->
                <div class="profile_info">
                        <img src="images/user_profile.png"  >

                        <div>
                                <?php  if (isset($_SESSION['user'])) : ?> <!-- 로그인한 사용자의 프로필 정보, 사용자 이름 및 사용자 유형을 표시합니다. isset() 함수를 사용하여 사용자가 로그인되어 있는지 확인합니다-->
                                        <strong><?php echo $_SESSION['user']['username']; ?></strong>

                                        <small>
                                                <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                                                <br>
                                                <a href="index.php?logout='1'" style="color: red;">logout</a>
                                        </small>

                                <?php endif ?>
                        </div>
                </div>
        </div>
</body>
</html>
<?php
include('functions.php');
if (!isLoggedIn()) { // 현재 사용자가 로그인되어 있는지 확인합니다. 로그인되어 있지 않으면 사용자를 로그인 페이지로 리다이렉트합니다.
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
}
