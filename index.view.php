<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test code card bank</title>
</head>
<body>
<form method="POST">
    <textarea name="code" id="" cols="30" rows="10"><?php if (! empty($_POST['code'])) {echo $_POST['code'];} ?></textarea>
    <button type="submit">submit</button>
</form>
</body>
</html>