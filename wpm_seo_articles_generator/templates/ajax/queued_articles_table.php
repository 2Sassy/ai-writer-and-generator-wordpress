<table class="wpm-status-table five-column" cellpadding="0" cellspacing="0">
    <tbody>
	<?php if(!empty($queued_articles)) {
		foreach($queued_articles as $article) {
			$category = get_the_category_by_ID($article->category);
			?>
            <tr>
                <td><?php echo esc_html($article->article_name); ?></td>
                <td><?php
					if(get_option('date_format')) {
						echo esc_html(date(get_option('date_format'), strtotime($article->timestamp)));
					} else {
						echo esc_html(date('Y-m-d H:i:s', strtotime($article->timestamp)));
					}
					?></td>
                <td><?php if(is_string($category)) { echo esc_html($category); } else { echo esc_html('Not found'); } ?></td>
                <td><?php if($article->post_id > 0) { ?> <a href="<?php echo esc_url(get_permalink( $article->post_id )); ?>" class="wpm-button-black" target="_blank">Look Post</a> <?php } else { echo esc_html("In Process"); } ?></td>
                <td><?php if($article->date_posted != '' && strtotime($article->date_posted) > 0) {
						if(get_option('date_format')) {
							echo esc_html(date(get_option('date_format'), strtotime($article->date_posted)));
						} else {
							echo esc_html(date('Y-m-d H:i:s', strtotime($article->date_posted)));
						}
					} else {
						echo esc_html('Not Posted');
					} ?></td>
            </tr>
		<?php }} else { ?>
        <tr>
            <td>No articles is generated</td>
        </tr>
	<?php } ?>
    </tbody>
</table>