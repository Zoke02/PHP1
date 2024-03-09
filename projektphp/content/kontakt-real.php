    <?php
    //    echo "<pre>";
    //    print_r($_POST);
    //    echo "</pre>";
        $erfolgt = false;

        if (!empty($_POST)) { 
            // Validate if formular is corect?
            if (empty($_POST["name"]) && empty($_POST["email"]) ) {
                $text_error1 = "Please insert your Name.";
                $text_error2 = "Please insert your E-Mail Adress.";
            } else if (empty($_POST["name"])) {
                $text_error1 = "Please insert your Name.";
            } else if (empty($_POST["email"])) {
                $text_error2 = "Please insert your E-Mail Adress.";
            } else $erfolgt = true;
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
                    if ($erfolgt) {
                        echo "<h2>Thank you!</h2>";
                    } else {
                        // Error Message for Name
                        if (!empty($text_error1)) {
                            echo $text_error1;
                        };
                     ?>
                    <form action="" method="post">
                        <div>
                            <input
                                type="text"
                                id="name"
                                name="name" 
                                value="Name: Alin"
                            />
                        </div>
                        <?php
                        // Error Message for E-Mail
                        if (!empty($text_error2)) {
                            echo $text_error2;
                        };
                        ?>

                        <div>
                            <input
                                type="text"
                                id="email"
                                name="email"
                                value="E-Mail: Zoke"
                            />
                        </div>
                        <div>
                            <textarea
                                id="message"
                                name="message"
                                
                            >Ihre Nachricht Here</textarea>
                        </div>
                        <div style="text-align: right">
                            <button type="submit" id="submit" name="submit">
                                Absenden
                            </button>
                        </div>
                    </form>
                    <?php
                    } ?>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </section>