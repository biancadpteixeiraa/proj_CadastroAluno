<?php
//criei a classe aluno e cadastro de alunos, implementei o metodo construtor na classe aluno deixando a função publica, depois fiz um get com as informações 
class Aluno {
    private $nome;
    private $matricula;
    private $curso;

    public function __construct($nome, $matricula, $curso) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }
}
//Essa classe vai ser usada para o cadastro dos alunos, tem a propriedade privada $alunos que é um array que armazena os alunos cadastrados.
class CadastroAlunos {
    private $alunos = [];

    public function cadastrarAluno(Aluno $aluno) {
        $this->alunos[] = $aluno;
    }

    public function listarAlunos() {
        return $this->alunos;
    }
}

// Listando todos os alunos cadastrados
$alunosCadastrados = $cadastro->listarAlunos();
foreach ($alunosCadastrados as $aluno) {
    echo "Nome: " . $aluno->getNome() . ", Matrícula: " . $aluno->getMatricula() . ", Curso: " . $aluno->getCurso() . "<br>";
}
?>
