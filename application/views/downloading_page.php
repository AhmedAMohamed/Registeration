<!DOCTYPE html>
<html>
	<body>
	
		<form method="post" action="/registeration/Registeration/welcome_controller/hello">
			<table style="width: 300px">
				<tr>
					<td>
						Name
					</td>
					<td>
						<input type="text" name="name" value="write your name">
					</td>
				</tr>
				<tr>
					<td>
						Email
					</td>
					<td>
						<input type="text" name="email" value="write your email">
					</td>
				</tr>
				<tr>
					<td>
						Confirm email
					</td>
					<td>
						<input type="text" name="con_email" value="write your email">
					</td>
				</tr>
				<tr>
					<td>
						password
					</td>
					<td>
						<input type="text" name="email" value="write your email">
					</td>
				</tr>
				
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
				
					
			</table>
			<input onclick="call()" type="submit" value="Submit">	
		</form>
		
		<script>
			function call(){
				window.location.replace("http://stackoverflow.com");
			}
		</script>
		
	</body>
</html>
