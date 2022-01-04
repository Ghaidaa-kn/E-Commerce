
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


      <div class="container"> <br>
        <a class="btn btn-danger" href="/"> <b>GO BACK</b> </a>
        @foreach($orders as $order)
        <div class="row order-list-divider">
          <div class="col-sm-6">
            <img class="detail-img" src="/images/{{$order->gallery}}"/>
          </div>
          <div class="col-sm-4">
            <h1>Name  :  {{$order->name}}</h1>
            <h4>Delivery Status  :  {{$order->status}}</h4>
            <h4>Address  :  {{$order->address}}</h4>
            <h4>Payment Status  :  {{$order->payment_status}}</h4>
            <h4>Payment Method  :  {{$order->payment_method}}</h4>
          </div>
        </div>
        @endforeach
      </div>

  @include('footer')

 </body>
 <style>
   .detail-img{
    height: 300px;
   }
   .order-list-divider{
    border-top: 2px solid #ccc;
    margin-top: 50px;
    padding-top: 50px;
   }
 </style>
</html>