<?php

declare(strict_types=1);

namespace Dev\ProductComments\Controller\Adminhtml\Item;

use Magento\Framework\Controller\ResultFactory;

/**
 * Class NewAction
 * @package Dev\ProductComments\Controller\Adminhtml\Item
 */
class NewAction extends \Magento\Backend\App\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
