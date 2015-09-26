<?php

namespace PostContext\Application\Handler;

use PostContext\Application\Command\DeleteMessageCommand;
use PostContext\Application\Command\NewMessageInChannelCommand;

interface PostHandlerInterface
{
    public function postNewMessage(NewMessageInChannelCommand $command);
    public function deleteMessage(DeleteMessageCommand $command);
}