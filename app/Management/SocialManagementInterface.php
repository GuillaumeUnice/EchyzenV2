<?php
namespace App\Management;



interface SocialManagementInterface {

    /**
     * permettant de poster auprès des réseaux sociaux
     * @param $message String le message a poster
     * @param $media image/video... a lier au message
     */
    public function postSocial($message, $media = null);

    /**
     * Permet de récuperer les dernier tweets
     * @param $count int nombre de tweets a récuperer
     * @return Object Twitter contenant les derniers tweets
     */
    public function getMyLastTweet($count = 5);

}
