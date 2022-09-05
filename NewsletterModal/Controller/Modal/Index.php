<?php

namespace AcheiPneus\NewsletterModal\Controller\Modal;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use AcheiPneus\NewsletterModal\Helper\Data;

/**
 * Apos implementar o controller, rodar no termianl: "
 * php bin/magento cache:flush e depois php bin/magento setup:compile
 */
class Index extends Action
{
    protected $_helper;

    public function __construct(
        Context $context,
        Data $helper
    )
    {
        parent::__construct($context);
        $this->_helper = $helper;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        var_dump($this->_helper->getModalDescription);
    }
}