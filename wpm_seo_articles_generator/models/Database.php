<?php

/**
 * Database Model
 */
class WPM_SEO_ArticlesGenerator_Database
{
	/**
	 * Get all generated posts status
	 */
	public function get_articles_results()
	{
		global $wpdb;

		return $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}wpm_seo_articles_generator ORDER BY id DESC" );
	}

	/**
	 * Get count articles in queued generation
	 */
	public function get_queued_count()
	{
		global $wpdb;

		return $wpdb->get_var( "SELECT COUNT(*) FROM {$wpdb->prefix}wpm_seo_articles_generator WHERE post_id='0'" );
	}

	/**
	 * Get count generated posts by 24 hours
	 */
	public function get_generated_24_hours_count()
	{
		global $wpdb;

		return $wpdb->get_var( "SELECT COUNT(*) FROM {$wpdb->prefix}wpm_seo_articles_generator WHERE post_id!='0' AND HOUR(TIMEDIFF(NOW(), date_posted)) <= 24" );
	}

	/**
	 * Get count generated posts by all time
	 */
	public function get_generated_all_count()
	{
		global $wpdb;

		return $wpdb->get_var( "SELECT COUNT(*) FROM {$wpdb->prefix}wpm_seo_articles_generator WHERE post_id!='0'" );
	}

	/**
	 * Insert items into table
	 */
	public function insert_article($article_name, $category)
	{
		global $wpdb;

		return $wpdb->insert("{$wpdb->prefix}wpm_seo_articles_generator", [
			'post_id' => 0,
			'category' => $category,
			'article_name' => $article_name
		]);
	}

	/**
	 * Update article by Title
	 */
	public function update_article($article_name, $post_id, $date_posted)
	{
		global $wpdb;

		return $wpdb->update("{$wpdb->prefix}wpm_seo_articles_generator", [
			'post_id' => $post_id,
			'date_posted' => $date_posted,
		], ['article_name' => $article_name]);
	}
}