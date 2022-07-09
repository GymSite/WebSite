
<html>

<head>


    <title>رشته بوکس</title>

    <style type="text/css">


        body {
            -webkit-transition: 600ms ease-in;
            -o-transition: 600ms ease-in;
            -moz-transition: 600ms ease-in;
            background-image: url("boox.jpg");
            background-repeat: no-repeat;
            background-size: 1460px;
        }


        .oi {
            font-family: Calibri;
            font-size: large;
            color: black;
        }
        .rt{
            display: block;
            width: 400px;
            height: 500px;
            background-color:white;
        }

    </style>

</head>

<body bgcolor="black">

<br><br><br>

<div class="rt">

    <br><br>

    <center>

        <FONT class="oi">

            <b>

                عضویت باشگاه بوکس

            </b>
        </FONT>

        <br>

        <hr color="black"size="10"width="200">

        <br><br>

        <form action="" method="post">

            <input type="text" id="NAME" name="NAME">

            <FONT class="oi">
                نام و نام خانوادگی
            </FONT>

            <br>
            <br>
            <input type="text" id="MELI" name="MELI">

            <font class="oi">
                کد ملی
            </font>
            <font color="white">
                ////////////
            </font>

            <br><br>

            <input type="text" id="TAMAS" name="TAMAS">

            <font class="oi">

                شماره تماس

            </font>

            <font color="white">
                //////
            </font>

            <br><br><br>
            <br><br>

            <input type="submit"value="ثبت عضویت">




        </form>

    </center>

</div>


</body>

</html>





<?php
$id=$_POST['NAME'];
$n=$_POST['MELI'];
$f=$_POST['TAMAS'];


$link=mysqli_connect("localhost","root","");
$db=mysqli_select_db($link,"bashghah");
$sqlc="insert into box(name,kodmeli,shomare) values('$id','$n','$f')";
$res=mysqli_query($link,$sqlc);
?>

