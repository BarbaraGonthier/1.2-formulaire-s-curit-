<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Merci</title>
    </head>
    <body>
    <?php
    $userFirstname = $userLastname = $userEmail = $userPhone = $userTopic = $userMessage ="";
    $firstNameErr = $lastNameErr = $emailErr = $phoneErr = $topicErr = $messageErr = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $userEmail = test_input($_POST["user_email"]);

    if ((empty($_POST["user_firstname"])) ||
        (empty($_POST["user_lastname"])) ||
        (empty($_POST["user_email"])) ||
        (empty($_POST["user_phone"])) ||
        ($_POST["user_topic"] === "choix") ||
        (empty($_POST["user_message"]))) {
        echo 'Merci de remplir tous les champs';
    } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
    } else {
    ?>
    <h1>Merci!</h1>
    <div>
        <p> Merci
            <?php echo $_POST['user_firstname']. ' '.$_POST['user_lastname'] ; ?>
            de nous avoir contacté à propos de "
            <?php echo $_POST['user_topic'] ; ?>
            ".
        </p>
        <p>
            Un de nos conseiller vous contactera soit à l'adresse
            <?php echo $_POST['user_email']; ?>
            ou par téléphone
            <?php echo $_POST['user_phone']; ?>
            dans les plus brefs délais pour traiter votre demande :
            <?php echo $_POST['user_message']; ?>
        </p>
    </div>
    <?php } ?>
    </body>
</html>
