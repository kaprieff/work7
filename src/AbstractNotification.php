<?php

namespace App;

/**
 * Абстрактный класс для уведомлений.
 */
abstract class AbstractNotification implements Notification
{
    /**
     * Статус уведомления.
     *
     * @var string
     */
    protected string $status = 'pending';

    /**
     * Время отправки уведомления.
     *
     * @var int
     */
    protected int $timestamp = 0;

    /**
     * Получает статус уведомления.
     *
     * @return string Статус уведомления
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Устанавливает статус уведомления.
     *
     * @param string $status Новый статус
     */
    protected function setStatus(string $status): void
    {
        $this->status = $status;
        $this->timestamp = time();
    }

    /**
     * Получает время отправки уведомления.
     *
     * @return int Время отправки
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * Отправляет уведомление с заданным сообщением.
     *
     * @param string $message Сообщение для отправки
     * @return string Результат отправки
     */
    abstract public function send(string $message): string;

    /**
     * Получает тип уведомления.
     *
     * @return string Тип уведомления
     */
    abstract public function getType(): string;
}