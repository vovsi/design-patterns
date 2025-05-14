<?php

namespace App\Models\Behavioral\Mediator;

class User
{
    public function __construct(
        public string $username,
        public ?ChatRoom $chatRoom = null
    )
    {}

    public function joinChatRoom(ChatRoom $chatRoom): ChatRoom
    {
        return $this->chatRoom = $chatRoom;
    }

    public function sendMessage(string $message): User
    {
        echo("[" . now() . "] $this->username: $message\n");
        $this->chatRoom?->sendMessage($this, $message);

        return $this;
    }

    public function receiveMessage(User $senderUser, string $message): void
    {
        echo("[" . now() . "] " . $this->username . " given msg from $senderUser->username: $message\n");
    }
}
