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

<div class="container"><br>
  <a class="btn btn-danger" href="/admin"> <b>GO BACK</b> </a>
  <br>
  <h2><blod>Users FeedBacks<blod></h2>
  <br><br>
  <table class="table">
    <thead>
      <tr>
        <th>UserEmail</th>
        <th>UserComment</th>
        <th>Answer</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($feedbacks as $feedback)
      <tr>
        <td>{{$feedback->email}}</td>
        <td>{{$feedback->text}}</td>
        <td>
          <form action="reply/{{$feedback->id}}" method="POST">
            {{ csrf_field() }}
            <textarea type="text" class="form-control" rows="2" cols="150" name="reply">
            </textarea>
        </td>
        <td> 
            <br>
            <button class="btn btn-danger">Reply</button> 
        </td>
         </form>
        
      </tr>
      @endforeach       
    </tbody>
  </table>
</div>

</body>
</html>