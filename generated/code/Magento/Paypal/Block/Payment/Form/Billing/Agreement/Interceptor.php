<?php
namespace Magento\Paypal\Block\Payment\Form\Billing\Agreement;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Payment\Form\Billing\Agreement
 */
class Interceptor extends \Magento\Paypal\Block\Payment\Form\Billing\Agreement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Paypal\Model\Billing\AgreementFactory $agreementFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $agreementFactory, $data);
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
