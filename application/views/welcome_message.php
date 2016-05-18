<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Login Page</title>
	<link rel="stylesheet" href="<?=base_uri()?>public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?=base_uri()?>public/css/main.css" />

	<script src="<?=base_uri()?>public/js/jquery-1.12.3.min.js" type="text/javascript"></script>
	<script src="<?=base_uri()?>public/js/bootstrap.js" type="text/javascript"></script>


	</style>
</head>
<body>

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="text-center">Login</h1>
    </div>
    <div class="modal-body">
      <form class="col-md-12 center-block">
        <div class="form-group">
          <input type="text" class="form-control input-lg" placeholder="Username">
        </div>
        <div class="form-group">
          <input type="password"class="form-control input-lg" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-block btn-lg btn-primary" value="login">
          <span class="pull-right"><a href="#">Recover Password</a></span>
        </div>
      </form>
      <div class="modal-footer">
        <div class="button">
           <button class="btn">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>