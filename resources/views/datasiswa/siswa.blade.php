@extends('bagian.sidebar')

@section('content')
    
    <table class="table table-striped" style="text-align:center; margin-top:4%;">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
                <th>No Handphone</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $j)
            <tr>
                <td>{{ $j->nama }}</td>
                <td>{{ $j->tempat_lahir }}</td>
                <td>{{ $j->tanggal_lahir }}</td>
                <td>{{ $j->kelas }}</td>
                <td>{{ $j->phone }}</td>
                <td>{{ $j->alamat }}</td>
                <td>{{ $j->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection