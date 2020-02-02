<?php

namespace SSD\Currency\Currencies;

class GBP extends BaseCurrency
{
    /**
     * @var string
     */
    protected $prefix = '£';

    /**
     * @var string
     */
    protected $postfix = 'GBP';

    /**
     * @var int
     */
    public $numeric_iso_code = 826;
}