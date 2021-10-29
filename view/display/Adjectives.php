<?php

include '../header.php';
?>

<div class="container ">

    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 border bg-light">Custom column padding</div>
            </div>
            <div class="col">
                <div class="p-3 border bg-light">Custom column padding</div>
            </div>
        </div>
    </div>

    <?php
    include '../../model/conflig.php';
    //$conn = mysqli_connect('localhost', 'root', '', 'BTL');
    $sql = "SELECT * FROM cauhoi";
    $resuld = mysqli_query($conn, $sql);

    if (mysqli_fetch_row($resuld) > 0) {

        while ($row = mysqli_fetch_assoc($resuld)) {
            // xay dung  giao  dien  o  trong : 

            echo '<div class="col"> ';

            echo '<h3>' . $row['idCauHoi'] . ': ' . $row['textCauHoi1'] . '  ................  ' . $row['textCauHoi2'] . '</h3>';

            echo '<div class="container overflow-hidden">';
            echo '<div class="row gx-5">';
                echo '<div class=" p-3 border bg-light">';
                    echo '<div class="form-check">';

                        echo '<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">';
                        echo '<label class="form-check-label" for="flexCheckDefault">';
                            echo '<p>' .$row['textDapAn1']. '</p>';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';
                echo '<div class=" p-3 border bg-light">';
                    echo '<div class="form-check">';
                        echo '<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >';
                        echo '<label class="form-check-label" for="flexCheckChecked">';
                        echo '<p>' .$row['textDapAn2']. '</p>';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';
                echo '<div class=" bg-success p-3 border bg-light">';
                    echo '<div class="form-check">';
                        echo '<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >';
                        echo '<label class="form-check-label" for="flexCheckChecked">';
                        echo '<p>' .$row['textDapAn3']. '</p>';
                        echo '</label>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        }

        echo '<h1>' . $row['CauTraLoi'] . '</h1>';
    } else {
        echo 'Khong co ket qua: ';
    }

    // truy xuat myqli huowngs doi tuong: 
    // lay ra  giao dien, hien thi du lieu ra va nem no vao trong table: 

    // tinh ket qua dung va sai: lay ra dc ket qua dung:
    
    ?>

</div>