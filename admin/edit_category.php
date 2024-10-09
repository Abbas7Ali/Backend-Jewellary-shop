<?php 
  require 'config/dbc.php';
  $id = $_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM smsexp123_category WHERE id = $id");
  $row = mysqli_fetch_array($result);
?>
<!-- BEGIN HEADER -->
<?php include 'partials/header.php';?>
<!-- END HEADER -->

    
<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
        <?php include 'partials/sidebar.php';?>
    <!-- END SIDEBAR -->


    <!-- BEGIN PAGE CONTAINER-->
    <div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2>Edit Category</h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
       <form name="formEdit" id="formEdit" method="post" action="update_category.php">
       <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <div class="col-md-14">
            <div class="grid simple">
                <div class="grid-body no-border">
                    <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
            </div>
            <div class="grid-body no-border">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>    
                    <div class="row form-row">
                      <div class="col-md-12 date">
                        <input name="inputDate" id="inputDate" type="text"  class="form-control" placeholder="Create Date" value="<?php echo $row['create_date'];  ?>" >
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="inputTitle" id="inputTitle" type="text"  class="form-control" placeholder="Title" value="<?php echo $row ['title'] ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="inputSlug" id="inputSlug" type="text"  class="form-control" placeholder="Slug" value="<?php echo $row['slug'] ; ?>">
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
        
                  <h4>Meta Information</h4>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <textarea name="inputMetaDescriptions" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions"><?php echo $row['meta_description']; ?> </textarea>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input type="text" name="inputMetaKeywords" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo $row['meta_keywords'];?>">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
       <div class="form-actions">
          <button id="submit" class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
          <a href="category.php" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
        </div>
        </div>
      </div>
                </div>
            </div>
        </div>
        </form>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
     <!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT --> 
</body>
</html>

