@include('admin.header')
@include('admin.sidebar')
<div class="container-fluid px-4 bg-secondary">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper bg-secondary">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>PROFIL ADMIN</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header bg-white">
                    <h3 style="font-weight: bold;" class="card-title">Kelompok II</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body bg-dark text-white">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="text-center mr-2">
                            <img src="assets/img/personal.jpg" alt="Foto Pegawai" class="img-thumbnail mt-4" style="width: 300px; height: 300px;">
                            <p class="mt-2 font-weight-bold">Muhammad Andhika thata</p>
                            <p class="mt-2 font-weight-bold">0110223053</p>
                        </div>
                        <div class="text-center mr-2">
                            <img src="assets/img/Avatar (Yoshi).jpg" alt="Foto Pegawai" class="img-thumbnail mt-4" style="width: 300px; height: 300px;">
                            <p class="mt-2 font-weight-bold">Yoshi Indra Kusuma</p>
                            <p class="mt-2 font-weight-bold">0110223063</p>
                        </div>
                        <div class="text-center mr-2">
                            <img src="assets/img/Oni II .jpg" alt="Foto Pegawai" class="img-thumbnail mt-4" style="width: 300px; height: 300px;">
                            <p class="mt-2 font-weight-bold">C3</p>
                            <p class="mt-2 font-weight-bold">01102230??</p>
                        </div>
                        <div class="text-center">
                            <img src="assets/img/Oni I .jpg" alt="Foto Pegawai" class="img-thumbnail mt-4" style="width: 300px; height: 300px;">
                            <p class="mt-2 font-weight-bold">D4</p>
                            <p class="mt-2 font-weight-bold">01102230??</p>
                        </div>
                    </div>
                </div>
        </section>
        <section class="content mb-4">
            <!-- Default box -->
            <div class="card bg-dark">
                <div class="card-header bg-white">
                    <h3 style="font-weight: bold;" class="card-title">Konten</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="row mt-4 mr-2 ml-2">
                    <div class="col-lg-3 col-md-6 col-12 pb-4">
                        <!-- small box -->
                        <div class="small-box bg-info pb-4 d-flex flex-column">
                            <a href="../admin/mahasiswa" class="small-box-footer flex-grow-1" style="color: white;">
                                <div class="inner">
                                    <h3>Mahasiswa</h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <a href="../admin/mahasiswa" class="small-box-footer mt-auto">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- small box -->
                        <div class="small-box bg-success pb-4 d-flex flex-column">
                            <a href="../admin/dosen" class="small-box-footer flex-grow-1 " style="color: white;">
                                <div class="inner">
                                    <h3>Dosen</h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <a href="../admin/dosen" class="small-box-footer mt-auto">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- small box -->
                        <div class="small-box bg-warning text-white pb-4 d-flex flex-column">
                            <a href="../admin/prodi" class="small-box-footer flex-grow-1" style="color: white;">
                                <div class="inner">
                                    <h3>Prodi</h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <a href="../admin/prodi" class="small-box-footer mt-auto">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- small box -->
                        <div class="small-box bg-danger pb-4 d-flex flex-column">
                            <a href="../admin/rombel" class="small-box-footer flex-grow-1" style="color: white;">
                                <div class="inner">
                                    <h3>Rombel</h3>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="../admin/rombel" class="small-box-footer mt-auto">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
@include('admin.footer')
