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

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Core\Settings\DefaultSettings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        settings()->flush();

        $defaultSettings = array_merge(DefaultSettings::get(), ['_seeded' => true]);

        foreach ($defaultSettings as $name => $value) {
            settings()->set([$name => $value]);
        }

        settings()->save();
    }
}
