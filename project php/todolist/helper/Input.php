<?php

function input(string $info): string
{
    echo "$info: ";
    $result = trim(fgets(STDIN)); // Menghapus spasi atau karakter baru
    return $result;
}
