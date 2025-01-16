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

namespace Modules\Core\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Core\Models\Role;
use Modules\Core\Rules\StringRule;
use Modules\Core\Rules\UniqueRule;

class RoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required', StringRule::make(), UniqueRule::make(Role::class, 'role'),
            ],
        ];
    }
}
