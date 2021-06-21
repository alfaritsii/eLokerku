<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <div class="container" style="">
        <div class="col-12 col-lg-12" style="margin-top:50%">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mt-3">Login ELokerku V.1</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="<?= base_url() ?>Auth/aksilogin">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="email-id-icon">Email</label>
                                        <div class="position-relative">
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Email" id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="password-id-icon">Password</label>
                                        <div class="position-relative">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password" id="password-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit"
                                        class="btn btn-primary me-1 mb-1">Login</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Daftar</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>             
        </div>
    </div>
</main>
<script src="<?= base_url()?>assets/js/sweetalert2.all.css"></script>
<?php if ($this->session->flashdata('logingagal')){?>
 <script>Swal.fire('Login Gagal','Harap cek kembali username dan password','error');</script>
<?php $this->session->set_flashdata('',''); }?>
