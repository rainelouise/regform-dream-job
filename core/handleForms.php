<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

// Check if the form to insert a new applicant has been submitted
if (isset($_POST['insertNewApplicantBtn'])) {
    // Store the submitted data into variables
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$birthdate = trim($_POST['birthdate']);
	$gender = trim($_POST['gender']);
	$phoneNumber = trim($_POST['phoneNumber']);
	$email = trim($_POST['email']);
	$address = trim($_POST['address']);
	$appliedPosition = trim($_POST['appliedPosition']);
	$programmingLanguages = trim($_POST['programmingLanguages']);
	$currentEmploymentStatus = trim($_POST['currentEmploymentStatus']);
	$availableStartDate = trim($_POST['availableStartDate']);
	$workingExperience = trim($_POST['workingExperience']);

    // Check that all fields are filled
	if (!empty($firstName) && !empty($lastName) && !empty($birthdate) && !empty($gender) && !empty($phoneNumber) && !empty($email) && !empty($address) && !empty($appliedPosition) && !empty($programmingLanguages) && !empty($currentEmploymentStatus) && !empty($availableStartDate) && !empty($workingExperience)) {
		$query = insertIntoApplicantRecords($pdo, $firstName, $lastName, $birthdate, $gender, $phoneNumber, $email, $address, $appliedPosition, $programmingLanguages, $currentEmploymentStatus, $availableStartDate, $workingExperience);

		if ($query) {
			header("Location: ../index.php");
			exit; 
		} else {
			echo "Insertion failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

// Check if the form to edit an existing applicant has been submitted
if (isset($_POST['editApplicantBtn'])) {
	$applicant_id = trim($_GET['applicant_id']); 
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$birthdate = trim($_POST['birthdate']);
	$gender = trim($_POST['gender']);
	$phoneNumber = trim($_POST['phoneNumber']);
	$email = trim($_POST['email']);
	$address = trim($_POST['address']);
	$appliedPosition = trim($_POST['appliedPosition']);
	$programmingLanguages = trim($_POST['programmingLanguages']);
	$currentEmploymentStatus = trim($_POST['currentEmploymentStatus']);
	$availableStartDate = trim($_POST['availableStartDate']);
	$workingExperience = trim($_POST['workingExperience']);

    // Check if all fields are filled
	if (!empty($applicant_id) && !empty($firstName) && !empty($lastName) && !empty($birthdate) && !empty($gender) && !empty($phoneNumber) && !empty($email) && !empty($address) && !empty($appliedPosition) && !empty($programmingLanguages) && !empty($currentEmploymentStatus) && !empty($availableStartDate) && !empty($workingExperience)) {
		$query = updateAnApplicant($pdo, $applicant_id, $firstName, $lastName, $birthdate, $gender, $phoneNumber, $email, $address, $appliedPosition, $programmingLanguages, $currentEmploymentStatus, $availableStartDate, $workingExperience);

		if ($query) {
			header("Location: ../index.php");
			exit; 
		} else {
			echo "Update failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

// Check if the form to delete an applicant has been submitted
if (isset($_POST['deleteApplicantBtn'])) {
	$applicant_id = trim($_GET['applicant_id']); 

	if (!empty($applicant_id)) { 
		$query = deleteAnApplicant($pdo, $applicant_id);

		if ($query) {
			header("Location: ../index.php");
			exit; 
		} else {
			echo "Deletion failed";
		}
	} else {
		echo "Applicant ID is missing for deletion."; 
	}
}

?>