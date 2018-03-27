<!DOCTYPE html>
<html>
<head>
	<title>bai 4</title>
</head>
<body>
	<style>
		
		h1{
			text-align: center;
			}
		.khaivi{
			text-align: center;
			margin-right: 100px;
		}
		.chinh{
			text-align: center;
			margin-right: 100px;
		}
		.trangmieng{
			text-align: center;
			margin-right: 100px;
		}
	</style>
<h1> Thực đơn </h1>
<form action="" method="get">
	<table>
		<tr>
			<td>Món khai vị:</td>
			<td>Món chính:</td>
			<td>Món tráng miệng:</td>
		</tr>
		<tr>
			<td>
				<div class="khaivi">
				<select name="khai vi[]" size="5" multiple>
					<option value="mon1"> Gỏi ngón sen</option>
					<option value="mon2"> Salat cá ngừ</option>
					<option value="mon3"> Bò trộn rau thơm</option>
					<option value="mon4"> Thịt nguội</option>
				</select>
				</div>
			</td>
			<td>
				<div class="chinh">
				<select name="chinh[]" size="5" multiple>
					<option value="mon1">Bò hầm</option>
					<option value="mon2">Cá chẽm sốt cà</option>
					<option value="mon3">Tôm rang muối</option>
					<option value="mon4">Cua sốt me</option>
				</select>
				</div>
			</td>
				<td>
					<div class="trangmieng">
					<select name="trangmieng[]" size="5" multiple>
					<option value="mon1">Chè hạt sen</option>
					<option value="mon2">Bánh flan</option>
					<option value="mon3">Rau cau</option>
					</select>
				</div>
				</td>
						
			</td>
		</tr>
	</table>
</form>
<input type="submit" name="submit">
</body>
</form>
</html>