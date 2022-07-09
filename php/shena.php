
<html>

<head>


    <title>رشته شنا</title>

    <style type="text/css">


        body {
            -webkit-transition: 600ms ease-in;
            -o-transition: 600ms ease-in;
            -moz-transition: 600ms ease-in;
            background-image: url("shena.jpg");
            background-repeat: no-repeat;
            background-size: 1460px;
        }


        .oi {
            font-family: Calibri;
            font-size: large;
            color: black;
        }
        .ww{
            display: block;
            width: 400px;
            height: 500px;
            background-color: white;
        }

    </style>

</head>


<body bgcolor="black">

<br><BR><BR>

<div class="ww">

    <center>
<font class="oi">
    <b>
        <br>
        عضویت باشگاه شنا
    </b>
</font>

        <hr color="black"size="10"width="200">
        <br><br><br>

            <form action="" method="post">

                        <input type="text" id="NAME1" name="NAME1">

                        <FONT class="oi">
                                نام و نام خانوادگی
                        </FONT>

                        <br>
                        <br>
                        <input type="text" id="MELI1" name="MELI1">

                        <font class="oi">
                                کد ملی
                        </font>
                        <font color="white">
                                ////////////
                        </font>

                        <br><br>

                        <input type="text" id="TAMAS1" name="TAMAS1">

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

$id=$_POST['NAME1'];
$n=$_POST['MELI1'];
$f=$_POST['TAMAS1'];


$link=mysqli_connect("localhost","root","");
$db=mysqli_select_db($link,"bashghah");
$sqlc="insert into shena(name,kodmeli,shomare) values('$id','$n','$f')";
$res=mysqli_query($link,$sqlc);

?>

