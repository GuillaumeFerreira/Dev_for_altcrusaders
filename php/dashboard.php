<?php
require 'simplehtmldom/simple_html_dom.php';

$mystring = file_get_html('https://altcrusaders.io/about/')->plaintext;
$findme = "like-minded individuals and freely discuss your favorite topics or tokens without fear of censorship or commercial use of your data";
$pos = strpos($mystring, $findme);

$users = substr($mystring, $pos-5, 4);

$mystring = file_get_html('https://bscscan.com/token/0x2456e44c617d6231bb06492fa7337ee2f552bf61')->plaintext;
$findme = "addresses";
$pos = strpos($mystring, $findme);

$holders = substr($mystring, $pos-6, 5) ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>ALT statistics</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link rel="stylesheet" href="../css/style_dashboard.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"></span>
                        <span class="title">ALT Statistics</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Statistics</span>
                    </a>
                </li>
                <li>
                    <a href="roadmap.html">
                        <span class="icon"><ion-icon name="trail-sign-outline"></ion-icon></span>
                        <span class="title">Roadmap</span>
                    </a>
                </li>

                <li>
                    <a href="https://github.com/GuillaumeFerreira/Dev_for_altcrusaders">
                        <span class="icon"><ion-icon name="logo-github"></ion-icon></span>
                        <span class="title">Github</span>
                    </a>
                </li>

                <li>
                    <a href="https://trello.com/b/2ThkNAcf/web-site-stat-altcrusaders">
                        <span class="icon"><ion-icon name="library-outline"></ion-icon></span>
                        <span class="title">Trello</span>
                    </a>
                </li>

                <li>
                    <a href="https://altcrusaders.io/groups/development-for-altcrusaders/">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Join us</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>

            <!-- cards -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="number" id="price"></div>
                        <div class="cardName">Price</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="logo-usd"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number" id="marketcap"></div>
                        <div class="cardName">Market Cap</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number"><?php echo($holders) ;?></div>
                        <div class="cardName">Holders</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number"><?php echo($users) ;?></div>
                        <div class="cardName">Users</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="people-circle-outline"></ion-icon>
                    </div>
                </div>
            </div>

             <div class="details">


                <!-- transaction -->
               <!-- <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders on PancakeSwap</h2> -->
                       <!--<a href="#" class="btn">View All</a>-->
                    <!--</div>
                    <table>
                        <thead>
                            <tr>

                                <td>ALT</td>
                                <td>Price</td>
                                <td>Time</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>5000</td>
                                <td>40$</td>
                                <td>13/12/2021 12h 15min</td>
                                <td><span class="status sell">Sell</span> </td>
                            </tr>
                            <tr>

                                <td>5000</td>
                                <td>40$</td>
                                <td>13/12/2021 12h 15min</td>
                                <td><span class="status buy">Buy</span> </td>
                            </tr>
                            <tr>

                                <td>5000</td>
                                <td>40$</td>
                                <td>13/12/2021 12h 15min</td>
                                <td><span class="status sell">Sell</span> </td>
                            </tr>
                            <tr>

                                <td>5000</td>
                                <td>40$</td>
                                <td>13/12/2021 12h 15min</td>
                                <td><span class="status sell">Sell</span> </td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
                <!-- Charts -->
                <div class="graphBox">

                    <div class="box">
                        <canvas id="myChart"></canvas>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        //toggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active')
            main.classList.toggle('active')
        }
        //hovered
        let list= document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activeLink));
    </script>
    <script src="../javascript/coingeko.js"></script>
<script src="../javascript/chart.js"></script>

</body>
</html>