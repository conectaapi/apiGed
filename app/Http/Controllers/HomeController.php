<?php


namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        echo '<h1>Bem vindo!</h1>';
    }
    public function show($id)
    {
        echo "<h1>Bem vindo $id</h1>";
    }
}