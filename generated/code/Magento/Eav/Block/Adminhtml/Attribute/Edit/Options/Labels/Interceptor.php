<?php
namespace Magento\Eav\Block\Adminhtml\Attribute\Edit\Options\Labels;

/**
 * Interceptor class for @see \Magento\Eav\Block\Adminhtml\Attribute\Edit\Options\Labels
 */
class Interceptor extends \Magento\Eav\Block\Adminhtml\Attribute\Edit\Options\Labels implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $data);
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
