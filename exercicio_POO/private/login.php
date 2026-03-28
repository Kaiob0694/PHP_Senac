<?php
class Usuario {
    private $email;
    private $senha;

    public function __construct($email, $senha){
        $this->email = $email;
        $this->senha = $senha;
    }

    public function login($email, $senha){
        if ($email === $this->email && $senha === $this->senha) {
            echo "Login realizado com sucesso!!\n";
        } else {
            echo "Email ou senha inválidos!!\n";
        }
    }

    public function alterarSenha($novaSenha){
        $this->senha = $novaSenha;
        echo "Senha alterada com sucesso!!\n";
    }
}

$usuarios = [];

echo "============================\n";
echo "//    SISTEMA DE LOGIN    //\n";
echo "============================\n\n";

echo "CADASTRO DE USUÁRIOS\n";

// ✅ AGORA SIM: cadastro dentro do for
for ($i = 0; $i < 2; $i++) {
    echo "\nUsuário " . ($i + 1) . ":\n";

    $email = readline("Digite o email: ");
    $senha = readline("Digite a senha: ");

    $usuarios[] = new Usuario($email, $senha); # Aqui ele cria e add na array ao mesmo tempo
}

echo "\nUsuários cadastrados com sucesso!\n";