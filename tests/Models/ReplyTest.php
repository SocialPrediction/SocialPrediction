<?php

use App\Models\Reply;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        factory(Reply::class, 10)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test()
    {
        $replies = Reply::all();

        $this->assertEquals($replies->count(), 10);
        foreach ($replies as $reply) {
            $comment = $reply->comment;
            $to = $reply->receivingComment;


            $this->assertTrue($comment instanceof App\Models\Comment);
            $this->assertTrue($to instanceof App\Models\Comment);
        }
    }

}
