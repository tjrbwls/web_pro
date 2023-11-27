<?php 
session_start();

// 데이터 베이스와 연결하고 변수를 초기화 합니다.
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// 변수 선언
$username = "";
$email    = "";
$errors   = array(); 

// register_btn을 클릭하면 register () 함수를 호출합니다
if (isset($_POST['register_btn'])) {
        register();
}

// 사용자 등록
function register(){
        // 변수들을 글로벌 키워드로 호출하여 기능적으로 사용할 수 있도록 합니다
        global $db, $errors, $username, $email;

        // 모든 입력값을 받은후 e() 함수를 호출 합니다.
    // 중복 값을 피하기 위한 정의문 입니다
        $username    =  e($_POST['username']);
        $email       =  e($_POST['email']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);

        // 입력값 확인:입력값이 올바르게 작성되었는지 확인합니다
        if (empty($username)) { // 사용자 이름이 비어 있지 않은지 확인합니다.
                array_push($errors, "Username is required"); 
        }
        if (empty($email)) { // 이메일이 비어 있지 않은지 확인합니다.
                array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) { // 비밀번호가 비어 있지 않은지 확인합니다.
                array_push($errors, "Password is required"); 
        }
        if ($password_1 != $password_2) { // 두 비밀번호가 일치하는지 확인합니다.
                array_push($errors, "The two passwords do not match");
        }

        // 입력값에 오류가 없으면 사용자를 등록합니다
        if (count($errors) == 0) {
                $password = md5($password_1);//데이터베이스에 저장하기 전에 암호화를 해줍니다

                if (isset($_POST['user_type'])) { // user_type은 사용자의 유형을 나타냅니다. admin은 관리자이고 user는 일반 사용자입니다.
                        $user_type = e($_POST['user_type']);
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', '$user_type', '$password')";
                        mysqli_query($db, $query);
                        $_SESSION['success']  = "New user successfully created!!";
                        header('location: home.php');
                }else{
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', 'user', '$password')";
                        mysqli_query($db, $query);

                        // 생성된 사용자의 ID를 가져옵니다
                        $logged_in_user_id = mysqli_insert_id($db);

                        $_SESSION['user'] = getUserById($logged_in_user_id); // 로그인한 사용자를 세션에 넣습니다
                        $_SESSION['success']  = "You are now logged in";
                        header('location: index.php');                          
                }
        }
}

// id에서 사용자 배열을 반환 합니다
function getUserById($id){
        global $db;
        $query = "SELECT * FROM users WHERE id=" . $id;
        $result = mysqli_query($db, $query);

        $user = mysqli_fetch_assoc($result);
        return $user;
}

// 줄을 빠져나갑니다
function e($val){ // 입력 데이터를 안전하게 처리하는 데 사용됩니다. 이 함수는 입력 데이터에서 HTML 태그를 제거합니다.
        global $db;
        return mysqli_real_escape_string($db, trim($val));
}

function display_error() { // 오류 메시지를 표시하는 데 사용됩니다.
        global $errors;

        if (count($errors) > 0){
                echo '<div class="error">';
                        foreach ($errors as $error){
                                echo $error .'<br>';
                        }
                echo '</div>';
        }
}
function isLoggedIn() // 사용자가 로그인한 상태인지 확인하는 데 사용됩니다.
{
        if (isset($_SESSION['user'])) {
                return true;
        }else{
                return false;
        }
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}
if (isset($_POST['login_btn'])) {
    login();
}

// 사용자 로그인
function login(){
    global $db, $username, $errors;

    // 그래프 값
    $username = e($_POST['username']);
    $password = e($_POST['password']);

    // 입력값이 제대로 기입되어 있는지 확인합니다
    if (empty($username)) {
            array_push($errors, "Username is required");
    }
    if (empty($password)) {
            array_push($errors, "Password is required");
    }

    // 입력값에 오류가 없으면 로그인을 시도합니다
    if (count($errors) == 0) { 
            $password = md5($password);

            $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1) { // 사용자 찾기
                    // 사용자가 관리자인지 사용자인지 확인합니다
                    $logged_in_user = mysqli_fetch_assoc($results);
                    if ($logged_in_user['user_type'] == 'admin') {

                            $_SESSION['user'] = $logged_in_user;
                            $_SESSION['success']  = "You are now logged in";
                            header('location: admin/home.php');               
                    }else{
                            $_SESSION['user'] = $logged_in_user;
                            $_SESSION['success']  = "You are now logged in";

                            header('location: index.php');
                    }
            }else {
                    array_push($errors, "Wrong username/password combination");
            }
    }
}
function isAdmin() // 함수는 사용자가 관리자인지 확인하는 데 사용됩니다.
{
        if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
                return true;
        }else{
                return false;
        }
}