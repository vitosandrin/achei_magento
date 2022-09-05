<?php

namespace AcheiPneus\AppInventory\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Inventory extends Template
{
    public function __construct(
        Context
        $context,
        array $data = [])
    {
        parent::__construct($context, $data);
    }
}