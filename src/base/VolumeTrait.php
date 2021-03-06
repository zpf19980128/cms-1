<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\base;

/**
 * VolumeTrait
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 3.0.0
 */
trait VolumeTrait
{
    /**
     * @var string|null Name
     */
    public $name;

    /**
     * @var string|null Handle
     */
    public $handle;

    /**
     * @var bool|null Whether the volume has a public URL
     */
    public $hasUrls;

    /**
     * @var string|null The volume’s URL
     */
    public $url;

    /**
     * @var string Title translation method
     * @since 3.6.0
     */
    public $titleTranslationMethod = Field::TRANSLATION_METHOD_SITE;

    /**
     * @var string|null Title translation key format
     * @since 3.6.0
     */
    public $titleTranslationKeyFormat;

    /**
     * @var int|null Sort order
     */
    public $sortOrder;

    /**
     * @var int|null Field layout ID
     */
    public $fieldLayoutId;

    /**
     * @var string|null UID
     */
    public $uid;
}
