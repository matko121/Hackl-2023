<?php
/**
 * @copyright © TMS-Plugins. All rights reserved.
 * @licence   See LICENCE.md for license details.
 */

namespace AmeliaBooking\Domain\Services\Payment;

use AmeliaBooking\Domain\Services\Settings\SettingsService;
use AmeliaBooking\Infrastructure\Services\Payment\CurrencyService;

/**
 * Class AbstractPaymentService
 *
 * @package AmeliaBooking\Domain\Services\Payment
 */
class AbstractPaymentService
{
    /**
     * @var SettingsService $settingsService
     */
    protected $settingsService;

    /**
     * @var CurrencyService $currencyService
     */
    protected $currencyService;

    /**
     * AbstractPaymentService constructor.
     *
     * @param SettingsService $settingsService
     * @param CurrencyService $currencyService
     */
    public function __construct(
        SettingsService $settingsService,
        CurrencyService $currencyService
    ) {
        $this->settingsService = $settingsService;
        $this->currencyService = $currencyService;
    }
}
