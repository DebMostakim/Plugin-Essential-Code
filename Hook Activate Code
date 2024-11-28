		global $wpdb;

    $table_name = $wpdb->prefix . 'heartbeat';
    $charset_collate = $wpdb->get_charset_collate();

    // Check if the function exists
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    // SQL to create the table
    $member_table_query = "CREATE TABLE $table_name (
        `id` mediumint(9) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `phone` varchar(11) NOT NULL,
        `address` varchar(255) NOT NULL,
        `created_at` datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate";

    // Execute the SQL query
    dbDelta($member_table_query);
