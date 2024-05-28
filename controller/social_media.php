<?php
    require_once("../config/conexion.php");
    require_once("../model/social_media.php");
    $social_media=new socialmedia();
    awitch($_GET["op"]){
        case "mostrar":
            $datos=$social_media->get_socialMediaxid($_POST["socmed_id"]);
            if(is_array($datos)==true and count($datos)<>0){
                foreach($datos as $row){
                    $output["socmed_icono"]=$row["socmed_icono"];
                    $output["socmed_url"]=$row["socmed_url"];
                }
                echo json_encode($output);
            }
            break;
        case "modificar":
            $social_media->update_socialMedia(
                $_POST["socmed_id"],
                $_POST["socmed_icono"],
                $_POST["socmed_url"]
            )
            break;
        case "guardaryeditar":
            if(empty($_POST["socmed_id"])){
                $social_media->insert_socialMedia($_POST["socmed_icono"],$_POST["socmed_url"]);{
            }else{
                $social_media->update_socialMedia($_POST["socmed_id"],$_POST["socmed_icono"],$_POST["socmed_url"]);
            }
            break;
        case "eliminar":
            $social_media->delete_socialMedia($_POST["socmed_id"]);
            break;
        case "listar":
            $datos=$social_media->get_socialMedia();
            $sata=array();
            foreach($datos as $row){
                $sub_array=array();
                $sub_array[]=$row["socmed_icono"];
                $sub_array[]=$row["socmed_url"]

                $sub_array[]='<button type="button" onclick="editar" ('.$row["socmed_id"].');" id="'.$row["socmed_id"].'" class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[]='<button type="button" onclick="eliminar" ('.$row["socmed_id"].');" id="'.$row["socmed_id"].'" class="btn btn-outline-dnager btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $data[]=$sub_array
            }
            $results=array(
                "sEcho"=>1,
                "iTotalrecords"=>count($data),
                "iToatalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_econde($results);
            
            break;
    }
?>
