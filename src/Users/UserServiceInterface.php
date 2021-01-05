<?php

namespace Shineforce\Interfaces\Users;

interface UserServiceInterface
{
    public function login(int $mobile, int $code): array;

    public function reg(int $mobile): array;

    public function update(int $id, array $data): array;

    public function show(int $id): array;
}
