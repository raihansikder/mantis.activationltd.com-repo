<?php
	$g_hostname = 'localhost';
	$g_db_type = 'mysql';
	$g_database_name = 'mantis_mnts1';
	$g_db_username = 'mantis_mnts1';
	$g_db_password = 'HJel2h4XuU9E3E0H';
	$g_file_upload_method	= DISK;
	$g_absolute_path_default_upload_folder ='uploads/';
	
	/**
	 * Automatically set status to ASSIGNED whenever a bug is assigned to a person.
	 * This is useful for installations where assigned status is to be used when
	 * the bug is in progress, rather than just put in a person's queue.
	 * @global int $g_auto_set_status_to_assigned
	 */
	$g_auto_set_status_to_assigned	= OFF;
?>