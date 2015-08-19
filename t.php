<?php
//require_once('header.php');
?>
<html>
<head>
    <title>填写信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="scripts/main.js"></script>
    <style type="text/css">

        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #000;
        }
        .main-stage {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: url("images/step2.png") no-repeat center center #333333;
            background-size: cover;
            opacity: 1;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        form {
            width: 90%;
            height: 90%;
            position: absolute;
            top: 100px;
            left: 120px;
            background: url("images/step2_form.png") no-repeat;
        }

        form .form_title{
            position: absolute;
            top: 80px;
            left: 50px;
            line-height: 60px;
            font-size: 50px;
            color: #000000;
        }
        form .subtitle{
            position: absolute;
            top: 170px;
            left: 50px;
            line-height: 60px;
            font-size: 40px;
            color: #757172;
        }

        form .select_area{
            position: absolute;
            top: 470px;
            left: 50px;
            font-size: 50px;
        }
        form .form_select{
            font-size: 40px;
            width: 300px;
            height: 100px;
            border: none;
            background: url("images/form_select.png") no-repeat;
        }

        form .input_area{
            position: absolute;
            top: 610px;
            left: 50px;
            font-size: 50px;
        }
        form .form_text{
            height: 70px;
            line-height: 70px;
            padding-top: 10px;
        }
        form .form_input{
            width: 400px;
            line-height: 70px;
            height: 70px;
            background: url("images/form_input.png") no-repeat;
        }

        form .shen{
            color: crimson;
        }

    </style>
</head>
<body>

<div class="main-stage">
    <div class="button"></div>

    <form action="third_step.php?from=index&timestamp=2439995105204" method="post">
        <span class="form_title">登记信息进行抽奖</span><br>

        <div class="subtitle">
            本活动仅限<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="shen">广东省&nbsp;&nbsp;&nbsp;&nbsp;广西省<br>&nbsp;&nbsp;&nbsp;&nbsp;福建省&nbsp;&nbsp;&nbsp;&nbsp;海南省<br></span>内的网友参加
        </div>


        <div class="select_area">
            <span class="form_text">所在省份</span>
            <select name="sf" class="form_select">
                <option value="gd" selected>广东省</option>
                <option value="gx">广西省</option>
                <option value="fj">福建省</option>
                <option value="hn">海南省</option>
            </select>
        </div>

            <div class="input_area">
                <div>
                    <span class="form_text">姓名</span>&nbsp;&nbsp;<input class="form_input" type="text" name="name"/>
                </div>
                <div>
                    <span class="form_text">电话</span>&nbsp;&nbsp;<input class="form_input" type="number" name="phone"/>
                </div>
                <input type="submit" src="images/form_input.png" value="" class="submit"/><br>
            </div>


    </form>

</div>
<audio id="bgm" src="./images/Honey.mp3" loop=1 autoplay=1></audio>

</body>
</html>