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

namespace Modules\Notes\Listeners;

use Modules\Notes\Models\Note;
use Modules\Users\Events\TransferringUserData;

class TransferNotesUserData
{
    /**
     * Handle the event.
     */
    public function handle(TransferringUserData $event): void
    {
        Note::where('user_id', $event->fromUserId)->update(['user_id' => $event->toUserId]);
    }
}
