<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHP APP (<?php echo gethostname();?>)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
      html{	height:100%;}
      body{	font-family:Helvetica,Arial;	display:flex;	display:-webkit-flex;	align-items:center;	justify-content:center;	-webkit-align-items:center;	-webkit-box-align:center;	-webkit-justify-content:center;	height:100%;}
      .box{	background:#CB3;	color:white;	text-align:center;	border-radius:10px;	display:inline-block;}
      h1{	font-size:6em;	line-height:1.5em;	margin:0 0.5em;}
      h2{	margin-top:0;}
  </style>
</head>
<body>
<div class="box">
	<h1>PHP application</h1>
	<h2>Hostname: <?php echo gethostname(); ?></h2>
</div>
</body>
</html>

