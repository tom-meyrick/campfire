<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase; 

   /** @test */
    public function has_projects()
    {
        $user = User::factory()->create(); 
        $this->assertInstanceOf(Collection::class, $user->projects);
    }
}
