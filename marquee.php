<?

if(function_exists('get_field')) {
	if(get_field('top_text','options')) {

		$content = '<div class="marquee"><h2>';

		$content .= get_field('top_text','options');

		$content .= '</h2></div>';

		echo $content;

	}
} else {

	?>
	<div class="wrapper">
		<div class="marquee">
			<h2>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias ut cum accusamus harum aliquam neque animi ea dolor quidem maiores accusantium voluptatem quaerat veritatis quisquam nostrum sed eos dicta sapiente?
			</h2>
		</div>
	</div>
	<?
}


?>