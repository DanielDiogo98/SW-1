<?php
    class Conta{
        public $nome;
        public $cpf;
        private $saldo;

        public function Sacar($valor){
            if($valor > $this->saldo){
                $resultado = "Saldo Insuficiente";
                return $resultado;
            }else{
                $this ->saldo = $this ->saldo - $valor;
                $resultado = "Saldo atualizado para $".$this ->saldo;
                return $resultado;
            }

            
        }
        public function depositar($valor){
            $this ->saldo = $this ->saldo + $valor;
            $resultado = "Saldo atualizado para $".$this ->saldo;
            return $resultado;
        }
        public function Consultarsaldo(){
            echo "NOME:".$this->nome . "<br>";
            echo "CPF:".$this->cpf . "<br>";
            echo "SALDO ATUAL $".$this->saldo . "<br>";
        }

    }




?>