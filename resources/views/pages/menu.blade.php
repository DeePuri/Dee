@extends('layouts.app')
<title>menu</title>
@section('content')
<section>
    
    <div id="column-1">
      <h1> Welcome to Urban Zest Cafe</h1>  
      <div class="box"><h1>Download Coffee Menu</h1>
        <p> To Open a PDF file <a href="pdf.pdf" TARGET = "_blank"><p>Click Here</p></a></div>
        <div class="box"><h1>Download Breakfast Menu</h1>
        <p> To Open a PDF file <a href="pdf1.pdf" TARGET = "_blank"><p>Click Here</p></a></div>
        <div class="box"><h1>Download Juices & Smoothie Menu</h1>
        <p> To Open a PDF file <a href="pdf2.pdf" TARGET = "_blank"><p>Click Here</p></a></div>    </div>
    
</section> 
@endsection
<style>

    .clear{ 
            clear: both;
            
            }
            
     #column-1 {
       
        max-width: 100%;
        height:600px;
        background-color:lightgray;
       
        }
        #column-2 {
      
       width: 100%;
       height:600px;
       background-color:lightgray;
      
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
        .box {
        position: relative; 
        height: 150px;
        width: 25%;
        float: left;
        margin: 15px;
        padding: 25px;
        background: #A8D977;
        border:2px solid gray;
        box-align: center;
       
       
            color:sienna;
            padding-top:15px;
            text-align:center;
        }
        .box:hover {
        background-color:#F2B544;
        border-bottom:2px solid black;
        }
        .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        }
    
        .position-ref {
        position: relative;
    }
    </style>
<!--
<!DOCTYPE html>
<html>
        


   

<body>

<style> 
body {
background-color:pink;
}

.animation {
text-align:center;
padding-top:25px;
width:100px;
height:100px;
background:rrgba(100 0 0 .5);
position:fixed;
-webkit-animation:banner 5s infinite; 
}

@keyframes banner{
0%   {top:0px; background:yellow; width:100px;}
50%   {top:200px; background-color:rgba(100,1000,100,0.5); width:400px;}
100% {top:0px; background-color:rgba(255,0,0,0.5); width:600px;}
}

@-webkit-keyframes banner{
0%   {top:0px; background:yellow; width:100px;}
50%   {top:200px; background-color:rgba(100,1000,100,0.5); width:400px;}
100% {top:0px; background-color:rgba(255,0,0,0.5); width:600px;}
}
</style> 

</head>


       
<div class="animation"><h1>Merry Christmas & Happy New Year 2020 to All!</h1></div>



</body>
</html>
-->
