@extends('bagian.sidebar')

@section('content')
<a href="/jadwal/cetak_pdf" class="btn btn-primary" target="_blank" style="margin-top:3%;">CETAK PDF</a>

<form action="{{ url('/jadwal/cari') }}" method="GET">
    {{ @csrf_field() }}
    <input type="text" name="name" placeholder="Ingin mencari apa ?" class="form-control">
    <input type="submit" class="btn btn-md btn-outline-primary" >
</form>
        
    <table class="table table-striped" style="text-align:center; margin-top:2px;">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Jam</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal as $j)
            <tr>
                <td>{{ $j->hari }}</td>
                <td>{{ $j->tanggal }}</td>
                <td>{{ $j->nama_guru }}</td>
                <td>{{ $j->mata_pelajaran }}</td>
                <td>{{ $j->jam }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection