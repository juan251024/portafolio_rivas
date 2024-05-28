<?php
    class socialMedia extends conectar{
        public function get_socialMedi(){

        }
        public function insert_socialMedia($socmed_icono,$socmed_url){
            
        }
        public function update_socialMedia($socmed_id,$socmed_icono,$socmed_url){
            
        }
        public function delete_socialMedia($socmed_id){
            
        }
        
    }
?>
<?php
    class socialMedia extends conectar{
        public function get_socialMedia(){
            $social = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM social_media WHERE EST=1";
            $sql=$SOCIAL->prepare($sql);
            $sql->bindValue(1,$socmed_id);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }
    }
?>
<?php
    class socialMedia extends conectar{
        public function delete_socialMedia($socmed_id){
            $social = parent::conexion();
            parent::set_names();
            $sql="UPDATE ususarios SET  est=0 WHERE socmed_id=?";
            $sql=$SOCIAL->prepare($sql);
            $sql->bindValue(1,$socmed_id);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }
    }
?>
<?php
    class socialMedia extends conectar{
        public function insert_socialMedia($socmed_icono,$socmed_url){
            $social = parent::conexion();
            parent::set_names();
            $sql="INSERT INTO social_media (socmed_id,socmed_icono,socmed_url,est) VALUES (NULL,?,?,1)";
            $sql=$SOCIAL->prepare($sql);
            $sql->bindValue(1,$socmed_icono);
            $sql->bindValue(2,$socmed_url);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }
    }
?>
<?php
    class socialMedia extends conectar{
        public function update_socialMedia($socmed_id,$socmed_icono,$socmed_url){
            $social = parent::conexion();
            parent::set_names();
            $sql="UPDATE ususarios
                    set
                        socmed_icono=?,
                        socmed_url=?
                    WHERE
                        SOCMED_ID=?";
            $sql=$SOCIAL->prepare($sql);
            $sql->bindValue(1,$socmed_icono);
            $sql->bindValue(2,$socmed_url);
            $SQL->bindValue(3,$socmed_id);
            $sql->execute();
            return $resultado=$sql->fetchALL();
        }
    }
?>
