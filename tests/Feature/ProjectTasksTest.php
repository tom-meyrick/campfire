<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Project;
use App\Models\Task;
use Tests\TestCase;

class ProjectTasksTest extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function a_project_can_have_tasks()
    {

        $this->signIn();

        $project = Project::factory()->create(['owner_id' => auth()->id()]);

        $this->post($project->path() . '/tasks', ['body' => 'Test task']); 

        $this->get($project->path())
            ->assertSee('Test task');
    }

      /** @test */
      public function a_task_requires_a_body()
      {
        $this->signIn();
        $project = Project::factory()->create(['owner_id' => auth()->id()]);
        $attributes = Task::factory()->raw(['body' => '']);
        $this->post($project->path() . '/tasks', $attributes)
             ->assertSessionHasErrors('body');
      }

     /** @test */
     public function only_the_owner_of_a_project_can_add_tasks()
     {
        $this->signIn(); 
        $project = Project::factory()->create();
        $this->post($project->path() . '/tasks', ['body' => 'Test task'])
             ->assertStatus(403);

        $this->assertDatabaseMissing('tasks', ['body' => 'Test task']);
     }

}
