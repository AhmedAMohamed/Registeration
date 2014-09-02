<html>
	<title>
		Login
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
			<form  name="reg_form" action="/registeration/Registeration/login/log_in" title="Register for application" method="post">
				<table>
						<tr id = "row_1">
							<td>
								Name
							</td>
							<td>
								<input type="text" name="user_name">
							</td>
						</tr>
			 
						<tr>
							<td>
								Email
							</td>
							<td>
								<input type="email" name="email" value="">
							</td>
						</tr>
						<tr>
							<td>
								password
							</td>
							<td>
								<input type="password" name="password" value="">
							</td>
						</tr>
				</table>	
				<input type="submit" value="Submit" style="alignment-adjust:middle; position:relative;top:20px;left: 150px; ">	
			</form>
		</div>
	</body>
</html>
