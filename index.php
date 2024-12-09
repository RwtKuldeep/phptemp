<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        header, footer {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        main {
            padding: 20px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo "Welcome to My Website"; ?></h1>
</header>

<main>
    <p><?php echo "This is a simple PHP template."; ?></p>
    <p>Today's date is: <strong><?php echo date('Y-m-d'); ?></strong></p>
</main>

<footer>
    <p>&copy; <?php echo date('Y'); ?> My Website</p>
</footer>

</body>
</html>
