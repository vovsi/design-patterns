<?php

namespace App\Models\Behavioral\Mediator;

class ChatRoom
{
    public function __construct(
        private array $users = []
    )
    {}

    public function addUser(User $user): ChatRoom
    {
        $this->users[] = $user;
        $user->joinChatRoom($this);
        echo("[" . now() . "] - Users in room: " . count($this->users) . "\n");

        return $this;
    }

    public function sendMessage(User $currentUser, string $message): void
    {
        foreach ($this->users as $user) {
            if ($currentUser === $user) {
                continue;
            }
            $user->receiveMessage($currentUser, $message);
        }
    }
}
