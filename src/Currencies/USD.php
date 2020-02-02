<?php

namespace SSD\Currency\Currencies;

class USD extends BaseCurrency
{
    /**
     * @var string
     */
    protected $prefix = '$';

    /**
     * @var string
     */
    protected $postfix = 'USD';

    /**
     * @var int
     */
    public $numeric_iso_code = 840;
}