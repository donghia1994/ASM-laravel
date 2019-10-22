@extends('adminMaster.admin')

@section("view-product")
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Số Lượng</th>
            <th>Price</th>
            <th>Chú thích</th>
            <th>Tùy chỉnh</th>
        </tr>
    </thead>
    <tbody>
    @foreach ( $view_product as $row)
        <tr>
            <td>{{ $row->product_id}}</td>
            <td>{{ $row->product_name}}</td>
            <td>{{ $row->product_num}}</td>
            
            <td>{{ $row->product_price}}</td>
            <td>{{ $row->product_description}}</td>
            <td><a href="/admin/view_Product/edit/{{$row->product_id}}">Edit</a> | 
            
            <form action="/admin/view_Product/destroy/{{$row->product_id}}"method="post">
            @method('DELETE')
             @csrf
             <button type="submit">Delete</button>

            </form>
            
        </tr>
        @endforeach
    </tbody>
    <button type="submit"><a href="{{url('/admin/products/addProduct')}}">Add</a> </button>
</table>
@endsection