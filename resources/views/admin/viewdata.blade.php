
@extends('adminMaster.admin')
@section("view-user")
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Provine</th>
            <th>Att</th>
        </tr>
    </thead>
    <tbody>
    @foreach ( $view as $row)
        <tr>
            <td>{{ $row->user_id}}</td>
            <td>{{ $row->user_name}}</td>
            <td>{{ $row->user_age}}</td>
            <td>{{ $row->user_province}}</td>
            <td><a href="/admin/viewdata/edit/{{$row->user_id}}">Edit</a> | 
            
            <form action="/admin/viewdata/destroy/{{$row->user_id}}"method="post">
            @method('DELETE')
             @csrf
             <button type="submit">Delete</button>

            </form>
            
        </tr>
        @endforeach
    </tbody>
    <button type="submit"><a href="{{url('admin/index')}}">Add</a> </button>
</table>
@endsection