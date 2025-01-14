<?php

require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../businesslogic/ShowTodoList.php";
require_once __DIR__ . "/../view/ViewAddTodoList.php";
require_once __DIR__ . "/../view/ViewRemoveTodoList.php";
require_once __DIR__ . "/../helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList(); 
        } elseif ($pilihan == "2") {
            viewRemoveTodoList(); 
        } elseif ($pilihan == "x") {
            break; 
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL; // Akan ditampilkan setelah loop berhenti
}
