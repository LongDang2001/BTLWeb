
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
$sql = "SELECT * FROM Adverbs";
$resuld = mysqli_query($conn, $sql);
$demketqua = 0;

if (mysqli_fetch_row($resuld) > 0) {

    while ($row = mysqli_fetch_assoc($resuld)) {
        // xay dung  giao  dien  o  trong : 

    echo '<div action="process_resuld method = "POST" class="col" > ';

        echo '<h3>' . $row['id'] . ': ' . $row['cauhoi1'] . '  ................  ' . $row['cauhoi2'] . '</h3>';

        echo '<div class="container overflow-hidden">';
        echo '<div class="row gx-5">';
            echo '<div class=" p-3 border bg-light">';
                echo '<div class="form-check">';

                    echo '<input class="form-check-input" type="checkbox" value=" '.$row['dapan1'].' " id="flexCheckDefault">';
                    echo '<label class="form-check-label" for="flexCheckDefault">';
                        echo '<p>' .$row['dapan1']. '</p>';
                    echo '</label>';
                echo '</div>';
            echo '</div>';
            echo '<div class=" p-3 border bg-light">';
                echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="checkbox" value=" '.$row['dapan2'].'" id="flexCheckChecked" >';
                    echo '<label class="form-check-label" for="flexCheckChecked">';
                    echo '<p>' .$row['dapan2']. '</p>';
                    echo '</label>';
                echo '</div>';
            echo '</div>';
            echo '<div class=" bg-success p-3 border bg-light">';
                echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="checkbox" value=" '.$row['dapan3'].' " id="flexCheckChecked" >';
                    echo '<label class="form-check-label" for="flexCheckChecked">';
                    echo '<p>' .$row['dapan3']. '</p>';
                    echo '</label>';
                echo '</div>';
            echo '</div>';
        echo '</div>';

        // handle lai cai lay ket qua: 
        
        if(!empty($flexCheckDefault) && $flexCheckDefault = $row["dapandung"]) {
            $demketqua += 1;
            echo "checked = 'checked' ";

        }
    echo '</div>';
    
    
    
    }

    

    echo '<h1>' . $row['dapandung'] . '</h1>';
    echo '<div class="form-group row">';
    echo '<label for="empMobile" class="col-sm-2 col-form-label"></label>';
    echo '<div class="col-sm-10">';
        echo '<button type="submit" class="btn btn-success">Lưu lại</button>';

    echo '</div>';
    echo '</div>';
    echo $demketqua;

    
} else {
    echo 'Khong co ket qua: ';
}

// truy xuat myqli huowngs doi tuong: 
// lay ra  giao dien, hien thi du lieu ra va nem no vao trong table: 

// tinh ket qua dung va sai: lay ra dc ket qua dung:

?>

</div>