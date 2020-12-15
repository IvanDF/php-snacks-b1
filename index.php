<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack</title>
</head>
<body>

    <?php // vars
        $qry_name = $_GET['name'];
        $qry_email = $_GET['email'];
        $qry_age = $_GET['age'];
    ?>


    <h4>
        <?php
            if ( empty($qry_name) ) {
                echo 'name is empty';
            } elseif ( strlen($qry_name) <= 3 ) {
                echo 'name: Add more than 3 digits';
            } else {
                echo 'name success';
            }
        ?>
    </h4>

    <h4>
        <?php
            if ( empty($qry_email) ) {
                echo 'email is empty';
            } elseif ( strpos($qry_email, '@') ) {
                if ( strpos($qry_email, '.') ) {
                    echo 'email success';
                } else {
                    echo 'email dot missing';
                }
            } else {
                echo 'email @ missing';
            }
        ?>
    </h4>

    <h4>
        <?php
            if ( empty($qry_age) ) {
                echo 'age is empty';
            } elseif ( is_numeric($qry_age) === false ) {
                echo 'age is not a number';
            } else {
                echo 'age success';
            }
        ?>
    </h4>

    
</body>
</html>