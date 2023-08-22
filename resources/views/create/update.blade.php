@extends('layout.content')
@section('content')
<section class="section">
    <div class="section-header">
        <h1 style="color: #1186FF">Edit Data </h1>
    </div>
    <form  method="post"action="{{ route('peserta.update', $peserta_tabel->id) }}" >
      @csrf
      @method('PUT')
        <div class="card">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="text" name="nis" class="form-control" placeholder="12108767"  value="{{ $peserta_tabel->nis }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="namalengkap" class="form-control" placeholder="Mutehoy"  value="{{ $peserta_tabel->namalengkap }}" required>
                                </div>
                                <label>Jenis Kelamin</label>
                                <select  class="form-control" id="jk"name="jk" required>
                                    <option value="L" {{ $peserta_tabel->jk === 'L' ? 'selected' : 'L' }}>Laki-laki</option>
                                    <option value="P" {{ $peserta_tabel->jk === 'P' ? 'selected' : 'P' }}>Perempuan</option>
                                </select>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgllahir" class="form-control"  value="{{ $peserta_tabel->tgllahir }}"required>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" name="kelas" class="form-control" placeholder="XII RPL 1"  value="{{ $peserta_tabel->kelas }}"required>
                                </div>
                                <div class="form-group">
                                    <label>Nilai Web</label>
                                    <input type="text" name="nilai_web" class="form-control" placeholder="100"  value="{{ $peserta_tabel->nilai_web }}"required>
                                </div>
                                <div class="form-group">
                                    <label>Nilai Pbo</label>
                                    <input type="text" name="nilai_pbo" class="form-control" placeholder="100"  value="{{ $peserta_tabel->nilai_pbo }}"required>
                                </div>
                                <div class="form-group">
                                    <label>Nilai Database</label>
                                    <input type="text" name="nilai_db" class="form-control" placeholder="100"  value="{{ $peserta_tabel->nilai_db }}"required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection 
