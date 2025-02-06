<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    $to = "your-email@example.com";
    $subject = "Новое бронирование";
    $message = "Имя: $name\nТелефон: $phone\nДата: $date\nВремя: $time\nГостей: $guests";
    $headers = "From: booking@yourcafe.com";

    mail($to, $subject, $message, $headers);
    
    echo "Бронирование отправлено!";
}
?>
