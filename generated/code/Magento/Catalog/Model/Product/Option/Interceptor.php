<?php
namespace Magento\Catalog\Model\Product\Option;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Option
 */
class Interceptor extends \Magento\Catalog\Model\Product\Option implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Catalog\Model\Product\Option\Value $productOptionValue, \Magento\Catalog\Model\Product\Option\Type\Factory $optionFactory, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Model\Product\Option\Validator\Pool $validatorPool, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $productOptionValue, $optionFactory, $string, $validatorPool, $resource, $resourceCollection, $data);
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
