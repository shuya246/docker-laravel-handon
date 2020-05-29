@extends('layouts.template')

@section('main')
 @foreach ($users as $user)
     <table class="table">
        <thead>
        <tr>
            <th scope="col">氏名</th>
            <th scope="col">Eメール</th>
            <th scope="col">権限</th>
            <th scope="col">編集</th>
            <th scope="col">削除</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        <td><a href="{{ route('empedit',$user->id) }}">編集する</a></td>
        <td>
            <form action="{{ route('empdelete', $user->id) }}" method="POST">
                @csrf
                <input class="btn btn-danger" type="submit" value="削除する" >
            </form>
        </td>
        </tr>
        </tbody>
    </table>
 @endforeach   
@endsection