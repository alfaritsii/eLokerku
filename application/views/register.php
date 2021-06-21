<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <div class="container" style="">
        <div class="col-12 col-lg-12" style="margin-top:10%">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mt-3">Registrasi ELokerku V.1</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="<?= base_url() ?>Auth/actionregister">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" name="namalengkap" class="form-control"
                                                placeholder="Nama Lengkap" id="user-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" name="nik" class="form-control"
                                                placeholder="NIK" id="id-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-credit-card-2-front"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" name="alamat" class="form-control"
                                                placeholder="Alamat" id="pin-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-geo-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text"
                                            for="inputGroupSelect01">Jenis Kelamin</label>
                                        <select class="form-select" name="jenis_kelamin" id="inputGroupSelect01">
                                            <option selected>Pilih...</option>
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" name="tempatlahir" class="form-control"
                                                    placeholder="Tempat Lahir" id="email-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-geo-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <div class="input-group mb-3">
                                    <label class="input-group-text"
                                        for="inputGroupSelect01">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control"
                                                placeholder="Tempat Lahir" id="email-id-icon">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" name="telp" class="form-control"
                                                placeholder="Nomor Telepon" id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email" id="email-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password" id="password-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="password" name="repassword" class="form-control"
                                                placeholder="Retype Password" id="password-id-icon">
                                            <div class="form-control-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit"
                                        class="btn btn-primary me-1 mb-1">Daftar Sekarang</button>
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
