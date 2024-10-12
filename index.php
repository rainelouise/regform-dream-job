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
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1>Web Developer Application</h1>
    <h3>Input your details to register</h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
        <p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
        <p><label for="birthdate">Birthdate</label> <input type="date" name="birthdate"></p>
        <p><label for="gender">Gender</label> <input type="text" name="gender"></p>
        <p><label for="phoneNumber">Phone Number</label> <input type="text" name="phoneNumber"></p>
        <p><label for="email">Email</label> <input type="email" name="email"></p>
        <p><label for="address">Address</label> <input type="text" name="address"></p>
        <p><label for="appliedPosition">Applied Position</label> <input type="text" name="appliedPosition"></p>
        <p><label for="programmingLanguages">Programming Languages</label> <input type="text" name="programmingLanguages"></p>
        <p><label for="currentEmploymentStatus">Current Employment Status</label> <input type="text" name="currentEmploymentStatus"></p>
        <p><label for="availableStartDate">Available Start Date</label> <input type="date" name="availableStartDate"></p>
        <p><label for="workingExperience">Working Experience</label> <textarea name="workingExperience"></textarea></p>
        <input type="submit" name="insertNewApplicantBtn">
    </form>

    <table style="width:50%; margin-top: 50px;">
    <tr>
        <th>Applicant ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Address</th>
        <th>Applied Position</th>
        <th>Programming Languages</th>
        <th>Current Employment Status</th>
        <th>Available Start Date</th>
        <th>Working Experience</th>
        <th>Action</th>
    </tr>

    <?php $seeAllApplicantRecords = seeAllApplicantRecords($pdo); ?>
    <?php foreach ($seeAllApplicantRecords as $row) { ?>
        <tr>
            <td><?php echo $row['applicant_id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['birthdate']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['applied_position']; ?></td>
            <td><?php echo $row['programming_languages']; ?></td>
            <td><?php echo $row['current_employment_status']; ?></td>
            <td><?php echo $row['available_start_date']; ?></td>
            <td><?php echo $row['working_experience']; ?></td>
            <td>
                <a href="editapplicant.php?applicant_id=<?php echo $row['applicant_id']; ?>">Edit</a>
                <a href="deleteapplicant.php?applicant_id=<?php echo $row['applicant_id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>