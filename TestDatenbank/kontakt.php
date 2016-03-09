<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content = "text/html; charset=UTF-8">
		<title></title>
		</head>
		<body>
			<form action= "kontaktformular.php" method="POST" enctype="text">
				<table width="50%" border="0px" cellspacing="5px" cellpadding="5px">
					<tr>
						<td>
							Name * 
						</td>
						<td>
							<input type="text" name="name" value="" size="45" />
						</td>
					</tr>
					<tr>
						<td>
							Email * 
						</td>
						<td>
							<input type="text" name="email" value="" size="45" />
						</td>
					</tr>
					<tr>
						<td>
							Telefonnummer 
						</td>
						<td>
							<input type="text" name="number" value="" size="45" />
						</td>
					</tr>
					<tr>
						<td>
							Nachricht * 
						</td>
						<td>
							<textarea name="nachricht" rows="6" cols="50"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							&nbsp; 
						</td>
						<td>
							<input type="submit" value="Absenden" name="sub" />
							<input type="reset" value="Clear" name="reset" />
						</td>
					</tr>
				</table>
			</form>			
		</body>
</html>