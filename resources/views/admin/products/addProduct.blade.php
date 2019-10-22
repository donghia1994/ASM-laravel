@extends('adminMaster.admin')
@section('add-product')
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Name</label>
      <input type="text" class="product_name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPrice">Price</label>
      <input type="text" class="product_price">
    </div>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Number</label>
      <input type="number" class="product_num">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">DE</label>
      <input type="text" class="product_description">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
@endsection