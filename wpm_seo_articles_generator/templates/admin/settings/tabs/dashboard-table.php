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
        <div class="wpm-section-title">Activation Keys</div>
        <div class="wpm-section-body">
            <div class="wpm-section-body-list">
                <div class="wpm-section-body-list-block">
                    <div class="wpm-section-body-list-block-gray">
                        <div class="wpm-section-body-list-block-gray-title">50 Points</div>
                        <div class="wpm-section-body-list-block-gray-description">Lite package for small blogs or if you need not much articles</div>
                        <div class="wpm-section-body-list-block-gray-button">
                            <a href="https://wpmasters.test.onfastspring.com/50-ai-generated-posts" target="_blank">Buy license</a>
                        </div>
                    </div>
                </div>
                <div class="wpm-section-body-list-block">
                    <div class="wpm-section-body-list-block-gray">
                        <div class="wpm-section-body-list-block-gray-title">100 Points</div>
                        <div class="wpm-section-body-list-block-gray-description">Optimal package for medium size blogs and regular updates</div>
                        <div class="wpm-section-body-list-block-gray-button">
                            <a href="https://wpmasters.test.onfastspring.com/100-ai-generated-posts" target="_blank">Buy license</a>
                        </div>
                    </div>
                </div>
                <div class="wpm-section-body-list-block">
                    <div class="wpm-section-body-list-block-gray">
                        <div class="wpm-section-body-list-block-gray-title">500 Points</div>
                        <div class="wpm-section-body-list-block-gray-description">Pro package for big professional blogs and much content</div>
                        <div class="wpm-section-body-list-block-gray-button">
                            <a href="https://wpmasters.test.onfastspring.com/500-ai-generated-posts" target="_blank">Buy license</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>