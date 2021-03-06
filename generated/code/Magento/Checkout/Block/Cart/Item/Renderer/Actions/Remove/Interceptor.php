<?php
namespace Magento\Checkout\Block\Cart\Item\Renderer\Actions\Remove;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\Item\Renderer\Actions\Remove
 */
class Interceptor extends \Magento\Checkout\Block\Cart\Item\Renderer\Actions\Remove implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Helper\Cart $cartHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $cartHelper, $data);
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
