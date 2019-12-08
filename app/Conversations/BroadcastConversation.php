<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Conversations\BroadcastConversation;
use App\User;
use App\LearningSchedule;
use App\LearningUser;

class BroadcastConversation extends Conversation
{
    /**
     * First question
     */
    var $class_schedule;
    var $decision;

    public function __construct($schedule, $decision)
    {
        $this->class_schedule = $schedule;
        $this->decision = $decision;
    }

    public function broadcastRemind()
    {
        $this->say('Selamat Siang, saya ingin menginformasikan bahwa nanti pukul '.$this->class_schedule->schedule_time. ' - '.$this->class_schedule->schedule_time_end.' di ruangan '.$this->class_schedule->class_room.' jadwal '.$this->class_schedule->subject. ' '.$this->decision);
    }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->broadcastRemind();
    }
}
