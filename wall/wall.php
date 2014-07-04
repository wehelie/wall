<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>The Wall</title>
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://momentjs.com/downloads/moment.js"></script>
	<script src="livestamp.js"></script>
 </head>
 <style>
	#delete{
		cursor: pointer;
	}

 </style>

<body>

	<div class="container">
      <div class="header">
      
        <h3 class="text-muted">The Wall</h3>
      </div>

     <div>
     	<div class="row">
  			<div class="col-md-2"><img class="img-circle" src="dojo.jpg" alt="" width="100"></div>
  			<div class="col-md-10">
  				<textarea class="form-control" rows="3"></textarea><br/>
  				<button type="button" id="button" class="btn btn-default">Post</button>

  			</div>
		</div>
     </div>
     <hr>
     <div class="msg">
     	
     </div>
<div>
     	
		</div>
     </div>
     <br>
    

      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>

    </div> <!-- /container -->

    <script>
    $(document).ready(function(){
    	$('#button').on('click', function(){
   
    		var textarea = $('.form-control').val();
    		if(!textarea)
    			alert('the text area is empty!');
    			else{
    				$('<div id="usrmsg"><div class="row">\
  						<div class="col-md-2"><img class="img-circle" src="dojo.jpg" alt="coding dojo" width="100"></div>\
  						<div class="col-md-10">\
  						<div id="delete" class="pull-right text-muted">Delete</div>\
  						</div>\
  						<div>'+ textarea +'</div>\
  						<div class="text-muted"><div><small>posted <span data-livestamp="1404441520"></span> </small></div></div>\
  						</div><hr></div>').insertAfter('.msg').hide().slideDown(); 

    						$('.form-control').val(''); 


    			}
    	

    	});

    	$(document).on('click','#delete', function(){
    		$(this).closest('#usrmsg').slideUp(); 
    	}); 
    }); 

    </script>


</body>
</html>
