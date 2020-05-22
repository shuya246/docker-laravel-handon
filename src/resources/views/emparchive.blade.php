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
<form action="{{ route('empdelete', $user->id) }}" method="POST">
    @csrf

    <input class="btn btn-danger" type="submit" value="削除する" >
</form>
{{-- <form action="{{ route('empdelete') }}" method="POST">
    @csrf
    @method("DELETE")
    <input type="hidden" name="id" value="{{ $user->id }}">
    <button class="btn btn-danger" type="submit">削除</button>
</form> --}}
 @endforeach   
@endsection