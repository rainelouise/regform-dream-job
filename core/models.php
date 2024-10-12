<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

// Function to insert new applicant record
function insertIntoApplicantRecords($pdo, $first_name, $last_name, $birthdate, $gender, $phone_number, $email, $address, $applied_position, $programming_languages, $current_employment_status, $available_start_date, $working_experience) {

	$sql = "INSERT INTO applicant_records (first_name, last_name, birthdate, gender, phone_number, email, address, applied_position, programming_languages, current_employment_status, available_start_date, working_experience) 
	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $birthdate, $gender, $phone_number, $email, $address, $applied_position, $programming_languages, $current_employment_status, $available_start_date, $working_experience]);

	if ($executeQuery) {
		return true;	
	}
}

// Function to retrieve all applicant records
function seeAllApplicantRecords($pdo) {
	$sql = "SELECT * FROM applicant_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

// Function to get a specific applicant by ID
function getApplicantByID($pdo, $applicant_id) {
	$sql = "SELECT * FROM applicant_records WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$applicant_id])) {
		return $stmt->fetch();
	}
}

// Function to update an applicant record
function updateAnApplicant($pdo, $applicant_id, $first_name, $last_name, $birthdate, $gender, $phone_number, $email, $address, $applied_position, $programming_languages, $current_employment_status, $available_start_date, $working_experience) {

	$sql = "UPDATE applicant_records 
				SET first_name = ?, 
					last_name = ?, 
					birthdate = ?, 
					gender = ?, 
					phone_number = ?, 
					email = ?, 
					address = ?, 
					applied_position = ?, 
					programming_languages = ?, 
					current_employment_status = ?, 
					available_start_date = ?, 
					working_experience = ? 
			WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $birthdate, $gender, $phone_number, $email, $address, $applied_position, $programming_languages, $current_employment_status, $available_start_date, $working_experience, $applicant_id]);

	if ($executeQuery) {
		return true;
	}
}

// Function to delete an applicant record
function deleteAnApplicant($pdo, $applicant_id) {

	$sql = "DELETE FROM applicant_records WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$applicant_id]);

	if ($executeQuery) {
		return true;
	}
}

?>
