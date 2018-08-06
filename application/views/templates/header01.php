<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GIS Lahan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.css');?>">
    <style>
    </style>
    <script src="<?php echo base_url('asset/js/jquery-1.11.1.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
		<script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgjbB8k1wZ41_x-DDcJMiilohqdWOvLvs&callback=peta_awal" async defer></script>

</head>
<body onload="peta_awal()">
    <div class="navbar navbar-inverse" role="navigation">
    	<div class="container">
	    	<div class="row">
	        	<div class="col-md-12 col-sm-12">
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                  <a class="navbar-brand" href="<?php echo site_url('home/'); ?>">GIS Lahan</a>
	                </div>
	            <ul class="nav navbar-nav">
	            	<li><a href="<?php echo site_url('home/') ?>">Peta</a></li>
								<li><a href="<?php echo site_url('auth/') ?>">Login</a></li>
	            </ul>
	          </div>
	        </div>
        </div>
    </div>
<!--content-->
