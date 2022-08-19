<div class="wpm-header-table">
	<div class="wpm-header-table-icon">
		<i class="fa-solid fa-house-user"></i>
	</div>
	<div class="wpm-header-table-title">Dashboard</div>
</div>
<div class="wpm-body-content">
	<div class="wpm-section-content">
		<div class="wpm-section-body">
			<div class="wpm-section-body-list">
				<div class="wpm-section-body-list-block no-margin-bottom">
                    <div class="wpm-section-title">Premium status: <span class="<?php if(isset($settings['activation_key'])) {echo esc_attr('activated'); } ?>" id="wpm-key-status"><?php if(isset($settings['activation_key'])) {echo esc_html('Activated'); } else { echo esc_html('Deactivated'); } ?></span> (<span id="wpm-points-counter"><?php if(isset($settings['points'])) {echo esc_html($settings['points']); } else { echo esc_html(0); } ?></span> Points)</div>
					<label for="activation_key">Activation Key</label>
					<input type="text" id="activation_key" value="<?php if(isset($settings['activation_key'])) { echo esc_attr($settings['activation_key']); } else { echo esc_attr('FREE'); } ?>">
                    <div class="wpm-section-footer">
                        <button class="wpm-button" id="wpm-activate-plugin">Activate Key</button>
                        <div class="wpm-ajax-error-message"></div>
                    </div>
				</div>
                <div class="wpm-section-body-list-block two-width">
                    <div class="wpm-section-title">Stats of using generator</div>
                    <table class="wpm-status-table two-column wpm-stats-table" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>Queued:</td>
                                <td><?php echo esc_html($still_queued); ?> posts</td>
                            </tr>
                            <tr>
                                <td>Generated (last 24h):</td>
                                <td><?php echo esc_html($generated_hours); ?> posts</td>
                            </tr>
                            <tr>
                                <td>Generated (all time):</td>
                                <td><?php echo esc_html($generated_all); ?> posts</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="wpm-button wpm-trigger-click" data-trigger="wpm-trigger-generate-table">Go to Generator page</button>
                </div>
			</div>
		</div>
	</div>
    <div class="wpm-section-content">
        <div class="wpm-section-title">Help with activation</div>
        <div class="wpm-section-body">
            <div class="wpm-section-body-list">
                <div class="wpm-section-body-list-block">
                    <div class="wpm-section-body-list-block-gray">
                        <div class="wpm-section-body-list-block-gray-title">Where get Activation Key?</div>
                        <div class="wpm-section-body-list-block-gray-description">You can purchase activation key on a special website</div>
                        <div class="wpm-section-body-list-block-gray-button">
                            <a href="https://turingseo.test.onfastspring.com/generate-article-key" target="_blank">Buy license</a>
                        </div>
                    </div>
                </div>
                <div class="wpm-section-body-list-block">
                    <div class="wpm-section-body-list-block-gray">
                        <div class="wpm-section-body-list-block-gray-title">Points are over</div>
                        <div class="wpm-section-body-list-block-gray-description">You need buy new License key and activate it to get again new points</div>
                        <div class="wpm-section-body-list-block-gray-button">
                            <a href="https://turingseo.test.onfastspring.com/generate-article-key" target="_blank">Buy license</a>
                        </div>
                    </div>
                </div>
                <div class="wpm-section-body-list-block">
                    <div class="wpm-section-body-list-block-gray">
                        <div class="wpm-section-body-list-block-gray-title">Multiple website using key</div>
                        <div class="wpm-section-body-list-block-gray-description">Only one key is can be used per one website. You can purchase another key</div>
                        <div class="wpm-section-body-list-block-gray-button">
                            <a href="https://turingseo.test.onfastspring.com/generate-article-key" target="_blank">Buy license</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>