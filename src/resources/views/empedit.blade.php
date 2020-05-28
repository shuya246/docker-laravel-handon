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
                @if ($errors->has('name'))
                <tr><td>{{ $errors->first('name') }}</td></tr>
                @endif
                <td><input type="text" name="email" value="{{ $users->email }}"></tr>
                    @if ($errors->has('email'))
                <tr><td>{{ $errors->first('email') }}</td></tr>
                    @endif
                <td><input type="password" name="password" value=""></td>
                @if ($errors->has('password'))
                <tr><td>{{ $errors->first('password') }}</td></tr>
                @endif
                <td>
                    <select name="role">
                        <option value="owner">owner</option>
                        <option value="staff">staff</option>
                    </select>
                </td>
                @if ($errors->has('role'))
            <tr><td>{{ $errors->first('role') }}</td></tr>
                @endif
                </tr>
            </table>
        </div>
    <input type="hidden" name="id" value="{{$users->id}}">
        <input type="submit" name="btn btn-info" value="編集する">
    </form>
@endsection