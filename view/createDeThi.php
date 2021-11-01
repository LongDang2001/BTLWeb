


<?php
    include 'header.php';
?>

<main class="container">
        <h2>Add De Thi tieng Anh </h2>
        <h4> chon de thi de them </h4>

        
        


        <form action="process-add-cauhoi.php" method="POST">

            <div class="form-group row">
                <label for="choncauhoi" class="col-sm-2 col-form-label">
                    Chọn Kiểu Câu Hỏi: 
                </label>
                <select name="choncauhoi" id="choncauhoi">
                    <option value="Adjectives">
                    Adjectives
                    </option>
                    <option value="Adverbs"> Adverbs </option>
                    <option value="Business Writing"> Business Writing </option>
                    <option value="Commas"> Commas </option>
                </select>
                
            </div> <br>

            <!-- <div class="form-group row">
                <label for="stt" class="col-sm-2 col-form-label">STT Cau Hoi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="stt" name="stt" >
                </div>
            </div> -->
            
            <div class="form-group row">
                <label for="cauhoi1" class="col-sm-2 col-form-label">Câu hỏi 1</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="cauhoi1" name="cauhoi1" >
                </div>
            </div>
            <div class="form-group row">
                <label for="cauhoi2" class="col-sm-2 col-form-label">Câu hỏi 2</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="cauhoi2" name="cauhoi2">
                </div>
            </div>
            <div class="form-group row">
                <label for="dapan1" class="col-sm-2 col-form-label">dapan1</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="dapan1" name="dapan1">
                </div>
            </div>
            <div class="form-group row">
                <label for="dapan2" class="col-sm-2 col-form-label">dapan2</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="dapan2" name="dapan2">
                </div>
            </div>
            <div class="form-group row">
                <label for="dapan3" class="col-sm-2 col-form-label">dapan3</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="dapan3" name="dapan3">
                </div>
            </div>
            <div class="form-group row">
                <label for="dapandung" class="col-sm-2 col-form-label">dapandung</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="dapandung" name="dapandung">
                </div>
            </div>
            

            

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>

                </div>
            </div>
        </form>
    </main>

<?php
    if(isset($_POST["submit"])) {
        include 'process-add-cauhoi.php';
    }

?>


