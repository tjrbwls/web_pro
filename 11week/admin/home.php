<?php 
include('../functions.php');

if (!isAdmin()) { // 현재 사용자가 관리자인지 확인합니다. 관리자가 아닌 경우 사용자를 로그인 페이지로 리다이렉트합니다.
        $_SESSION['msg'] = "You must log in first";
        header('location: ../login.php');
}

if (isset($_GET['logout'])) { // URL에 logout 매개변수가 있으면 세션을 제거하고 사용자 정보를 설정 취소하고 사용자를 로그인 페이지로 리다이렉트합니다.
        session_destroy();
        unset($_SESSION['user']);
        header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title> <!--페이지 제목을 "Home"으로 정의하고 CSS를 사용하여 배경색을 설정합니다.-->
        <link rel="stylesheet" type="text/css" href="../style.css">
        <style>
        .header {
                background: #003366;
        }
        button[name=register_btn] {
                background: #003366;
        }
        </style>
</head>
<body>
        <div class="header">
                <h2>Admin - Home Page</h2>
        </div>
        <div class="content"> <!--관리자 홈 페이지의 주요 내용, 성공 메시지, 프로필 정보 및 새 사용자를 생성하는 링크를 표시합니다-->
                <!-- 알림 메시지 -->
                <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
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
                        <img src="../images/admin_profile.png"  > <!--로그인한 사용자의 프로필 정보, 사용자 이름, 사용자 유형 및 로그아웃 옵션을 표시합니다-->

                        <div>
                                <?php  if (isset($_SESSION['user'])) : ?>
                                        <strong><?php echo $_SESSION['user']['username']; ?></strong>

                                        <small>
                                                <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                                                <br>
                                                <a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a> <!--관리자 사용자가 새 사용자를 생성할 수 있도록 링크를 제공합니다-->
                                        </small>

                                <?php endif ?>
                        </div>
                </div>
        </div>
</body>
</html>