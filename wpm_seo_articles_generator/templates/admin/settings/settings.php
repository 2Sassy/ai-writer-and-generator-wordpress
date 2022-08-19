<div id="<?php echo esc_attr(WPM_SEO_ARTICLES_GENERATOR_ID); ?>">

    <!-- Left Sidebar -->
    <div class="wpm-left-sidebar">
        <div class="wpm-logo">
            <a href="https://wp-masters.com/" target="_blank">
                <img src="<?php echo esc_attr(WPM_SEO_ARTICLES_GENERATOR_PLUGIN_PATH.'/assets/img/logo.png') ?>" class="wpm-big-logo" alt="">
                <img src="<?php echo esc_attr(WPM_SEO_ARTICLES_GENERATOR_PLUGIN_PATH.'/assets/img/logo-sm.png') ?>" class="wpm-small-logo" alt="">
            </a>
        </div>
        <ul class="wpm-menu-list">
            <?php include( 'tabs/menu.php' ); ?>
        </ul>
    </div>

    <!-- Center Content -->
    <div class="wpm-center-content">
        <div class="wpm-select-table" id="dashboard-table">
	        <?php include( 'tabs/dashboard-table.php' ); ?>
        </div>
        <div class="wpm-select-table" id="generate-content-table" style="display: none">
		    <?php include( 'tabs/generate-content-table.php' ); ?>
        </div>
        <div class="wpm-select-table" id="system-info-table" style="display: none">
            <?php include( 'tabs/system-info-table.php' ); ?>
        </div>
    </div>

    <!-- Right Sidebar -->
    <div class="wpm-right-sidebar">
        <div class="wpm-need-help-block">
            Need help? We can help you!
        </div>
        <div class="wpm-our-company-block">
            <div class="wpm-our-company-block-icon"><i class="fa-solid fa-people-line"></i></div>
            <div class="wpm-our-company-block-title">How we can help</div>
            <div class="wpm-our-company-block-description">Our company is specialized on developing websites, themes and plugins for WordPress. Also we do audit, SEO and more. Contact us if you want to be the Best!</div>
            <a href="https://wp-masters.com/" class="wpm-our-company-block-button" target="_blank">Official Website</a>
        </div>
    </div>

</div>