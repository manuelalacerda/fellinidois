<!--Criando a classe e conectando o banco a tabela-->

<?php

require_once('conexao.php');

class FuncionarioClass
{

    //ATRIBUTOS

    public $idFuncionario;
    public $nomeFuncionario;
    //public $dataNascFuncionario;
    public $enderecoFuncionario;
    //public $cidadeFuncionario;
    //public $cepFuncionario;
    //public $estadoFuncionario;
    //public $cargoFuncionario;
    public $nivelFuncionario;
    public $fotoFuncionario;
    public $emailFuncionario;
    //public $senhaFuncionario;
    public $telefoneFuncionario;
    //public $tipoContratoFuncionario;
    public $statusFuncionario;

    //METODOS DA CLASSE

    public function __construct($id = false)
    {
        if ($id) {
            $this->idFuncionario = $id;
            $this->Carregar();
        }
    }

    //LISTAR

    public function Listar()
    {

        $sql = "SELECT * FROM tblfuncionarios WHERE statusFuncionario = 'ATIVO';";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    } //FIM LISTAR

    //CADASTRAR

    public function Cadastrar()
    {
        $query = "INSERT INTO `tblfuncionarios`(`idFuncionario`, `nomeFuncionario`, `enderecoFuncionario`,
                                 `nivelFuncionario`, `fotoFuncionario`, `emailFuncionario`,
                                 `telefoneFuncionario`, `statusFuncionario`)
              VALUES ('" . $this->nomeFuncionario . "',
                      '" . $this->enderecoFuncionario . "',
                      '" . $this->fotoFuncionario . "', 
                      '" . $this->emailFuncionario . "', 
                      '" . $this->telefoneFuncionario . "',  
                      '" . $this->statusFuncionario . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=funcionarios'</script>";
        
    }


    //CARREGAR

    public function Carregar()
    {
        $query = "SELECT * FROM tblFuncionarios WHERE idFuncionario = " . $this->idFuncionario;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeFuncionario               =   $linha['nomeFuncionario'];
            $this->enderecoFuncionario           =   $linha['enderecoFuncionario'];
            $this->nivelFuncionario              =   $linha['nivelFuncionario'];
            $this->fotoFuncionario               =   $linha['fotoFuncionario'];
            $this->emailFuncionario              =   $linha['emailFuncionario'];
            $this->telefoneFuncionario           =   $linha['telefoneFuncionario'];
            $this->statusFuncionario             =   $linha['statusFuncionario'];
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