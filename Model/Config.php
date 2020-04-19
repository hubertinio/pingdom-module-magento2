<?php

namespace Adrem\Pingdom\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const PINGDOM_RUM_ENABLED = 'pingdom/rum/enabled';
    const PINGDOM_RUM_SNIPPET = 'pingdom/rum/snippet';

    /** @var ScopeConfigInterface */
    protected $configReader;

    public function __construct(ScopeConfigInterface $configReader)
    {
        $this->configReader = $configReader;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->configReader->isSetFlag(self::PINGDOM_RUM_ENABLED);
    }

    /**
     * @return string|null
     */
    public function getSnippet(): ?string
    {
        return $this->configReader->getValue(self::PINGDOM_RUM_SNIPPET);
    }
}
