<!--Criando a classe e conectando o banco a tabela-->

<?php

require_once('conexao.php');

class DepoimentoClass
{

    //ATRIBUTOS

    public $idDepoimento;
    public $descricaoDepoimento;
    public $fotoDepoimento;
    public $altDepoimento;
    public $nomeDepoimento;
    public $statusDepoimento;

    //METODOS DA CLASSE

    public function __construct($id = false)
    {
        if ($id) {
            $this->idDepoimento = $id;
            $this->Carregar();
        }
    }

    //LISTAR

    public function Listar()
    {

        $sql = "SELECT * FROM tbldepoimentos WHERE statusDepoimento = 'ATIVO' ORDER BY nomeDepoimento ASC ";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    } //FIM LISTAR

    //CADASTRAR

    public function Cadastrar()
    {
        $query = "INSERT INTO tbldepoimentos (descricaoDepoimento, fotoDepoimento, nomeDepoimento, statusDepoimento)
              VALUES ('" . $this->descricaoDepoimento . "',
                      '" . $this->fotoDepoimento . "',
                      '" . $this->nomeDepoimento . "', 
                      '" . $this->statusDepoimento . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=depoimentos'</script>";
        
    }


    //CARREGAR

    public function Carregar()
    {
        $query = "SELECT * FROM tbldepoimentos WHERE idDepoimento = " . $this->idDepoimento;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->descricaoDepoimento      =   $linha['descricaoDepoimento'];
            $this->fotoDepoimento           =   $linha['fotoDepoimento'];
            $this->nomeDepoimento           =   $linha['nomeDepoimento'];
            $this->statusDepoimento         =   $linha['statusDepoimento'];
        }
    }

    //ATUALIZAR

    public function Atualizar()
    {

        $query = "UPDATE tbldepoimentos SET   nomeDepoimento = '" .$this->nomeDepoimento ."',
        descricaoDepoimento = '" .$this->descricaoDepoimento ."',
        fotoDepoimento = '" .$this->fotoDepoimento ."',
        nomeDepoimento = '" .$this->nomeDepoimento ."'
        WHERE tblDepoimentos.idDepoimento =" .$this->idDepoimento;


        $conn = Conexao::LigarConexao();
        $conn->query($query);

        echo "<script>document.location='index.php?p=depoimentos'</script>";
    }

    //DESATIVAR

    public function Desativar()
    {
        // Atualiza o status do cliente para 'DESATIVADO'
        $query = "UPDATE tbdepoimento SET statusDepoimento = 'DESATIVADO' WHERE idDepoimento = " . $this->idDepoimento;

        // Abre a conexão com o banco de dados
        $conn = Conexao::LigarConexao();

        // Executa a consulta SQL
        //$conn->query($query);


        // Redireciona para a página de cliente
        echo "<script>document.location='index.php?p=depoimento'</script>";
    }
} //FIM DA CLASS CLIENTES