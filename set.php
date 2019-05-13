<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '813149125:AAH2KhBRJj6c_vcOhw_V8AxyeIWDCHTctwE';
$bot_username = 'kutusbot';
$hook_url     = 'diksi.bali.cf/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    echo $e->getMessage();
}