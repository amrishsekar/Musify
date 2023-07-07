<html>
<head>
    <title>User List</title>
</head>
<body>

<div class="container">
    <table border="1">
        <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>email</th>
            <th>password</th>
        </tr>
        <?php foreach ($allUser as $key=>$user): ?>
        <tr>
            <td><?= $key+1; ?></td>
            <td><?= $user->name; ?></td>
            <td><?= $user->email; ?></td>
            <td><?= $user->password; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>