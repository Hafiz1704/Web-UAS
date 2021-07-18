@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Makul</h5>
                </div>

                <div class="card-body">
                <br>
                <a href="{{ route('tambah_makul') }}" class="btn btn-success btn-md float-left">Tambah Data</a><br><br>                
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                            <tr>
                                <th style="text-align:center;">No</th>
                                <th>Kode Makul</th>
                                <th>Nama Makul</th>
                                <th>SKS</th>
                                <th style="width:150px; text-align:center;">Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($makul as $mk)  
                            <tr>
                                <td style="text-align:center;"><?php echo $no++; ?></td>
                                <td>{{ $mk->kode_makul }}</td>
                                <td>{{ $mk->nama_makul }}</td>
                                <td>{{ $mk->sks }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('edit_makul', $mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_makul', $mk->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
