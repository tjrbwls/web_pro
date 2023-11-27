<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
        <title>Registration system PHP and MySQL - Create user</title> <!--페이지 제목을 "Admin - create user"로 정의하고 CSS를 사용하여 배경색을 설정합니다.-->
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
                <h2>Admin - create user</h2>
        </div>
        
        <form method="post" action="create_user.php"> <!--관리자 사용자가 새 사용자를 생성할 수 있는 폼을 생성합니다. 폼에는 사용자 이름, 이메일, 사용자 유형, 비밀번호 및 비밀번호 확인 입력 필드가 포함됩니다.-->

                <?php echo display_error(); ?> <!--사용자 생성 프로세스 중에 발생한 오류 메시지를 표시합니다.-->

                <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                </div>
                <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="input-group">
                        <label>User type</label>
                        <select name="user_type" id="user_type" >
                                <option value=""></option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                        </select>
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
                        <button type="submit" class="btn" name="register_btn"> + Create user</button> <!--사용자 생성 프로세스를 트리거하기 위해 " + Create user" 레이블이 있는 제출 버튼을 생성합니다.-->
                </div>
        </form>
</body>
</html>