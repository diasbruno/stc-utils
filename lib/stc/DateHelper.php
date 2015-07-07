<?php

namespace STC;

class DateIso
{
    /**
     * An ISO8601 format string for PHP's date functions that's compatible
     * with JavaScript's Date's constructor method
     * Example: 2013-04-12T16:40:00-04:00
     *
     * PHP's ISO8601 constant doesn't add the colon to the timezone offset
     * which is required for iPhone
     *
     * awesome!! thanks to the author.
     * Source: http://php.net/manual/en/class.datetime.php
     */
    const ISO8601 = 'Y-m-d\TH:i:sP';
}
