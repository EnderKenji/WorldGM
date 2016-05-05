<?php
namespace EnderBoxie\WorldGM;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\level\Level;

class WorldGMListener implements Listener{

    public function __construct(WorldGM $plugin){
        $this->plugin = $plugin;
    }

    public function onLevelChange(EntityLevelChangeEvent $event){
        $p = $event->getEntity();
        $target = $event->getTarget();
        if($p instanceof Player){
            // To-Do
        }
    }

}
