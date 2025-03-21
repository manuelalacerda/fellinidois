<!--Criando a classe e conectando o banco a tabela-->

<?php

require_once('conexao.php');

class ClientesClass
{

    //ATRIBUTOS

    public $idCliente;
    public $nomeCliente;
    public $cpfCliente;
    public $telefoneCliente;
    public $emailCliente;
    public $enderecoCliente;
    public $cidadeCliente;
    public $cepCliente;
    public $estadoCliente;
    public $statusCliente;
    public $crmCliente;

    //METODOS DA CLASSE

    public function __construct($id = false)
    {
        if ($id){
            $this->idCliente = $id;
            $this->Carregar();
        }


    }

    //LISTAR

    public function Listar()
    {

        $sql = "SELECT * FROM tblclientes WHERE statusCliente = 'ATIVO' ORDER BY nomeCliente ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    } //FIM LISTAR

    //CADASTRAR

    public function Cadastrar()
    {

        $query = "INSERT INTO tblclientes (nomeCliente,
                                        cpfCliente,
                                        telefoneCliente,
                                        emailCliente,
                                        enderecoCliente,
                                        cidadeCliente,
                                        cepCliente,
                                        estadoCliente,
                                        statusCliente,
                                        crmCliente)
                                       
    VALUES('" . $this->nomeCliente . "',
    '" . $this->cpfCliente . "',
    '" . $this->telefoneCliente . "',
    '" . $this->emailCliente . "',
    '" . $this->enderecoCliente . "',
    '" . $this->cidadeCliente . "',
    '" . $this->cepCliente . "',
    '" . $this->estadoCliente . "',
    '" . $this->statusCliente . "',
    '" . $this->crmCliente . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=clientes'</script>";
    }

    //CARREGAR

    public function Carregar()
    {
        $query = "SELECT * FROM tblclientes WHERE idCliente = " . $this->idCliente;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado-> fetchAll();

        foreach ($lista as $linha) {
            $this->nomeCliente              =   $linha['nomeCliente'];
            $this->cpfCliente               =   $linha['cpfCliente'];
            $this->telefoneCliente          =   $linha['telefoneCliente'];
            $this->emailCliente             =   $linha['emailCliente'];
            $this->enderecoCliente          =   $linha['enderecoCliente'];
            $this->cidadeCliente            =   $linha['cidadeCliente'];
            $this->cepCliente               =   $linha['cepCliente'];
            $this->estadoCliente            =   $linha['estadoCliente'];
            $this->statusCliente            =   $linha['statusCliente'];
            $this->crmCliente               =   $linha['crmCliente'];

        }
    }

    //ATUALIZAR

    public function Atualizar(){

        $query = "UPDATE tblclientes SET   nomeCliente = '" .$this->nomeCliente ."',
                                            cpfCliente = '" .$this->cpfCliente ."',
                                            telefoneCliente = '" .$this->telefoneCliente ."',
                                            emailCliente = '" .$this->emailCliente ."',
                                            enderecoCliente = '" .$this->enderecoCliente ."',
                                            cidadeCliente = '" .$this->cidadeCliente ."',
                                            cepCliente = '" .$this->cepCliente ."',
                                            estadoCliente = '" .$this->estadoCliente ."',
                                            statusCliente = '" .$this->statusCliente ."',
                                            crmCliente = '" .$this->crmCliente ."'
                                            WHERE tblclientes.idCliente =" .$this->idCliente;


        $conn = Conexao::LigarConexao();
        $conn->query($query);
        
        echo "<script>document.location='index.php?p=clientes'</script>";

    }

    //DESATIVAR

    public function Desativar() {
        // Atualiza o status do cliente para 'DESATIVADO'
        $query = "UPDATE tbclietes SET statusCliente = 'DESATIVADO' WHERE idCliente = " . $this->idCliente;
    
        // Abre a conexão com o banco de dados
        $conn = Conexao::LigarConexao();
    
        // Executa a consulta SQL
        //$conn->query($query);
    
    
        // Redireciona para a página de cliente
        echo "<script>document.location='index.php?p=clientes'</script>";
        
    }


} //FIM DA CLASS CLIENTES