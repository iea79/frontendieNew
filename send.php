<?php
    if ($_POST['check'] == 'antispam') {
        $to = 'busforward@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = ''.$_POST['subject'].'';
        $message = '
        <html>
            <head>
                <title>' . $subject . '</title>
            </head>
            <body>
                <p>Имя: ' . $_POST['name'] . '</p>
                <p>E-mail: ' . $_POST['email'] . '</p>
                <p>Сообщение: ' . $_POST['message'] . '</p>
            </body>
        </html>';
        $headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Заявка с сайта <info>\r\n"; //Наименование и почта отправителя
        if (mail($to, $subject, $message, $headers)) {
            echo 'Ваше сообщение отправлено! В ближайшее время я свяжусь с вами.';
        } else {
            echo 'error';
        }
    } else {
        echo "spam";
    }
?>
