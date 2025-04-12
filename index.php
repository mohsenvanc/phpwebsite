<?php include("core/functions.php"); ?>
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

        <table>
            <thead>
                <th>ID</th>
                <th>User Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Manage</th>
            </thead>
            <tbody>
                <?php while ($user = $users()->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $user["id"]; ?></td>
                        <td><?php echo $user["username"]; ?></td>
                        <td><?php echo $user["first_name"]; ?></td>
                        <td><?php echo $user["last_name"]; ?></td>
                        <td><?php echo $user["phone_number"]; ?></td>
                        <td><?php echo $user["email"]; ?></td>
                        <td><?php echo $user["gender"]; ?></td>
                        <td><?php echo $user["age"]; ?></td>
                        <td>-</td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </main>
    <footer></footer>
</body>

</html>