<?php
if(!isset($_COOKIE["email"])) {
    echo "Cookie is not set or expired";
} else {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		
	</head>
	<body style="text-align: center">
		<h2>Cookie Data </h2>
		 <table class="table table-bordered table-inverse table-hover">
			<tr>
				<td>
					Email Address
				</td>
				<td>
					<?php echo $_COOKIE['email'] ; ?>
				</td>

			</tr>
			<tr>
				<td>
					Favoutrite Food
				</td>
				<td>
					 <?php echo  $_COOKIE['Favourite_food'] ;?>
				</td>
			</tr>
			<tr>
				<td>
					Year Born
				</td>
				<td>
					<?php echo  $_COOKIE['Year_born'] ; ?>
				</td>
			</tr>
		</table>
	
	</body>
	</html>   
   
<?php    
    
}
?> 