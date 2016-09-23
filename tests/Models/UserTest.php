<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\UserMute;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    private $userCount;
    private $blockers;
    private $blockees;

    public function setup()
    {

        parent::setUp();
        $this->userCount = 0;
        $this->blockees = new Collection();
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
        $this->blockers = factory(User::class, 10)->create()->each(function ($u) {

            $this->userCount++;
            $u2 = factory(User::class)->create();
            $this->blockees->push($u2);
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
        $this->baseTest();
        $this->mutedUsersTest();
    }

    private function baseTest()
    {
        $this->assertTrue(User::find(11)->name == 'Abigail');
        $this->assertTrue(User::all()->count() == $this->userCount);
    }

    private function mutedUsersTest()
    {
        $this->assertTrue(UserMute::all()->count() == 10);


        //See if
        foreach ($this->blockers as $blocker) {
            foreach ($blocker->mutedUsers() as $muted) {
                $this->assertTrue($muted instanceOf App\Models\User);
            }
        }

        foreach ($this->blockees as $blockee) {
            foreach ($blockee->mutedBy() as $muted) {
                $this->assertTrue($muted instanceOf App\Models\User);
            }
        }
    }
}
