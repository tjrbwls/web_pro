<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
        <title>Registration system PHP and MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="header">
                <h2>Login</h2> <!--페이지의 제목을 "Login"으로 설정합니다.-->
        </div>
        <form method="post" action="login.php"> <!--사용자가 로그인할 수 있는 양식을 생성합니다. 양식에는 사용자 이름 및 비밀번호 필드가 포함되어 있습니다.-->

                <?php echo display_error(); ?> <!--사용자가 로그인 과정에서 오류를 발생시킨 경우 오류 메시지를 표시합니다.-->

                <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" >
                </div>
                <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                </div>
                <div class="input-group">
                        <button type="submit" class="btn" name="login_btn">Login</button> <!--사용자가 로그인 양식을 제출할 수 있는 버튼을 생성합니다.-->
                </div>
                <p>
                        Not yet a member? <a href="register.php">Sign up</a> <!--아직 회원이 아닌 사용자가 회원가입 페이지로 이동할 수 있는 링크를 제공합니다.-->
                </p>
        </form>
</body>
</html>