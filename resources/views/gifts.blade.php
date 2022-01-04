
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


      <div class="container">
        <br>
        <a class="btn btn-danger" href="/"> <b>GO BACK</b> </a>
        <br><br>
        <label><h1>Your Points is {{$points}}</h1></label>
        <br>
        @foreach($gifts as $gift)
        <div class="row cart-list-divider">
          <div class="col-sm-4">
            <img class="detail-img" src="/images/{{$gift->gallery}}"/>
          </div>
          <div class="col-sm-4">
            <h2>{{$gift->name}}</h2>
            <h4>{{$gift->description}}</h4>
            <h4>{{$gift->category}}</h4>
            <h4>{{$gift->replace_points}}</h4>
          </div>
          <!-- <div class="col-sm-4">
            <a href="/replace/{{$gift->id}}" class="btn btn-info">Replace</a>
          </div> -->
          <div class="col-sm-4">
            <form action="/replace/{{$gift->id}}" method="POST">
              {{ csrf_field() }}
              <input type="text" name="address" placeholder="Your Address" class="form-control">
              <br>
              <button class="btn btn-info">Peplace</button>
            </form>
          </div>
        </div>
        @endforeach
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