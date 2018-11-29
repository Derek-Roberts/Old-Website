<? include "include.php" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="reset.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Derek Roberts | Project 4</title>
</head>

<body>
    <!-- begin #header -->
<div class="header">
    <? echo $header; ?>
</div>
    <!-- end #header -->
<div class="center">
    <!-- begin #nav -->
    <div class="nav">
        <? echo $navbar; ?>
    </div>
    <!-- end #nav -->
    </br>
    <h2>2015 BMW M3</h2>
    </br>
        <p>It's a BMW.  It's nice</p>
    </br>
    <img src="images/bmw_1.jpg" alt="front left shot of bmw"></img>
    <div class="thumbs">
        <ul>
            <li><img src="images/bmw_2.jpg" alt="side shot of the bmw"></img></li>
            <li><img src="images/bmw_3.jpg" alt="front right action shot of bmw"></img></li>
            <li><img src="images/bmw_4.jpg" alt="interior view of bmw"></img></li>
        </ul>
    </div>
    <!-- begin #footer -->
<div class="center">
    <div class="footer">
        <? echo $footer; ?>
    </div>
</div>
    <!-- end #footer -->
</div>
</body>
</html>
