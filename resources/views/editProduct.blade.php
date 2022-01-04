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
  <a class="btn btn-danger" href="/admin"> <b>GO BACK</b> </a>
  <h1>Update A Product</h1><br>
  <br>
<div class="container row">
        <div class="col-sm-5 col-sm-offset-4">
          <form action= "/updateProduct/{{$product->id}}" 
            method="POST">
              {{ csrf_field() }}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name  </label>
              <input type="text" name= "name" value="{{$product->name}}" class="form-control design" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Price  </label>
              <input type="text" name= "price" value="{{$product->price}}" class="form-control design" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Category  </label>
              <input type="text" name="category" value="{{$product->category}}" class="form-control design" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Description  </label>
              <input type="text" name="description" value="{{$product->description}}" class="form-control design" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Gallery  </label>
              <input type="text" name="gallery" value="{{$product->gallery}}" class="form-control design" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Points  </label>
              <input type="text" name="points" value="{{$product->points}}" class="form-control design" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Replace Points  </label>
              <input type="text" name="replace_points" value="{{$product->replace_points}}" class="form-control design" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-danger float">Update</button>
            </div>
          </form>
       </div>
</div>


</body>
<style>
  .design{
    width: 700px;
    height: 40px;
    margin-bottom: 50px;
    
  }
  .float{
    float: right;
    width: 300px;
  }
</style>
</html>
