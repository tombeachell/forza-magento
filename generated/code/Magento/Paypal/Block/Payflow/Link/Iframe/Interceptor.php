<?php
namespace Magento\Paypal\Block\Payflow\Link\Iframe;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Payflow\Link\Iframe
 */
class Interceptor extends \Magento\Paypal\Block\Payflow\Link\Iframe implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Paypal\Helper\Hss $hssHelper, \Magento\Framework\Filesystem\Directory\ReadFactory $readFactory, \Magento\Framework\Module\Dir\Reader $reader, \Magento\Payment\Helper\Data $paymentData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $orderFactory, $checkoutSession, $hssHelper, $readFactory, $reader, $paymentData, $data);
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
