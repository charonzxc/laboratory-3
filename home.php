<?php
$profileImage = 'profile-pic.png';
$name = 'GERALD F. PIEDAD';
$profession = 'PROGRAMMER';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <style>
        .content {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 60px;
            border-radius: 30px;
        }

        h1,
        h4 {
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000000;
        }

        img {
            border: 4px solid black;
        }

        h1 {
            font-size: 3rem;
        }

        h4 {
            font-size: 1.5rem;
            color: white;
        }
    </style>
</head>

<body>
    <div class="content">
        <img
            src="<?php echo htmlspecialchars($profileImage); ?>"
            alt="Your Picture"
            class="rounded-circle"
            width="260"
            height="260" />
        <h1 class="mt-3"><?php echo htmlspecialchars($name); ?></h1>
        <h4><?php echo htmlspecialchars($profession); ?></h4>
    </div>
</body>

</html>