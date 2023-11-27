<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head> 
        <title>Registration system PHP and MySQL</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
        <h2>Register</h2> <!--페이지의 제목을 "Register"로 설정합니다.-->
</div>
<form method="post" action="register.php"> <!--사용자가 등록할 수 있는 양식을 생성합니다. 양식에는 사용자 이름, 이메일, 비밀번호, 비밀번호 확인 필드가 포함되어 있습니다-->
<?php echo display_error(); ?> <!--사용자가 등록 과정에서 오류를 발생시킨 경우 오류 메시지를 표시합니다-->
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
        </div>
        <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_2">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="register_btn">Register</button> <!--사용자가 등록 양식을 제출할 수 있는 버튼을 생성합니다-->
        </div>
        <p>
                Already a member? <a href="login.php">Sign in</a> <!--이미 회원인 사용자가 로그인 페이지로 이동할 수 있는 링크를 제공합니다-->
        </p>
</form>
</body>
</html>