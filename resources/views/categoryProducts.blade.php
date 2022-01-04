<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!------------------------------------------navbar-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!------------------------------------------>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>
@include('header')


<br>
<a class="btn btn-danger" style="margin-left: 200px;"
 href="/"><b>GO BACK</b></a>

@foreach($items as $item)
     <div class="container test">
        <div class="row">
          <div class="col-sm-6">
          	<a href="/detail/{{$item['id']}}">
              <img class="detail-img" src="/images/{{$item->gallery}}"/>
            </a> 
          </div>
          <div class="col-sm-6">
            <br><br><br><br>
            <h2>{{$item->name}}</h2>
            <h3>{{$item->price}}</h3>
            <h4>{{$item->description}}</h4>
            <h4>{{$item->category}}</h4>
            <h4>{{$item->points}}</h4>
          </div>
        </div>
      </div>
@endforeach

@include('footer')
</body>

<style>
   .detail-img{
    height: 300px;
   }
   .test{
   	margin-top: 50px;
    padding-bottom: 100px;
   }
 
</style>
</html>
