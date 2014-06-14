<?php

/*
__PocketMine Plugin__
name=ChatGroup
description=A Chat Group System
version=1.0.0
author=MCSteampunk
class=ChatGroup
apiversion=11,12,13
*/

/*
xxxxxxxxxxx
ChangeLog
xxxxxxxxxxx

1.0.0
•Inital Start

xxxxxxxxxxx
*/

class ChatGroup implements plugin{

private $api;

public function __construct(ServerAPI $api, $server = false){
	$this->api = $api;
}

public function init() {
	$this->api->console->register("ChatGroup", "(command) [Params]", array($this, "commandHandler");
	$this->api->console->alias("CG", "ChatGroup");
	$this->api->console->alias("CGA", "ChatGroup Add");
	$this->api->console->alias("CGC", "ChatGroup Create");
	$this->api->console->alias("CGR", "ChatGroup Remove");
	$this->api->console->alias("CGD", "ChatGroup Delete");
	$this->config = new Config($this->api->plugin->configPath($this). "Config.yml", CONFIG_YAML array(
	"MessageAdd" => "You have Been added to a Chat Group"
	
	"MessageRemove" => "You have been removed from a current chat"
	
	));
	
	public function commandHandler($cmd, $params, $alias, $issuer) {
		output = "";
		
				if($cmd === "ChatGroup"){
						if(count($params) < 2
		$output =. "/$cmd <command> [params]\n";
		$output =. "/$cmd Add <username>: add username to your group chat.\n";
		$output =. "/$cmd Create <ChatName>: Creates a Chat Group with a name.\n";
		$output =. "/$cmd Remove <username>: Remove a username from Chat.\n";
		$output =. "/$cmd Delete <ChatName>: Deletes a Chat Group you made.\n";
						return $output;
						
	}
$subcmd = strtolower(array_shift($params));
switch ($subcmd) {
		case "Add": 
		
		$chat = $this->api->chat->sendTo(false, "You have added a player to your ChatGroup", "$player");
		if($chat instanceof chat){
		if($this->api->chat->sendTo)($chat) === true){
		$output .= "Player Added".\namespace
					break;
		}
}

		$output .= "Could not add player.\n"
								break;
					case "create": 
		if ($this->api->chat->sendTo(false, "You have created a ChatGroup", "$issuer") === false{
			$output .= "Error Creating ChatGroup,\n"
							}else {
			$output .= "Chat Created Succesfully.\n"
							}
							case "Remove": 
			if ($this->api->chat->sendTo(false, "You have Removed a player" "$issuer") === true{
				$output .= "You have Removed a Player.\n"
			}else {
				$output .= "Error removing Player"
			}
					case "delete": 
					if ($this->api->chat->sendTo(false, "Chat Has been Deleted", "$issuer") === false{
						$output .= "Error deleting Chat"
					}else {
						$output .= "Chat has been Deleted"
					}
				}
			}
		}
		
			
		}
}

}
