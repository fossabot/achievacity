<?php
	/*
		User must be logged in.
		TODO: sort by relevance (i.e., due_date and weight)
		TODO? Use this is an "table of contents", so to speak, and the `item.php` for getting each item's data.
	*/
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		header('Content-Type: application/json');
		require_once "../../../users/init.php";	// ew TODO: figure absolute/relative paths out
		require_once "clean.php";
		// taken from header.php (the rest of that file would clutter json output with html)
		$db = DB::getInstance();

		$goals = $db->query('SELECT * FROM goals WHERE user_id=?', [$user->data()->id]);
		$return = $goals->results();
		foreach ($return as &$row) {
			clean_row($row);
		}


		echo json_encode($return);
	}
?>
