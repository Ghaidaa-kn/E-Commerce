
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


      <div class="container test">
        <div class="row">
          <div class="col-sm-6">
            <img class="detail-img" src="/images/{{$product->gallery}}"/>
          </div>
          <div class="col-sm-6">
            <br><br>
            <a class="btn btn-danger" href="/"> <b>GO BACK</b> </a>
            <br><br><br><br>
            <h2>{{$product->name}}</h2>
            <h3>PRICE : {{$product->price}}</h3>
            <h4>DESCRIPTION : {{$product->description}}</h4>
            <h4>CATECORY : {{$product->category}}</h4>
            <h4>GIFT POINTS : {{$product->points}}</h4>
            <br><br>
            <form action="/add_to_cart" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="product_id" value="{{$product->id}}">
              <button class="btn btn-warning">Add To Cart</button>
            </form>
            <br>
            <!-- <a class="btn btn-success float" href="/orderNow">Buy Now</a> -->
            <form action="/buyNow/{{$product->id}}" 
              method="post">
              {{ csrf_field() }}
              <input type="hidden" name="productId" value="{{$product->id}}">
              <button class="btn btn-info">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

  @include('footer')

 </body>
 <style>
   .detail-img{
    height: 300px;
   }
   .test{
    padding-bottom: 100px;
   }
 </style>
</html>