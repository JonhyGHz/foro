<?php

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create(
          [
            'name' => 'Jonathan Zarate',
            'email' => 'admin@programacionjje.com',
          ]
        );

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Jonathan Zarate')
             ->see('admin@programacionjje.com');
    }
}
