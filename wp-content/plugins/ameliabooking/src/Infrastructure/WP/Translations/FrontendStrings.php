<?php

namespace AmeliaBooking\Infrastructure\WP\Translations;

use AmeliaBooking\Domain\Services\Settings\SettingsService;
use AmeliaBooking\Infrastructure\WP\SettingsService\SettingsStorage;

/**
 * Class FrontendStrings
 *
 * @package AmeliaBooking\Infrastructure\WP\Translations
 *
 * @phpcs:disable
 */
class FrontendStrings
{
    /** @var array */
    private static $settings;

    /**
     * Set Settings
     *
     * @return array|mixed
     */
    public static function getLabelsFromSettings()
    {
        if (!self::$settings) {
            self::$settings = new SettingsService(new SettingsStorage());
        }

        if (self::$settings->getSetting('labels', 'enabled') === true) {
            $labels = self::$settings->getCategorySettings('labels');
            unset($labels['enabled']);

            return $labels;
        }

        return [];
    }

    /**
     * Return all strings for frontend
     *
     * @return array
     */
    public static function getAllStrings()
    {
        return array_merge(
            self::getCommonStrings(),
            self::getBookingStrings(),
            self::getBookableStrings(),
            self::getCatalogStrings(),
            self::getSearchStrings(),
            self::getLabelsFromSettings(),
            self::getEventStrings(),
            self::getCabinetStrings()
        );
    }

    /**
     * Returns the array for the bookable strings
     *
     * @return array
     */
    public static function getBookableStrings() {
        $labels = [
        ];

        return array_merge($labels, LiteFrontendStrings::getBookableStrings());
    }

    /**
     * Returns the array of the common frontend strings
     *
     * @return array
     */
    public static function getCommonStrings()
    {
        $labels = [
        ];

        return array_merge($labels, LiteFrontendStrings::getCommonStrings());
    }

    /**
     * Returns the array of the frontend strings for the search shortcode
     *
     * @return array
     */
    public static function getSearchStrings()
    {
        $labels = [
        ];

        return array_merge($labels, LiteFrontendStrings::getSearchStrings());
    }

    /**
     * Returns the array of the frontend strings for the booking shortcode
     *
     * @return array
     */
    public static function getBookingStrings()
    {
        $labels = [
        ];

        return array_merge($labels, LiteFrontendStrings::getBookingStrings());
    }

    /**
     * Returns the array of the frontend strings for the event shortcode
     *
     * @return array
     */
    public static function getEventStrings()
    {
        $labels = [
        ];

        return array_merge($labels, LiteFrontendStrings::getEventStrings());
    }

    /**
     * Returns the array of the frontend strings for the catalog shortcode
     *
     * @return array
     */
    public static function getCatalogStrings()
    {
        $labels = [
        ];

        return array_merge($labels, LiteFrontendStrings::getCatalogStrings());
    }

    /**
     * Returns the array of the frontend strings for the event shortcode
     *
     * @return array
     */
    public static function getCabinetStrings()
    {
        $labels = [
        ];

        return array_merge($labels, LiteFrontendStrings::getCabinetStrings());
    }
}
