@extends('adminMaster.admin')
@section('title','ps08200')

@section('form-add-user')

{{
    Form::open(array('url'=>'admin'))
}}
<h1>Name</h1>
{{ Form::text('name')}}
<h1>Age</h1>
{{ Form::text('age')}}
<h1>Provine</h1>
{{Form::select('provine',$provine)}}
{{Form::submit('Thêm')}}

{{Form::close()}}
@endsection




