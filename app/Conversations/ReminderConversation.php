<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Conversations\BroadcastConversation;
use BotMan\BotMan\BotMan;
use BotMan\Drivers\Telegram\TelegramDriver;
use App\User;
use App\LearningSchedule;
use App\LearningUser;

class ReminderConversation extends Conversation
{
    /**
     * First question
     */
    var $class_schedule;

    public function __construct($schedule)
    {
        $this->class_schedule = $schedule;
    }

    public function remindSchedule()
    {
        $this->ask('Selamat Siang, nanti pukul '.$this->class_schedule->schedule_time. ' - '.$this->class_schedule->schedule_time_end.' di ruangan '.$this->class_schedule->class_room.' ada jadwal untuk mengajar '.$this->class_schedule->subject.'. Apakah Anda akan mengajar nanti? (Ya/Tidak) :', function(Answer $answer) {
            $this->say('Baik, saya akan informasikan kepada mahasiswa');
            // $botman = app('botman');
            if($answer->getText() == 'Ya'){
                foreach ($this->class_schedule->learning_users as $user) {
                    $this->bot->startConversation(new BroadcastConversation($this->class_schedule, 'berjalan seperti biasa'), $user->user->telegram_id, TelegramDriver::class);
                };
            }elseif($answer->getText() == 'Tidak'){
                foreach ($this->class_schedule->learning_users as $user) {
                    $this->bot->startConversation(new BroadcastConversation($this->class_schedule, 'ditiadakan'), $user->user->telegram_id, TelegramDriver::class);
                };
            }
        });
    }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->remindSchedule();
    }
}
