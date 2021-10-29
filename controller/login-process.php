
<?php

    $conn = mysqli_connect('localhost','root', '','project03');
    if(isset($_POST['buttonLogin']) == true) {
        $pass = $_POST['userPass'];
        $email = $_POST['userEmail'];

    } else {
        echo "Chua Login dc";
    }
    // cach lay pass bang cach dung ham thay doi thanh ma hasd
    
    $sql = "SELECT * from db_users where $email == user_email";
    $resuld = mysqli_query($conn, $sql);

    if(mysqli_num_rows($resuld) > 0) {
        $array = mysqli_fetch_row($resuld);
        $passHash = $array['user_pass'];

        // login thanh cong:
        if( password_verify($pass, $passHash)) {
            header('display/display.php');
            echo ('Login thanh cong');
        } else {
            echo ('Login khong thanh cong');
        }
        
    } else {
        echo('login khong thanh cong');
    }

?>