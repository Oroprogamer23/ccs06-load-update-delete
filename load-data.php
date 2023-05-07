<?php

require "config.php";

use App\PetRecord;

try {
	PetRecord::register('Max', 'male', '2021-03-12', 'Derick Pangilinan', 'derickpangilinan100@gmail.com', 'Pampanga', '09173838972' );
	echo "<li>Added 1 pet";
	$pets = [
		[
			'pet_name' => 'Oreo',
			'pet_gender' => 'Female',
			'birthdate' => '2019-07-09',
			'owner_name' => 'Nikki Santos',
			'email' => 'nikki@gmail.com',
			'address' => 'Telabastagan, San Fernando City',
			'contact_number' => '09176762634'
		],
		[
			'pet_name' => 'Sachi',
			'pet_gender' => 'Female',
			'birthdate' => '2014-08-18',
			'owner_name' => 'Dorothy Ignacio',
			'email' => 'dorothy100@gmail.com',
			'address' => 'Angeles city',
			'contact_number' => '09773857176'
		]
	];
	
	PetRecord::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

