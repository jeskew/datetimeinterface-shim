<?php

/**
 * A shim for PHP 5.5's DateTimeInterface
 *
 * @link http://php.net/manual/en/class.datetimeinterface.php
 */
interface DateTimeInterface
{
    /**
     * @param DateTimeInterface $datetime2
     * @param bool $absolute
     *
     * @return DateInterval
     */
    public function diff($datetime2, $absolute = false);

    /**
     * @param string $format
     * @return mixed
     */
    public function format($format);

    /**
     * @return int
     */
    public function getOffset();

    /**
     * @return int
     */
    public function getTimestamp();

    /**
     * @return DateTimeZone
     */
    public function getTimezone();

    /**
     * @return DateTime
     */
    public function __wakeup();
}