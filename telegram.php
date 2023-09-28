<?php
    require_once __DIR__."/boot.php";/*подключение*/
    $name = $_POST['user_name'];/*принимаем данные,того что принимаем из другого файла*/
    $phone = $_POST['user_phone'];
    $sms = $_POST['user_sms'];
    $token = "6260994102:AAFXVUdh5Xm6Ly9SsWaVUnvIGD5ocMYOXjA";
    $chat_id = "1772496611";
    $arr = array(/*объявление словаря/ассоциативного массива*/
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
    'Сообщение: ' => $sms,
    );
    $txt = "";

    foreach($arr as $key => $value)/*цикл фор*/ {
        $txt .=/*сложение строк*/ "<b>"/*жирность шрифта*/.$key."</b>".$value."%0A"/*переход на новую строку*/;
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");/*отправление в тг*/
    
    if ($sendToTelegram) {
        flash_feedback('Спасибо Ваше обращение отправлено!');
        header('Location: ./ok.html');/*перенаправление*/
    } else {
        flash_feedback('К сожалению, письмо не доставлено. Ведутся технические работы');
        header('Location: ./error');/*перенаправление*/
    }
