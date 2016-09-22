<?php
use App\Models\User;
use App\Models\UserType;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class UserTypeTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        factory(UserType::class, 5)->create()->each(function ($t) {
            $t->users()->save(factory(User::class)->create(['user_type' => $t->id]));
        });

        $type = factory(UserType::class)->create(['name' => 'asd',]);

        for ($i = 0; $i < 5; $i++)
            factory(User::class)->create(['user_type' => $type->id]);
    }

    public function test()
    {
        $this->assertTrue(UserType::all()->count() == 6);
        $this->assertTrue(User::all()->count() == 10);
        $this->assertTrue(UserType::all()->where('name', 'asd')->first()->users()->count() == 5);
    }
}