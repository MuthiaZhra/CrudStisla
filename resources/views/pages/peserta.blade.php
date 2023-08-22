@extends('layout.content')
@section('content')
<section class="section">
    <div class="section-header">
        <h1 style="color: #279EFF">Data Siswa</h1>
    </div>
    <div class="card">
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                 
                  <div class="card-body ">
                    <div class="table-responsive">
                        <a href="{{ url('pesertacreate') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a><br><br>
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>NIS</th>
                          <th>Nama Lengkap</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Lahir</th>
                          <th>Kelas</th>
                          <th>Nilai Web</th>
                          <th>Nilai PBO</th>
                          <th>Nilai DB</th>
                          <th>Action</th>
                        </tr>
                        @foreach ( $peserta as $p )
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $p->nis }}</td>
                          <td>{{ $p->namalengkap }}</td>
                          <td>{{ $p->jk }}</td>
                          <td>{{ $p->tgllahir }}</td>
                          <td>{{ $p->kelas }}</td>
                          <td>{{ $p->nilai_web }}</td>
                          <td>{{ $p->nilai_pbo }}</td>
                          <td>{{ $p->nilai_db }}</td>
                          <td >
                          
                          
                            <div class="btn-group">
                              <a href="{{ route('peserta.edit', $p->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                              {{-- <form action="{{ route('peserta.edit', $p->id) }}"  >

                                <!-- Form fields here -->
                                <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            </form> --}}
                            {{-- <a href="{{route('peserta.destroy', $p->id)}}"
                              class="btn btn-danger" onclick="event.preventDefault();
                              if (confirm('Apakah Anda Nyakin Ingin Menghapus Data?')){
                                document.getElementById('delete-form-{{$p->id}}').submit();
                              }">
                              <i class="fas fa-trash-alt"></i>
                            
                            </a>
                                <form action="{{ route('peserta.destroy', $p->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  
                                </form>  --}}
                               
  <a href="{{ route('peserta.destroy', $p->id) }}"
     class="btn btn-danger"
     onclick="event.preventDefault();
              if (confirm('Apakah Anda Yakin Ingin Menghapus Data?')) {
                document.getElementById('delete-form-{{$p->id}}').submit();
              }">
    <i class="fas fa-trash-alt"></i>
  </a>
  <form id="delete-form-{{$p->id}}" action="{{ route('peserta.destroy', $p->id) }}" method="POST">
    @csrf
    @method('DELETE')
  </form>

                                    
                            
                          
                    
                            </div>
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
  

</section>
@endsection