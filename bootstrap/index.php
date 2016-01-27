<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bootstrap Testing</title>
		<?php include_once ("lib/head-tags.html"); ?>

		<!-- Custom Stylesheet that overrides Bootstrap -->
		<link rel="stylesheet" href="../css/style2.css">
	</head>
	<body>

		<div class="container">
			<h1 class="page-header">hello</h1>

			<div class="row">
				<div class="col-md-12">Content, 12 columns</div>
			</div><br>

			<div class="row">
				<div class="col-md-6">Second Content, 6 columns</div>
				<div class="col-md-6">Second Content also! (next 6 columns)</div>
			</div><br>

			<div class="row">
				<div class="col-md-4 col-sm-6">4 col</div>
				<div class="col-md-4 col-sm-6">4 col</div>
				<div class="col-md-4 col-sm-6">4 col</div>
			</div>
		</div>
	</body>
</html>