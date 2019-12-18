<?php

declare(strict_types=1);

namespace Dev\ProductComments\Block;

use Magento\Catalog\Model\Product;

//--------------------
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Dev\ProductComments\Model\Config;

/**
 * Class CustomTab
 * @package Dev\ProductComments\Block
 */
class CustomTab extends \Magento\Framework\View\Element\Template{

//--------------------
    /**
     * @var Config
     */
    public $jafar;

    /**
     * @var Product
     */
    protected $_product = null;

    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     */
    protected $productRepository;

    /**
     * @var \Magento\Framework\Api\DataObjectHelper $dataObjectHelper
     */
    protected $dataObjectHelper;


    /**
     * @var \Magento\Catalog\Model\ProductFactory
     */
    protected $_productFactory;


    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     * @param \Magento\Framework\Api\DataObjectHelper $dataObjectHelper
     * @param \Magento\Catalog\Model\ProductFactory $productFactory
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */

    public function __construct(

//--------------------
        Config $aliConfig,
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Api\DataObjectHelper $dataObjectHelper,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {

//--------------------
//        parent::__construct($context);

//--------------------

        $this->jafar = $aliConfig;

        $this->_coreRegistry = $registry;


        $this->productRepository = $productRepository;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->_productFactory = $productFactory;
        parent::__construct($context, $data);


    }

    /**
     * @return Product
     */

    public function getProduct()
    {

        if (!$this->_product) {
            $this->_product = $this->_coreRegistry->registry('product');

        }
        return $this->_product;
    }


}

