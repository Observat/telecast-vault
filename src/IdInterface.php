<?php


namespace Observatby\TelecastVault;


interface IdInterface
{
    public static function fromScalar($id);

    public function toScalar();
}
