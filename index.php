<html>

<head>

    <title>باشگاه محدثه شیرازی</title>

    <style type="text/css">

        body {
            -webkit-transition: 600ms ease-in;
            -o-transition: 600ms ease-in;
            -moz-transition: 600ms ease-in;
            background-image: url("image/boox.jpg");
            background-repeat: no-repeat;
            background-size: 1460px;
        }


        .oi {
            font-family: Calibri;
            font-size: xx-large;
            color: white;
        }

        nav {
            margin: 45px auto;
            text-align: right;

        }

        nav ul ul {
            display: none;
        }

        nav ul li:hover > ul {
            display: block;
        }


        nav ul {
            -webkit-transition: 600ms ease-in;
            -o-transition: 600ms ease-in;
            -moz-transition: 600ms ease-in;
            font-size: large;
            font-family: "Calibri Black";
            background: black;
            box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.15);
            padding: 0 20px;
            border-radius: 10px;
            list-style: none;
            position: relative;
            display: inline-table;

        }

        nav ul:after {
            content: "";
            clear: both;
            display: block;

        }

        nav ul li {
            float: right;
            position: relative;
            font-weight: bold;

        }

        nav ul li:hover {
            background: darkred;
        }

        nav ul li:hover a {
            color: darkred;
        }

        nav ul li a {
            display: block;
            padding: 15px 32px;
            color: #4e4e4e;
            text-decoration: none;
        }

        nav ul ul {
            background: white;
            border-radius: 0px;
            padding: 0;
            position: absolute;
            top: 100%;
            right: 0;
            width: 200px;
        }

        nav ul ul li {
            font-family: "Calibri Light";
            float: none;
            border-top: 1px solid greenyellow;
            border-bottom: 1px solid greenyellow;
            position: relative;
        }

        nav ul ul li a {
            padding: 15px 40px;
            color: red;
        }

        nav ul ul li a:hover {
            background: red;
        }

        nav ul ul ul {
            position: absolute;
            right: 100%;
            top: 0;
        }

        .yu {
            display: block;
            width: 400px;
            height: 550px;
            background-color: darkgoldenrod;
        }
        .wr{
            display: block;
            position:absolute;
            width: 300px;
            height: 50px;
            background-color: gold;
        }


    </style>


    <center>
        <div class="wr">

            <br>


            <form action="index.php" method="get" id="searchform">


                <input id="searchsubmit" value="search" type="submit"/>
                <input value="" name="s" id="s" type="text" placeholder="جستجو کنید"/>


            </form>

        </div>
        <nav>

            <center>

                <div class="oi">


                    <br>
                    <ul>

                        <li>
                            <a href="html/11.html">

                                <font color="white">
                                   باشگاه
                                </font>

                            </a>
                        </li>

                        <li>
                            <a href="html/akhbar.html">

                                <font color="white">
                                    اخبار روز باشگاه

                                </font>

                            </a>
                        </li>


                        <li>

                            <a href="">

                                <font color="white">
                                    رشته های ورزشی
                                </font>

                            </a>

                            <ul>


                                <li>

                                    <a href="php/badan.php">

                                        <img src="image/bddn.png" width="50" height="50">


                                        <font color="black">

                                            بدنسازی

                                        </font>

                                    </a>

                                </li>

                                <li>
                                    <A href="php/shena.php">

                                        <img src="image/shena.png" width="50" height="50">

                                        <font color="black">

                                            شنا

                                        </font>
                                    </A>
                                </li>

                                <li>

                                    <a href="php/box.php">

                                        <img src="image/box.png" width="50" height="50">

                                        <font color="black">

                                            بوکس

                                        </font>


                                    </a>

                                </li>

                            </ul>


                        </li>


                    </ul>


                </div>

            </center>


        </nav>

    </center>


</head>

<body bgcolor="black">

<br>
<Br>
<br><br><br><br><br>
<br><br><br><BR>

<center>

    <div class="yu">

        <center>

            <br>

            <a href="php/shena.php">

                <img src="image/shena.png" width="100" height="100">

            </a>

            <br>

            <font color="black">
                <b>

                    رشته شنا

                </b>
            </font>


            <br>
            <br>

            <a href="php/badan.php">

                <img src="image/bddn.png" width="100" height="100">

            </a>
            <br>
            <font color="black">
                <b>

                    رشته بدنسازی

                </b>
            </font>

            <br><br>

            <a href="php/box.php">

                <img src="image/box.png" width="100" height="100">

            </a>
            <br>

            <font color="black">
                <b>

                    رشته بوکس

                </b>
            </font>


        </center>


    </div>

</center>


</body>


</html>


<?php
/**
 * Created by PhpStorm.
 * User: mersad
 * Date: 2/7/2021
 * Time: 11:19 AM
 */