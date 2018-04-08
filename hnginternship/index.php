<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="HNG Internship"/>
        <meta name="viewport" content="width=device-width,initial scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
    
        <title>HNG Internship</title>
    </head>
      
    <body>
            <div align ="center" style="width:100%;height:100%;border:1px solid lightblue;" class="figma">
            <div align="center" style="width:422px;height:235px; border:1px solid grey;" 
            class="hng">
            <?php
            
             $tz = 'Africa/Lagos';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); 
$dt->setTimestamp($timestamp); 
echo $dt->format('d.m.Y, H:i:s');
            ?>
            </div>
            </div>
    </body>
</html>