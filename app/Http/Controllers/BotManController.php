<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Conversations\ReminderConversation;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Telegram\TelegramDriver;
use App\User;
use App\LearningSchedule;
use App\LearningUser;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('Hi', function ($bot) {
            $bot->reply('Hello!');
        });

        $botman->hears('Get ID', function ($bot) {
            $user = $bot->getUser();
            $id = $user->getId();
            $bot->reply($id);
        });

        $botman->hears('Start conversation', BotManController::class.'@startConversation');

        $botman->hears('/start', BotManController::class.'@startConversation');

        $botman->listen();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }

    public function sendNotif()
    {
        // echo date('l');
        $botman = app('botman');

        $users = User::with('learning_schedules.learning_users.user')->where('role_id', 1)->get();
        foreach ($users as $user) {
            foreach ($user->learning_schedules as $schedule) {
                if($schedule->schedule_day == strtolower(date('l')))
                    $botman->startConversation(new ReminderConversation($schedule), $user->telegram_id, TelegramDriver::class);
            }
        }

        echo "Sending Notif...";
    }
}
