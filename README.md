## Feedback
### Форма обратной связи с перенаправлением сообщений в телеграм-бота

- index.php - главный файл, открываемый у пользователя для ввода своего предложения
- telegram.php - файл, который принимает и обобщает данные введеные пользователем в "index.php" и осуществляет перенаправление при отправленном сообщении в файл "ok.html" или "error.html"
- style_feed.css - стили сайта
- ok.html - в этот файл осуществляется перенаправление если сообщение пользователя успешно отправленно
- boot.php - файл, осуществляющий отправку сообщения в телеграм бота


## В файле index.php
``` <form action="telegram.php" method="POST">``` - Перенаправление сайта в файл "telegram.php", где метод "Post" обозначает отправление данных

## В файле telergam.php

```require_once __DIR__."/boot.php";``` - подключение к файлу "telegram.php" файла "boot.php'

```$phone = $_POST['user_phone'];```
```$sms = $_POST['user_sms'];``` 
```$sms = $_POST['user_sms'];```- изъятие данных, введенных пользователем в input из файла "index.php"

```token & chat_id```- номер токена и айди чата бота

```header('Location: ./error.html' or './ok.html')``` - перенаправление на страницу в зависимости от значения условия
