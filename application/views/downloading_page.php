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
			<form  name="reg_form" action="/Registeration/welcome_controller/insert_into_table" onsubmit="return validateForm()" title="Register for application" method="post">
				<table>
					<div id = "row_1">
						<tr>
							<td>
								Name
							</td>
							<td>
								<input type="text" name="name">
							</td>
						</tr>
					
					</div>
					<div> 
						<tr>
							<td>
								Email
							</td>
							<td>
								<input type="email" name="email" value="write your email">
							</td>
						</tr>
					</div>
					<div>
						<tr>
							<td>
								Confirm email
							</td>
							<td>
								<input type="email" name="con_email" value="write your email">
							</td>
						</tr>
					</div>
				
					<div>
						<tr>
							<td>
								password
							</td>
							<td>
								<input type="password" name="password" value="write your email">
							</td>
						</tr>
					</div>
					
					<div>
						<tr>
							<td>
								Confirm password
							</td>
							<td>
								<input type="password" name="con_password" value="write your email">
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
				//var win = window.open(url, '_blank');
  				//win.focus();
			}
			
			function validateForm() {
 			   var x = document.forms["reg_form"]["name"].value;
    			if (x == null || x == "") {
        			alert("First name must be filled out");
        			return false;
    			}
    			x = document.forms["reg_form"]["password"].value;
    			if (x.length < 10) {
        			alert("The password is too short");
        			return false;
    			}
    			var y = document.forms["reg_form"]["con_password"].value;
    			if(x != y) {
    				alert("The password does nt match");
    				return false;
    			}
    			return true;
			}
			
		</script>

	</body>
</html>
