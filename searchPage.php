<!DOCTYPE html>
<?php session_start();
      $path = dirname(__DIR__)."\Library\\";
      set_include_path( get_include_path().PATH_SEPARATOR.$path);?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Search Engine</title>
        <link href="StyleSheetforForm.css" rel="stylesheet" type="text/css"/>
        <script src="resultFunction.js"></script>	
    </head>
    <body>
    <div style="margin: 20px; padding: 10px; ">
    <div class="row">
    <div class=" col-sm-12 text-center" style = "background-color:#FFCCCC; padding: 10px; font-family: 'Rubik', sans-serif;">        
           <div class=" col-sm-12 text-center" style = "background-color: #EDEDED; font-family: 'Patua One', cursive;"> 
           <h3> OurLibrary </h3>
        </div> 
        <div>
        <p>Welcome to OurLibrary </p>       
<!--            <button onclick="location.href = 'http://localhost/LibraryGit/WebPageLogin.php';" style="position:absolute; top:0; right:0; margin-top: 60px; margin-right: 100px;">Sign Out   
    
    </button>-->
        <a style="position:absolute; top:0; right:0; margin-top: 60px; margin-right: 100px;" href="Library\WebPageLogin.php" class="sign-out pull-right">
    <span>Sign Out</span>   
  </a>     
</div>
   </div>
        <!--<div class ="row">
        <div class=" container-fluid bg-1 text-center" style = "background-color: #00BFB2; padding: 10px; margin-bottom: 5px; margin_left: 50px; margin-right:50px;">
            First Name: <input  type="text"   name="fullName" class="form-control"  placeholder="Name"/> 
        </div>
        </div>
       <div class ="row">
        <div class=" container-fluid bg-1 text-center " style = "background-color: #00BFB2; padding: 10px; margin-bottom: 5px; margin_left: 50px; margin-right:50px;">
            Account Number: <input  type="text"   name="accNum" class="form-control"  placeholder="Acc Num" />
        </div>
        </div>
        </div>-->
        <div class="container-fluid bg-1 text-center" style = "background-color: #00BFB2; padding: 10px; margin-bottom: 5px; margin-left: 50px; margin-right: 50px;">
            
            <h3 class="h3">Search bar</h3>

<div class="flexsearch">
	<div class="flexsearch--wrapper">                   
		<div class="flexsearch--input-wrapper">
                         <input class="flexsearch--input" onkeyup="resultFunction(this.value)" type="text" placeholder="search">                                   
                </div>			
	</div>
</div>
        </div>
                   <div class="container-fluid bg-2" style = "background-color: #DCEDFF; padding: 1px; margin-top: 5px; margin-left: 50px; margin-right: 50px;">
                       <div id="txt" style="margin: 150px;"></div></div>
                     
        </div> 
    
    </div>
   
   
    </body>
</html>




