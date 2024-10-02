<?php
namespace App\Repositories\Interfaces;

Interface CartRepositoryInterface{
     public function index();

     public function store($request);

     public function update($request,$id);

     public function destroy( $id);
}