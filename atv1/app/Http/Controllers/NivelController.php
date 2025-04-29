<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NivelRepository;

class NivelController extends Controller
{
    protected $repo;

    public function __construct(NivelRepository $repo) {
        $this->repo = $repo;
    }

    public function index() {
        return $this->repo->getAll();
    }

    public function store(Request $request) {
        return $this->repo->store($request->all());
    }

    public function show($id) {
        return $this->repo->find($id);
    }

    public function update(Request $request, $id) {
        return $this->repo->update($id, $request->all());
    }

    public function destroy($id) {
        return $this->repo->delete($id);
    }
}