<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-05-31
 * Time: 4:09 PM
 */
include "includes/header.php" ?>
    <div id="container">
        <div id="mainContent">

            <ol class="breadcrumb">
                <li class="current">Experiments</a></li>
                <li><a href="photos_people.php">People</a></li>
                <li><a href="photos_equipment.php"> Machines</a></li>
                <li><a href="photos_insects.php"> Insects</a></li>
            </ol>

            <div class="twoColElsLtHdr style2">
                <h2 align="center">Experiments</h2>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <!-- Trigger the Modal -->
            <img class="myImg" src="images/ExperimentB.png" alt="Plant Research" width="150" height="150">
            <img class="myImg" src="images/ExperimentC.png" alt="Londonderry – July RGB " width="150" height="150">
            <img class="myImg" src="images/ExperimentCInf.png" alt="Londonderry – July Colour IR" width="150"
                 height="150">
            <img class="myImg" src="images/ExperimentD.png" alt="Wild Blueberry Seed Germination and Development"
                 width="150" height="150">
            <img class="myImg" src="images/ExperimentE.png" alt="Bee Hives" width="150" height="150">
            <img class="myImg" src="images/BlueberryDevA.png" alt="Blueberry Development Stage 1" width="150"
                 height="150">
            <img class="myImg" src="images/BlueberryDevB.png" alt="Blueberry Development Stage 2" width="150"
                 height="150">
            <img class="myImg" src="images/BlueberryDevC.png" alt="Blueberry Development Stage 3" width="150"
                 height="150">
            <img class="myImg" src="images/BlueberryDevD.png" alt="Blueberry Development Stage 4" width="150"
                 height="150">
            <img class="myImg" src="images/BlueberryDevE.png" alt="Blueberry Development Stage 5" width="150"
                 height="150">
            <img class="myImg" src="images/BlueberryDevF.png" alt="Blueberry Development Stage 6" width="150"
                 height="150">
            <img class="myImg" src="images/BlueberryDevG.png" alt="Blueberry Development Stage 7" width="150"
                 height="150">


            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
            </div>
        </div>
    </div>

    <style>
        /* Style the Image Used to Trigger the Modal */
        .myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            height: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        .breadcrumb li {
            display: inline;
        }

        .breadcrumb li + li:before {
            content: "» ";
        }
    </style>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = $('.myImg');
        var modalImg = $("#img01");
        var captionText = document.getElementById("caption");
        $('.myImg').click(function () {
            modal.style.display = "block";
            var newSrc = this.src;
            modalImg.attr('src', newSrc);
            captionText.innerHTML = this.alt;
        });

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>


<?php include "includes/footer.php"; ?>