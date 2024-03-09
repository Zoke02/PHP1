<?php
//  echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";
    // Print succees message if all formular is correct.
    $erfolgt = false;
    // Array with error message if a field is empty
    $text_errors = array();

    //Check each field if is correct and not empty
    if (!empty($_POST)) { 
        // Validate if formular is corect?
        if (empty($_POST["name"])) {
            $text_errors[] = "Please enter a Name. ";
        } elseif (strlen($_POST["name"]) <= 2) {
            $text_errors[] = "Name is to short. ";
        };
        if (empty($_POST["email"])) {
            $text_errors[] = "Please enter a Email. ";
        } elseif (!preg_match("/^[a-z0-9]+@[a-z0-9]+\.[a-z]{2,15}$/", $_POST["email"])) {
            $text_errors[] = "False E-Mail Adress";
        };
        if (empty($_POST["message"])) {
            $text_errors[] = "Please enter a Message. ";
        };
        if (!empty($_POST["empty"])) {
            $text_errors[] = "Empty FIELD! musst be empty. ";
        };
    // If no Error-Texts and Empty Field is empty message is delived
        if (empty($text_errors) && empty($_POST["empty"])) {
            $erfolgt = true;

            // Get the content from name,mail,message
            $mail_content =
"Anfrage über Kontaktformular:
Name: {$_POST["name"]}
Email: {$_POST["email"]}
Message: {$_POST["message"]}

IP: {$_SERVER["REMOTE_ADDR"]}";
        // Check if works 
        // echo "<pre>";
        // print_r($mail_content);
        // echo "</pre>";


        // Detei am Server speichern (als backup)

        // Make a txt file with time for each mail recieved
        // $dateiname = "mail_" . date("d.m.Y_H-i-s");
        // To go up 1 level u put ../
        // file_put_contents("mailbackup/{$dateiname}.txt", $mail_content);
        
        // var 2
        file_put_contents("mailbackup/mail.txt", $mail_content, FILE_APPEND | LOCK_EX);


        // 1-Where to mail(reciepient)    
        // 2-Description what the message is for and from
        // 3-Content to be mailed
        // mail("support@wifi.at", "Kontakt Formular @ WIFI-Demo from {$_POST["name"]}", $mail_content);
    };
    };

?>

<section>
    <div class="text">
        <h1>Kontakt</h1>
        <div class="left">
            <h2>Wifi Salzburg</h2>
            <p>
                Musterhausstraße 13<br />
                5020 Salzburg<br />
                Österreich<br />
                <br />
                0043-662-12345<br />
                <a href="mailto:rainer.christian@gmx.at"
                    >rainer.christian@gmx.at</a
                ><br />
                <a href="http://www.wifisalzburg.at" target="_blank"
                    >www.wifisalzburg.at</a
                ><br />
                <br />
                <br />
                Oder einfach Formular ausfüllen, abschicken, fertig!<br />
                Wir werden uns umgehend um Ihr Anliegen bemühen.
            </p>
        </div>
        
        <div class="contact right">
            <?php
            // If Errors array is not empty print the errors
            if (!empty($text_errors)) {
                echo "<h2>Followering errors</h2>";
                // For each error in Errors array print that error
                foreach ($text_errors as $key => $value) {
                    echo "<ul>";
                    echo "<li>$value</li>";
                    echo "</ul>";
                };
                echo "<br>";

            };
            // If no errors and field is empty print a message ""Succes"
            if ($erfolgt) {
                echo "<h2>Thank you!</h2>";
            } 
            // If not succes message PRINT the Fields STARTS HERE
            else {
            ?>
            <form action="" method="post">
                <div>
                    <input
                        type="text"
                        id="name"
                        name="name"
                         
                        value="<?php 
                        if (!empty($_POST["name"])) {
                            echo htmlspecialchars($_POST["name"]);
                        }
                        ?>"
                        placeholder="Name"
                    />
                    <!-- Above PHP keeps the value what u entered for when it fails -->
                </div>

                <div>
                    <input
                        type="text"
                        id="email"
                        name="email"
                        value="<?php 
                        if (!empty($_POST["email"])) {
                            echo htmlspecialchars($_POST["email"]);
                        }
                        ?>"
                        placeholder="E-Mail"
                    />
                </div>
                <div>
                    <input
                        type="text"
                        id="empty"
                        name="empty"
                        value=""
                        placeholder="Empty FIELD"
                    />
                </div>

                <div>
                    <textarea
                        id="message"
                        name="message"
                        placeholder="Ihre Nachricht Here"
                        
                    ><?php 
                        if (!empty($_POST["message"])) {
                            echo htmlspecialchars($_POST["message"]);
                        }
                        ?></textarea>
                </div>
                <div style="text-align: right">
                    <button type="submit" id="submit" name="submit">
                        Absenden
                    </button>
                </div>
            </form>
            <?php
            // ENDS HERE
            } ?>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</section>