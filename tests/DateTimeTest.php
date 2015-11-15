<?php
namespace DateTimeCompat;

class DateTimeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dateTimeProvider
     *
     * @param DateTime $dt
     */
    public function testCreatesInstancesOfDateTimeInterface(DateTime $dt)
    {
        $this->assertInstanceOf('DateTimeInterface', $dt);
    }

    public function dateTimeProvider()
    {
        $dateTime = new DateTime;
        return array(
            array($dateTime),
            array(DateTime::createFromFormat('U', (string) time())),
            array($dateTime->add(new \DateInterval('P1D'))),
            array($dateTime->sub(new \DateInterval('P1D'))),
            array($dateTime->setDate(2015, 11, 15)),
            array($dateTime->setISODate(2015, 51)),
            array($dateTime->setTime(12, 15)),
            array($dateTime->setTimestamp(time() - 300)),
            array($dateTime->setTimezone(new \DateTimeZone('America/Los_Angeles'))),
        );
    }
}
