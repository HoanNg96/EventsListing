<?php

namespace AHT\EventsListing\Plugin;

class ListDispatchedEvents
{
    public function beforeDispatch($subject, $eventName, array $data = [])
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/magento-event.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info($eventName);
    }
}
