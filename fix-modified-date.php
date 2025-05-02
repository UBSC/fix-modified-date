<?php
/**
 * Plugin Name: Fix Modified Date for Scheduled Posts
 * Description: Automatically syncs post_modified to post_date on scheduled posts to prevent outdated modified dates.
 * Version: 1.0
 * Author: UBCS
 */

add_action('publish_post', function($post_id) {
    $post = get_post($post_id);
    if ($post->post_modified < $post->post_date) {
        global $wpdb;
        $wpdb->update(
            $wpdb->posts,
            ['post_modified' => $post->post_date, 'post_modified_gmt' => $post->post_date_gmt],
            ['ID' => $post_id]
        );
        clean_post_cache($post_id);
    }
});
