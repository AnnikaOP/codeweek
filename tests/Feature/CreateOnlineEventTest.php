<?php

namespace Tests\Feature;

use App\Event;
use App\Mail\EventCreated;
use Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateOnlineEventTest extends TestCase
{

    use DatabaseMigrations;



    /** @test */
    public function an_authenticated_user_can_create_online_event_without_location()
    {
        //$this->withoutExceptionHandling();
        $this->signIn();

        $event = make('App\Event');
        create('App\Audience',[] ,3);
        create('App\Theme', [],3);

        $event->theme = "1";
        $event->tags = "tag:foo,tag:bar";
        $event->audience = "2, 3";
        $event->privacy = true;
        $event->location = null;
        $event->activity_type = "open-online";
        $event->event_url = "http://lesoir.be";
        $event->geoposition = null;
        $event->language = "fi";

        $this->post('/events', $event->toArray());

        $event = Event::where('title', $event->title)->first();

        $this->assertEquals("online",$event->fresh()->location);
        $this->assertEquals("http://lesoir.be",$event->fresh()->event_url);
        $this->assertEquals("fi",$event->fresh()->language);
    }

    /** @test */
    public function an_authenticated_user_can_create_private_online_event_without_location()
    {
        //$this->withoutExceptionHandling();
        $this->seed('RolesAndPermissionsSeeder');
        $this->signIn();

        $event = make('App\Event');
        create('App\Audience',[] ,3);
        create('App\Theme', [],3);

        $event->theme = "1";
        $event->tags = "tag:foo,tag:bar";
        $event->audience = "2, 3";
        $event->privacy = true;
        $event->location = null;
        $event->activity_type = "invite-online";
        $event->event_url = "http://lesoir.be";
        $event->geoposition = null;
        $event->language = "fi";

        $this->post('/events', $event->toArray());

        $event = Event::where('title', $event->title)->first();

        $this->assertEquals("online",$event->fresh()->location);
        $this->assertEquals("http://lesoir.be",$event->fresh()->event_url);
        $this->assertEquals("fi",$event->fresh()->language);
    }

}


