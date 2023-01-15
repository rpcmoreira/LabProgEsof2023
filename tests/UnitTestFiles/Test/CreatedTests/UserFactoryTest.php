<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use PHPUnit\Framework\TestCase;
final class UserFactoryTest extends TestCase{
    public function testClassConstructor(){
    //$user = new User("Rui", "rpcardoso", "Aveiro", "Adress", "Email", "Verificado em algum lado", "password", "remember");
    $user = new User();
    $this->assertSame('Rui', $user->name);
    $this->assertSame("rpcardoso", $user->usernames);
    $this->assertSame("Aveiro", $user->location);
    $this->assertSame("Casa de Algarve", $user->address);
    $this->assertSame("Email@example.com", $user->email);
    $this->assertSame("password", $user->password);
}
// Os testes serão colocados aqui
}