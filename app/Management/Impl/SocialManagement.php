<?php
namespace App\Management\Impl;



use Collective\Html\HtmlFacade;
use Illuminate\Support\Facades\Config;
use App\Management\SocialManagementInterface;
use \Thujohn\Twitter\Facades\Twitter;

class SocialManagement implements SocialManagementInterface {


    /**
     * permettant de poster auprès des réseaux sociaux
     * @param $message String le message a poster
     * @param $media image/video... a lier au message
     */
    public function postSocial($message, $media = null, $link = null) {
        $linkContent = 'next';
        $truncateEndMessage = '...';
        $countCharAvailable = Config::get('social.twitter.countChar')
            - Config::get('social.twitter.countLinkChar') - strlen($linkContent)
            - strlen($truncateEndMessage);
        $twitterMessage = str_limit($message, $limit = $countCharAvailable, $end = $truncateEndMessage);
        $twitterMessage .= HtmlFacade::linkAction($link, $linkContent);

        Twitter::postTweet(['status' => $twitterMessage, 'format' => 'json']);

    }

    /**
     * Permet de récuperer les dernier tweets
     * @param $count int nombre de tweets a récuperer
     * @return Object Twitter contenant les derniers tweets
     */
    public function getMyLastTweet($count = 5){
        return Twitter::getUserTimeline(
            ['screen_name'  => Config::get('social.twitter.username'),
                'count'     => $count,
                'format'    => 'object']);
    }

}
