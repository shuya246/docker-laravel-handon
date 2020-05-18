@extends('layouts.template')

@section('main')
 @foreach ($users as $user)
     <table>
        <tr>
            <th>氏名</th>
            <th>Eメール</th>
            <th>権限</th>
        </tr>
        <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        </tr>
     </table>
 @endforeach   
@endsection