

<main class= "container"> 

    <?php
        $idXoa = $_GET['id'];

    ?>

    <form action="" method="POST">
    <div class="form-group row">

        <label for="choncauhoi" class="col-sm-2 col-form-label">
            Chọn Kiểu Câu Hỏi: 
        </label>
        <select name="chonloaide" id="chonloaide">
            <option value="Adjectives">
            Adjectives
            </option>
            <option value="Adverbs"> Adverbs </option>
            <option value="Business Writing"> Business Writing </option>
            <option value="Commas"> Commas </option>
        </select>  <br> <br>

        <label for="chonId" class="col-sm-2 col-form-label">
            Chọn ID để xoá:  
        </label>
        <select name="chonId" id="chonId">
            <?php

                include '../model/conflig.php';
                $sql = "SELECT id from Adjectives ";
                $resuld = mysqli_query($sql, $conn);
                if ( $resuld == true ) {
                    while ($row = mysqli_fetch_assoc($resuld)) {
                        echo '<option value = " '.$row['office_id'].' ">'.$row['office_id'].' </option>';
                    }
                 }
            ?>
        </select>
        
        <div>
            <label for="submit"> Xoa de thi</label>
            <input type="submit" name="xoadethi" id="xoadethi" >
        </div>

    </div> <br>
    </form>

</main>

<?php

    $tableServer = $_POST['chonloaide'];
    $id = $_GET['id'];

    if(isset($_POST["submit"])) {
        // xoa de
        $sql = "DELETE from $tableServer where id = $id";
        $resuld = mysqli_query($conn, $sql);
        if($resuld == true) {
            echo "Da Xoa Duoc ";
            header('location: index.php');
        } else {
            echo " Ko xoa Dc";
            header('location: index.php');
        }

    }


?>



