<?php include 'partials/header.php'; ?>

<style>
	#content {
		position: absolute;
    margin-left: 300px;
    margin-top: 100px;
	}
</style>
    <div id="body">
		<!-- CONTENT AREA START -->
		<section id="content">
	    <article>		
			<h2>Page Title</h2>
		</article>

		<?php 
			require 'config/dbc.php'; 
			$selectMessage = mysqli_query($conn, "SELECT * FROM smsexp123_category WHERE status='Active'");
			while ($viewMessage = mysqli_fetch_array($selectMessage)) {
		?>
	
		<article class="expanded">
        	<h2><?php echo $viewMessage['title']; ?></h2>
			<div class="article-info">
			Posted on <time datetime="2013-05-14"><?php echo $viewMessage['create_date']; ?></time> 
			by <a href="#" rel="author">
			<?php 
				$member_id = $viewMessage['id']; 
				$selectMember = mysqli_query($conn, "SELECT * FROM smsexp123_category WHERE id=$member_id");
				$viewMember = mysqli_fetch_array($selectMember);		
				echo $viewMember['title'];
			?>

			</a> 
			Posted in <a href="#">
			<?php 
				$category_id = $viewMessage['id']; 
				$selectCategory = mysqli_query($conn, "SELECT * FROM smsexp123_category WHERE id=$category_id");
				$viewCategory = mysqli_fetch_array($selectCategory);		
				echo $viewCategory['title'];
			?>
				
			</a>
			</div>
            <p><?php echo substr($viewMessage['meta_description'], 0, 150); ?>...</p>
			<a href="message.php?id=<?php echo $viewMessage['id']; ?>" class="button">Read more</a><br><br>
		</article>

		<?php } ?>

        </section>

        <!-- CONTENT AREA END -->
        <?php include 'partials/sidebar.php'; ?>        
        
    </div>
    
    <!-- <?php include 'partials/footer.php'; ?> -->