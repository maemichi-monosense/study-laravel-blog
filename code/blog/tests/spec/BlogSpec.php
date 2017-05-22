<?php

namespace spec\App;

use App\Blog;

use PhpSpec\Laravel\LaravelObjectBehavior;

class BlogSpec extends LaravelObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Blog::class);
    }
}
