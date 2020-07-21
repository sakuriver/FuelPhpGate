<!DOCTYPE html>
<head>
    <style type="text/css">
        #wrapper{
            margin:0 auto;
            width: 960px;
        }
        #middle{
            background-color: #fcc;
        }
        #menu{
            float: left; width: 230px;
        }
        #content{
            float: left;
            padding-left: 20px;
            background-color: #fff;
            width: 710px;
        }
        #footer{
            background-color: #cfc;
            padding: 10px;
        }
        .clearfix:after{
            content: ".";
            display: block;
            clear: both;
            height: 0;
            visibility: hidden;
        }
        .clearfix {
            min-height: 1px;
        }
        * html .clearfix{
            
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div style="background-color: #ccf;padding:10px">
            <h1><?php echo $title;?></h1>
        </div>
        <div id="middle" class="clearfix">
            <div id="menu">
                <ul>
                    <li><a href="/example/index">Sakuriverの特徴</a></li>
                    <li><a href="/example/howto">Sakuriverとは</a></li>
                    <li><a href="/example/petinfo">実家のペットとは</a></li>
                    <li><a href="/example/nowinfo">現在は</a></li>
                </ul>
            </div>
            <div id="content">
                <?php echo $content; ?>
            </div>
            <div id="footer">
                &copy; Sakuriver 2020</div>
            </div>
        </div>
    
</body>
</html>