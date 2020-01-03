<?php

namespace Tbb\Repeater\Model\ResourceModel\DynamicRows;



use  Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;



class Collection extends AbstractCollection

{

    protected $_idFieldName = 'row_id';



    protected function _construct()

    {

        $this->_init(

            'Tbb\Repeater\Model\DynamicRows',

            'Tbb\Repeater\Model\ResourceModel\DynamicRows'

        );

    }

}