<?php
    class produto{
        private $nome;
        private $preco;
        private $quantidade;


            public function  __construct($nome_novo, $preco_novo, $quantidade_novo = 0){
                $this->nome = $nome_novo;
                $this->preco = $preco_novo;
                $this->quantidade = $quantidade_novo;
            }
            public function adicionarestoque($qtd){
                if ($qtd <= 0){
                    echo "Não é possivel adicionar um valor negativo";
                }else
                $this-> quantidade +=  $qtd;

                echo"$this->quantidade";
            }

            public function removerestoque($qtd){
                if ($qtd > $this->quantidade){
                    echo "Não é possivel remover um valor posivtivo";
                }else
                $this ->quantidade -= $qtd;
            }


            public function getnome(){
                return $this->nome;
            }
            
            public function setnome($nome_novo){
                 $this->nome = $nome_novo;
            }

            public function getpreco(){
                return $this->preco;
            }

            public function setpreco($preco_novo){
                 $this->preco = $preco_novo;
            }

            public function mostrardetalhes(){
                echo"produto:" .$this->nome . "<br>";
                echo"preco:".$this->preco . "<br>";
                echo"quantidade em estoque:". $this->quantidade . "<br>";
            }

}




?>