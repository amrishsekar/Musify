<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Main page</title>
    <!---->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #2b2b2b;
        }
    </style>
    <!---->
</head>
<body>
<h2>Hi Buddy, who you are?</h2>
<div>
    <form action="/adminHome" method="post">
        <button type="submit" name="admin">Admin</button>
    </form>
    <form action="/check" method="post">
        <button type="submit" name="user">User</button>
    </form>
    <form action="/check" method="post">
        <button type="submit" name="guest">Guest</button>
    </form>
</div>
</body>
</html>