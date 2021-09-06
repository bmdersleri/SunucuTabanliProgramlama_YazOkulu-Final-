
<?php include 'includes/header.php';?>
        <!-- Navigation Bar -->
   <?php include 'includes/navbar.php';?>
        <!-- Navigation Bar -->

    <div class="container">
        <div class="row">
	        <!-- Page Content -->
	        <div class="col-md-8">
            <h1 class="page-header">ARAMA SONUÇLARI</h1>
            <?php
if (isset($_POST['submit'])) {
	$search = htmlspecialchars(mysqli_real_escape_string($conn, $_POST["search"]));
	if(empty($search)) {
		header('location: index.php');
	}
	$query = "SELECT * FROM posts WHERE tag LIKE '%$search%' AND status='published'";
	$search_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$count = mysqli_num_rows($search_query);
	if ($count == 0) {
		echo "<h1>Üzgünüz, sorgunuz için sonuç bulunamadı</h1>";
	} else {
		while ($row = mysqli_fetch_array($search_query)) {
			$post_title = $row['title'];
			$post_id = $row['id'];
			$post_author = $row['author'];
			$post_date = $row['postdate'];
			$post_image = $row['image'];
			$post_content = $row['content'];
			$post_tags = $row['tag'];
			$post_status = $row['status'];
			?>
		<!-- Post Area-->

	        	<p><h2><a href="#"><?php echo $post_title; ?></a></h2></p>
	        	<p><h3><a href="#"><?php echo $post_author; ?></a></h3></p>
	        	<p><span class="glyphicon glyphicon-time"></span>Yayınlanan <?php echo $post_date; ?></p>
	        	<hr>
	        	<img class="img-responsive img-rounded" src="allpostpics/<?php echo $post_image; ?>" alt="900 * 300">
	        	<hr>
	        	<p><?php echo substr($post_content, 0, 300) . '.........'; ?></p>
	        		<a href="post.php?post=<?php echo $post_id; ?>"><button type="button" class="btn btn-primary">Devamını oku<span class="glyphicon glyphicon-chevron-right"></span></button></a>
	        	<hr>
	        	<!-- Post Area -->
	        	<?php }
	}
}
else {
	header("location: index.php");
}
?>





	        	<hr>
	        	<ul class="pager">
				  <li class="previous"><a href="#"><span class="glyphicon glyphicon-arrow-left"></span>  eski</a></li>
				  <li class="next"><a href="#"> yeni <span class="glyphicon glyphicon-arrow-right"></span></a></li>
				</ul>
	        </div>
	        <!-- Page Content -->
	        <!-- Side Content -->
	        <div class="col-md-4">

               <?php include 'includes/sidebar.php';
?>

	        </div>
	        <!-- Sde Content -->
        </div>

        <!-- Footer -->
        <?php include 'includes/footer.php';?>
        <!-- Footer -->
    </div>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>