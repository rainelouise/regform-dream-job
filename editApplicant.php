<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1em;
            height: 25px;
            width: 100px;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php $getApplicantById = getApplicantById($pdo, $_GET['applicant_id']); ?>
    <form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
        <p><label for="firstName">First Name</label> <input type="text" name="firstName" value="<?php echo $getApplicantById['first_name']; ?>"></p>
        <p><label for="lastName">Last Name</label> <input type="text" name="lastName" value="<?php echo $getApplicantById['last_name']; ?>"></p>
        <p><label for="birthdate">Birthdate</label> <input type="date" name="birthdate" value="<?php echo $getApplicantById['birthdate']; ?>"></p>
        <p><label for="gender">Gender</label> <input type="text" name="gender" value="<?php echo $getApplicantById['gender']; ?>"></p>
        <p><label for="phoneNumber">Phone Number</label> <input type="text" name="phoneNumber" value="<?php echo $getApplicantById['phone_number']; ?>"></p>
        <p><label for="email">Email</label> <input type="email" name="email" value="<?php echo $getApplicantById['email']; ?>"></p>
        <p><label for="address">Address</label> <input type="text" name="address" value="<?php echo $getApplicantById['address']; ?>"></p>
        <p><label for="appliedPosition">Applied Position</label> <input type="text" name="appliedPosition" value="<?php echo $getApplicantById['applied_position']; ?>"></p>
        <p><label for="programmingLanguages">Programming Languages</label> <input type="text" name="programmingLanguages" value="<?php echo $getApplicantById['programming_languages']; ?>"></p>
        <p><label for="currentEmploymentStatus">Current Employment Status</label> <input type="text" name="currentEmploymentStatus" value="<?php echo $getApplicantById['current_employment_status']; ?>"></p>
        <p><label for="availableStartDate">Available Start Date</label> <input type="date" name="availableStartDate" value="<?php echo $getApplicantById['available_start_date']; ?>"></p>
        <p><label for="workingExperience">Working Experience</label> <textarea name="workingExperience"><?php echo $getApplicantById['working_experience']; ?></textarea></p>
        <input type="submit" name="editApplicantBtn">
    </form>
</body>
</html>
