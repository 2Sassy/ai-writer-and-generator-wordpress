<div class="wpm-header-table">
	<div class="wpm-header-table-icon">
		<i class="fas fa-edit"></i>
	</div>
	<div class="wpm-header-table-title">Generate Content</div>
</div>
<div class="wpm-body-content">
	<div class="wpm-section-content">
		<div class="wpm-section-title">Add article titles to generate Posts</div>
		<div class="wpm-section-body">
			<div class="wpm-section-body-list">
				<div class="wpm-section-body-list-block">
					<label for="language-generator">Language</label>
                    <select id="language-generator">
                        <?php foreach($generator_languages as $language) { ?>
                            <option value="<?php echo esc_attr($language); ?>"><?php echo esc_html($language); ?></option>
                        <?php } ?>
                    </select>
				</div>
                <div class="wpm-section-body-list-block">
                    <label for="category-post">Category to add Post</label>
                    <select id="category-post">
						<?php foreach($categories as $category) { ?>
                            <option value="<?php echo esc_attr($category->term_id); ?>"><?php echo esc_html($category->name); ?></option>
						<?php } ?>
                    </select>
                </div>
                <div class="wpm-section-body-list-block">
                    <label for="publish-status">Publication Status</label>
                    <select id="publish-status">
                        <option value="publish">Publish Immediately</option>
                        <option value="draft">Keep in Draft status</option>
                    </select>
                </div>
                <div class="wpm-section-body-list-block full-width">
                    <label for="articles_list">Posts Titles (one per line) / Posts titles must be minimum 3 words length. Non-legal content titles will be ignored</label>
                    <textarea id="articles_list" rows="8"></textarea>
                </div>
			</div>
		</div>
		<div class="wpm-section-footer">
			<button class="wpm-button" id="wpm-send-articles-to-queue">Send to Generator</button>
            <div class="wpm-ajax-error-message"></div>
		</div>
	</div>
	<div class="wpm-section-content">
		<div class="wpm-section-title">Queued Articles for Generation</div>
		<table class="wpm-status-table no-margin five-column" cellpadding="0" cellspacing="0">
			<thead>
			<tr>
				<th>Title</th>
                <th>Date Queued</th>
                <th>Category</th>
                <th>Status</th>
                <th>Date Posted</th>
			</tr>
			</thead>
		</table>
        <div class="wpm-table-scroller" id="queued_articles_table">
            <?php include(WPM_SEO_ARTICLES_GENERATOR_PLUGIN_DIR."/templates/ajax/queued_articles_table.php"); ?>
        </div>
	</div>
</div>