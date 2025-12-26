<?php

namespace App;

/**
 * Интерфейс для уведомлений.
 */
interface Notification
{
    /**
     * Отправляет уведомление с заданным сообщением.
     *
     * @param string $message Сообщение для отправки
     * @return string Результат отправки
     */
    public function send(string $message): string;

    /**
     * Получает статус уведомления.
     *
     * @return string Статус уведомления
     */
    public function getStatus(): string;

    /**
     * Получает тип уведомления.
     *
     * @return string Тип уведомления
     */
    public function getType(): string;
}