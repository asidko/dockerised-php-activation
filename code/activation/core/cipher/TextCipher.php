<?php

interface TextCipher
{
    function encrypt(string $text, string $key): string;

    function sign(string $text, string $privateKey): string;

    function decrypt(string $base64encryptedText, string $key): string;
}