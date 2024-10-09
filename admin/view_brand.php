<?php include 'partial/header.php'?>
<?php include 'partial/sidebar.php'?>
<?php include 'config/dbc.php' ?>

    <!-- BEGIN PAGE CONTAINER-->
        
   <div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2>Manage Brand</h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                       
                    <br>
                    <?php 
                            require 'config/dbc.php';
                            $query = mysqli_query($conn, "SELECT * FROM add_brand"); 
                            if ($query) {
                        ?>
                       <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox10" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th style="width:5%">id</th>
                                <th style="width:10%">file</th>
                                <th style="width:10%">name</th>
                                <th style="width:10%">price</th>
                                <th style="width:10%">discount</th>
                                <th style="width:10%">category</th>
                                <th style="width:10%">discription</th>
                                <th style="width:10%">status</th>

                                <?php
                                while ( $row = mysqli_fetch_array($query) ) { ?> 
                              
                              

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="checkbox11" type="checkbox" value="1">
                                        <label for="checkbox11"></label>
                                    </div>
                                </td>
                                
                                <td><?php echo $row['id'] ?></td>
                                <td align="center"><img src="_assets/img/<?php echo $row['file'] ?>" width="80px" height="80px"></td>
                                <td><?php echo $row['name'] ?></td>
                                
                                <td>
                                <?php echo $row['price'] ?>
                                 </td>
                                <td><?php echo $row['discount'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td>
                                <?php echo $row['status']  ?>     	
                                       
                                </td>
                                <td>
                                    <a href="edit_brand.php?id=<?php echo $row['id']; ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="delete_brand.php?id=<?php echo $row['id']; ?>" class="label label-important singleDelete" onclick="return confirm('Are you sure you want to delete this ?');"> <i class="fa fa-trash-o"></i></a>
                                    
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } else { ?>
                        <div class="alert alert-danger">No Record Found</div>
                    <?php } ?>
                    <div>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="alert alert-info">
                        <strong>Info!</strong> No Record Found!
                    </div>

                </div>
            </div>
        </div>
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

