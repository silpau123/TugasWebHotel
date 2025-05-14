<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="registrasi.css">
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="proses_register.php" method="POST">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id" required><br>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="level">Level:</label><br>
        <select id="level" name="level" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
