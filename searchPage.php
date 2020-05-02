<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Search Engine</title>
        <link href="StyleSheetforForm.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-1.12.2.min.js"></script>
	<script>
	$(document).ready(function(e) {
		$("#buscar").keyup(function(e) {
			var nombre = $("#buscar").val();
			$.ajax({
				type:"post",
				url:"connection.php",
				dataType:"html",
				data:"nombre="+nombre,
				success: function(dato)
				{
					$("#resultados").empty();
					$("#resultados").append(dato);
				}
			});
		});
	});
	</script>
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
        <a style="position:absolute; top:0; right:0; margin-top: 60px; margin-right: 100px;" href="#" class="sign-out pull-right">
    <span>Sign Out</span>   
  </a>     
</div>
   </div>        
        <div class="container-fluid bg-1 text-center" style = "background-color: #00BFB2; padding: 10px; margin-bottom: 5px; margin-left: 50px; margin-right: 50px;">
            
            <h3 class="h3">Search bar</h3>

<div class="flexsearch">
	<div class="flexsearch--wrapper">                   
		<div class="flexsearch--input-wrapper">
                         <input class="flexsearch--input" id="buscar" type="text" placeholder="search">                                   
                </div>			
	</div>
</div>
        </div>
                   <div class="container-fluid bg-2" style = "background-color: #DCEDFF; padding: 1px; margin-top: 5px; margin-left: 50px; margin-right: 50px;">
                       <div id="resultados" style="margin: 150px;"></div></div>
                     
        </div> 
    
    </div>
   
   
    </body>
</html>




