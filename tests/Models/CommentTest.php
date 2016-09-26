<?php

use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CommentTest extends TestCase
{
    use DatabaseMigrations;

    private $withoutReplies;
    private $withReplies;

    public function setUp()
    {
        parent::setUp();

        $this->withoutReplies = factory(Comment::class, 5)->create();
        $this->withReplies = factory(Comment::class, 5)->create()->each(function ($c1) {
            $c2 = factory(Comment::class)->create();

            factory(Reply::class)->create([
                'id' => $c2->id,
                'to' => $c1->id
            ]);
        });
    }

    public function testFrom()
    {
        foreach ($this->withoutReplies as $withoutReply) {
            foreach ($withoutReply->from() as $from)
                $this->assertTrue($from instanceof App\Models\User);
        }
        foreach ($this->withReplies as $withReply) {
            foreach ($withReply->from() as $from)
                $this->assertTrue($from instanceof App\Models\User);
        }
    }

    public function testReplies()
    {

        foreach ($this->withoutReplies as $withoutReply) {
            foreach ($withoutReply->replies() as $replies)
                $this->assertEquals($replies->count(), 0);
        }
        foreach ($this->withReplies as $withReply) {
            foreach ($withReply->replies() as $replies)
                $this->assertNotEquals($replies->count(), 0);
        }

    }
}
