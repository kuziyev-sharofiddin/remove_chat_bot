<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function webhook()
    {
        $updates = Telegram::getWebhookUpdates();
        $message = $updates->getMessage();

        if ($message && ($message->newChatMembers || $message->leftChatMember)) {
            Telegram::deleteMessage([
                'chat_id' => $message->chat->id,
                'message_id' => $message->messageId,
            ]);
        }

        return response('ok', 200);
    }
}
