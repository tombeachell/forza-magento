<?php
namespace Magento\Sales\Model\Order\Pdf\Items\Invoice\DefaultInvoice;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Pdf\Items\Invoice\DefaultInvoice
 */
class Interceptor extends \Magento\Sales\Model\Order\Pdf\Items\Invoice\DefaultInvoice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Tax\Helper\Data $taxData, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filter\FilterManager $filterManager, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $taxData, $filesystem, $filterManager, $string, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
