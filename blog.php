<?php
	require_once "bd/connection.php";
	$categories = $conn->query('SELECT * FROM categories');
	$dayposts = $conn->query("SELECT * FROM posts WHERE id ORDER BY view DESC LIMIT 0, 9");
	require_once "components/head.php";
	require_once "components/header.php";
?>

<div class="">
    <section id="secondSection" class="flex">
		<div class="flex wrapformSearch">
			<form action="result" method="GET" id="searchForm" class="flex">
				<div class="wrap-search">
					<label for="search" class="label-search">Интересующая тема: </label>
					<input id="search" type="text" class="inputFocus" name="search" autocomplete="off">
					<button type="submit" class="button">
						<svg aria-hidden="true" width="20px" data-prefix="fal" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-7x"><path fill="#141414" d="M508.5 481.6l-129-129c-2.3-2.3-5.3-3.5-8.5-3.5h-10.3C395 312 416 262.5 416 208 416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c54.5 0 104-21 141.1-55.2V371c0 3.2 1.3 6.2 3.5 8.5l129 129c4.7 4.7 12.3 4.7 17 0l9.9-9.9c4.7-4.7 4.7-12.3 0-17zM208 384c-97.3 0-176-78.7-176-176S110.7 32 208 32s176 78.7 176 176-78.7 176-176 176z" class=""></path></svg>
					</button>
				</div>
				<div class="result-search flex">
					
				</div>
			</form>
		</div>
		<div class="wrapperNewsDay__main">
			<div class="tabs-posts flex">
				<a href="" class="active">Популярыне темы</a>
				<a href="">Темы дня</a>
			</div>
			<div class="wrapperNewsDay__main-items flex active">
				<?php foreach ($dayposts->fetchAll() as $daypost) {?>
					<?php 
						$posts = $conn->query('SELECT * FROM posts WHERE id = "'.$daypost['id'].'"');
		    		?>
		    		<?php foreach($posts->fetchAll() as $post){?>
						<a href='<?php echo "post.php?id=".$post['id']; ?>' class="wrapperNewsDay__main-item flex">
							<div class="date-publish">
								<p><?php echo $post['datetime'] ?></p>
							</div>
							<div class="wrapperNewsDay-title">
								<p><?php $mess = mb_substr($post['title'], 0, 60, 'UTF-8') . '...'; echo $mess ?></p>
							</div>
							<div class="author">
								<p><?php echo $post['author'] ?></p>
							</div>
						</a>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="wrapperNewsDay__main-items flex">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cum minima, quam accusantium impedit officiis sapiente maiores debitis id, numquam tenetur esse repellendus deserunt eaque nulla asperiores eius nemo eos.
			</div>
		</div>
    </section>
    <?php foreach($categories->fetchAll() as $category){?>
    	<section>
			<form action="" method="post">
				<?php echo "<h1>".$category['name']."</h1>"; ?>
	    		<?php 
					$posts = $conn->query('SELECT * FROM posts WHERE categories = "'.$category['id'].'"');
	    		?>
	    		<div class="section-wrapper-posts flex">
		    		<?php foreach($posts->fetchAll() as $post){?>
						<a href='<?php echo "post.php?id=".$post['id']; ?>' target="_blank" class="wrapperNewsDay__main-item flex">
							<div class="date-publish">
								<p><?php echo $post['datetime'] ?></p>
							</div>
							<div class="wrapperpostDay-title">
								<p><?php echo $post['title'] ?></p>
							</div>
							<div class="wrapperpostDay-text">
								<p><?php mb_strimwidth($post['text'], 0, 100, "..."); ?></p>
							</div>
							<div class="author">
								<p><?php echo $post['author'] ?></p>
							</div>
						</a>
		    		<?php } ?>
		    	</div>
		    </form>
	    </section>  
	<?php } ?>
</div>

<?php
	require_once "components/footer.php";
?>