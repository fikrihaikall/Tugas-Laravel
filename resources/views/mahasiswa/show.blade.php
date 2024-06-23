@extends ('mahasiswa.layout')
@section ('content')
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div>
         <h2>Show Mahasiswa</h2>
      </div>
      <div>
         <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Back</a>
      </div>
   </div>
</div>

<div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Nama :</strong>
         {{ $mahasiswa->nama }}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Kelas :</strong>
         {{ $mahasiswa->kelas }}
      </div>
   </div>
</div>
@endsection