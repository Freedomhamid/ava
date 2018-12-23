<?php
require 'vendor/autoload.php';
use Telegram\Bot\Api;
$telegram = new Api('753486535:AAELP6IaXhUVc4i5vqDa-_9QPo3mBU7FUIU');
$updates = $telegram->getUpdates();
foreach($updates as $update){
    $telegram->sendMessage([
        "chat_id" => $update->getMessage()->getChat()->getId(),
        "text" => "You Say : ".$update->getMessage()->getText()
    ]);
}