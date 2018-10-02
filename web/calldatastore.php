<?php
require 'vendor/autoload.php';
use Google\Auth\ApplicationDefaultCredentials;
use Google\Cloud\Datastore\DatastoreClient;

try
{

	$projectId = 'hello-world-with-php-218205';
	$datastore = new DatastoreClient([
	    'projectId' => $projectId
	]);

	echo 'Matches:<br/>';
	$matches_string = "";

	//Get the string typed in by user for autocompletion...
	$queryval = strtolower($_GET['searchtext']);

	//If it is not blank...
	if ($queryval[0]) {

		//cache miss, let us go to datastore and fetch the result...
		$upperlimit = $queryval . json_decode('"\ufffd"');
		$query = $datastore->query()
			->kind('SKU')
			->filter('name', '>=', $queryval)
			->filter('name', '<', $upperlimit)
			->order('name');
		$result = $datastore->runQuery($query);
		foreach ($result as $SKU) {
			$matches_string = $matches_string . $SKU['name'] . "<br/>";
		}

		//finally, let us insert this query result in our local cache so that next time,
		//we do not have to make a round-trip to datastore - note that we are caching for 7 days

		echo $matches_string;
	}
} catch (Exception $e) {
	echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
