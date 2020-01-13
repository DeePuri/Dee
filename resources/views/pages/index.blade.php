@extends('layouts.app')



<title>iNDEX</title>  
@section('content')
<section>
    <div id="Welcome-message">
    <h1>Welcome to Urban Zest Cafe</h1>  
    <h2><i>"where your morning starts with the refreshing sip of coffee and a delightful breakfast"</i></h2>

    </div>
    
    
</section> 
<section>
    <div id="column-1">
        
      
    </div>
    
</section> 
<section>
    <div id="column-2">
        
    
    
    
</section> 

</div>
<!--The clear class style clears (removes) float-->
<div class="clear"></div>
<h4>Contact info here</h4>
</div>
    @endsection



    <style>

.clear{ 
        clear: both;
        
        }
        .box {
        height: 25px;
        width: 300px;
        
        position: relative;
        margin: 15px;
        padding: 25px;
        background: #A8D977;
        border:2px solid gray;
        }
 #column-1 {
   
    width: 100%;
    height:600px;
   
    padding:0%;
    background-image: url(image2.jpg);
    background-repeat: no-repeat;
    background-size: 100% 600px;
   
    }
    #column-2 {
  
   width: 100%;
   height:600px;
    background-image: url(image1.jpg);
    background-repeat: no-repeat;
    background-size: 100% 600px;
    
    
  
   }
   
    #column-1 h1{
        position: relative;
        color:sienna;
        padding-top:15px;
        text-align:center;
       
        
    }
    #column-2 h1{
        position: relative;
        color:sienna;
        padding-top:15px;
        text-align:center;
       
        
    }
    #welcome-message{
        text-align: center;
        border-block-end-width:100%; 
        background-color: antiquewhite;
        height: 200px;
        padding-top: 25px;
    }
    #welcome-message h2{
        color: coral;
    }
    



</style>
<!--
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

-->   
        