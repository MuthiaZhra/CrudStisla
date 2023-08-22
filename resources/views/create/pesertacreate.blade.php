@extends('layout.content')
@section('content')
<section class="section">
    <div class="section-header">
        <h1 style= "color: #279EFF">Tambah Data Siswa</h1>
    </div>
    <div class="card">
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body ">
                    <form method="POST" action="{{ url('pesertastore')}} ">
                    @csrf
                    <div class="form-group">
                        <label for="nis">NISN</label>
                        <input type="number" id="nis" class="form-control" name="nis">
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">Nama Lengkap</label>
                        <input type="text" id="namalengkap" class="form-control" name="namalengkap">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                            <option value=""placeholder="Pilih" selected ></option>
                            <option value="L">Laki Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" id="tgllahir" class="form-control" name="tgllahir">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" id="kelas" class="form-control" name="kelas">
                    </div>
                    <div class="form-group">
                        <label for="nilai_web">Nilai Web</label>
                        <input type="number" id="nilai_web" class="form-control" name="nilai_web">
                    </div>
                    <div class="form-group">
                        <label for="nilai_pbo">Nilai Pbo</label>
                        <input type="number" class="form-control" id="nilai_pbo" name="nilai_pbo">
                    </div>
                    <div class="form-group">
                        <label for="nilai_db">Nilai DB</label>
                        <input type="number" id="nilai_db" class="form-control" name="nilai_db">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
@endsection