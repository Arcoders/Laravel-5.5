<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ProfileTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;

    /**
     * @test
     */
    public function update_user_profile()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)->put('profile', [
          'bio' => 'Programador de Laravel',
          'twitter' => 'Ismael',
          'github' => 'Ismael',
        ])->assertStatus(200);

        $this->assertDatabaseHas('profiles', [
          'user_id' => $user->id,
          'bio' => 'Programador de Laravel',
          'twitter' => 'Ismael',
          'github' => 'Ismael'
        ]);
    }

    public function test_twitter_account_validation()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)->put('profile', [
          'bio' => 'Programador de Laravel',
          'twitter' => '@[</script]',
          'github' => 'Ismael',
        ])->assertStatus(302)->assertSessionHasErrors(['twitter']);

        $this->assertDatabaseMissing('profiles', [
          'user_id' => $user->id
        ]);
    }

    public function bio_validation()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)->put('profile', [
          'bio' => 'Lorem ipsum',
          'twitter' => 'Ismael',
          'github' => 'Ismael',
        ])->assertStatus(302)->assertSessionHasErrors(['bio']);

        $this->assertDatabaseMissing('profiles', [
          'user_id' => $user->id
        ]);
    }

}
