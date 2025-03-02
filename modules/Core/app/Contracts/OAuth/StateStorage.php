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

namespace Modules\Core\Contracts\OAuth;

interface StateStorage
{
    /**
     * Get state from storage.
     */
    public function get(): ?string;

    /**
     * Put state in storage.
     *
     * @param  string  $value
     */
    public function put($value): void;

    /**
     * Check whether there is stored state.
     */
    public function has(): bool;

    /**
     * Forget the remembered state from storage.
     */
    public function forget(): void;
}
