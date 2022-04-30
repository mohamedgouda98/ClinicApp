<?php

namespace App\Http\Interfaces;

interface PatientInterface
{
    public function index();

    public function search();

    public function create();

    public function store($request);

    public function show($patient);

    public function edit($patient);

    public function update($request, $patient);

    public function destroy($request);
}
