<?php
$instance['cite'] = array_merge($instance['cite'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'defaultconfigs',
        'local',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'options.txt',
        'optionsshaders.txt',
        'usercache.json',
        'usernamecache.json'
    ),
    "whitelist" => array(
        'TonPsedoMC'
    ),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "cite",
        "logo" => "URL LOL.png",
        "ip" => "Ton IP Serveur sans le port",
        "port" => 25567
    ),
));
?>