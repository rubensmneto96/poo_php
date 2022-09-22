<?php

    class Pessoa
    {
        private $nome;
        private $idade;
        private $curso;

        public function __construct($nome, $idade, $curso)
        {
            if(is_string($nome)) {
                $this->nome = $nome;
            }

            if(is_numeric($idade) AND $idade > 0) {
                $this->idade = $idade;
            }

            if(is_string($curso)) {
                $this->curso = $curso;
            }
        }

        public function nomePessoa()
        {
            return $this->nome;
        }
        
        public function idadePessoa()
        {
            return $this->idade;
        }
        
        public function cursoPessoa()
        {
            return $this->curso;
        }
    }

    class SalaVirtual
    {
        private $materia;
        private $quantAlunos;
        private $curso;
        private $professor;

        public function __construct($materia, $quantAlunos, $curso, $professor)
        {
            if(is_string($materia)) {
                $this->materia = $materia;
            }

            if(is_numeric($quantAlunos) AND $quantAlunos > 0) {
                $this->quantAlunos = $quantAlunos;
            }

            if(is_string($curso)) {
                $this->curso = $curso;
            }
            
            if(is_string($professor)) {
                $this->professor = $professor;
            }
        }

        public function nomeMateria()
        {
            return $this->materia;
        }
        
        public function statusAlunosSala()
        {
            if($this->quantAlunos > 0 AND $this->quantAlunos <= 20) {
                return "A classe contém " . $this->quantAlunos . " assistindo à aula.";
            } elseif($this->quantAlunos > 20) {
                return "Excesso de alunos na sala de aula!";
            } else {
                return "Nenhum aluno na sala de aula.";
            }
        }
        
        public function cursoMateria()
        {
            return $this->curso;
        }

        public function nomeProfessor()
        {
            return $this->professor;
        }
    }

    $p1 = new Pessoa('João', 20, 'Sistemas para Internet');
    $p2 = new Pessoa('Maria', 19, 'Gestão de Empresas');
    $p3 = new Pessoa('Caio', 24, 'Desenvolvimento de Software Multiplataforma');
    $p4 = new Pessoa('Paula', 26, 'Sistemas para Internet');
    $p5 = new Pessoa('André', 32, 'Desenvolvimento de Software Multiplataforma');

    $sala1 = new SalaVirtual('Desenvolvimento Web II', 5, 'Sistemas para Internet', 'Orlando');
    $sala2 = new SalaVirtual('Banco de Dados Relacional', 15, 'Desenvolvimento de Software Multiplataforma', 'Nilton');
    
    print "<b>" . $p1->nomePessoa() . "</b>" . ", de " . "<b>" . $p1->idadePessoa() . "</b>" . " anos, cursa " . "<b>" . $p1->cursoPessoa() . "</b>" . "<br>" . PHP_EOL;
    print "<b>" . $p2->nomePessoa() . "</b>" . ", de " . "<b>" . $p2->idadePessoa() . "</b>" . " anos, cursa " . "<b>" . $p2->cursoPessoa() . "</b>" . "<br>" . PHP_EOL;
    print "<b>" . $p3->nomePessoa() . "</b>" . ", de " . "<b>" . $p3->idadePessoa() . "</b>" . " anos, cursa " . "<b>" . $p3->cursoPessoa() . "</b>" . "<br>" . PHP_EOL;
    print "<b>" . $p4->nomePessoa() . "</b>" . ", de " . "<b>" . $p4->idadePessoa() . "</b>" . " anos, cursa " . "<b>" . $p4->cursoPessoa() . "</b>" . "<br>" . PHP_EOL;
    print "<b>" . $p5->nomePessoa() . "</b>" . ", de " . "<b>" . $p5->idadePessoa() . "</b>" . " anos, cursa " . "<b>" . $p5->cursoPessoa() . "</b>" . "<br>" . PHP_EOL;

    echo "<br>";
    echo "<br>";

    print "Matéria: " . "<b>" . $sala1->nomeMateria() . "</b>" . "<br>" . PHP_EOL;
    print "Status (<b>" . $sala1->cursoMateria() . "</b>): " . "<b>" . $sala1->statusAlunosSala() . "</b>" . "<br>" . PHP_EOL;
    print "Professor: " . "<b>" . $sala1->nomeProfessor() . "</b>" . "<br>" . PHP_EOL;

    echo "<br>";

    print "Matéria: " . "<b>" . $sala2->nomeMateria() . "</b>" . "<br>" . PHP_EOL;
    print "Status (<b>" . $sala2->cursoMateria() . "</b>): " . "<b>" . $sala2->statusAlunosSala() . "</b>" . "<br>" . PHP_EOL;
    print "Professor: " . "<b>" . $sala2->nomeProfessor() . "</b>" . "<br>" . PHP_EOL;
?> 