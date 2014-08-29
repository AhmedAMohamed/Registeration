<!DOCTYPE html>
<html>
	<title>
		Register please
	</title>
	
	<body>
	
		<style>
			#main_form{
				background-color:rgb(253,253,253);
				border: groove;
				width: 350px;
				height: 250px;
				position: absolute;
				top: 50px;
				left: 550px;
			}
			table{
				background-color: rgba(200,200,200,150);
				width: 350px;
				height: 250px; 
				alignment-adjust: central;
			}
		</style>
		<div id = "main_form" >
			<form method="post" action="/Registeration/welcome_controller/hello">
				<table>
					<div id = "row_1">
						<tr>
							<td>
								Name
							</td>
							<td>
								<input type="text" name="name" value="write your name">
							</td>
						</tr>
					
					</div>
					<div> 
						<tr>
							<td>
								Email
							</td>
							<td>
								<input type="text" name="email" value="write your email">
							</td>
						</tr>
					</div>
					<div>
						<tr>
							<td>
								Confirm email
							</td>
							<td>
								<input type="text" name="con_email" value="write your email">
							</td>
						</tr>
					</div>
				
					<div>
						<tr>
							<td>
								password
							</td>
							<td>
								<input type="text" name="email" value="write your email">
							</td>
						</tr>
					</div>
					<div>
						<tr>
							<td>
								Type	
							</td>
							<td>
								<Select name="ahmed">
									<?php
										foreach ($arr as $row) {
											echo '<option>'.$row->type_name.'</option>';
										}
									?>
								</Select>	
							</td>
						</tr>
					</div>
				</table>
			
				<input onclick="call()" type="submit" value="Submit" style="alignment-adjust:middle; position:relative;top:20px;left: 150px; ">	
			</form>
		</div>
		
		<script>
			function call(){
				var url = "http://localhost/Registeration/welcome_controller/end";
				var win = window.open(url, '_blank');
  				win.focus();
			}
		</script>

	</body>
</html>
