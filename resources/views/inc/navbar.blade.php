 


 



<header>
<div class="header">
  
    
 
  



    
<div class="topnav">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <a class="navbar-brand" href="/">Urabn Zest Cafe</a>
    <a href="/">Home</a>
    <a href="/menu">Menu</a>
    <a href="/reservation">reservation</a>
    @can('key-only',Auth::user())
        <a href="{{ url('key') }}">Inventory</a>
    @endcan
    
    <a href="/contact">Contact</a>
    <!--
    <a href="/inventory">Inventory</a>
    !-->
    
      
    <a href="/login">Log in</a>
    <a href="/register">Join Us</a>
</div>
</header>



   


<style>
  
.topnav {
  background-color:black;
  overflow:hidden;
  
  width:960px;
  
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}


</style>

<!--
<nav class="navbar navbar-default">
  <div class="container-fluid">
   Brand and toggle get grouped for better mobile display 
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="c\
  ollapse"
  data-target="#bs-example-navbar-collapse-1">
   <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="#">Learning Laravel</a>
   </div>
  
    Navbar Right 
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   <ul class="nav navbar-nav navbar-right">
   <li class="active"><a href="/">Home</a></li>
  <li><a href="/about">About</a></li>
   <li><a href="/contact">Contact</a></li>
   <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" r\
   ole="button" aria-expanded="false">Member
   <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
   <li><a href="/users/register">Register</a></li>
   <li><a href="/users/login">Login</a></li>
   </ul>
   </li>
   </ul>
  </div>
   </div>
   </nav>
   !-->