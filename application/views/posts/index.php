<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-8 blog">
	<h4 style="color:#888;"><?= $title ?></h4>
	<!-- ================List-Blog============= -->
	<?php foreach($posts as $post) : ?>
	<ul class="list-post">
		<li><?php echo $post['created_at']; ?>&nbsp;<a href="<?php echo site_url('/posts/'.$post['slug']); ?>"> - <?php echo $post['title']; ?></a></li>
	</ul>
	<?php endforeach; ?>
	<!-- ================List-Blog============= -->
	<div class="pagination-links">
			<?php echo $this->pagination->create_links(); ?>
	</div>
	</div> <!--Profil-->
	<div class="col-md-2"></div>

</div>
