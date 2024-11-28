		global $wpdb;

    $table_name = $wpdb->prefix . 'heartbeat';

    // SQL to drop the table
    $drop_table_query = "DROP TABLE IF EXISTS $table_name;";

    // Execute the SQL query
    $wpdb->query($drop_table_query);
