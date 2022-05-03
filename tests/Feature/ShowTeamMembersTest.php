<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowTeamMembersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_team_members_can_be_shown()
    {

        $contents = (string) $this->view('/teams/{id}/members');

    }
}
