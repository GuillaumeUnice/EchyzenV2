<?php
namespace App\Management;



interface ImageManagementInterface {

    /**
     * permettant d'uploader une image dans le compte utilisateur
     * Ou app si utilisateur de type admin
     * @param $image image
     * @return boolean
     */
    public function save($image);

    /**
     * permettant de supprimer une image
     * @param $pathFilename string
     * @return boolean
     */
    public function delete($pathFilename);

    public function getErrorMessage();

    public function getSuccessMessage();

    public function getfileName();



}
