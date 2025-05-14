<?php

namespace App\Console\Commands\Behavioral;

use App\Models\Behavioral\Mediator\ChatRoom;
use App\Models\Behavioral\Mediator\User;
use Illuminate\Console\Command;

class Mediator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:mediator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Example work mediator. Chat room.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $chatRoom = new ChatRoom();

        $userOvsi = new User('ovsi');
        $userQwerty = new User('qwerty');
        $userSanders = new User('sanders');

        $chatRoom->addUser($userOvsi)->addUser($userQwerty);

        $userOvsi->sendMessage('Hello qwerty!');
        $userQwerty->sendMessage('Hello ovsi!')->sendMessage('How are you?');
        $userOvsi->sendMessage('Im ok');

        $chatRoom->addUser($userSanders);

        $userSanders->sendMessage('Hello everyone!');
        $userOvsi->sendMessage('Hello!');
        $userQwerty->sendMessage('Hello!');
    }
}
