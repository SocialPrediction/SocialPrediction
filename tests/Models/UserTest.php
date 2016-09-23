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

    public function setup()
    {
        parent::setUp();
        $this->setUpBaseusers();
    }


    private function setUpBaseusers()
    {
        factory(User::class, 10)->create();
        factory(User::class)->create([
            'name' => 'Abigail',
        ]);
        factory(User::class, 10)->create();
    }



    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test()
    {

        $this->assertTrue(User::find(11)->name == 'Abigail');
        $this->assertTrue(User::all()->count() == 21);
    }
}
