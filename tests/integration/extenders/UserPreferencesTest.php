<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

namespace Flarum\Tests\integration\extenders;

use Flarum\Extend\User as Extender;
use Flarum\Tests\integration\RetrievesAuthorizedUsers;
use Flarum\Tests\integration\TestCase;
use Flarum\User\User;
use Illuminate\Support\Arr;

class UserPreferencesTest extends TestCase
{
    use RetrievesAuthorizedUsers;

    public function setUp()
    {
        parent::setUp();

        $this->prepareDatabase([
            'users'            => [
                $this->normalUser()
            ]
        ]);
    }

    private function add_preference()
    {
        $this->extend(
            (new Extender())
                ->addPreference('test', 'boolval', false)
        );
    }

    /**
     * @test
     */
    public function can_add_user_preference()
    {
        $this->add_preference();

        /** @var User $user */
        $user = User::find(2);
        $this->assertEquals(false, Arr::get($user->preferences, 'test'));
    }

    /**
     * @test
     */
    public function can_store_user_preference()
    {
        $this->add_preference();

        /** @var User $user */
        $user = User::find(2);

        $user->setPreference('test', true);

        $this->assertEquals(true, $user->test);
    }
}