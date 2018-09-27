<?php
    
    // subject and to email valiables

    $emailTo = 'mieonly@gmail.com';  
    $emailSubject = 'Someone has contacted through your form';    

    // Gathering Data Valiable 

    $nameField = $_POST['name'];
    $emailField = $_POST['email'];
    $numberField = $_POST['number'];
    $orgField = $_POST['organization'];
    $countryField = $_POST['country'];

    $body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Number: $number <br>
Organization: $organization <br>
Country: $country <br>
EOD;

    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html\r\n";
    $success = mail($emailTo, $emailSubject, $body, $headers);

    // Result renders as html

    $theResults = <<<EOD
<?php include_once 'about-us.php'; ?>  
EOD;
echo "$theResults";


?>