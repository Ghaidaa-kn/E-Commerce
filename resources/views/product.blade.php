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

<h1 style="text-align: center; color: #35443585">Available Categories</h1>
  <div class="container" style="margin-top:30px;color : #FF3399">
    @foreach($categories as $category)

      <form action="/category/{{$category->category}}"
         method="POST">
         {{ csrf_field() }}
        <input type="hidden" name="{{$category->category}}" value="{{$category->category}}">
        <button class="btn btn-info category" data-abc="true">
          {{$category->category}}
        </button>
      </form>

    @endforeach
  </div>



<!--   <div class="trinding-wrapper">
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
 -->
<br><br>
<h1 style="text-align: center; color: #35443585">All Products</h1>
<div class='container-fluid'>
  @foreach($products as $item)
      <div class="card mx-auto col-md-3 col-10 mt-5">
          <div class="card-body text-center mx-auto">
              <div class='cvp'>
                <a href="/detail/{{$item['id']}}">
                <img class="trinding-img" src="/images/{{$item->gallery}}" alt="111" />
                  <h3 class="card-title font-weight-bold">{{$item['name']}}</h3>
                  <br>
                  <a href="/detail/{{$item['id']}}" class="btn details px-auto">view details</a>
                  <br/>
                  <form action="/add_to_cart" method="post">
                {{ csrf_field() }}
                  <input type="hidden" name="product_id" value="{{$item['id']}}">
                  <button class="btn cart px-auto">Add To Cart</button>
                  </form>
                  
              </div>
          </div>
      </div>
  @endforeach
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
        <button class="btn btn-info" style="width: 150px;">Send</button>
        <br><br>
        <a class="btn" style="width: 150px; background-color:#48D1CC;" href="/answers">Answers</a>
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
    padding-top: 100px;
    padding-bottom: 75px;
  }
  .category{
    width: 400px ;
    height: 50px ;
    margin-top: 10px ; 
    margin-left: 100px ;
    float: left;
  }


.details {
    border: 1.5px solid grey;
    color: #212121;
    width: 100%;
    height: auto;
    box-shadow: 0px 0px 10px #212121;
}

.cart {
    background-color:   #48D1CC;
    color: white;
    margin-top: 10px;
    font-size: 12px;
    font-weight: 900;
    width: 100%;
    height: 39px;
    padding-top: 9px;
    box-shadow: 0px 5px 10px #212121
}

.card {
    /*width: fit-content;
*/
width: 50px fit-content;
height:  fit-content;
}

.card-body {
    width: fit-content
}

.btn {
    border-radius: 0;
}

.img-thumbnail {
    border: none
}

.card {
    box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
    border-radius: 5px;
    padding-bottom: 10px;
}

</style>
</html>
