

<?php

    // cho nay la them cai bien  vao trong csdl, noi chung la phai nho lay cau lenh: 
    $choncauhoi = $_POST['choncauhoi'];
    //$stt = $_POST['stt'];
    $cauhoi1 = $_POST['cauhoi1'];
    $cauhoi2 = $_POST['cauhoi2'];
    $dapan1 = $_POST['dapan1'];
    $dapan2 = $_POST['dapan2'];
    $dapan3 = $_POST['dapan3'];
    $dapandung = $_POST['dapandung'];

    include '../model/conflig.php';
   // $conn = mysqli_connect('localhost', 'root', '', 'BTL');

    // Bước 02:
    $sql = "INSERT INTO $choncauhoi VALUES ($cauhoi1','$cauhoi2','$dapan1','$dapan2','$dapan3', '$dapandung')";
    //(id, cauhoi1, cauhoi2, dapan1, dapan2, dapan3, dapandung)
    echo $sql;
    $result = mysqli_query($conn,$sql);
    // Bước 03:
    
    if(mysqli_fetch_row($result)) {
        echo 'aaaaaa';
        header("index.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);

?>