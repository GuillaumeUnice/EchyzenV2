<?php
namespace App\Management;



interface ImageManagementInterface {

    /**
     * permettant d'uploader une image dans le compte utilisateur
     * Ou app si utilisateur de type admin
     * @param $image image
     * @return mixed
     */
    public function save($image);
}
