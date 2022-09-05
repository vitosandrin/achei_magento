<?php

namespace AcheiPneus\NewsletterModal\Controller\Modal;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use AcheiPneus\NewsletterModal\Helper\Data;
use AcheiPneus\NewsletterModal\Model\Modal;
use Magento\Framework\App\Request\Http;

/**
 * Apos implementar o controller, rodar no termianl: "
 * php bin/magento cache:flush e depois php bin/magento setup:compile
 */
class Index extends Action
{
    protected $_helper;
    protected $_modalModel;
    protected $_request;

    public function __construct(
        Context $context,
        Modal $modalModel,
        Data $helper,
        Http $request

    ) {
        parent::__construct($context);
        $this->_modalModel = $modalModel;
        $this->_request = $request;
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
        $email = $this->_request->getPostValue('email');
        if($email){
            $this->_modalModel->addEmailNewsletter($email);
        }
        
        //teste
        var_dump($this->_helper->getModalDescription());
    }
}
