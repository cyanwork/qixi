<html>
<head>
    <style type="text/css">
        
        body{
            background: url("images/step2.jpg");
        }
    </style>
</head>
<body>

<div class="">

    <form action="third_step.php?from=index&timestamp=2439995105204" method="post">
        <span class="form_title">登记信息进行抽奖</span><br>
        <div class="form_line" ><br>
            <span class="form_text subtitle">本活动仅限广东省、广西省<br>&nbsp;&nbsp;、福建省、海南省内的网友参加</span>
            <br>
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
                <span class="form_text item">姓名</span>&nbsp;&nbsp;<input class="form_input" type="text" name="name"/><br>
                <span class="form_text item">电话</span>&nbsp;&nbsp;<input class="form_input" type="number" name="phone"/><br>
                <input type="submit" src="images/form_input.png" value="" class="submit"/><br>
            </div>


    </form>

</div>
<audio id="bgm" src="./images/Honey.mp3" loop=1 autoplay=1></audio>
</body>
</html>