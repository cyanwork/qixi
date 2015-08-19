<html>
<head>
    <script src="scripts/main.js"></script>
</head>
<body>

<button>向页面发送 HTTP GET 请求，然后获得返回的结果</button>

<script type="application/javascript">

    $("button").on('click touchend', function(){
        alert("start");
        var phone = $(".phone").html();
        alert("over" + phone);
    });

</script>
</body>
</html>
<?php
    echo "<div class='phone' hidden='hidden'>wanghuan</div>";
?>
