<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
	<script src="{{ URL::asset('js/jquery.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
		<center><h2 class="page-header">Login</h2></center>
			<form>
				<div class="form-group">
					<label>Nama</label><br>
					<input type="username" class="form-control" placeholder="Username">
					<label>Password</label><br>
					<input type="password" class="form-control" placeholder="Password">
					<br>
					<button class="btn btn-warning" type="submit">Login</button>
					<button onclick="window.location.href='{{ url('register') }}'" class="btn btn-warning" type="submit" >Register</button>
				</div>
			</form>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</div>
</body>
</html>
