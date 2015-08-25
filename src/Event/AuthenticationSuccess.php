<?php
namespace League\OAuth2\Server\Event;

use League\Event\AbstractEvent;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AuthenticationSuccess
 * @package League\OAuth2\Server\Event
 */
class AuthenticationSuccess extends AbstractEvent
{
    /**
     * Request
     *
     * @var \Symfony\Component\HttpFoundation\Request
     */
    private $request;

    /**
     * Init the event with a request
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * The name of the event
     *
     * @return string
     */
    public function getName()
    {
        return 'authenticated.auth.client';
    }

    /**
     * Return request
     *
     * @return \Symfony\Component\HttpFoundation\Request
     */
    public function getRequest()
    {
        return $this->request;
    }
}