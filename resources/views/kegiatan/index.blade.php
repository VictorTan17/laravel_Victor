@extends('layout')
@section('isi')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>KEGIATAN VICTOR BERSAMA</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kegiatan.create') }}"> Create New Kegiatan</a>
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
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kegiatan as $k)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $k->tanggal }}</td>
            <td>{{ $k->jam }}</td>
            <td>{{ $k->deskripsi }}</td>
            <td style="text-align:center">
                <form action="{{ route('kegiatan.destroy',$k->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('kegiatan.show',$k->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('kegiatan.edit',$k->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $kegiatan->links() !!}
      
@endsection