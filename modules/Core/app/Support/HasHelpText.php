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

namespace Modules\Core\Support;

trait HasHelpText
{
    /**
     * Help text
     */
    public ?string $helpText = null;

    /**
     * Set filter help text
     */
    public function help(?string $text): static
    {
        $this->helpText = $text;

        return $this;
    }
}
