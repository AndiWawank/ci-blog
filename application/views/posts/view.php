
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h3 class="text-center judl"><?php echo $post['title']; ?></h3>
			<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
			<hr class="tai">
			<div class="post-body">
				<p><?php echo $post['body']; ?></p>
			</div>

			<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
				<hr>
				<a class="btn btn-primary pull-left btn-sm" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
				<?php echo form_open('/posts/delete/'.$post['id']); ?>
					<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
				</form>
			<?php endif; ?>

			<!-- ====================================== -->
			<!-- Bagian Komentar -->
			<div id="disqus_thread"></div>
<script>

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://andiwawank-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

			<!-- Bagian Komentar -->
		</div>
		<div class="col-md-3"></div>
	</div>
