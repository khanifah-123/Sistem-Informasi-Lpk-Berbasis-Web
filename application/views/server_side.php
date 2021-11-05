<?php


// DB table to use
$table = 'siswa';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array('db' => 'first_name', 'dt' => 'first_name'),
    array('db' => 'last_name',  'dt' => 'last_name'),
    array('db' => 'position',   'dt' => 'position'),
    array('db' => 'office',     'dt' => 'office'),
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'taku',
    'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require('ssp.class.php');

echo json_encode(
    SSP::simple($_POST, $sql_details, $table, $primaryKey, $columns)
);
