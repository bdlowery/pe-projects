<?php

	/* TESTING */
	function showErrors() {
		error_reporting(E_ALL);
		ini_set('display_errors', '1');
	}
	showErrors();

	/* UTILITIES */
	function format($variable) {
		echo "<pre>";
			echo "<code>";
				echo print_r( $variable );
			echo "</code>";
		echo "</pre>";
	}

	function showUrl() {
		// split it by the "?" - into array items
		$parts = explode('?', $_SERVER["REQUEST_URI"] );
		// get the last array item
		return $parts[1];
	}



	// INITIAL VALUES
	$nameInput = ""; // reset the input



	// ACTIONS

	function initializeDatabase() {
		// create a data structure you want to use as your base
    $data['asd'] = [];
    
		// encode that to json
    $jsonData = json_encode($data);
		// save it to the file
    file_put_contents('data.json', $jsonData);
		// return the default datastructure (PHP-style)
    return $data;
	}

	function getDatabase() {
		// check if database file exists and has content
    if(file_get_contents('data.json')) {
		// if it does
			// get the content
      $jsonData = file_get_contents('data.json');
			// decode it
      $jsonToAssociativeArray = json_decode($jsonData, true);
			// return the database
      return $jsonToAssociativeArray;
    }
		// if it doesn't 
    else {
			// initialize the database
			// and return it's data (PHP-style)
      initializeDatabase();
    }
	}

	function createRecord($input) {
		// create a unique id
    $id = uniqid('p');
		// get the data so you can add to it
    $data = getDatabase();
		// put the input into the database (based on the structure you chose)
    $data['items'][$id] = $input;
		// save the updated database
    saveData($data);
	}

	function saveData($data) {
		// convert it to json
    $json = json_encode($data, JSON_PRETTY_PRINT);
		// save it
    file_put_contents('data.json', $json);
	}

	function deleteRecordById($id) {
		// get database
    $data = getDatabase();
		// unset (delete) the property (id) in that database
    unset($data['items'][$id]);
		// save the database
    saveData($data);
	}



	// you shouldn't need a form to see if your functions are working
	// keep it simple
	// createRecord("Ivy");
	// createRecord("Derek");
    format( getDatabase() );


	// RENDER THINGS

	function renderRecord($id, $name) {
		echo "
			<li>
				<h2>$name</h2>

				<a href='?delete=$id'>delete</a>
			</li>
		";
	}

	function renderRecords($records) {
		// render the records
		$names = array_reverse( $records["items"] );
		foreach ($names as $id => $name) {
			renderRecord($id, $name);
		}
	}

	function showError($error) {
		$message = "Please add a name.";
		if ($error) {
			return $message;
		}
	}
	



	// HANDLE USER INPUT


    $missingText = null;
    
	// if the user added a name
	if ( isset($_POST["submitted"]) ) {
		// if they added text
		if ( $_POST["name"] && strlen($_POST["name"]) > 0 ) {
      $userInput = $_POST["name"];
			// create the record
      createRecord($userInput);
      header('Location: ?');
		} else {
			// if not, signify there's an error
      showError(true);
		}
	}

	// if the user deleted something
	if ( isset( $_GET["delete"] ) ) {
    $id = $_GET["delete"];
		// delete the record
    deleteRecordById($id);
	}
	
?>


<a href="?"> <!-- clears it -->
	<h1>Single-file CRUD exercise</h1>
</a>

<p><?=showUrl();?></p>


<h2>Adding names to a list</h2>


<form method='POST'>

	<field>
		<label>Name <?=showError($missingText)?></label>
		<input name='name' value='<?=$nameInput?>'>
	</field>

	<footer>
		<button type='submit' name='submitted'>
			Enter
		</button>
	</footer>

</form>


<ul>
	<?=renderRecords( getDatabase() ); ?>
</ul>






<!-- just to keep it out of the way... -->
<style>
	field, label, input {
		display: block;
	}
	input {
		padding: 0.5em;
		width: 100%;
		max-width: 300px;
	}
	button {
		margin-top: 10px;
	}
	ol {
		list-style: none;
	}
</style>