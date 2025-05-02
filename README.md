# Fix Modified Date for Scheduled Posts

This WordPress plugin automatically updates the `post_modified` and `post_modified_gmt` fields to match `post_date` when a scheduled post is published.

## Why?

When WordPress publishes a scheduled post, the `post_modified` date may remain outdated (i.e., from when the post was last edited), which can cause problems in RSS feeds or news aggregators like Google News.

This plugin fixes that by checking if `post_modified` is older than `post_date` and syncing them.

## Installation

1. Download or clone this repository.
2. Copy the `fix-modified-date` folder into your `wp-content/plugins/` directory.
3. In WordPress admin panel, go to **Plugins** and activate **Fix Modified Date for Scheduled Posts**.

## License

MIT
