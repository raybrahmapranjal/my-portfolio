
<?php include 'includes/header.php';?>
<body class="theme-red">
    <!-- Page Loader -->
<?php include 'includes/sidebar.php';?>
 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    View Portfolios
                    <?php 
		            	if (isset($_SESSION['message'])) {
		            		echo $_SESSION['message'];
		            		unset($_SESSION['message']);
		            	}
		            ?>
                </h2>
            </div>
            

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE PORTFOLIO
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>link</th>
                                            <th>Image1</th>
                                            <th>Image2</th>
                                            <th>Image3</th>
                                            <th>Added date</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>link</th>
                                            <th>Image1</th>
                                            <th>Image2</th>
                                            <th>Image3</th>
                                            <th>Added date</th>
                                            <th>Control</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        if ($readAbouts) {
                                        	$n=0;
                                        	foreach ($readAbouts as $aboutKey) { ?>
                                        	<tr>
	                                        	<td><?php echo ++$n; ?></td>	
	                                        	<td><?php echo $aboutKey['company'];?></td>	
	                                        	<td><?php echo $aboutKey['category'] ;?></td>	
	                                        	<td><?php echo $aboutKey['vision'] ;?></td>	
                                                <td><?php echo $aboutKey['link'] ;?></td> 
	                                        	<td><img width="80px" src="image/<?php echo $aboutKey['image1'];?>"></td>	
                                                <td><img width="80px" src="image/<?php echo $aboutKey['image2'];?>"></td> 
                                                <td><img width="80px" src="image/<?php echo $aboutKey['image3'];?>"></td> 
	                                        	<td><?php echo $aboutKey['date_posted'];?></td>	
	                                        	<td><button type="button" class="aboutData btn btn-warning waves-effect m-r-20" data-toggle="modal" data-id="<?php echo $aboutKey['abouts_id'];?>" data-target="#defaultModal">Edit/Delete</button></td>
	                                        </tr>	
                                        	<?php }
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>   

<!-- modal -->
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Edit Portfolio</h4>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					    <div class="card">
					        <div class="body">
					            <form action="forms/edit-abouts.php" method="post" enctype="multipart/form-data">
					            	
					                <div class="row clearfix">
					                	
					                	<div class="form-group">
			                                <div class="col-sm-6">
			                                    <select class="categorySelect form-control show-tick" id="editForm" name="category" required>
			                                        <option value="0" selected disabled>Please Select Category</option>
				                                	<option value="WEB DESIGN">WEB DESIGN</option>
				                                	<!-- <option value="APP DESIGN">APP DESIGN</option> -->
				                                	<option value="ANDROID APP">ANDROID DEVELOPMENT</option>
				                                	
			                                    </select>
			                                </div>
			                            </div>
					                    
					                    <div class="col-sm-12">
					                        <div class="form-group">
					                            <div class="form-line">
					                                <input type="hidden" id="aboutID" name="aboutID">
					                                <textarea name="company" onkeyup="validateCompany(this.value);" rows="4" class="form-control no-resize" id="company" placeholder="client"></textarea>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="col-sm-12">
					                        <div class="form-group">
					                            <div class="form-line">
					                                
					                                <textarea onkeyup="validateVision(this.value);" name="vision" rows="4" class="form-control no-resize" id="vision" placeholder="Enter Description"></textarea>
					                            </div>
					                        </div>
					                    </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    
                                                    <textarea onkeyup="validatelink(this.value);" name="link" rows="4" class="form-control no-resize" id="link" placeholder="Enter link"></textarea>
                                                </div>
                                            </div>
                                        </div>
					                    
					                    <div class="col-sm-12">
					                        <div class="form-group">
					                            <label>Upload Image File:</label><br/>
					                            <input name="image" id="image" type="file" class="inputFile" accept="image/*"/>
                                                <img id="responseImage" width="80px">
					                        </div>
					                    </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Upload Image File:</label><br/>
                                                <input name="image2" id="image2" type="file" class="inputFile" accept="image/*"/>
                                                <img id="responseImage2" width="80px">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Upload Image File:</label><br/>
                                                <input name="image3" id="image3" type="file" class="inputFile" accept="image/*"/>
                                                <img id="responseImage3" width="80px">
                                            </div>
                                        </div>
					                    <!-- <div class="col-sm-6">
					                        <div class="form-group">
					                            <img id="responseImage" width="80px">
					                        </div>
					                    </div> -->
					                    <div class="col-sm-12">
					                        <div class="form-group">
    										<input type="submit" name="formSubmit" class="btn btn-success waves-effect" value="SAVE CHANGES">
    										<a href="" id="deletePortfolio" class="btn btn-danger waves-effect">DELETE PORTFOLIO</a>
    										
					                        </div>
					                    </div>
					                </div>
					            </form>

					        </div>
					    </div>
					</div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>


<?php include 'includes/footer.php';?>
<script type="text/javascript">
	function validateCompany(variable){
		var keyed = variable.replace(/\n/g, '<br/>');
    	$("#targetCompany").val(keyed);
	}
	function validateVision(variable){
		var keyed = variable.replace(/\n/g, '<br/>');
    	$("#targetVision").val(keyed);
	}



	$(document).on("click touch", ".aboutData", function () {
      var dataId = $(this).data('id');
      $('#aboutID').val(dataId);
   

      $.ajax({
         type: "POST", 
         dataType: "json", 
         url: "xhr/fetch-details.php", 
         data: {
            dataId:dataId         
         },
         success: function(response){
         	var keyed = response.vision.replace(/<br ?\/?>/g,"\n");
    		$("#vision").val(keyed);
    		var keyed = response.company.replace(/<br ?\/?>/g,"\n");
    		$("#company").val(keyed);
            var keyed = response.link.replace(/<br ?\/?>/g,"\n");
            $("#link").val(keyed);
            // $('#responseImage').attr("src",response.bg_img);
            $('#deletePortfolio').attr("href","forms/delete-portfolio.php?id="+dataId);
            $("div.categorySelect select").val(response.category).change();
            // $('#responseImage').attr("src",response.image);
            // $('#responseImage2').attr("src",response.image2);
            // $('#responseImage3').attr("src",response.image3);
            $('#responseImage').attr('src', 'image/' + response.image);
            $('#responseImage2').attr('src', 'image/' + response.image2);
            $('#responseImage3').attr('src', 'image/' + response.image3);



         },
         error: function(error){
            console.log("Error:");
            console.log(error);
         }

      });
      
   });
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      if(input.id === 'image') {
        $('#responseImage').attr('src', e.target.result);
      } else if(input.id === 'image2') {
        $('#responseImage2').attr('src', e.target.result);
      } else if(input.id === 'image3') {
        $('#responseImage3').attr('src', e.target.result);
      }
    };
    reader.readAsDataURL(input.files[0]);
  }

  }

$("#image, #image2, #image3").change(function() {
  readURL(this);
});

</script>