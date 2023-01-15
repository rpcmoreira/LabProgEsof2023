<?php

use \App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

final class UserFactoryTest extends TestCase
{
    public function test_ClassConstructor()
    {
        $user = new User();

        $this->assertEmpty($user->getName());
        $this->assertEmpty($user->getUsername());
        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getLocalization());
        $this->assertEmpty($user->getAddress());


        $user->setName('Cristophe');
        $user->setUsername('username');
        $user->setEmail('teste@teste.teste');
        $user->setLocalization('Porto');
        $user->setAddress('Rua de Teste');

        $this->assertSame('Cristophe', $user->getName());
        $this->assertSame('username', $user->getUsername());
        $this->assertSame('teste@teste.teste', $user->getEmail());
        $this->assertSame('Porto', $user->getLocalization());
        $this->assertSame('Rua de Teste', $user->getAddress());
    }

    public function test_login(){
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_register(){
        $response = $this->post('/register', [
            'name' => 'Cristophe',
            'username' => 'username',
            'email' => 'teste@teste.teste',
            'password' => 'password',
            'password_confirmation' => 'password',
            'localization' => 'Porto',
            'address' => 'Rua de Teste',
        ]);

        $response->assertStatus(419);
    }
}
