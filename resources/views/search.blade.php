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
	 	<div class="row" style="justify-content: center;">
	 	  <div class="col-sm-7">
	 		<div class="trinding-wrapper">
	 		<h1>SEARCH RESULT</h1>
	 		@foreach($results as $item)
	 		<div class="container size">
	            <a href="detail/{{$item['id']}}" style="color: #666699">
		            <img src="/images/{{$item->gallery}}" width="500px" height="500px" alt="000" />
		            <h2>{{$item['name']}}</h2> 
		            <h4>{{$item['description']}}</h4> 
	            </a> <br>
	        </div>
            @endforeach
            </div>
	    </div>
	</div>
</div>

	 @include('footer')
	</body>

	<style>
	  .trinding-wrapper{
        margin: 30px;
      }

	</style>

</html>