<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\User;

class ExampleConversation extends Conversation
{
    /**
     * First question
     */

    public function sayHello()
    {
        $this->say('Helloo, selamat datang di layanan Learning Bot Reminder Asistant');
        $this->askToken();
    }

    public function askToken()
    {
        $this->ask('Silakan inputkan token Anda :', function(Answer $answer) {
            $user = User::where('bot_token', $answer->getText())->first();
            if(!empty($user))
            {
                $telegram_id = $this->bot->getUser()->getId();
                User::where('bot_token', $answer->getText())->update(['telegram_id' => $telegram_id]);
                if($user->role_id == 1)
                    $this->say('Terima kasih, selamat datang '.$user->name. ' . Saya DeBoRA (Dosen Bot Reminder Asistant), Saya akan memberitahu anda jika ada jadwal mengajar');
                else
                    $this->say('Terima kasih, selamat datang '.$user->name. ' . Saya SoBAT (Studnet Bot Broadcast Asistant), Saya akan memberitahu anda saat ada jadwal kuliah');
            }else{
                $this->say('Mohon maaf user tidak ditemukan');
                $this->askToken();
            }
        });
    }

    // public function askToken()
    // {
    //     $question = Question::create("Huh - you woke me up. What do you need?")
    //         ->fallback('Unable to ask question')
    //         ->callbackId('ask_reason')
    //         ->addButtons([
    //             Button::create('Tell a joke')->value('joke'),
    //             Button::create('Give me a fancy quote')->value('quote'),
    //         ]);

    //     return $this->ask($question, function (Answer $answer) {
    //         if ($answer->isInteractiveMessageReply()) {
    //             if ($answer->getValue() === 'joke') {
    //                 $joke = json_decode(file_get_contents('http://api.icndb.com/jokes/random'));
    //                 $this->say($joke->value->joke);
    //             } else {
    //                 $this->say(Inspiring::quote());
    //             }
    //         }
    //     });
    // }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->sayHello();
    }
}
