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
                        <h1>Program Studi Kampus</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
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
                    <h1 class="my-4">Daftar Program Studi</h1>
                    <a href="{{ route('prodis.create') }}" class="btn btn-success">Tambahkan Prodi Baru</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_prodi as $prodi)
                                <tr>
                                    <td>{{ $prodi->id }}</td>
                                    <td>{{ $prodi->kode }}</td>
                                    <td>{{ $prodi->nama }}</td> 
                                    <td>
                                        <a href="{{ route('prodis.show', $prodi->id) }}"   class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('prodis.edit', $prodi->id) }}" class="btn btn-warning btn-sm">Update</a>
                                        <form action="{{ route('prodis.destroy', $prodi->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this prodi?')">Delete</button>
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
