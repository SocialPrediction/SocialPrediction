<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserMute;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    private $userCount;

    public function setup()
    {

        parent::setUp();
        $this->userCount = 0;
        $this->setUpBaseusers();
        $this->setUpMutedUsers();
    }


    private function setUpBaseusers()
    {
        $this->userCount += 10;
        factory(User::class, 10)->create();

        $this->userCount += 1;
        factory(User::class)->create([
            'name' => 'Abigail',
        ]);

        $this->userCount += 10;
        factory(User::class, 10)->create();
    }

    private function setUpMutedUsers()
    {
        $this->userCount += 10;
        factory(User::class, 10)->create()->each(function ($u) {

            $this->userCount++;
            $u2 = factory(User::class)->create();

            factory(UserMute::class)->create([
                'blocker' => $u->id,
                'blockee' => $u2->id
            ]);
        });
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test()
    {

        $this->assertTrue(User::find(11)->name == 'Abigail');
        $this->assertTrue(User::all()->count() == $this->userCount);
    }
}
