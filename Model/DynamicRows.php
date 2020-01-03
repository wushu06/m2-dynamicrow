<?php

namespace Tbb\Repeater\Model;



use Magento\Framework\Model\AbstractModel;
use Tbb\Repeater\Api\Data\DynamicRowsInterface;
use Magento\Framework\Model\AbstractExtensibleModel;


class DynamicRows extends AbstractExtensibleModel implements DynamicRowsInterface, \Magento\Framework\DataObject\IdentityInterface

{

    const CACHE_TAG = 'bss_dynamic_rows';



    protected $_cacheTag = 'bss_dynamic_rows';



    protected $_eventPrefix = 'bss_dynamic_rows';



    protected function _construct()

    {

        $this->_init('Tbb\Repeater\Model\ResourceModel\DynamicRows');

    }
    public function getIdentities()
    {
        return [ self::CACHE_TAG];
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getData('row_name');
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getData('row_id');
    }





}