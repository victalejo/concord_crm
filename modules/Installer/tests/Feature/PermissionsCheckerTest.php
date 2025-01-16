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

namespace Modules\Installer\Tests\Feature;

use Illuminate\Support\Facades\File;
use Modules\Installer\PermissionsChecker;
use Tests\TestCase;

class PermissionsCheckerTest extends TestCase
{
    private string $tempDir;

    protected function setUp(): void
    {
        parent::setUp();

        $this->tempDir = storage_path('framework/testing/temp_permissions_checker');

        File::makeDirectory($this->tempDir, 0755, true, true);
    }

    public function test_it_can_determine_correct_permissions(): void
    {
        $checker = new PermissionsChecker([
            'storage/framework/testing/temp_permissions_checker' => '0755',
        ]);

        $results = $checker->check();

        $this->assertFalse(isset($results['errors']));
        $this->assertNotEmpty($results['results']);
        $this->assertTrue($results['results'][0]['isSet']);
    }

    public function test_it_can_determine_incorrect_permissions(): void
    {
        $checker = new PermissionsChecker([
            'storage/framework/testing/temp_permissions_checker' => '0777',
        ]);

        $results = $checker->check();

        $this->assertTrue($results['errors']);
        $this->assertFalse($results['results'][0]['isSet']);
    }

    protected function tearDown(): void
    {
        File::deleteDirectory($this->tempDir);

        parent::tearDown();
    }
}
