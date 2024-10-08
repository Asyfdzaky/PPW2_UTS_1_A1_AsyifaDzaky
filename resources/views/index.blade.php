@extends('components.layout')
@section('content')
<div class="container">
    <table border="1" class="table">
        <thead >
            <th>no</th>
            <th>id</th>
            <th>nama pemain</th>
            <th>nomer punggung</th>
            <th>posisi</th>
        </thead>
        <tbody>
            @foreach ($pemain as $index => $pemain)
                <tr>
                    <th>{{ $index + 1 }}</th>
                    <td>{{ $pemain->id }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
