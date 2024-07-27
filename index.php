<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css"rel="stylesheet" href="stylecss_LTP/mycss.css"/>
    <script type="text/javascript" src="js_LTP/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="js_LTP/jscript.js"></script>
    <title>Đây là trang web của Tui</title>
</head>
<body>
    <div id="top_div"></div>
    <div id="left_div">
        <?php
            require './element_LTP/left.php'
        ?>
    </div>
    <div id="center_div">
        <?php
            require './element_LTP/center.php';
        ?>
    </div>
    <div id="right_div"></div>
    <div id="bottom_div"></div>
</body>
</html>