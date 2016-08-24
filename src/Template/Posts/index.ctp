<?php foreach($posts as $post):  ?>
	<div class="well">
		<h4><?= $post['title'] ?></h4>
		<p><?= $post['body'] ?></p>
			<?= $this->Html->link('Read More', '/posts/' . $post['id']) ?>
	</div>
<?php endforeach; ?>