<?php

namespace App\Repositories;

use App\Models\Nivel;

class NivelRepository
{
    public function getAll() {
        return Nivel::all();
    }

    public function find($id) {
        return Nivel::findOrFail($id);
    }

    public function store($data) {
        return Nivel::create($data);
    }

    public function update($id, $data) {
        $nivel = Nivel::findOrFail($id);
        $nivel->update($data);
        return $nivel;
    }

    public function delete($id) {
        $nivel = Nivel::findOrFail($id);
        $nivel->delete();
        return $nivel;
    }
}
