<?php 
class Reservas{

    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function getReservas(){
        $array = array();

        $sql = "SELECT * FROM reservas";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(); 
        }

        return $array;
    } // getReservas

    public function verificarDisponibilidade($carro, $data_inicio, $data_fim){
        $sql = "SELECT * FROM reservas WHERE id_carro = :carro AND (NOT(data_inicio > :data_fim OR data_fim < :data_inicio ))";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":carro", $carro);
        $sql->bindValue(":data_inicio", $data_inicio);
        $sql->bindValue(":data_fim", $data_fim);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        }else{
            return true;
        }

    } //verificarDisponibilidade

    public function reservar($carro, $data_inicio, $data_fim, $pessoa){
        $sql = "INSERT INTO reservas SET id_carro = :carro, data_inicio = :data_inicio, data_fim = :data_fim, pessoa = :pessoa";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":carro", $carro);
        $sql->bindValue(":data_inicio", $data_inicio);
        $sql->bindValue(":data_fim", $data_fim);
        $sql->bindValue(":pessoa", $pessoa);
        $sql->execute();
    } //reservar

    

} // reservas

?>