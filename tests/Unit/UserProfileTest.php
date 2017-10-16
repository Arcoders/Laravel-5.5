<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\UserProfile;

class UserProfileTest extends TestCase
{

  use DatabaseMigrations;

  /**
  * @test
  */

    function it_can_generate_twitter_urls()
    {
      $profile = factory(UserProfile::class)->create([
        'twitter' => 'ismael'
      ]);

      $this->assertSame('https://twitter.com/ismael', $profile->twitter_url);
    }

}
