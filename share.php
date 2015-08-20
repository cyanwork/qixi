<html>
<head>

    <script>
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            window.shareData = {
                "timeLineLink": "http://www.baidu.com",
                "sendFriendLink": "http://www.baidu.com",
                "weiboLink": "http://www.baidu.com",
                "tTitle": "八斗美妆人才网",
                "tContent": "共创会—八斗携手阿里O2O，聚合品牌、连锁渠道方共谋美妆未来商业模式",
                "fTitle": "八斗美妆人才网",
                "fContent": "共创会—八斗携手阿里O2O，聚合品牌、连锁渠道方共谋美妆未来商业模式",
                "wContent": "共创会—八斗携手阿里O2O，聚合品牌、连锁渠道方共谋美妆未来商业模式"
            };
            // 发送给好友
            WeixinJSBridge.on('menu:share:appmessage', function (argv) {
                WeixinJSBridge.invoke('sendAppMessage', {
                    "img_url": "http://su.bdimg.com/static/superplus/img/logo_white.png",
                    "img_width": "401",
                    "img_height": "275",
                    "link": window.shareData.sendFriendLink,
                    "desc": window.shareData.fContent,
                    "title": window.shareData.fTitle
                }, function (res) {
                    _report('send_msg', res.err_msg);
                })
            });
            // 分享到朋友圈
            WeixinJSBridge.on('menu:share:timeline', function (argv) {
                WeixinJSBridge.invoke('shareTimeline', {
                    "img_url": "http://su.bdimg.com/static/superplus/img/logo_white.png",
                    "img_width": "401",
                    "img_height": "275",
                    "link": window.shareData.timeLineLink,
                    "desc": window.shareData.tContent,
                    "title": window.shareData.tTitle
                }, function (res) {
                    _report('timeline', res.err_msg);
                });
            });

        }, false)
    </script>

</head>
<body>
nifei le ma
</body>
</html>