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

namespace Modules\WebForms\Enums;

enum WebFormSection: string
{
    case FILE = 'file-section';
    case FIELD = 'field-section';
    case SUBMIT = 'submit-button-section';
    case MESSAGE = 'message-section';
    case INTRODUCTION = 'introduction-section';
}
