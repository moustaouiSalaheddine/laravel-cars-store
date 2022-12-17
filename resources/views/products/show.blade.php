

@extends('layouts.app')
@section('style')

<style>
*,
*::after,
*::before{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}



body{
    font-family: 'Poppins',sans-serif;
    font-size: 10px;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background:linear-gradient(to top,rgba(71, 69, 69, 0.319),white,rgba(48, 47, 47, 0.405));
    
}
@keyframes lights{
    0%{
        background-position: top;
    }
    100%{
        background-position: bottom;
    }
}

.container{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 30px;
   
}


.blog-post{
    width: 60%;
    background:linear-gradient(to right,black white);
    display: flex;
    align-items: center;
    margin: 10px;
    padding: 5rem;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}

.blog-img{
    height: 20rem;
    position: relative;
    right:180px;
    
}

.blog-img img{
    width: 150%;
    height: 20rem;
    box-shadow: 12px 12px 2px 1px rgba(8, 8, 8, 0.558);  
    border-radius: 0 10px 10px 0;
 transition: transform 1s ease-in-out;
}

.blog-img img:hover{
    transform: scale(1.05);
}
span:first-of-type{
    color: rgb(155, 152, 152);
    display: block;
    font-size: 3em;
    margin-bottom: 20px;
}

span:last-of-type{
    color: #000000;
    font-size: 1em;
    font-weight: 500;
}

.details > p:first-child{
    font-size: 1.3em;
    font-weight: 400;
    font-weight: 500;
}

.details > p::first-letter{
    color: rgb(0, 0, 0);
    font-size: 1.5rem;
    line-height: 1;
    font-family: '';
    letter-spacing: 3px;
}

::marker{
    color: rgb(113, 110, 110);
    /* content: '>>  '; */

}

ul{
    padding: 10px;
    font-size: 1.2em;
}


.blog-info h1{
    font-size: 2rem;
}

button{
    margin-top: 10px;
    float: right;
    padding: 10px;
    font-family: 'Courier New', Courier, monospace;
    font-weight: 600;
    font-size: 1.5rem;
    background-color: white;
    box-shadow: inset 0 3px 6px rgba(0,0,0,0.16), 0 4px 6px rgba(0,0,0,0.45); 
   transition: transform 0.9 ease-in-out;
}

button:hover{
    transform: scale(1.09);
}
.hidden-content{
    display: none;
}

.hidden-content.show-btn{
    display: block;
}

.hidden-content > p{
    color: red;
    font-size: 1rem;
}
</style>
@stop
@section('content')
<div class="container">
    <div class="blog-post">
       <div class="blog-img">
          <img src="{{Storage::url($product->image)}}" style="object-fit: cover;" alt="{{$product->name}}">
       </div>
       <div class="blog-info">
          <div class="blog-mini-info">
             <span style="color: #61b15a">#LUXURY CARS</span>
             <span>Sheer Driving Pleasure</span>
          </div>
          <h1>{{$product->name}}</h1>
          <div class="details">
             <p>{{$product->description}}</p>
          </div>
          {{-- <ul>
             <li>3D Printed </li>
             <li>Nxt Gen</li>
          </ul> --}}
          <a class="btn btn-primary" style="background-color: #61b15a; border-color: #61b15a" href='https://wa.me/212639610866/?text="{{ $product->name }} {{ $product->description }} {{ $product->price }}"' target="_blank" data-action="share/whatsapp/share">Whatsapp</a>
                                        
          {{-- <button class="show-btn">ORDER</button> --}}
          <div class="hidden-content">
             <p>Your order has been executed <i class="fa-solid fa-bell fa-shake"></i></p>
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
