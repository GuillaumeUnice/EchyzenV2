<?php
namespace App\Management\Impl;



use App\Management\ImageManagementInterface;

class ImageManagement implements ImageManagementInterface {
    /**
     * permettant d'uploader une image dans le compte utilisateur
     * Ou app si utilisateur de type admin
     * @param $image image
     * @return mixed
     */
    public function save($image) {

        return true;
    }
}
