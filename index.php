<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\EmailNotification;
use App\SMSNotification;

echo "=== Тестирование уведомлений ===\n";

$email = new EmailNotification();
$sms = new SMSNotification();

$message = "Привет, мир!";

echo "Email: " . $email->send($message) . "\n";
echo "Статус: " . $email->getStatus() . "\n";
echo "Тип: " . $email->getType() . "\n";
echo "Время отправки: " . date('Y-m-d H:i:s', $email->getTimestamp()) . "\n\n";

echo "SMS: " . $sms->send($message) . "\n";
echo "Статус: " . $sms->getStatus() . "\n";
echo "Тип: " . $sms->getType() . "\n";
echo "Время отправки: " . date('Y-m-d H:i:s', $sms->getTimestamp()) . "\n";