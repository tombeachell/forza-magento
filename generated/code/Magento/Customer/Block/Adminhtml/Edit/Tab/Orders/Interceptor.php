<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\Orders;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\Orders
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\Orders implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Framework\View\Element\UiComponent\DataProvider\CollectionFactory $collectionFactory, \Magento\Sales\Helper\Reorder $salesReorder, \Magento\Framework\Registry $coreRegistry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $collectionFactory, $salesReorder, $coreRegistry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        if (!$pluginInfo) {
            return parent::getModuleName();
        } else {
            return $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo);
        }
    }
}
