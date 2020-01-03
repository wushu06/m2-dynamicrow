<?php

namespace Tbb\Repeater\Block\Adminhtml\DynamicRows\Edit;



use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

use Magento\CatalogRule\Block\Adminhtml\Edit\GenericButton;

class SaveButton extends GenericButton implements ButtonProviderInterface

{

    public function getButtonData()

    {

        $url = $this->getUrl('bss/row/save');

        return [

            'label' => __('Save Rows'),

            'class' => 'save primary',

            'on_click' => "setLocation('". $url ."'')",

            'sort_order' => 90,

        ];

    }

}