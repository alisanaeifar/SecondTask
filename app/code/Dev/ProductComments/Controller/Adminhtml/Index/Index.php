<?php

declare(strict_types=1);

namespace Dev\ProductComments\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * @package Dev\ProductComments\Controller\Adminhtml\Index
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);

//        /** @var \Magento\Framework\Controller\Result\Raw $result */
//        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
//        $result->setContents('Hello Admins!');
//        return $result;

    }
}

