<?php
namespace Magento\Integration\Block\Adminhtml\Integration\Edit\Tabs;

/**
 * Interceptor class for @see \Magento\Integration\Block\Adminhtml\Integration\Edit\Tabs
 */
class Interceptor extends \Magento\Integration\Block\Adminhtml\Integration\Edit\Tabs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Backend\Model\Auth\Session $authSession, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $authSession, $data);
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
