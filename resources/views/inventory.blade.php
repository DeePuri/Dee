
 <!DOCTYPE HTML> 
<!--All page content is inside the HTML element-->
<html>
        <!--Head element content is not visible in a browser window-->
        <head>
        <!--The UTF-8 character set supports all symbols and characters-->
        <meta charset="UTF-8">
        <title>HTML Template</title>
        <!—The following line links to our style sheet file-->
        <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <!--Content visible in the browser's window is inside the HTML element-->
        <body>
        <!--All our content is enclosed in the wrapper ID style-->
        <div id="wrapper">
        <h1>Inventory Management System</h1>
        <!--column-2 ID style is floated left and used for navigation-->
        <div id="column-2">
        <h2>Navigation</h2>
        <ul>
        <li> <h3><a href="#">Home</a></h3></li>
        <li> <h3><a href="#">Supplier</a></h3></li>
        <li> <h3><a href="#">Reports</a></h3></li>
        </ul>
        <!--column-1 ID style is floated right and used for content-->
        </div>
        <div id="column-1">
        <h1>Stocks </h1>
        <p>Select the item to view the stock </p>
        <div class="box"><p>Coffee</p></div>
        <div class="box"><p>Milk</p></div>
        <div class="box"><p>Bread</p></div>
        
        </div>
        <!--The clear class style clears (removes) float-->
        <div class="clear"></div>
        <h4>Contact info here </h4>
        </div>
        
        </body>
        
        </html>
<style>
        @charset "UTF-8";
        /* CSS Document */
        
        /* The body tag style applies to all elements on the page */
        body {
        background-color: black;
        font-family: Verdana, Geneva, Arial, sans-serif;
        padding:0px;
        margin:0px;
        }
        
        /* The wrapper ID style is used with a div tag to provide a 960px wide page */
        #wrapper {
        width: 960px;
        height: 800px;
        margin-left: auto;
        margin-right: auto;
        background-color: #F25F29;
        }
        
        /* The column-1 ID style is floated right */
        #column-1 {
        float: right;
        width: 800px;
        height: 600px;
        background: #55D9D9;
        }
        
        /* The column-2 ID style is floated left */
        #column-2 {
        float: left;
        width: 160px;
        height:600px;
        background: #F2B544;
        }
        
        /* Selector for tags separated by commas applies the style to all tags */
        h1,h2,h3,h4,h5,h6,p,li {
        margin-left:15px;
        }
        
        h1 {
        color: white;
        padding-top:15px;
        }
        
        /* Selector for tags not separated by commas applies in specific circumstances*/
        #column-1 h1 {
        padding-top:5px;
        color: black;
        font-size:36px;
        }
        
        /* Advanced web design relies on class or ID style boxes*/
        .box {
        height: 100px;
        width: 100px;
        float: left;
        margin: 15px;
        padding: 25px;
        background: #A8D977;
        border:2px solid gray;
        }
        
        /* The following pseudo-class applies to the box class when in a hovered state */
        .box:hover {
        background-color:#F2B544;
        border-bottom:2px solid black;
        }
        
        /* This clear class style terminates float */
        .clear{ 
        clear: both; 
        }
        
        }
        header, footer { 
        background-color: F27830;
        color: red;
        padding-top:5px;
        padding-bottom:5px; 
        }
</style>