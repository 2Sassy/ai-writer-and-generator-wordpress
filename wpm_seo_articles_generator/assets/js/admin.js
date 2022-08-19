jQuery(document).ready(function($) {
    $("body").on("click","#wpm_seo_articles_generator .wpm-menu-list li.wpm-change-table",function(){
        var table = $(this).data('table');

        $('#wpm_seo_articles_generator .wpm-menu-list li.wpm-change-table').removeClass('active');
        $(this).addClass('active');

        $('#wpm_seo_articles_generator .wpm-select-table').hide();
        $('#'+table).show();
    });

    $("body").on("click","#wpm_seo_articles_generator .wpm-trigger-click",function(){
        var whereClick = $(this).data('trigger');
        $('#'+whereClick).trigger('click');
    });

    $("body").on("click","#wpm_seo_articles_generator #wpm-activate-plugin",function() {

        var button = $(this);
        button.text('Loading...');
        button.closest('.wpm-section-footer').find('.wpm-ajax-error-message').html('');

        var activation_key = $('#activation_key').val();

        $.ajax({
            url: settings.ajaxurl,
            data: {
                'action': 'activate_plugin',
                'activation_key': activation_key,
                'nonce': settings.nonce
            },
            type:'POST',
            dataType: 'json',
            success:function(response) {
                if(response.status === 'true') {
                    $('#wpm_seo_articles_generator #wpm-key-status').addClass('activated').html('Activated');
                    $('#wpm_seo_articles_generator #wpm-points-counter').html(response.user.points);
                    button.closest('.wpm-section-footer').find('.wpm-ajax-error-message').addClass('wpm-success').html(response.message);
                } else {
                    button.closest('.wpm-section-footer').find('.wpm-ajax-error-message').removeClass('wpm-success').html(response.message);
                }
                button.text('Activate Key');
            }
        });
    });

    $("body").on("click","#wpm_seo_articles_generator #wpm-send-articles-to-queue",function() {

        var button = $(this);
        button.text('Loading...');
        button.closest('.wpm-section-footer').find('.wpm-ajax-error-message').html('');

        var language = $('#language-generator').val();
        var category = $('#category-post').val();
        var articles_list = $('#articles_list').val();
        var activation_key = $('#activation_key').val();
        var publish_status = $('#publish-status').val();

        $.ajax({
            url: settings.ajaxurl,
            data: {
                'action': 'send_articles_to_queue',
                'language': language,
                'category': category,
                'articles_list': articles_list,
                'activation_key': activation_key,
                'publish_status': publish_status,
                'nonce': settings.nonce
            },
            type:'POST',
            dataType: 'json',
            success:function(response) {
                if(response.status === 'true') {
                    $('#articles_list').val('');
                    $('#wpm_seo_articles_generator #queued_articles_table').html(response.table);
                    $('#wpm_seo_articles_generator #wpm-points-counter').html(response.user.points);
                    button.closest('.wpm-section-footer').find('.wpm-ajax-error-message').addClass('wpm-success').html(response.message);
                } else {
                    button.closest('.wpm-section-footer').find('.wpm-ajax-error-message').removeClass('wpm-success').html(response.message);
                }
                button.text('Send to Generator');
            }
        });
    });
});