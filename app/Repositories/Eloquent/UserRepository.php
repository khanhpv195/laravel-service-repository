<?php


namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\BaseRepository;
class UserRepository extends BaseRepository
{

    public function model(): string
    {
        return User::class;
    }
}
