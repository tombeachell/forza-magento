<?php
namespace Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Tab\General;

/**
 * Interceptor class for @see \Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Tab\General
 */
class Interceptor extends \Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Tab\General implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\File\Size $fileSize, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $objectManager, $fileSize, $data);
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
