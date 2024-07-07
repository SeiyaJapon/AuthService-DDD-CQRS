<?php

namespace App\AuthContext\Domain\User;

interface UserRepositoryInterface
{
    public function findByEmail(string $email): ?User;
    public function findByEmailAndPassword(string $email, string $password): ?User;
    public function findByID(UserId $id): User;
    public function createToken(UserId $id, ?string $name): string;
    public function save(User $user): void;
}