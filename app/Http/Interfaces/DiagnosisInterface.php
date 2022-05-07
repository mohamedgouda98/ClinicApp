<?php
namespace App\Http\Interfaces;

interface DiagnosisInterface{

    public function index();

    public function store($request);

    public function edit($diagnosis);

    public function update($request, $diagnosis);

    public function destroy($request);
}
