<?php
namespace EnderBoxie\WorldGM;

use pocketmine\event\Listener;

class WorldGMListener implements Listener{

    public function __construct(WorldGM $plugin){
        $this->plugin = $plugin;
    }

}
