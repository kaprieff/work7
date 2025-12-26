<?php

namespace App;

/**
 * Класс для отправки email-уведомлений.
 */
class EmailNotification extends AbstractNotification
{
    /**
     * Отправляет email-уведомление с заданным сообщением.
     *
     * @param string $message Сообщение для отправки
     * @return string Результат отправки
     */
    public function send(string $message): string
    {
        $result = "Email отправлен с таким содержимым: {$message}";
        $this->setStatus('sent');
        return $result;
    }

    /**
     * Получает тип уведомления.
     *
     * @return string Тип уведомления
     */
    public function getType(): string
    {
        return 'Email';
    }
}