<?php

declare(strict_types=1);

namespace PoP\PostTagsWP;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    use YAMLServicesTrait;
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\PostTags\Component::class,
            \PoP\TagsWP\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        return [
            'migrate-post-tags-wp',
        ];
    }

    /**
     * Initialize services
     */
    protected static function doInitialize(
        array $configuration = [],
        bool $skipSchema = false,
        array $skipSchemaComponentClasses = []
    ): void {
        parent::doInitialize($configuration, $skipSchema, $skipSchemaComponentClasses);
        self::initYAMLServices(dirname(__DIR__));
    }
}
