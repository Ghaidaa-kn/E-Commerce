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
  <br>
  <a class="btn btn-danger" href="/admin"> <b>GO BACK</b> </a>
  <h1>Add New Product</h1><br>
  <br>
<div class="container row">
        <div class="col-sm-5 col-sm-offset-4">
          
          <form action="addProduct" method="POST">
            {{ csrf_field() }}
            <div >
              <input type="text" name= "name" placeholder="Name" class="form-control design" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div>
              <input type="text" name= "price" placeholder="Price" class="form-control design" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div>
              <input type="text" name="category" placeholder="Categoty" class="form-control design" id="exampleInputPassword1">
            </div>
            <div>
              <input type="text" name="description" placeholder="Description" class="form-control design" id="exampleInputPassword1">
            </div>
            <div>
              <input type="text" name="gallery" placeholder="Image Name" class="form-control design" id="exampleInputPassword1">
            </div>
            <div>
              <input type="text" name="points" placeholder="Points" class="form-control design" id="exampleInputPassword1">
            </div>
            <div>
              <input type="text" name="replace_points" placeholder="Replace Points" class="form-control design" id="exampleInputPassword1">
            </div>
            <div>
            <button type="submit" class="btn btn-danger float">Add Product</button>
            </div>
          </form>
  </div>


</body>
<style>
  .design{
    width: 700px;
    height: 40px;
    margin-bottom: 50px;
    margin-left: 100px;
  }
  .float{
    float: right;
    width: 300px;
  }
</style>
</html>
