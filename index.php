<!DOCTYPE html>
<html>
<head>
	<title>Form Artikel</title>
	
</head>
<style type="text/css">
	body{
		background-image: url('a.jpg');
	}
	div{
		background-color: grey;
		margin: 0 400px;m
	}
	form{
		margin: 0 20px;
	}
	h1,h5{
		text-align: center;
		margin:10px 10px;
	}
	.to,textarea{
		width: 400px;

	}
	.tombol{
		margin: 20px 0px;
	}
</style>
<body>
	<div id="container">
	<h1>Form Berita</h1>
	<h5>by. dede sahlan</h5>
		
		<form action="proses.php" method="post">
			<p>
				<b>Judul :</b><br>
				<input class="to" type="text" name="title"/>
			</p>
			<p>
				<b>Penulis :</b><br>
				<input class="to" type="text" name="author"/>
			</p>
			<p>
				<b>Lead :</b><br>
				<textarea name="abstraksi" rows="4" cols="30"></textarea>
			</p>
			<p>
				<b>Content :</b><br>
				<textarea name="konten" rows="8" cols="45"></textarea>
			</p>
			
			<p>
				<input type="submit" name="submit" value="Add" class="tombol"/> 
			   	<input type="reset" name="batal" value="Reset" class="tombol"/>
			</p>
		</form>
	</div>
</body>
</html>