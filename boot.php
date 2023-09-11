<?php
    session_start();
    function flash_feedback(?string $message = null) {
        if ($message) {
            $_SESSION['flash_feedback'] = $message;
        } else {
            if (!empty($_SESSION['flash_feedback'])) { 
                if ($_SESSION['flash_feedback'] == 'Спасибо Ваше обращение отправлено!') { ?>
                <div class="alert-good">
                    <?=$_SESSION['flash_feedback'] ?>
                </div>
            <?php } else { ?>
                <div class="alert-danger">
                    <?=$_SESSION['flash_feedback'] ?>
                </div>
            <?php }
            }
            unset($_SESSION['flash_feedback']);
        }
    }