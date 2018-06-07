@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
                <center> <div class="panel-heading">ABSENSI</div></center>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>Selamat Datang Diadmin<br>
                    <a href="{{ route('absensi.index') }}">Absensi</a></center>

                    info pengguna:<br>
                    Aplikasi web ini hanya untuk merekam data kelas<br><br>
                    tatacara memasukan data siswa:<br>
                    1.masukan terlebih dahulu data kelas anda.<br>
                    2.masukan data siswa terlebih dahulu.<br>
                    3.masukan data absensi.<br><br>

                    tatacara menghapus data siswa:<br>
                    1.hapus dulu data absen.<br>
                    2.hapus data siswa.<br>
                    3.kemudian hapus data kelas<br>


                </font></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
