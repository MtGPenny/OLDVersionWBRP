<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-05-31
 * Time: 8:45 AM
 */
include "includes/header.php";
?>
<div id="container">
    <div id="mainContent">
        <div class="twoColElsLtHdr style2">
            <h2 align="center">Research</h2>
        </div>

        Research activities are presently focusing on potential technologies to reduce the cost of production,
        improve production system sustainability, contend with climate change, and allow for the ongoing
        differentiation from other fruit crops.

        <ol type="i">
            <strong>Emphasis has been placed on:</strong>
            <li>Integrated disease management focusing on Monilinia and Botrytis blossom blights</li>
            <li>Double cropping of wild blueberries</li>
            <li>Reduced cost of production strategies.</li>
        </ol>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- Trigger the Modal -->
        <div align="center">
        <img class="myImg" src="images/MoniliniaBlight.jpg" alt="Monilinia Blight on Infected Plant" width="298" height="198">
        </div>


        <ol type="i">
            <strong>The Integrated disease management activities are focusing:</strong>
            <li>Mapping wild blueberry fields with an
                unmanned aerial vehicle (UAV) equipped with a high resolution digital camera to assess wild blueberry
                coverage, population structure; assessing floral and vegetative bud growth and development; and the
                presence of Monilinia and Botrytis blight in fields.
            </li> <br/>
            <li>Assessing floral and vegetative bud growth and development throughout the spring</li> <br/>
            <li>Determining the relative susceptibility of the wild phenotypes to Monilinia and Botrytis blight</li> <br/>
            <li>Evaluating biofungicide performance and ability to produce residue free berries. om this year are in the
                process of being analyzed and summarized.
            </li> <br/>


            <li>The project is also examining the relative susceptibility of the wild phenotypes to Monilinia and
                Botrytis blight, and evaluating biofungicide performance and ability to produce residue free berries.
            </li> <br/>

        </ol>

        <div align="center">
            <img class="myImg" src="images/UAV.jpg" alt="Unmanned Aerial Vehicle" width="298" height="198">
        </div>


        <p>Preliminary results have indicated that it is possible to differentiate clones and floral and vegetative and bud
            growth progression; not all clones are susceptible to Monilinia and Botrytis blight diseases; and
            good Botrytis blight control can be achieved with the use of biofungicides.
        </p>

        <ol type="i">
            <strong>Double cropping research activities undertaken have:</strong>
            <li>Examined the physiological capacity of wild blueberries to support successive crops</li> <br/>
            <li> Pre- and postharvest technologies to improve leaf retention and increase yield potential for the second
                cropping year
            </li> <br/>
            <li>Harvest technologies to minimize leaf loss during mechanical harvesting</li> <br/>
        </ol>

        <div align="center">
            <img class="myImg" src="images/HarvestTechnologies.jpg" alt="Harvesting Method" width="298" height="198">
        </div>

        <p>Results from replicated field trials have indicated that wild blueberries have the physiological capacity to
            support successive crops, an optimal balance of new vegetative growth and minimal canopy damage during
            harvest is essential, plant growth regulators have an important influence, and postharvest leaf disease
            control is essential for double cropping to be viable.
        </p>

        <p>Reduced cost of production technologies continue to focus on the use of alternative residual and
            post-emergence herbicides for weed control and integrating this with the use of a boom sprayer equipped with
            WeedSeeker® nozzles to control problematic bi- and perennial weeds; use of dormant and alternative growing
            season fungicide treatments for Monilinia and Botrytis blight control; and alternative soil- and
            foliar-applied nutrient management approaches for wild blueberries.
        </p>

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
