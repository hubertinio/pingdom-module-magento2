<?php

namespace Adrem\Pingdom\Block\Script;

use Adrem\Pingdom\Model\Config;
use Magento\Framework\View\Element\Context;

/**
 * Class Script
 */
class Rum extends \Magento\Framework\View\Element\Text
{
    /**
     * @var Config
     */
    private $config;

    /**
     * Rum constructor.
     * @param Config $config
     * @param Context $context
     */
    public function __construct(Config $config, Context $context, array $data = [])
    {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->setText($this->config->getSnippet());
    }
}
