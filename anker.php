<html lang="en">
	<head>
	  <title>Bootstrap 4 Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	</head>
	<body>

		<div class="container">
				<input type="text" name="fn" class="fn">
				<input type="text" name="ln" class="ln">
				<div class="a"></div>
				<div class="b"></div>
				<a href="#" class="btn btn-primary btn-sm m_myBtn">Click</a>
			

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			//(function)(jQuery);
			(function(){
				//alert('ok');
				//$(selector).action();
				$('.m_myBtn').click(function(e){
					e.preventDefault();
					const fn = $(".fn").val();//get
					var ln = $(".ln").val();//get
					//console.log(fn);
					//console.log(ln);
					$(".a").html(fn);//set
					$(".b").html(ln);//set
				});
				
			})(jQuery);
		
		</script>
	</body>
</html>