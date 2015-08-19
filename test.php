<html>
<head>
    <title>七夕抽奖活动</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="就是这样吗？">
    <script type="application/javascript">
        var imgUrl = 'https://www.baidu.com/img/bdlogo.png';  // 分享后展示的一张图片
        var lineLink = 'https://www.baidu.com/img/bdlogo.png'; // 点击分享后跳转的页面地址
        var descContent = "miaoshu";  // 分享后的描述信息
        var shareTitle = 'titlesss';  // 分享后的标题
        var appid = 'gh_ac13cb3b32b7';  // 应用id,如果有可以填，没有就留空

        function shareFriend() {
            WeixinJSBridge.invoke('sendAppMessage',{
                "appid": appid,
                "img_url": imgUrl,
                "img_width": "200",
                "img_height": "200",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                //_report('send_msg', res.err_msg);  // 这是回调函数，必须注释掉
            })
        }
        function shareTimeline() {
            WeixinJSBridge.invoke('shareTimeline',{
                "img_url": imgUrl,
                "img_width": "200",
                "img_height": "200",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                //_report('timeline', res.err_msg); // 这是回调函数，必须注释掉
            });
        }
        // 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            // 发送给好友
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
                shareFriend();
            });
            // 分享到朋友圈
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                shareTimeline();
            });
        }, false);
    </script>
</head>
<body>
<img src="images/bg_cj.jpg">
</body>
</html>