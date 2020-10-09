<?php

namespace KRUNCHSHooT\PublicTime;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\level\Level;
use pocketmine\utils\TextFormat;

class Loader extends PluginBase implements Listener
{
	
	public function onEnable(){
		$this->getLogger()->info("PTime Version 1 BY KRUNCH7SHooT ENABLED");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		switch($cmd->getName()){
			case "ptime":
			if($sender instanceof Player){
				if($sender->hasPermission("ptime.cyl")){
					if(!isset($args)){
						$sender->sendMessage("§f[§6PTime§f] §ctype /ptime (1am or 1pm)!");
					}
					$a = array_shift($args);
					switch($a){
						case "1am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 1 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(19000);
						}
						break;
						case "2am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 2 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(20000);
						}
						break;
						case "3am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 3 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(21000);
						}
						break;
						case "4am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 4 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(22000);
						}
						break;
						case "5am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 5 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(23000);
						}
						break;
						case "6am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 6 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(24000);
						}
						break;
						case "7am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 7 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(1000);
						}
						break;
						case "8am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 8 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(2000);
						}
						break;
						case "9am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 9 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(3000);
						}
						break;
						case "10am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 10 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(4000);
						}
						break;
						case "11am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 11 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(5000);
						}
						break;
						case "12am":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 12 am");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(6000);
						}
						break;
						case "1pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 1 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(7000);
						}
						break;
						case "2pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 2 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(8000);
						}
						break;
						case "3pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 3 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(9000);
						}
						break;
						case "4pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 4 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(10000);
						}
						break;
						case "5pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 5 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(11000);
						}
						break;
						case "6pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 6 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(12000);
						}
						break;
						case "7pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 7 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(13000);
						}
						break;
						case "8pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 8 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(14000);
						}
						break;
						case "9pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 9 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(15000);
						}
						break;
						case "10pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 10 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(16000);
						}
						break;
						case "11pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 11 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(17000);
						}
						break;
						case "12pm":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To 12 pm");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(18000);
						}
						break;
						case "help":
						case "?":
						$sender->sendMessage(TextFormat::GOLD . "-------------------- \n" . TextFormat::WHITE . "===[" . TextFormat::GOLD . "PublicTime Help" . TextFormat::WHITE . "]===\n" . TextFormat::GOLD . "-------------------- ");
						$sender->sendMessage(TextFormat::GREEN . "help: /ptime help\nversion: /ptime version\n1 Am: /ptime 1am\n2 Am: /ptime2am\n3 Am: /ptime 3am\n4 Am: /ptime 4am\n5 Am: /ptime 5am\n6 Am: /ptime 6am\n7 Am: /ptime 7am\n8 Am: /ptime 8am\n9 Am: /ptime 9am\n10 Am: /ptime 10am\n11 Am: /ptime 11am\n12 Am: /ptime 12am\n1 Pm: /ptime 1pm\n2 Pm: /ptime 2pm\n3 Pm: /ptime 3pm\n4 Pm: /ptime 4pm\n5 Pm: /ptime 5pm\n6 Pm: /ptime 6pm\n7 Pm: /ptime 7pm\n8 Pm: /ptime 8pm\n9 Pm: /ptime 9pm\n10 Pm: /ptime 10pm\n11 Pm: /ptime 11pm\n12 Pm: /ptime 12pm");
						break;
						case "version":
						$t = $this->getDescription();
						$sender->sendMessage(TextFormat::GOLD . "-------------------- \n" . TextFormat::WHITE . "===[" . TextFormat::GOLD . "PublicTime Version" . TextFormat::WHITE . "]===\n" . TextFormat::GOLD . "-------------------- ");
						$sender->sendMessage("§aName: " . TextFormat::YELLOW . $t->getName() . "\n§aVersion: " . TextFormat::AQUA . $t->getVersion() . "\n" . TextFormat::GREEN . "author: §bKRUNCH7SHooT");
						break;
						case "day":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To Day");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(1000);
						}
						break;
						case "noon":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To Noon");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(6000);
						}
						break;
						case "sunset":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To Sunset");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(12000);
						}
						break;
						case "night":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To Night");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(13000);
						}
						break;
						case "midnight":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To Midnight");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(18000);
						}
						break;
						case "sunrise":
						$sender->sendMessage("§f[§6PTime§f] §aTime Set To Sunrise");
						foreach($sender->getServer()->getLevels() as $level){
							$level->setTime(23000);
						}
						break;
						default:
						$sender->sendMessage("§f[§6PTime§f] §cUnknown Command. type /ptime help!");
						return true;
					}
				} else {
					$sender->sendMessage("§f[§6PTime§f] §cYou don't Have Permission to use this Command!!!");
				}
			} else {
				$sender->sendMessage("use this command In-Game!");
			}
		}
		return true;
	}
}
