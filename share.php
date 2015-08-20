<html>
<head>

    <script type="application/javascript">
        var imgUrl = "http://ww3.sinaimg.cn/bmiddle/6106a4f0gw1ev8tq2j1k9j20sg0dpte8.jpg";

        var lineLink = "www.weibo.com";

        var descContent = '描述语';

        var shareTitle = '标题';

        var appid = 'wxfa2416fbe6b39358';

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

                //_report('send_msg', res.err_msg);

            })

        }

        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

            // 发送给好友

            WeixinJSBridge.on('menu:share:appmessage', function(argv){

                shareFriend();

            });

            // 分享到朋友圈

            WeixinJSBridge.on('menu:share:timeline', function(argv){

//                shareTimeline();

            });

            // 分享到微博

            WeixinJSBridge.on('menu:share:weibo', function(argv){

//                shareWeibo();

            });

        }, false);
    </script>

</head>
<body>
nifei le ma
</body>
</html>