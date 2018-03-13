<?php

function getAllBirthdays() {
	//conectie maken met de database
	$db = openDatabaseConnection();
	//query uitvoeren(welke gegevens)
	$sql = "SELECT * FROM birthdays ORDER BY month, day";
	//query doorgeven(beveiliging)
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function saveBirthday($birthdayData)
{
	//conectie maken met de database
	$db = openDatabaseConnection();
	//query uitvoeren(welke gegevens)
	$sql = "INSERT INTO birthdays (person, day, month, year) VALUES (:person, :day, :month, :year);";
	//query doorgeven(beveiliging)
	$query = $db->prepare($sql);
	//concatination samenvoegen van strings
	//parameter kan je aan een function geven
	//bindparameter voorkomt sql injection(het word veranderd naar een waarde)
	$query->bindParam(":person", $birthdayData['person']);
	$query->bindParam(":day", $birthdayData['day']);
	$query->bindParam(":month", $birthdayData['month']);
	$query->bindParam(":year", $birthdayData['year']);
	$query->execute();
	$db = null;
	return true;
}


 function deleteById($id) {
 	//conectie maken met de database
    $db = openDatabaseConnection();
    //query uitvoeren(welke gegevens)
    $sql = "DELETE FROM birthdays WHERE id = :id";
    //query doorgeven(beveiliging)
    $query = $db->prepare($sql);
    $query->bindParam(":id",$id);
    $query->execute();
	$db = null;
	return true;
 }

 function editBirthday($data) {
     $db = openDatabaseConnection();

    $sql = "UPDATE birthdays SET person = :person, day = :day, month = :month, year = :year WHERE id = :id";
    $query = $db->prepare($sql);
    $query->bindParam(":person",$person);
    $query->bindParam(":day",$day);
    $query->bindParam(":month",$month);
    $query->bindParam(":year",$year);
    $query->bindParam(":id",$id);
    $query->execute();

    $db = null;
 }

 function getBirthday($id) {
     $db = openDatabaseConnection();

     $sql = "SELECT * FROM birthdays WHERE id = :id";
     $query = $db->prepare($sql);
    $query->bindParam(":id",$id);
    $query->execute();

    $db = null;
    return $query->fetch();
 }