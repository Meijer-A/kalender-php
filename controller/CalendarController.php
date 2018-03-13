<?php

require(ROOT . "model/CalendarModel.php");

function index() 
{
	render("calendar/index", array('birthdays' => getAllBirthdays()));
}

function create() 
{
	render("calendar/create");
}

function createSave() 
{
	//model aanroepen
	if ($_POST['month']) {
		saveBirthday($_POST);
	} else {
		echo 'ff een kut ERROR';
	}
	header("Location: /calendar-php");
}


function delete($id) 
{
    deleteById($id);
    header("Location: /calendar-php");
}
function editSave() {
    editBirthday($_POST);
    header("Location: /calendar-php");

}

function edit($id) {
    render("calendar/edit", array('birthday' => getBirthday($id)
    ));
}