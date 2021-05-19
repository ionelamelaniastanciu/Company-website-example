<!DOCTYPE html>
<html>

<head>
    <title>Melania</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="/imagini/poza_eu.jpg" type='image/x-icon'/>
    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>

    <div class="banner">
    </div>

    <div class="container">
        <div class="home"><b onclick="home();">Home</b></a></div>
        <div class="projects"><b onclick="projects();">Projects</b></div>
        <div class="team"><b onclick="team();">Team</b></div>
        <div class="feedback"><b onclick="feedback();">Feedback</b></div>
        <div class="contact_form"><b onclick="contact();">Contact</b></div>
    </div>
    <br/>
    <div class="content">
        <div class="image_marketing">
            <img src="imagini/smart_city.jpg" alt="smart_city"/>
        </div>
        <div id="text-content">          
        </div>

     </div>

    <div class="client-feedback">
        <table align="center">
            <tr>
                <td rowspan="2"> <img id="img_client1" src="imagini/person.png" alt="client photo"></td>
                <td>
                    <h3 id="client-name1">S.C. XXXXXX S.R.L</h3>
                </td>
                <td rowspan="2"> <img id="img_client2" src="imagini/person.png" alt="client photo"></td>
                <td>
                    <h3 id="client-name2">S.C. YYYYYY S.R.L</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <p id="client-opinion">One of the best contract we have ever had.<br> I recommend the services</p>
                </td>
                <td>
                    <p id="client-opinion">Nice team and professionalism.</p>
                </td>
            </tr>
            </tr>
        </table>
    </div>

    <div class="footer">
        <div class="footer-elements" align="center">
            <div id="contact">
                <table id="contact-table">
                    <tr>
                        <td>
                            <h2>Contact</h2>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Email </b></td>
                        <td>stanciuionelamelania@gmail.com</td>
                    </tr>
                    <tr>
                        <td><b>Phone </b></td>
                        <td>0763104561</td>
                    </tr>
                </table>
            </div>
            <div class="career">
                <table id="career-table">
                    <tr>
                        <td>
                            <h2>Career</h2>
                        </td>
                    </tr>
                    <tr>
                        <td id="send_cv" style="color: white;" onclick="sendCv()"><u>Send us your CV</u></td>
                    </tr>
                    <tr>
                        <td id="why_us" style="color: white;" onclick="whyUs()"><u>Why us?</u></td>
                    </tr>
                </table>
            </div>
            <div class="about">
                <table id="about-table">
                    <tr>
                        <td>
                            <h2>About</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Copyright 2021</td>
                    </tr>
                    <tr>
                        <td>All rights reserved</td>
                    </tr>
                </table>
            </div>            
        </div>
    </div>

    <?php require('feedback.php'); ?>
    <?php require('cv_get.php'); ?>
</body>

</html>