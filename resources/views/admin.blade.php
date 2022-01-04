<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <br>
  <a class="btn btn-danger" href="/"> <b>GO BACK</b> </a>
  <h2><blod>ADMIN PAGE<blod></h2>
  <br><br>
  <table class="table">
    <thead>
      <tr>
        <th>UserName</th>
        <th>UserEmail</th>
        <th>User points</th>
        <th>Orders Number</th>
      </tr>
    </thead>
    <tbody>
      @foreach($statistics as $statistic)
      <tr>
        <td>{{$statistic->name}}</td>
        <td>{{$statistic->email}}</td>
        <td>{{$statistic->points}}</td>
        <td>{{$statistic->orderscount_count}}</td>
      </tr>
      @endforeach       
    </tbody>
  </table>
</div>


<div class="container"><br><br>
  <a class="btn btn-info design" href="/showFeedbacks">FeedBacks</a><br>
</div>

<div class="container">
  <h2><blod>Our Products<blod></h2>
  <br><br>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Description</th>
        <th>Points</th>
        <th>Replace</th>
        <th>Edit</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->category}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->points}}</td>
        <td>{{$product->replace_points}}</td>
        <td><a class="btn btn-success" href="editProduct/{{$product->id}}">Edit</a></td>
        <td><a class="btn btn-danger" href="/removeProduct/{{$product->id}}">Remove</a></td>
      </tr>
      @endforeach       
    </tbody>
  </table>
</div>

<div class="container"><br><br>
  <a class="btn btn-info design" href="/addProduct">Add New Product</a><br>
</div>


</body>
<style>
  .design{
    width: 700px;
    height: 40px;
    margin-bottom: 20px;
    margin-left: 100px;
  }
</style>
</html>


<!-- 
<tr class="success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
 -->