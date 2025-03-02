<?php
/**
 * Concord CRM - https://www.concordcrm.com
 *
 * @version   1.5.1
 *
 * @link      Releases - https://www.concordcrm.com/releases
 * @link      Terms Of Service - https://www.concordcrm.com/terms
 *
 * @copyright Copyright (c) 2022-2024 KONKORD DIGITAL
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Twilio configuration
    |--------------------------------------------------------------------------
    */
    'applicationSid' => env('TWILIO_APP_SID'),
    'accountSid' => env('TWILIO_ACCOUNT_SID'),
    'authToken' => env('TWILIO_AUTH_TOKEN'),
    'number' => env('TWILIO_NUMBER'),
];
