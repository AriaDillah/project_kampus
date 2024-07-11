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
                        <h1>Dosen Kampus</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">dosen</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card text-dark">
                <div class="card-header bg-dark ">
                    <h3 class="card-title">Data</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="my-4">Informasi Dosen Kampus</h1>
                    <a href="{{ route('dosens.create') }}" class="btn btn-success">Daftarkan Dosen baru</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>Tempat lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>ID Program Studi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_dosen as $dosen)
                                <tr>
                                    <td>{{ $dosen->id }}</td>
                                    <td>{{ $dosen->nidn }}</td>
                                    <td>{{ $dosen->nama }}</td> 
                                    <td>{{ $dosen->tmp_lahir }}</td>
                                    <td>{{ $dosen->tgl_lahir }}</td> 
                                    <td>{{ $dosen->gender }}</td>
                                    <td>{{ $dosen->prodi_id }}</td> 
                                    <td>
                                        <a href="{{ route('dosens.show', $dosen->id) }}"   class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Update</a>
                                        <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this dosen data?')">Delete</button>
                                        </form>
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
