<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header></header>
    <main>
        <form class="form" action="insert.php" method="post">
            <h2>Register New User Form</h2>
            <input type="text" name="username" placeholder="User Name">
            <input type="text" name="first_name" placeholder="First Name">
            <input type="text" name="last_name" placeholder="Last Name">
            <input type="text" name="phone_number" placeholder="Phone Number">
            <input type="text" name="email" placeholder="email">
            <select name="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <input type="number" name="age" placeholder="age">

            <button type="submit">Submit</button>
        </form>
    </main>
    <footer></footer>
</body>

</html>