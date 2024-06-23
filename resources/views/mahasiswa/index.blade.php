@extends('mahasiswa.layout')

@section('content')
<div class="row mt-5">
   <div class="col-lg-12 margin-tb">
      <div class="float-start">
         <h2>Crud Mahasiswa</h2>
      </div>
      <div class="float-end">
         <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">Create New Mahasiswa</a>
      </div>
   </div>
</div>

@if ($message = Session::get('success'))
   <div class="alert alert-success">
      <p>{{ $message }}</p>
   </div>
@endif

<table class="table table-bordered">
   <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th width="280px">Action</th>
   </tr>
   @php $i = 1; @endphp
   @foreach ($mahasiswa as $row)
   <tr>
      <td>{{ $i++ }}</td>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->kelas }}</td>
      <td>
         <form action="{{route('mahasiswa.destroy', $row->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <a href="{{route('mahasiswa.edit', $row->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
            <a href="{{route('mahasiswa.show', $row->id)}}" class="btn btn-sm btn-outline-primary">Show</a>
            <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
         </form>
      </td>
   </tr>
   @endforeach
</table>
@endsection