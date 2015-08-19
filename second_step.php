<html>
<head>
    <title>Step2</title>
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
        .button{
            position: absolute;
            text-align: center;
            bottom: 0px;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 250px;
            height: 150px;
            background: transparent;
        }

        form {
            height: 60%;
            width: 100%;
            position: absolute;
            top: 30px;
            margin-left: 50px;
            margin-right: 50px;
            background: url("images/step2_form.png") no-repeat;
        }
        form input{
            width: auto;
            height: auto;
            background: url("images/form_input.png") no-repeat;
        }
        form .form_title{
            color: #757172;
            position: absolute;
            top: 20px;
            font-size: 50px;
            margin-left: 20px;
        }

        form .subtitle{
            position: absolute;
            top: 70px;
            font-size: 50px;
            margin-left: 20px;
        }

        form .select_area{
            position: absolute;
            top: 200px;
            font-size: 50px;
            margin-left: 20px;
        }

        form .input_area{
            position: absolute;
            top: 370px;
            font-size: 50px;
            margin-left: 20px;
        }
        form .form_line{
            position: absolute;
            height: 2px;
            width: 100%;
            background: transparent;
        }
        form .form_text{
            color: #231815;
            font-size: 50px;
            margin-left: 20px;
            margin-top: 5px;
        }
        form .item{
            line-height: 50px;
            height: 50px;
        }
        form .form_input{
            line-height: 50px;
            height: 50px;
        }
        form .submit{ display: block; width: 400px; height: 100px; background: url("images/submit_btn.png") no-repeat; text-align: center;border: 0;border-radius: 4px;}

        form .form_select{
            font-size: 40px;
            width: 300px;
            height: 100px;
            border: none;
            background: url("images/form_select.png") no-repeat;
        }
    </style>
</head>
<body>

<div class="start main-stage">
    <div class="button"></div>

    <form action="third_step.php" method="post">
        <span class="form_title">登记信息进行抽奖</span><br>
        <div class="form_line" ><br>
            <span class="form_text subtitle">本活动仅限广东省、广西省<br>&nbsp;&nbsp;、福建省、海南省内的网友参加</span>
            <br>
            <div class="select_area">
                <span class="form_text">所在城市</span>
                <select name="sf" class="form_select">
                    <option value="gd" selected>广东省</option>
                    <option value="gx">广西省</option>
                    <option value="fj">福建省</option>
                    <option value="hn">海南省</option>
                </select>
            </div>
            <div class="input_area">
                <span class="form_text item">姓名</span><input class="form_input" type="text" name="name"/><br>
                <span class="form_text item">电话</span><input class="form_input" type="number" name="phone"/><br>
                <input type="submit" src="images/form_input.png" value="" class="submit"/><br>
            </div>


    </form>

</div>
<script type="application/javascript">

    //    $(".submit").on('click touchend', function(e){
    //        e.preventDefault();
    //        var myDate = new Date();
    //        location.href="third_step.php?from=index&timestamp=" + myDate.getTime();
    //    });

</script>
</body>
</html>