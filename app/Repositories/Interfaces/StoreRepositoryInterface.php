<?php
namespace App\Repositories\Interfaces;

Interface StoreRepositoryInterface{

    public function index();

    public function store($request);

    public function edit($id);

    public function update($request,$id);

    public function destroy($id);
}