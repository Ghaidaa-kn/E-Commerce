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
<div class="custom-product">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach($products as $item)
          <div class="item {{$loop->iteration == 1 ? 'active' : ''}}">
            <a href="/detail/{{$item['id']}}">
            <img class="slider-img" src="/images/{{$item->gallery}}" alt="000" />
            <div class="carousel-caption slider-text">
              <h3>{{$item['name']}}</h3>
              <p>{{$item['description']}}</p>
            </div>
            </a>
          </div>
          @endforeach
        </div>


        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>

  <div class="container" style="margin-top:30px;color : #FF3399">
    @foreach($categories as $category)

      <form action="/category/{{$category->category}}"
         method="POST">
         {{ csrf_field() }}
        <input type="hidden" name="{{$category->category}}" value="{{$category->category}}">
        <button class="btn btn-info category">
          {{$category->category}}
        </button>
      </form>

    @endforeach
  </div>



  <div class="trinding-wrapper">
          <h1>Our Products</h1>
          @foreach($products as $item)
          <div  class="trinding-item">
            <a href="/detail/{{$item['id']}}">
              <img class="trinding-img" src="/images/{{$item->gallery}}" alt="111" />
              <div>
                <h3>{{$item['name']}}</h3>
              </div>
            </a>
          </div>
          @endforeach
     </div>
</div>

@if(Session::has('user'))
  <div class="container feedback">
      <form action="/addFeedback" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
        <label for="comment" style="flood-color: #ccc">
          <h1> Give us your FeedBack </h1></label>
        <textarea type="text" class="form-control" rows="7"
          name="text">
        </textarea>
        <br>
        <button class="btn btn-info">Send</button>
        <br><br>
        <a class="btn btn-warning" href="/answers">Answers</a>
        </div>
      </form>
  </div>
@endif

@include('footer')
</body>

<style>
  img.slider-img{
    height: 400px !important;
  }
  .custom-product{
    padding-bottom: 600px;
  }
  .slider-text{
    background-color : #35443585 !important ;
  }
  .trinding-img{
    height: 100px;
  }
  .trinding-item{
    float: left;
    width: 30% ;
  }
  .trinding-wrapper{
    padding-top: 30px;
    margin: 30px; 
  }
  .feedback{
    padding-top: 300px;
    padding-bottom: 100px;
  }
  .category{
    width: 400px ;
    height: 50px ;
    margin-top: 10px ; 
    margin-left: 100px ;
    float: left;
  }

</style>
</html>
