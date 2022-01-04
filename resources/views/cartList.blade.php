
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
 @include('header')


      <div class="container"><br>
        <a class="btn btn-danger" href="/"> <b>GO BACK</b> </a>
        
        @foreach($products as $product)
        <div class="row cart-list-divider">

          <div class="col-sm-7">
            <img class="detail-img" src="/images/{{$product->gallery}}"/>
          </div>
          <div class="col-sm-5">
            <h1>{{$product->name}}</h1>
            <h2>{{$product->category}}</h2>
            <h2>{{$product->price}} $</h2>
            <h4>{{$product->description}}</h4>
            <br>
              <a href="/removeCart/{{$product->cart_id}}" class="btn btn-warning">Remove From Cart</a>
          </div>
          
        </div>
        @endforeach
        <br> <br>
        @if($count == 0)
        <h1>No Products Here</h1>
        @else
        <a class="btn btn-success float" href="/orderNow">Order Now</a>
        @endif
        <br> <br>
      </div>

  @include('footer')

 </body>
 <style>
   .detail-img{
    height: 300px;
   }
   .cart-list-divider{
    border-top: 2px solid #ccc;
    margin-top: 50px;
    padding-top: 50px;
   }
   .float{
    float: right;
    width: 250px;
    line-height: 40px;
   }
 </style>
</html>