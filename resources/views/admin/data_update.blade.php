


@extends('adminMaster.admin')
@section('update-form-user')
    <form action="/admin/viewdata/update/{{$view_user->user_id}}" method="post">
        @method('PATCH')
        @csrf
    <input type="hidden" name="id" value="{{$view_user->user_id}}">
    <p>
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$view_user->user_name}}">
    
    </p>
    <p>
    <label for="age">Age</label>
    <input type="text" name="age" value="{{$view_user->user_age}}">
    
    </p>
    <p>
    
    <label for="age">Provine</label>

    <input type="text" name="provine" value="{{$view_user->user_province}}">
 
    
    </p>
    <button type="submit">
    Sửa
    
    </button>
</form>
@endsection
