<?php

use \App\Models\User;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Hash;
final class UserFactoryTest extends TestCase{
    public function testClassConstructor(){
        $user = User::create([
            'name' => 'Christophe',
            'username' => 'rpcardoso',
            'email' => 'Email@example.com',
            'password' => Hash::make('password'),
            'localization' => 'Aveiro',
            'address' => 'Casa de Algarve',
        ]);
    $this->assertSame('Christophe', $user->name);
    $this->assertSame("rpcardoso", $user->usernames);
    $this->assertSame("Aveiro", $user->localization);
    $this->assertSame("Casa de Algarve", $user->address);
    $this->assertSame("Email@example.com", $user->email);
}
// Os testes serão colocados aqui
}