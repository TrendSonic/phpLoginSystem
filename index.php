<?php
include 'header.php';
?>
<section class="index-intro">
	<?php
	if (isset($_SESSION["useruid"])) {
		echo "<p>Hello there <strong>" . $_SESSION["useruid"] . "</strong></p>";
	}
	?>
	<h1>This is an introduction</h1>
	<p>Here is an important paragraph that explains the purpose of the website</p>
</section>

<section class="index-categories">
	<h2>Some basic categories</h2>
	<div class="index-categories-list">
		<div>
			<h3>Fun stuff</h3>
		</div>
		<div>
			<h3>Serious stuff</h3>
		</div>
		<div>
			<h3>Exciting stuff</h3>
		</div>
		<div>
			<h3>Boring stuff</h3>
		</div>
	</div>
</section>

<?php
include 'footer.php';
?>