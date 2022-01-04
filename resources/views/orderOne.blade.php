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

	  <br>
	  <div class="container">
	  	<a class="btn btn-danger" href="/"> <b>GO BACK</b> </a>
	  <br>
	  	<div class="col-sm-10">
	  		<table class="table">
	  	      <tr>
		  		<td>Amount</td>
		  		<td>$ {{$total}}</td>
			  </tr>
			  <tr>
		  		<td>Tax</td>
		  		<td>$ 0</td>
	  	      </tr>
	  	      <tr>
		  		<td>Delivery</td>
		  		<td>$ 10</td>
	  	      </tr>
	  	      <tr>
		  		<td>Total Amount</td>
		  		<td>$ {{$total+10}}</td>
	  	      </tr>
	        </table>
		    <br> <br>
		    <form action="/orderOne/{{$id}}" method="POST">
		    	{{ csrf_field() }}
			    <div class="form-group">
			       <textarea class="form-control" name="address" placeholder="Enter Your Address ..."></textarea>
			    </div>
			    <br> <br>
			    <div class="form-group">
				    <label for="pwd">Payment Method :</label><br><br>
				    <input type="radio" name="payment" value="cash"><span>Online Payment</span><br>
				    <input type="radio" name="payment" value="cash"><span>EMI Payment</span><br>
				    <input type="radio" name="payment" value="cash"><span>Payment On Delivery</span><br><br><br>
			    </div>
			    <button class="btn btn-success">Submit</button>
		    </form>
	  	</div>
	  </div>

	  @include('footer')

	 </body>
 </html>