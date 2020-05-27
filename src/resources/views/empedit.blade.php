@extends('layouts.template')

@section('main')
    <div class="title">
        <h3>従業員情報編集</h3>
        
    </div>
    
    <form action="{{ route('empupdate') }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="container">
            <table class="table">
                <tr>
                    <th>氏名</th>
                    <th>Eメール</th>
                    <th>パスワード</th>
                    <th>権限</th>
                </tr>
                <tr>
                <td><input type="text" name="name" value="{{ $users->name }}"></td>
                <td><input type="text" name="email" value="{{ $users->email }}"></td>
                <td><input type="password" name="password" value="{{ $users->password }}"></td>
                <td>
                    <select name="role">
                        <option value="owner">owner</option>
                        <option value="staff">staff</option>
                    </select>
                </td>
                </tr>
            </table>
        </div>
    <input type="hidden" name="id" value="{{$users->id}}">
        <input type="submit" name="btn btn-info" value="編集する">
    </form>
@endsection