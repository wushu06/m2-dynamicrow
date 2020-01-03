<?php

namespace Tbb\Repeater\Block;

use Tbb\Repeater\Model\ResourceModel\DynamicRows\CollectionFactory as RowCollectionFactory;
class Data extends \Magento\Framework\View\Element\Template
{
    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public $_storeManager;
    protected $connection;

    protected $_productCollectionFactory;

    protected $_customer;
    protected $_customerFactory;
    protected $row;
    protected $rowInterface;
    protected $rowFactory;



    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Tbb\Repeater\Model\ResourceModel\DynamicRows\Collection $rowCollection,
        RowCollectionFactory $rowCollectionFactory,
        \Tbb\Repeater\Api\Data\DynamicRowsInterface $rowInterface,
        \Magento\Framework\App\ResourceConnection $connection,

        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->row = $rowCollection;
        $this->rowInterface = $rowInterface;
        $this->rowFactory = $rowCollectionFactory;
        $this->_storeManager = $storeManager;
        $this->connection = $connection;
    }



    public function getCollection()
    {
        return $this->rowFactory->create();
    }

    public function getTitle()
    {
        return $this->getCollection()->getData();
    }

    public function getCollectionById($id)
    {
        return $this->getCollection()
            ->addFieldToSelect('*')
            ->addFieldToFilter('row_id', $id)
            ->getLastItem();

    }



}