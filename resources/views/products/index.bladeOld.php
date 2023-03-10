

@extends('layouts.app')
@section('style')

<style>
  .glyphicon { margin-right:5px; }
  body{
  background:#fff;
  font-family: Open Sans;
  }
  .category{
  position:relative;
  top:-5px;
  left:10px;
  color:#20e3b2;
  font-weight:200;
  margin-bottom:-20px;
  }
  .well{  
  background:transparent;
  border-style:none;
  }
  .btn{
  border-style:none;

  }
  .col-md-3:hover{
  box-shadow: 1px 5px 25px #ccc;

  }
  .thumbnail
  {
    margin-bottom: 0px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    
  }
  .inner{
  margin-left:0px;
  }
  .item{
  width:250px;
  padding:0;
  margin-top:5px;
  margin:15px;
  box-shadow: 1px 5px 15px #CCC;
  }

  .item.list-group-item
  {
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px; 
  }
  .item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
  { 
    box-shadow: 0px 1px 25px #ccc;
  }

  .item.list-group-item .list-group-image
  {
    margin-right:5px;
    
  }
  .item.list-group-item .thumbnail
  {   
    margin-bottom: 0px;

  }
  .item.list-group-item .caption
  {
    padding: 9px 9px 0px 9px; 

  }


  .item.list-group-item:before, .item.list-group-item:after
  {
    display: table;
    content: " ";
  }

  .item.list-group-item img
  {
  float: left;
  }
  .item.list-group-item:after
  {
    clear: both;
  }
  .btn-success,.btn-details{
  margin-top:40px;
  }
  .btn-details{
  background:transparent;
  border-style:solid;
  border-color:lightgrey;
  border-radius:0%;
  width:125px;
  top:11px;
  left:5px;
  color:black;
  }
  .btn-details:hover{
  background:lightgrey;
  color:white;
  }
  .lead{
  position:absolute;
  font-weight:700;
  font-size:18px;
  }

  .btn-success{
  overflow:hidden;
  border-radius:0%;
  border-style:none;
  width:125px;
  left:5px;
  top:11px;
  height:33px;
  background: linear-gradient(to right, #0cebeb, #20e3b2, #29ffc6);
  }

  @keyframes scalewidth {
  0% {
  width: 0%;
  }
  100%{
  width : 100%;
  }
  }
</style>
@stop
@section('content')
  {{-- @foreach ($products as $product)
      <p>This is product {{ $user->id }}</p>
  @endforeach --}}

  <div class="container">
    <div class="well well-sm">
        <div id="view" class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>

    <div id="products" class="row list-group">
        <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1488011915/mockup3_kxxwfy.jpg" alt="" />
              <div class="category">
                <h5 class="category-name">Tables</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Pearl Galaxy</h4>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $2,100</p>
                        </div>
  <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
  </div>
                </div>
              </div>
              </div>
            </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1488011915/mockup1_ff4smb.jpg" alt="" />
              <div class="category">
                <h5 class="category-name">Shelves</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Pastel Love</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $4,500</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1488011915/mockup2_dnfs2c.jpg" alt="" />
              <div class="category">
                <h5 class="category-name">Tables</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Classic</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $3,100</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520528305/table_n1bjhv.png" alt="" />
              <div class="category">
                <h5 class="category-name">Desks</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Modern Tones</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $4,000</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520528305/house2_gs4cr6.png" alt="" />
              <div class="category">
                <h5 class="category-name">Conference Tables</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Grey Tones</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $3,000</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520528305/greysofa_ys6lwl.png" alt="" />
              <div class="category">
                <h5 class="category-name">Couches</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Fancy </h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $6,000</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520528305/furniture_sddzpz.png" alt="" />
              <div class="category">
                <h5 class="category-name">Bed Cots</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Subdued Hues</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $5,100</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520529781/sofa_xlb0hz.png" alt="" />
              <div class="category">
                <h5 class="category-name">Couches</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Patterns</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $1,000</p>
                        </div>
                      <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div> 
                </div>
            </div>
        </div>
      </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520529781/pink_fby5uh.png" alt="" />
              <div class="category">
                <h5 class="category-name">Tables</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Contemporary</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $4,500</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520529781/couch_o9wlyx.png" alt="" />
              <div class="category">
                <h5 class="category-name">Couches</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Subtle Shades</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $5,500</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520529781/greysofa_pjqko4.png" alt="" />
              <div class="category">
                <h5 class="category-name">Couches</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Breathe</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $6,000</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
  <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520532750/blue_dfokic.png" alt="" />
              <div class="category">
                <h5 class="category-name">Couches</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Blues</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $4,200</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520532750/orange_hlsunx.png" alt="" />
              <div class="category">
                <h5 class="category-name">Chairs</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Vintage</h4>
                  
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $1,500</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520532750/weird_yp8qxn.png" alt="" />
              <div class="category">
                <h5 class="category-name">Couches</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Lines</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $9,000</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520528305/furniture_sddzpz.png" alt="" />
              <div class="category">
                <h5 class="category-name">Bed cots</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Peace</h4>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $6,000</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-md-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://res.cloudinary.com/dnhwxgf8i/image/upload/c_scale,h_250,w_400/v1520528305/greysofa_ys6lwl.png" alt="" />
              <div class="category">
                <h5 class="category-name">Couches</h5>
              </div>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Grey and Blue</h4>
                  
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $7,000</p>
                        </div>
                        <div class="btn-group">
                      <a class="btn btn-details" href="http://www.jquery2dotnet.com">Details</a>
  <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>

                      </div>
                    </div>
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
