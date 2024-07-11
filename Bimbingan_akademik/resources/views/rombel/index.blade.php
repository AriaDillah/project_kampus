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
                        <h1>Rombongan Belajar</h1>
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
                    <h1 class="my-4">Data Rombel & Angkatan</h1>
                    <a href="{{ route('rombels.create') }}" class="btn btn-success">Buat Rombel Baru</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Angkatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_rombel as $rombel)
                                <tr>
                                    <td>{{ $rombel->id }}</td>
                                    <td>{{ $rombel->nama }}</td> 
                                    <td>{{ $rombel->thn_masuk }}</td>
                                    <td>
                                        <a href="{{ route('rombels.show', $rombel->id) }}"   class="btn btn-info btn-sm">Show</a>
                                        <a href="{{ route('rombels.edit', $rombel->id) }}" class="btn btn-warning btn-sm">Update</a>
                                        <form action="{{ route('rombels.destroy', $rombel->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this rombel?')">Delete</button>
                                        </form>
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
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
