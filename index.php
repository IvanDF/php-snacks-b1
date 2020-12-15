<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack</title>
</head>
<body style="font-family: Sans-Serif">

    <?php // vars
        $qry_name = $_GET['name'];
        $qry_email = $_GET['email'];
        $qry_age = $_GET['age'];
        // demo query string ?name=Luca&email=luca@gmail.com&age=21
    ?>


    <p>
        <?php
            if ( empty($qry_name) ) {
                echo 'Name is empty';
            } elseif ( strlen($qry_name) <= 3 ) {
                echo 'Name: Add more than 3 digits';
            } else {
                echo "Name success <br> Name: <strong style=\"text-decoration: underline\">$qry_name</strong>";
            }
        ?>
    </p>

    <p>
        <?php
            if ( empty($qry_email) ) {
                echo 'Email is empty';
            } elseif ( strpos($qry_email, '@') ) {
                if ( strpos($qry_email, '.') ) {
                    echo "Email success <br> Username: <strong style=\"text-decoration: underline\">$qry_email</strong>";
                } else {
                    echo 'Email dot missing';
                }
            } else {
                echo 'Email @ missing';
            }
        ?>
    </p>

    <p>
        <?php
            if ( empty($qry_age) ) {
                echo 'Age is empty';
            } elseif ( is_numeric($qry_age) === false ) {
                echo 'Age is not a number';
            } else {
                echo "Age success <br> Age: <strong style=\"text-decoration: underline\">$qry_age</strong>";
            }
        ?>
    </p>

    
</body>
</html>