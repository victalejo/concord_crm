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

namespace Modules\Documents\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\Documents\Enums\DocumentStatus;

/** @mixin \Modules\Core\Models\Model */
trait HasDocuments
{
    /**
     * Get all of the associated documents for the contact.
     */
    public function documents(): MorphToMany
    {
        return $this->morphToMany(\Modules\Documents\Models\Document::class, 'documentable');
    }

    /**
     * Get the draft documents the user is authorized to see
     */
    public function draftDocuments(): MorphToMany
    {
        return $this->documents()->where('status', DocumentStatus::DRAFT);
    }
}
