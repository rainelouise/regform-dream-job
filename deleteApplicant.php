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
            height: 25x;
            width: 100px;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Are you sure you want to delete this applicant?</h1>
    <?php $getApplicantById = getApplicantById($pdo, $_GET['applicant_id']); ?>
    <form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
        <div class="applicantContainer" style="border-style: solid;">
            <p>First Name: <?php echo $getApplicantById['first_name']; ?></p>
            <p>Last Name: <?php echo $getApplicantById['last_name']; ?></p>
            <p>Gender: <?php echo $getApplicantById['gender']; ?></p>
            <p>Applied Position: <?php echo $getApplicantById['applied_position']; ?></p>
            <input type="submit" name="deleteApplicantBtn" value="Delete">
        </div>
    </form>
</body>
</html>
