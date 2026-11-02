<?php

namespace Symfony\Component\EventDispatcher;

/**
 * Compatibility interface for EventSubscriberInterface.
 * Omits the : array return type hint on getSubscribedEvents() so that both
 * Symfony 8 classes (with : array) and legacy Drupal 8 classes (without return type)
 * can implement it under PHP 8.4 without fatal inheritance errors.
 */
interface EventSubscriberInterface
{
    public static function getSubscribedEvents();
}

