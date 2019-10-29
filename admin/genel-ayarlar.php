
<!-- header -->

   <?php include 'header.php'; ?>

    <div class="page-content">
    	<div class="row">

<!-- sidebar -->
<?php  include 'sidebar.php'; ?>	  
<!-- endsidebar -->
		  <div class="col-md-10">
		  	

		  	<div class="row">
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Genel Ayarlar</div>
						
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			<div class="row">
			  				    <form action="islem.php?site_id=<?php echo $id; ?>" method="POST" class="form-horizontal" role="form">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Site Title</label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="site_title"  value="<?php echo$take['site_title']; ?>">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Site Url</label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="site_url"  value="<?php echo $take['site_url'];?>">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Site Desc</label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="site_desc" value="<?php echo $take['site_desc'];?>">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Site Keywords</label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="site_keyw" value="<?php echo $take['site_keyw'];?>">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Site Footer</label>
										    <div class="col-sm-9">
										      <input type="text" class="form-control" name="site_footer" value="<?php echo $take['site_footer'];?>">
										    </div>
										  </div>

										  <hr>
										  <div class="col-md-11">
										  	<button class="btn btn-success pull-right" name="genel-ayarlar" >Güncelle</button>
										  </div>

							    </form>
			  			</div>
					</div>
		  		</div>
		  	</div>

		  </div>
		</div>
    </div>

   <!-- Footer -->

   <?php include 'footer.php'; ?>