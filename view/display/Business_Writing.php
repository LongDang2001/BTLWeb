
<div class="container">
    <?php
    include '../../model/conflig.php';
    // truy xuat myqli huowngs doi tuong: 
    // lay ra  giao dien, hien thi du lieu ra va nem no vao trong table: 
    
    echo '<h3> Tieu de cua de bai aaaa </h3>';
    ?>
    <div>
        <h3> Tieu de cua de bai </h3>
        <a href="Adjectives1.php" style="color: blue;">  continue </a>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Checked checkbox
            </label>
        </div>
    </div>

</div>


<?php
include '../footer.php';

?>