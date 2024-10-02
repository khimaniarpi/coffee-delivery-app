<?php
namespace App\Repositories\Interfaces;

Interface MenuRepositoryInterface{

    public function index();

    public function show($id);

    public function order($id);
}