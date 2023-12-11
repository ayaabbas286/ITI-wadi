<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body
        {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        select {
            padding: 6px;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form method="post" action="data.php">
    <div class="mb-3">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fn">
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="ln">
    </div>
    <p>Address</p>
    <div class="mb-3">
        <textarea name="Address" rows="5" cols="30"></textarea>
    </div>
    <div class="mb-3">
        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="">Select Country</option>
            <option value="Egypt">Egypt</option>
            <option value="USA">USA</option>
            <option value="Jordon">Jordon</option>
            <option value="Italy">Italy</option>

        </select>
    </div>
    <div class="mb-3">
        <p>GENDER :</p>
        <input type="radio" id="male" name="GENDER" value="MALE">
        <label for="Gender">Male</label>
        <input type="radio" id="female" name="GENDER" value="FEMALE">
        <label for="female">Female</label>
    </div>
    <p>SKILLS</p>
    <div class="mb-3">
        <input type="checkbox" id="php" name="skills[]" value="PHP">
        <label for="php"> PHP</label><br>
        <input type="checkbox" id="J2se" name="skills[]" value="J2SE">
        <label for="J2se"> J2SE</label><br>
        <input type="checkbox" id="mysql" name="skills[]" value="MYSQL">
        <label for="mysql"> MYSQL</label><br>
        <input type="checkbox" id="sql" name="skills[]" value="SQL">
        <label for="sql"> SQL</label>
    </div>
    <input type="submit" value="Submit">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
