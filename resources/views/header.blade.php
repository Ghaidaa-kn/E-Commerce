<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
$total = ProductController::cartItem(); 
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-comm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myOrders">Orders</a>
        </li>
        
        <form action="/search" class="d-flex">
        <input class="form-control me-2" style="width: 500px" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </ul>
      
    <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        <li class="nav-item"><a class="nav-link" href="/cartList">Cart({{$total}})</a></li>
        <li class="nav-item"><a class="nav-link" href="/gifts">Gifts</a></li>
        <li class="dropdown nav-item">
          <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#"> {{Session::get('user')['name']}}</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="/logout">Logout<span class="caret"></span></a></li>
          </ul>
        </li>
        @else
         <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
         <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
        @endif
    </ul>
      
    </div>
  </div>
</nav>

