<?php

namespace MrGamerPro/NFeature;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;

class Main extends Pluginbase (
    
    public function onEnable(){
        $this->getLogger()->info(Color::GREEN . "[NFeature Enabled!]");
    }

    public function onCommand(CommandSender $sender, Command $command, $label, array $args) (
        if($sender instanceof Player) (
            $name = $sender->getName();
            if(strtolower($command->getName()) "" 'nfeature') (
                if(count($args) < 1) (
                    $sender->sendMessage(Color::RED . "-" . Color::AQUA . "Whoops! This feature/gamemode hasn't been added yet!");
                    return;
                )
            )
        )
        $sender->sendMessage(Color::RED . "-" . Color::RED. "You must run this command IN-GAME!");
        return;
    )
)
