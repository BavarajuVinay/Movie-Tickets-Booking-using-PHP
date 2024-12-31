<?php 
// Start the session 
session_start();
?>

<html>
    <head>
        <title>Motorola</title>
        <style>
            .first
            {
                background-color: black;
                color: white;
                width:1630px;
                height: 100%;
                left: 0%;
                top: 0%;
                display: inline-block;
                position: absolute;
            }
            .image
            {
                width: 250px;
                height: 450px;
                top: 15%;
                left: 0%;
                border-radius: 8% 8% 8% 8%;
                position: absolute;
                /* background-color: yellow; */
            }
            .image:hover{
                transform: scale(1.1);
            }
            .moto
            {
                left: 36%;
                top: 11%;
                width: 380px;
                height: 430px;
                position: absolute;
                border: 1px solid black;
                font-size:130%;
            }
            .show_desc
            {
                /* background-color:green; */
                color: white;
                top: 69%;
                left:10%;
                height: 170px;
                width: 860px;
                position: absolute;
                /* border:1px solid white; */
                font-size: xx-large;
            }
            .dot{
                height: 25px;
                width: 25px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
            }
            .details{
                position: absolute;
                top: 16%;
                left: 64%;
                width: 430px;
                height: 410px;
                padding: 10px;
                border-radius: 80px 8px 80px 8px;
                background-color: rgb(29, 159, 215);
                font-size: 110%;
            }
            

            /* button styling */

            .button-style input[type="submit"] {
            position: absolute;
            padding: 15px 25px;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: rgb(9, 42, 233);
            border: none;
            border-radius: 15px;
            box-shadow: 0 6px 6px white;
            width: 430px;
            top: 40%;
            left: 104%;
        }

        .button-style input[type="submit"]:hover {
            background-color: #ee210e;
            transform: scale(1.1);
        }

        .button-style input[type="submit"]:active {
            background-color: #e93d0d;
            box-shadow: 0 5px rgb(14, 11, 11);
            transform: translateY(4px);
        }

            /* button styling end */
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("bookingForm").addEventListener("submit", function(event) {
            <?php if(isset($_SESSION["username"])) { ?>
                if (!confirm("Are you sure want to book this product?")) {
                    event.preventDefault(); // Prevent default form submission
                }
            <?php } else { ?>
                if (confirm("Please login first!")) {
                    window.location.href = "login.html";
                    event.preventDefault(); // Prevent default form submission
                }
            <?php } ?>
        });
    });
        </script>
    </head>
    <body>
        <div class="first">
            <div class="image">
                <img src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2022/01/moto-g-71-1641798401.jpg" height="100%"  alt="">
            </div>
            <div class="moto">
                <h1>Motorola Moto G71 5G</h1>
                <h2>&#11088;3.9/5</h2>61 ratings
                <h3>50+ bought in past month</h3>
                <h2 style="color:red;">-23% &#8377;17,740</h2>
                <h4>M.R.P.:<strike>&#8377;22,999</strike></h4>
                <h5>Inclusive of all taxes</h5>
                <h5>EMI starts at &#8377;3,927. No Cost EMI available</h5> 
                <!-- <a href="m1mbook.html"><button>Book Tickets</button></a> -->
            </div>
            <div class="show_desc">
    <form action="booknow.php" id="bookingForm" method="post">
        <table style="color: white; border-color: white; font-size: large;" border="1" cellpadding="15" cellspacing="4" width="100%">
            <tr>
                <th>
                    <h2>&ensp;Available Colors&ensp;&ensp;</h2>
                </th>
                <th style="color: white;">
                    <h2>Size</h2>
                </th>
            </tr>
            <tr>
                <th style="color: skyblue;">
                    <h2>Neptune Green</h2>
                </th>
                <th style="font-size: x-large;">
                    <input type="radio" value="6 GB+128 GB" name="size" checked="true">6 GB+128 GB &nbsp; 
                    <input type="radio" value="8 GB+128 GB" name="size">8 GB+128 GB &nbsp;
                    <input type="radio" value="8 GB+256 GB" name="size">8 GB+256 GB &nbsp;
                </th>
            </tr>
        </table>
        <div class="button-style">
            <?php
            date_default_timezone_set('Asia/Kolkata');
            $datetime = date('d-m-Y H:i:s');
            list($date, $time) = explode(' ', $datetime); 
            ?>
            <input type="hidden" name="model" value="Motorola Moto G71 5G">
            <input type="hidden" name="date" value="<?php echo $date ?>">
            <input type="hidden" name="time" value="<?php echo $time ?>">
            <input type="hidden" name="cost" value="17,740"> 
            <input class="button" type="submit" value="Book Now" onclick="return confirmBooking()">
        </div>
    </form>
</div>

                <div class="details">
                    <table style="color: white;font-size: larger;" border="0" width="100%" cellspacing="4" cellpadding="10">
                        <tr>
                            <th>
                                <h3>Brand</h3>
                            </th>
                            <td>
                                <h3>Motorola</h3>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h3>Model Name</h3>
                            </th>
                            <td>
                                <h3>G71 5G</h3>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h3>Network Service Provider</h3>
                            </th>
                            <td>
                                <h3>Unlocked for All Carriers</h3>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h3>Operating System</h3>
                            </th>
                            <td>
                                <h3>Android 10</h3>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <h3>Cellular Technology</h3>
                            </th>
                            <td>
                                <h3>5G</h3>
                            </td>
                        </tr>
                    </table>
                </div>
    </body>
</html>