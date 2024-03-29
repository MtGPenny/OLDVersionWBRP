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
                <li><a href="photos_experiments.php">Experiments</a></li>
                <li class="current">People</a></li>
                <li><a href="photos_equipment.php"> Machines</a></li>
                <li><a href="photos_insects.php"></li>
                <li><a href="photos_insects.php">Insects</a></li>
            </ol>
            <div class="twoColElsLtHdr style2">
                <h2 align="center">People</h2>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <!-- Trigger the Modal -->
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">
            <img class="myImg" src="" alt="" width="150" height="150">

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
<?php include "includes/footer.php"; ?>