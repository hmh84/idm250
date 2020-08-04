<?php
    if  (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        
        $mailTo = "hunter@hunterhdesign.com"; //Email for message to be sent to
        $headers = "MIME-Version: 1.0". "\r\n"."Content-type:text/html;charset=UTF-8" . "\r\n"."From: ".$email;
        $txt = '

        <!DOCTYPE html>
        <html lang="en" style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;vertical-align:baseline;line-height:1.15;-webkit-text-size-adjust:100%;">

        <head style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;">
            <meta charset="UTF-8" style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;">
            <title style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;"></title>
        </head>

        <body style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;background-color:#f1f1f1;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;">
            <header style="box-sizing:border-box;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;background-color:#68C5AB;padding-top:2rem;padding-bottom:2rem;padding-right:2rem;padding-left:2rem;">
                <h1 style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;border-width:0;font-style:normal;font-variant:normal;font-weight:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;color:white;text-align:center;font-size:2em;margin-top:0.67em;margin-bottom:0.67em;margin-right:0;margin-left:0;">
                    You have received a new message from your contact form!
                </h1>
            </header>
            <main style="box-sizing:border-box;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;padding-top:2rem;padding-bottom:2rem;padding-right:2rem;padding-left:2rem;display:block;">
                <div class="form-container first" style="box-sizing:border-box;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;background-color:white;width:100%;max-width:25rem;padding-top:1rem;padding-bottom:1rem;padding-right:1rem;padding-left:1rem;margin-top:auto;margin-bottom:auto;margin-right:auto;margin-left:auto;">
                    <ul style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;list-style-type:none;list-style-position:outside;list-style-image:none;">
                        <li class="user-input" style="box-sizing:border-box;padding-top:0;padding-right:0;padding-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;margin-top:1rem;margin-bottom:1rem;margin-right:1rem;margin-left:1rem;border-bottom-width:.1rem;border-bottom-style:solid;border-bottom-color:black  .;padding-bottom:1rem;">
                            <h2 style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;font-weight:bold;margin-bottom:1rem;">Name:</h2>
                            <p style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;">'.$name.'</p>
                        </li>
                        <li class="user-input" style="box-sizing:border-box;padding-top:0;padding-right:0;padding-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;margin-top:1rem;margin-bottom:1rem;margin-right:1rem;margin-left:1rem;border-bottom-width:.1rem;border-bottom-style:solid;border-bottom-color:black  .;padding-bottom:1rem;">
                            <h2 style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;font-weight:bold;margin-bottom:1rem;">Email:</h2>
                            <p style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;">'.$email.'</p>
                        </li>
                        <li class="user-input" style="box-sizing:border-box;padding-top:0;padding-right:0;padding-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;margin-top:1rem;margin-bottom:1rem;margin-right:1rem;margin-left:1rem;border-bottom-width:.1rem;border-bottom-style:solid;border-bottom-color:black  .;padding-bottom:1rem;">
                            <h2 style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;font-weight:bold;margin-bottom:1rem;">Subject:</h2>
                            <p style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;">'.$subject.'</p>
                        </li>
                        <li class="user-input" style="box-sizing:border-box;padding-top:0;padding-right:0;padding-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;margin-top:1rem;margin-bottom:1rem;margin-right:1rem;margin-left:1rem;border-bottom-width:0;border-bottom-style:solid;border-bottom-color:black;padding-bottom:0;">
                            <h2 style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;font-weight:bold;margin-bottom:1rem;">Message:</h2>
                            <p style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;">'.$message.'</p>
                        </li>
                    </ul>
                </div>
                <div class="form-container directions" style="box-sizing:border-box;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;width:100%;max-width:25rem;padding-top:1rem;padding-bottom:1rem;padding-right:1rem;padding-left:1rem;margin-top:auto;margin-bottom:auto;margin-right:auto;margin-left:auto;background-color:#68C5AB;">
                    <ul style="box-sizing:border-box;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;list-style-type:none;list-style-position:outside;list-style-image:none;">
                        <li id="lastli" style="box-sizing:border-box;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;font-family:inherit;line-height:normal;vertical-align:baseline;border-bottom-width:0;border-bottom-style:solid;border-bottom-color:black  .;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                            <p style="box-sizing:border-box;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;border-width:0;font-size:inherit;font-style:normal;font-variant:normal;font-weight:normal;line-height:normal;vertical-align:baseline;font-family:sans-serif;color:white;padding-top:1rem;padding-bottom:1rem;padding-right:1rem;padding-left:1rem;">To respond to this message, just reply as if it were a normal email.</p>
                        </li>
                    </ul>
                </div>
            </main>
        </body>

        </html>

        ';
        // mail($mailTo, $subject, $txt, $headers);
        
        if(mail($mailTo, $subject, $txt, $headers)){ 
            header("Location: ../contact.php?mailsent");
        }else{ 
            echo 'Email sending failed.'; 
        }


    }
?>