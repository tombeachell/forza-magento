<?php
namespace Magento\Sales\Block\Adminhtml\Order\View\Tab\Transactions;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\View\Tab\Transactions
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\View\Tab\Transactions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\AuthorizationInterface $authorization, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $authorization, $registry, $data);
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
