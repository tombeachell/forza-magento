<?php
namespace Magento\Newsletter\Block\Adminhtml\Queue\Edit\Form;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Queue\Edit\Form
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Queue\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Newsletter\Model\QueueFactory $queueFactory, \Magento\Store\Model\System\Store $systemStore, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $queueFactory, $systemStore, $wysiwygConfig, $data);
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
