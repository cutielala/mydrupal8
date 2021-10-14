<?php
namespace Drupal\module_princess\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;


class PrincessInitSubscriber implements EventSubscriberInterface {
    public function _construct(){}

    public function onRequest($event) {
        var_dump("hello from our event - PrincessInitSubscriber"); 
      }
    public static function getSubscribedEvents() {
        
        $events[KernelEvents::REQUEST][]=['onRequest'];
        return $events;
      }
}