<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-05-30
 * Time: 4:20 PM
 */

//Create Session
session_start();

//Session expires after n time (minutes)
$expireAfter = 30;

//Check for most resent action
if (isset($_SESSION['last_action'])) {

    //Calculate how long the user has been inactive
    $secondsInactive = time() - $_SESSION['last_action'];

    //Convert minutes to seconds
    $expireAfterSeconds = $expireAfter * 60;

    //Check if user is inactive for an extended length of time
    if ($secondsInactive >= $expireAfterSeconds) {
        //Kill their session.
        session_unset();
        session_destroy();

    }

}

//Assign the current timestamp as the user's latest activity
$_SESSION['last_action'] = time();


//Give Visitor A unique and random session id
uniqid();
?>

<head>
    <title>Wild Blueberry Research Program</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>

<body class="twoColElsLtHdr">
<div id="container">
    <div id="header">
        <table width="735" border="0">
            <tr>
                <td width="735" height="148" bgcolor="#ffffff">
                    <div align="center">
                        <img src="images/WBPB.jpg" alt="Logo" width="729" height="200" align="top"/>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div id="sidebar1">
        <h3 align="left">
            <a href="index.php">Home</a>
        </h3>
        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="research.php">Research</a>
        </h3>

        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="extension.php">Extension</a>
        </h3>

        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="publications.php">Publications</a>
        </h3>

        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="teaching.php">Teaching</a>
        </h3>

        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="people.php">People</a>
        </h3>
        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="join.php">Join</a>
        </h3>

        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="contact.php">Contact</a>
        </h3>

        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="photos.php">Photos</a>
        </h3>

        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="videos.php">Videos</a>
        </h3>

        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <a href="history.php">History</a>
        </h3>

        <p align="left"><a href="http://www.facebook.com" target="_blank">
                <img src="images/facebook-logo.jpg" alt="Follow Us" width="113px" height="40px" align="middle"/>
            </a>
        </p>

        <a href="https://twitter.com/Blueberries?ref_src=twsrc%5Etfw" class="twitter-follow-button"
           data-show-count="false">Follow @Blueberries</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <h3 align="left" class="twoColHybLtHdr style1 style10 style21">
            <span class="style32">
                <a href="https://www.dal.ca/faculty/agriculture/plant-food-env.html" target="_blank">
                    <img src="images/DAL.jpg" width="115px">
                </a>
            </span>
            <span class="style18"> </span>
        </h3>

        <h3 align="left" class="twoColHybLtHdr">
            <span class="style1 style10 style21">
                <span class="style22">
                </span>
                <br/>
            </span>
            <span class="style1">
                <span class="style22">
                    <img src="images/Blueberry_Logo%20v2.png" width="100px" height="90px">
                </span>
            </span>
        </h3>
    </div>
</div>
</body>





