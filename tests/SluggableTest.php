<?php

namespace Designbycode\Sluggable\Tests;

use App\Models\Post;

class SluggableTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function can_create_slug()
    {
        $post = Post::create(['title' => 'Hello World']);
        $this->assertEquals($post->slug, 'hello-world');
    }

    /** @test */
    public function get_slug_field()
    {
        $post = Post::create(['title' => 'Hello World']);
        $this->assertEquals('title', $post->slugFrom());
    }
}
