<?php

namespace sr\etc\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class user_listener implements EventSubscriberInterface
{
    static public function getSubscribedEvents()
    {
        return array(
            'core.user_setup_after' => 'handle_user_setup',
        );
    }

    public function __construct(\phpbb\user $user)
    {
        $this->user = $user;
    }

    public function handle_user_setup($event)
    {
        $this->user->add_lang_ext('sr/etc', 'common');
    }
}
