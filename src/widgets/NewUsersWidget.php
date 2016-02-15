<?php
namespace Craft;

/**
 * Class NewUsersWidget
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://craftcms.com/license Craft License Agreement
 * @see       http://craftcms.com
 * @package   craft.app.widgets
 * @since     1.0
 */
class NewUsersWidget extends BaseWidget
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritDoc IComponentType::getName()
     *
     * @return string
     */
    public function getName()
    {
        return Craft::t('New Users');
    }

    /**
     * @inheritDoc IWidget::getBodyHtml()
     *
     * @return string|false
     */
    public function getBodyHtml()
    {
        $settings = $this->getSettings();

        $groupId = $settings->userGroupId;
        $userGroup = craft()->userGroups->getGroupById($groupId);

        $options = $settings->getAttributes();
        $options['orientation'] = craft()->locale->getOrientation();

        craft()->templates->includeJsResource('js/NewUsersWidget.js');
        craft()->templates->includeJs('new Craft.NewUsersWidget('.$this->model->id.', '.JsonHelper::encode($options).');');


        return craft()->templates->render('_components/widgets/NewUsers/body', array(
            'userGroup' => $userGroup
        ));
    }

    /**
     * @inheritDoc ISavableComponentType::getSettingsHtml()
     *
     * @return string
     */
    public function getSettingsHtml()
    {
        return craft()->templates->render('_components/widgets/NewUsers/settings', array(
            'settings' => $this->getSettings()
        ));
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritDoc BaseSavableComponentType::defineSettings()
     *
     * @return array
     */
    protected function defineSettings()
    {
        return array(
            'userGroupId'   => AttributeType::Number,
            'dateRange'   => AttributeType::String,
        );
    }
}
