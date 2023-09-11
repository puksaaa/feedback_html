<!DOCTYPE html>  
<html>  
    <head>  
        <meta charset="utf-8">  
        <title>feedback</title>  
        <link href="./style_feed.css" rel="stylesheet" type="text/css">  
    </head>  
    <body>  
        <form action="telegram.php" method="POST"><!-- acton - перенаправоление, post - отправление данных -->
            <p class="text1">any other questions? ask now</p>  
            <div class="feed1"> 
                <p class="text_name">your name :</p> 
                <input type="text" class="feed_login" placeholder="" name="user_name" autocomplete="off" required />
                <br>   

                <p class="text_name">your email/phone :</p>
                <input type="text" placeholder="" class="feed_login" name="user_phone" autocomplete="off" required> 

                <p class="text_name">your questions :</p> 
                <textarea type="text" placeholder="" class="feed_pass" name="user_sms" autocomplete="off" required></textarea>
                <br>   

                <button type="submit">send</button>   
            </div> 
        <form action="telegram.php" method="POST">
    </body>  
</html>