<?php
include '../header.php';
?>
<main>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/lotus.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Đăng nhập để Thi</h4>
                                    </div>

                                    <form>
                                        <p>Đăng nhập tài khoản thi của bạn</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example11" class="form-control" placeholder="Mã sinh viên của bạn" />
                                            <label class="form-label" for="form2Example11">Tên đăng nhập</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control" />
                                            <label class="form-label" for="form2Example22">Mật khẩu</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log in</button>
                                            <a class="text-muted" href="#!">Quên Mật Khẩu?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Chưa có tài khoản?</p>
                                            <button type="button" class="btn btn-outline-danger">Tạo mới</button>
                                        </div>

                                    </form>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include '../footer.php';
?>