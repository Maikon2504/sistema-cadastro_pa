<?php
    include_once('conexao.class.php');

    class PessoaAutista
    {
        public $nome;
        public $nome_pai;
        public $nome_mae;
        public $data_nascimento;
        public $cpf;
        public $rg;
        public $telefone;
        public $cep;
        public $endereco;
        public $bairro;

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setNome_pai($nome_pai)
        {
            $this->nome_pai = $nome_pai;
        }

        public function setNome_mae($nome_mae)
        {
            $this->nome_mae = $nome_mae;
        }

        public function setData_nascimento($data_nascimento)
        {
            $this->data_nascimento = $data_nascimento;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

        public function setRG($rg)
        {
            $this->rg = $rg;
        }

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }

        public function setCep($cep)
        {
            $this->cep = $cep;
        }

        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }
        
        public function setBairro($bairro)
        {
            $this->bairro = $bairro;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getNome_pai()
        {
            return $this->nome_pai;
        }

        public function getNome_mae()
        {
            return $this->nome_mae;
        }

        public function getData_nascimento()
        {
            return $this->data_nascimento;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        public function getRg()
        {
            return $this->rg;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function getCep()
        {
            return $this->cep;
        }

        public function getEndereco()
        {
            return $this->endereco;
        }

        public function getbairro()
        {
            return $this->bairro;
        }
    }
?>