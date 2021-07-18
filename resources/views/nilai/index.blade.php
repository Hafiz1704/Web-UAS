@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Nilai</h5>
                </div>

                <div class="card-body">
                <br>
                <a href="{{ route('tambah_nilai') }}" class="btn btn-success btn-md float-left">Tambah Data</a><br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th style="text-align:center;">No</th>
                                <th>NPM</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Makul</th>
                                <th>SKS</th>
                                <th>Nilai</th>
                                <th style="width:150px; text-align:center;">Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($nilai as $nil)  
                            <tr>
                                <td style="text-align:center;"><?php echo $no++; ?></td>
                                <td>{{ $nil->mahasiswa->npm }}</td>
                                <td>{{ $nil->mahasiswa->user->name }}</td>
                                <td>{{ $nil->makul->nama_makul }}</td>
                                <td>{{ $nil->makul->sks }}</td>
                                <td>{{ $nil->nilai }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('edit_nilai', $nil->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus_nilai', $nil->id) }}" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
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
