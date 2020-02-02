<?php

namespace SSD\Currency\Currencies;

class EUR extends BaseCurrency
{
    /**
     * @var string
     */
    protected $prefix = '€';

    /**
     * @var string
     */
    protected $postfix = 'EUR';

    /**
     * @var int
     */
    public $numeric_iso_code = 978;
}