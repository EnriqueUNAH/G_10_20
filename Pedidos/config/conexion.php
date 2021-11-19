<?php
    class conectar{
        protected $dbh;

        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:host=34.68.196.220;dbname=g10_20","G10_20","GgLLdbKC");
                return $conectar;
            }catch(exception $e){
                print "¡ERROR BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

    }
?>