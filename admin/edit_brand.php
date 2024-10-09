<?php include 'partial/header.php'?>
<?php include 'partial/sidebar.php'?>

    <!-- BEGIN PAGE CONTAINER-->
        
<div class="page-content"> 
    <div class="content">  
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">  
        <h2>Update Brand</h2>    
      </div>
      
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <form name="formAdd" id="formAdd" method="post" action="update_brand.php" enctype="multipart/form-data">
        <div class="col-md-14">
              <div class="grid simple">                
                <div class="grid-body no-border">
                  <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
            </div>
            <div class="grid-body no-border">
            <?php 
                            require 'config/dbc.php';
                            $id = $_GET['id'];
                            $query = mysqli_query($conn, "SELECT * FROM add_brand WHERE id=$id"); 
                            if ($query) {
                        ?>
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>            
                    <div class="row form-row">
                    <?php while ( $row = mysqli_fetch_array($query) ) { ?> 
                    </div>  

                    <div class="row form-row">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                      <div class="col-md-12">
                        <input name="inputTitle" id="inputTitle" type="text"  class="form-control" placeholder="Title" value="<?php echo $row['name'] ?>">
                      </div>
                      <div class="col-md-12">
                        <input name="inputCategory" id="inputCategory" type="text"  class="form-control" placeholder="Category" value="<?php echo $row['category'] ?>">
                      </div>
                      <div class="col-md-12">
                        <input name="inputPrice" id="inputPrice" type="number"  class="form-control" placeholder="Price" value="<?php echo $row['price'] ?>">
                      </div>
                      <div class="col-md-12">
                        <input name="inputDiscount" id="inputDiscount" type="number" range="100"  class="form-control" placeholder="Discount" value="<?php echo $row['discount'] ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="inputSlug" id="inputSlug" type="text"  class="form-control" placeholder="Slug"value="<?php echo $row['slug'] ?>" readonly>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
        
                  <h4>Postal Information</h4>
                  <div class="row form-row">
                      <div class="col-md-12">
                        <input name="userFile" id="userFile" type="file"  class="form-control" value="<?php echo $row['file'] ?>">
                      </div>
                      <input name="status" id="status" type="hidden"  class="form-control">
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <textarea name="inputMetaDescriptions" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions" ><?php echo $row['description'] ?></textarea>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input type="text" name="inputMetaKeywords" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo $row['keywords'] ?>">
                      </div>
                    </div>
                </div>
              </div>
       
            </div>
          </div>
       <div class="form-actions">
          <button class="btn btn-danger btn-cons" type="submit" name= "submit"><i class="fa fa-save"></i> Save </button>
          <a href="#" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
        </div>
        </div>
      </div>
                </div>
              </div>
        </div>
    <?php } ?>
</form>

<?php }?>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>
        
    <!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT --> 

<!-- BEGIN CHAT --> 

<!-- END CHAT --> 

</body>
</html>

