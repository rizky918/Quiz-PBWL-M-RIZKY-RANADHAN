@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-3">
            <h1>Data User</h1>
            <hr>
            <table class="table my-3 table-striped" id="dtb">
                <thead>
                    <tr>
                        <th>#No</th>
                        <th>Nama</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
