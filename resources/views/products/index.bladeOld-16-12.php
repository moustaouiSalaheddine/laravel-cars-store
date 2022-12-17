

@extends('layouts.app')
@section('style')

<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
  body{
    background: #F5F1EE;
    font-family: 'Roboto', sans-serif;
  }
  .card{
    /* width: 250px; */
    border-radius: 10px;
  }

  .card-img-top{
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
  }
  span.text-muted{
    font-size: 12px;
  }
  small.text-muted{
    font-size: 8px;
  }
  h5.mb-0{
    font-size: 1rem;
  }
  small.ghj{
    font-size: 9px;
  }
  .mid{
    background: #ECEDF1;
  }
  h6.ml-1{
    font-size: 13px;
  }
  small.key{
    text-decoration: underline;
    font-size: 9px;
    cursor: pointer;
  }
  .btn-danger{
    color: #FFCBD2;
  }
  .btn-danger:focus{
    box-shadow: none;
  }
  small.justify-content-center{
    font-size: 9px;
    cursor: pointer;
    text-decoration: underline;
  }

  @media screen and (max-width:600px){
      .col-sm-4{
          margin-bottom: 50px;
      }
  }
</style>
@stop
@section('content')
  <div class="container-fluid d-flex justify-content-center">
      <div>
          <form role="form" method="POST" action="{{ route('filter') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Categorie</label>
                  <select class="form-control" name="category_id" required="">
                      <option value="0">Select categorie</option>
                      
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}"> 
                          {{ $category->name }} 
                      </option>
                      @endforeach    
                  </select>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary btn-block" style="background-color: #61b15a; border-color: #61b15a">Send</button>
            </div>
         </form>
      </div>
      <div class="row mt-5">
        @foreach ($products as $product)
            {{-- <div class="col-sm-4 mt-5 mx-md-n5"> --}}
            <div class="col-sm-4" style="margin-bottom: 20px">
              <div class="card">
                  {{-- <img src="{{Storage::url($product->image)}}" class="card-img-top" width="100%" > --}}
                  <img src="{{Storage::url($product->image)}}" class="card-img-top" width="100%" height="250px" style="object-fit: cover;">
                  {{-- <img src="{{base_path($product->image)}}" class="card-img-top" width="100%"> --}}
                  {{-- <img src="{{asset($product->image)}}" class="card-img-top" width="100%"> --}}
                  <div class="card-body pt-0 px-0">
                    <div class="d-flex flex-row justify-content-between mb-0 px-3">
                        <small class="fs-4 fw-bold text-muted mt-1 text-primary">{{ $product->name }}</small>
                        {{-- <small class="text-muted mt-1">{{ $product->user->name }}</small> --}}
                        <h4 class="fw-bold mt-2">&dollar;{{ $product->price }}&ast;</h4>
                    </div>
                    <hr class="mt-2 mx-3">
                    {{-- <div class="d-flex flex-row justify-content-between px-3 pb-4">
                        <div class="d-flex flex-column"><span class="text-muted">Fuel Efficiency</span><small class="text-muted">L/100KM&ast;</small></div>
                        <div class="d-flex flex-column">
                          <h5 class="mb-0">8.5/7.1</h5>
                          <small class="text-muted text-right">(city/Hwy)</small>
                        </div>
                    </div> --}}
                    {{-- <div class="d-flex flex-row justify-content-between p-3 mid">
                        <div class="d-flex flex-column">
                          <small class="text-muted mb-1">ENGINE</small>
                          <div class="d-flex flex-row">
                              <img src="https://imgur.com/iPtsG7I.png" width="35px" height="25px">
                              <div class="d-flex flex-column ml-1"><small class="ghj">1.4L MultiAir</small><small class="ghj">16V I-4 Turbo</small></div>
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <small class="text-muted mb-2">HORSEPOWER</small>
                          <div class="d-flex flex-row">
                              <img src="https://imgur.com/J11mEBq.png">
                              <h6 class="ml-1">135 hp&ast;</h6>
                          </div>
                        </div>
                    </div> --}}
                    <small class="text-muted key pl-3">Standard key Features</small>
                    <div class="mx-3 mt-3 mb-2"><button type="button" class="btn btn-danger btn-block"><small>BUILD & PRICE</small></button></div>
                    <small class="d-flex justify-content-center text-muted">*Legal Disclaimer</small>
                  </div>
              </div>
            </div>
        @endforeach
        
        <div class="col-sm-4">
          <div class="card">
              <img src="https://imgur.com/SKZolYE.png" class="card-img-top" width="100%">
              <div class="card-body pt-0 px-0">
                <div class="d-flex flex-row justify-content-between mb-0 px-3">
                    <small class="text-muted mt-1">STARTING AT</small>
                    <h6>&dollar;22,495&ast;</h6>
                </div>
                <hr class="mt-2 mx-3">
                <div class="d-flex flex-row justify-content-between px-3 pb-4">
                    <div class="d-flex flex-column"><span class="text-muted">Fuel Efficiency</span><small class="text-muted">L/100KM&ast;</small></div>
                    <div class="d-flex flex-column">
                      <h5 class="mb-0">8.5/7.1</h5>
                      <small class="text-muted text-right">(city/Hwy)</small>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between p-3 mid">
                    <div class="d-flex flex-column">
                      <small class="text-muted mb-1">ENGINE</small>
                      <div class="d-flex flex-row">
                          <img src="https://imgur.com/iPtsG7I.png" width="35px" height="25px">
                          <div class="d-flex flex-column ml-1"><small class="ghj">1.4L MultiAir</small><small class="ghj">16V I-4 Turbo</small></div>
                      </div>
                    </div>
                    <div class="d-flex flex-column">
                      <small class="text-muted mb-2">HORSEPOWER</small>
                      <div class="d-flex flex-row">
                          <img src="https://imgur.com/J11mEBq.png">
                          <h6 class="ml-1">135 hp&ast;</h6>
                      </div>
                    </div>
                </div>
                <small class="text-muted key pl-3">Standard key Features</small>
                <div class="mx-3 mt-3 mb-2"><button type="button" class="btn btn-danger btn-block"><small>BUILD & PRICE</small></button></div>
                <small class="d-flex justify-content-center text-muted">*Legal Disclaimer</small>
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
              <img src="https://imgur.com/gUQNKPd.png" class="card-img-top" width="100%">
              <div class="card-body pt-0 px-0">
                <div class="d-flex flex-row justify-content-between mb-0 px-3">
                    <small class="text-muted mt-1">STARTING AT</small>
                    <h6>&dollar;22,495&ast;</h6>
                </div>
                <hr class="mt-2 mx-3">
                <div class="d-flex flex-row justify-content-between px-3 pb-4">
                    <div class="d-flex flex-column"><span class="text-muted">Fuel Efficiency</span><small class="text-muted">L/100KM&ast;</small></div>
                    <div class="d-flex flex-column">
                      <h5 class="mb-0">8.5/7.1</h5>
                      <small class="text-muted text-right">(city/Hwy)</small>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between p-3 mid">
                    <div class="d-flex flex-column">
                      <small class="text-muted mb-1">ENGINE</small>
                      <div class="d-flex flex-row">
                          <img src="https://imgur.com/iPtsG7I.png" width="35px" height="25px">
                          <div class="d-flex flex-column ml-1"><small class="ghj">1.4L MultiAir</small><small class="ghj">16V I-4 Turbo</small></div>
                      </div>
                    </div>
                    <div class="d-flex flex-column">
                      <small class="text-muted mb-2">HORSEPOWER</small>
                      <div class="d-flex flex-row">
                          <img src="https://imgur.com/J11mEBq.png">
                          <h6 class="ml-1">135 hp&ast;</h6>
                      </div>
                    </div>
                </div>
                <small class="text-muted key pl-3">Standard key Features</small>
                <div class="mx-3 mt-3 mb-2"><button type="button" class="btn btn-danger btn-block"><small>BUILD & PRICE</small></button></div>
                <small class="d-flex justify-content-center text-muted">*Legal Disclaimer</small>
              </div>
          </div>
        </div>
    </div>
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
