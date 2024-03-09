<?php 

$succes = false;
$error_list = array();

if (!empty($_POST)) {
    if (empty($_POST["name"])) {
        $error_list[] = "Please enter your Name.";
    } elseif (strlen($_POST["name"]) <= 2 ) {
        $error_list[] = "Name must be at least 3 characters.";
    };
    if (empty($_POST["email"])){
        $error_list[] = "Please enter your E-Mail adress.";
    } elseif (!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-z]{2,15}$/", $_POST["email"])) {
        $error_list[] = "E-Mail adress invalid";
    };
    if (empty($_POST["message"])){
        $error_list[] = "Please enter your Message.";
    };
    if (empty($error_list)) {
        $succes = true;
        $mail_content = "
-----------------------------
Anfrage über Kontaktformular:
Name: {$_POST["name"]}
Email: {$_POST["email"]}
Message: {$_POST["message"]}
IP: {$_SERVER["REMOTE_ADDR"]}";
    file_put_contents("mail/mail.txt", $mail_content, FILE_APPEND | LOCK_EX);
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
            if (!empty($error_list)) {
                echo "<ul>";
                foreach ($error_list as $key => $value) {
                    echo "<li>";
                    echo $value;
                    echo "</li>";
                }
                echo "</ul>";
            }
            if ($succes) {
                echo "<h2>Thank you.</h2>";
            } else {
            
            ?>
            <form action="" method="post">
                <div>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Name"
                        value="<?php
                        if(!empty($_POST["name"])) echo htmlspecialchars($_POST["name"])
                         ?>"
                    />
                </div>
                <div>
                    <input
                        type="text"
                        id="email"
                        name="email"
                        placeholder="E-Mail"
                        value="<?php
                        if(!empty($_POST["email"])) echo htmlspecialchars($_POST["email"])
                         ?>"
                    />
                </div>
                <div>
                    <textarea
                        id="message"
                        name="message"
                        placeholder="Ihre Nachricht"
                        value="<?php
                        if (!empty($_POST["message"])) echo htmlspecialchars($_POST["message"])
                         ?>"
                    ></textarea>
                </div>
                <div style="text-align: right">
                    <button type="submit" id="submit" name="submit">
                        Absenden
                    </button>
                </div>
            </form>
            <?php }; ?>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</section>