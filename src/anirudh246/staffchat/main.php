  
<?php
namespace anirudh246/StaffChat
use _64FF00\PurePerms\PPGroup; 
use pocketmine/plugin/PluginBase;
use pocketmine/event/Listener;
use pocketmine/event/player/PlayerChatEvent;
use pocketmine/utils/TextFormat;
use pocketmine/command/Command;
use pocketmine/command/CommandSender;
  
class main extends PluginBase implements Listener
{
	public $chatMessage = array()
	public function onLoad(){
		
	}
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new BroadcastPluginTask($this), 120);
		
    	}
	
	public function onDisable(){
		
	}
	
  	public function staffMessage(){
  		if {($sender-> hasPermission("hgk.staffchat.send"))
      		
  		}
  		else{
	
		}
  	}
        
}
