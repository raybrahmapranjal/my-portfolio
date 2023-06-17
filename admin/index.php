
<?php include 'includes/header.php';?>
<body class="theme-red">
    <!-- Page Loader -->
<?php include 'includes/sidebar.php';?>
    
    
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Portfolio Details</h2>
            </div>
            <?php 
            	if (isset($_SESSION['message'])) {
            		echo $_SESSION['message'];
            		unset($_SESSION['message']);
            	}
            ?>
            
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    <div class="card">
			        <div class="header">
			            <h2>Add Portfolio</h2>
			            
			        </div>
			        <div class="body">
			            <h2 class="card-inside-title">Please Enter The Details</h2>

			            <form id="uploadForm" action="forms/abouts.php" method="post" enctype="multipart/form-data">
			            	
			                <div class="row clearfix">
			                	
			                	<div class="form-group">
	                                <div class="col-sm-6">
	                                    <select class="form-control show-tick" name="category" required>
	                                        <option value="" selected disabled>Please Select Category</option>
		                                	<option value="WEB DESIGN">WEB DESIGN</option>
		                                	<option value="ANDROID APP">ANDROID DEVELOPMENT</option>
		                                	
	                                    </select>
	                                </div>
	                            </div>
			                    
			                    <div class="col-sm-12">
			                        <div class="form-group">
			                            <div class="form-line">
			                                
			                                <textarea onkeyup="validateCompany(this.value);" rows="4" class="form-control no-resize" id="company" placeholder="Please Enter Title"></textarea>
			                            </div>
			                            <input type="hidden" id="targetCompany" name="company" value="">
			                        </div>
			                    </div>
			                    <div class="col-sm-12">
			                        <div class="form-group">
			                            <div class="form-line">
			                                
			                                <textarea onkeyup="validateVision(this.value);" rows="4" class="form-control no-resize" id="vision" placeholder="Enter Description"></textarea>
			                            </div>
			                            <input type="hidden" id="targetVision" name="vision" value="">
			                        </div>
			                    </div>
			                    <div class="col-sm-12">
			                        <div class="form-group">
			                            <div class="form-line">
			                                
			                                <textarea onkeyup="validatelink(this.value);" rows="4" class="form-control no-resize" id="link" name="link" placeholder="Enter link"></textarea>
			                            </div>
			                            <input type="hidden" id="targetlink" value="">
			                        </div>
			                    </div>
			                    
			                    
			                    <div class="col-sm-12">
			                        <div class="form-group">
			                            <label>Upload Image File:</label><br/>
			                            <input name="image1" type="file" class="inputFile" accept="image/*"/>
			                        </div>
			                    </div>
			                     <div class="col-sm-12">
			                        <div class="form-group">
			                            <label>Upload Image File:</label><br/>
			                            <input name="image2" type="file" class="inputFile" accept="image/*"/>
			                        </div>
			                    </div>
			                     <div class="col-sm-12">
			                        <div class="form-group">
			                            <label>Upload Image File:</label><br/>
			                            <input name="image3" type="file" class="inputFile" accept="image/*"/>
			                        </div>
			                    </div>
			                </div>
			                <div class="form-group">
			                     <input type="submit" name="submit" value="Save" class="btn btn-success waves-effect btnSubmit" />
			                </div>
			            </form>

			        </div>
			    </div>
			</div>


        </div>
    </section>

<?php include 'includes/footer.php';?>
<script type="text/javascript">
	function validateEnter(variable){
		var keyed = variable.replace(/\n/g, '<br/>');
    	$("#target").val(keyed);
	}
	function validateCompany(variable){
		var keyed = variable.replace(/\n/g, '<br/>');
    	$("#targetCompany").val(keyed);
	}
	function validateVision(variable){
		var keyed = variable.replace(/\n/g, '<br/>');
    	$("#targetVision").val(keyed);
	}
	function validatelink(variable){
		var keyed = variable.replace(/\n/g, '<br/>');
    	$("#targetlink").val(keyed);
	}
	
</script>