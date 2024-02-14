<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include_once "database/DB.const.php";
		include_once "database/Table.const.php";
		include_once "database/Column.const.php";
		include_once "database/Database.cls.php";
		include_once "database/DbTable.cls.php";
		include_once "database/DbTableQuery.cls.php";
		include_once "database/DbTableOperator.cls.php";
		include_once "helper/ImageHandler.cls.php";
		
		// print_r($_POST);
		// exit;

		$equality = Column::ISPUBLISHED."=?, ".Column::TITLE."=?, ".Column::CONTENT."=?, ".Column::LAST_UPDATED."=? ";
		$values[] = $_POST[Column::ISPUBLISHED];
		$values[] = $_POST[Column::TITLE];
		$values[] = $_POST[Column::CONTENT];
		$values[] = $_POST[Column::LAST_UPDATED];

		$properties['equality'] = $equality;
		$properties['values'] = $values;
		$properties['condition'] = "WHERE id=". $_POST[Column::ID];

		$database = new Database(DB::INFO, DB::USER, DB::PASS);
		$dbTable = new DbTable($database, Table::BLOG_TB); 
		$dbTableQuery = new DbTableQuery($properties);
		$dbTableOperator = new DbTableOperator();
		$dbTableOperator->update($dbTable, $dbTableQuery);

		echo "true";
	}
?>