<?php
namespace Magento\Sales\Block\Order\PrintShipment;

/**
 * Interceptor class for @see \Magento\Sales\Block\Order\PrintShipment
 */
class Interceptor extends \Magento\Sales\Block\Order\PrintShipment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Sales\Model\Order\Address\Renderer $addressRenderer, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $paymentHelper, $addressRenderer, $data);
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
