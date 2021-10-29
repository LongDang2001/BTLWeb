<?php

include '../header.php';
?>

<div class="container ">


    <?php
    include '../../model/conflig.php';
    //$conn = mysqli_connect('localhost', 'root', '', 'BTL');
    $sql = "SELECT * FROM cauhoi";
    $resuld = mysqli_query($conn, $sql);
    
    $demKetQua = 0;

    if (mysqli_fetch_row($resuld) > 0) {
        $row = mysqli_fetch_assoc($resuld);
        while ($row = mysqli_fetch_assoc($resuld)) {
            // xay dung  giao  dien  o  trong : 

        echo '<div class="col" method="POST" > ';

            echo '<h3>' . $row['idCauHoi']. ': ' . $row['textCauHoi1'] . '  ................  ' . $row['textCauHoi2'] . '</h3>';

            echo '<div class="container overflow-hidden">';
            echo '<div class="row gx-5">';
                echo '<div class=" p-3 border bg-light">';
                    echo '<div class="form-check">';

                        echo '<input class="form-check-input" type="checkbox" value="' .$row['textDapAn1'].'" id="flexCheckDefault">';
                        echo '<label class="form-check-label" for="flexCheckDefault">';
                            echo '<p>' .$row['textDapAn1']. '</p>';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';
                echo '<div class=" p-3 border bg-light">';
                    echo '<div class="form-check">';
                        echo '<input class="form-check-input" type="checkbox" value=" '.$row['textDapAn2'].'" id="flexCheckChecked" >';
                        echo '<label class="form-check-label" for="flexCheckChecked">';
                        echo '<p>' .$row['textDapAn2']. '</p>';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';
                echo '<div class=" bg-success p-3 border bg-light">';
                    echo '<div class="form-check">';
                        echo '<input class="form-check-input" type="checkbox" value=" '.$row['textDapAn3'].' " id="flexCheckChecked" >';
                        echo '<label class="form-check-label" for="flexCheckChecked">';
                        echo '<p>' .$row['textDapAn3']. '</p>';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';

            if ($row['cauTraLoi'] = isset($_POST['flexCheckChecked'])) {
                $demKetQua += 1;
            }

        echo '</div>';

        

        }
        echo '<div>' ;
            ' Danh sach cau tra loi la: ';
            echo '<div>' .$row['cauTraLoi']. '</div>';

            

        '/<div>';

    
    } else {
        echo 'Khong co ket qua: ';


    }

    echo '<button type="button bg-succes " name="btSave" >';
            'aaaaa';
    echo '</button>';

    // hien thi ra ket qua: 
    echo $demKetQua;
    echo '<p>';
        'IDem cua ban la: ' ;
    '</p>';


    // truy xuat myqli huowngs doi tuong: 
    // lay ra  giao dien, hien thi du lieu ra va nem no vao trong table: 

    
    
    // handle  ket qua: 
    // Ma duoi nay se set ket qua khi nguoi dung bam vao nut luu: v
    ?>

    

    <div>
        
    </div>

    


</div>