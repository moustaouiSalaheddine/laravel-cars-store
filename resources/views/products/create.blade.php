

@extends('layouts.app')
@section('style')

<style>

</style>
@stop
@section('content')
<div class="container">
  <form role="form" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
          <label>Name of car</label>
          <input type="text" name="name"  class="form-control" id="inputName" placeholder="Name"required="">
      </div>
      <div class="form-group">
          <label>Price</label>
          <input type="number" name="price" max="1000000" class="form-control" id="inputUsername" placeholder="Username" required="">
      </div>
      <div class="form-group">
          <label>Image</label>
          <input type="file" name="photo" class="form-control" id="inputEmail" placeholder="Email" accept="image/png, image/gif, image/jpeg" required="">
      </div>
      <div class="form-group">
          <label>Categorie</label>
            <select class="form-control" name="category_id" required="" required>
                <option value="null">Select categorie</option>
                
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"> 
                    {{ $category->name }} 
                </option>
                @endforeach    
            </select>
      </div>
      <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="description" id="inputMessage" placeholder="Message" required=""></textarea>
      </div>

      <div class="form-group mt-3">
          <button type="submit" class="btn btn-primary btn-block" style="background-color: #61b15a; border-color: #61b15a">Create post</button>
      </div>
  </form>
</div>

@stop

@section('script')
  <script>
      $(document).ready(function() {
          $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
          $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
      });
  </script>
@stop
