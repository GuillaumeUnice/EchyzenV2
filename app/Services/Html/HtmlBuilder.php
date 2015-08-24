<?php namespace App\Services\Html;

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder {

  /**
   * @param string $array
   * @return string
   */
  public function customLink($array)//$link = '#', $name = 'ici')
  {
    return sprintf('
			<a class="link" data-hover="%s"  href="%s">
                <span>%s</span>
            </a>',
      (isset($array['name'])) ? $array['name']  : 'ici',
      (isset($array['link'])) ? $array['link']  : '#',
      (isset($array['name'])) ? $array['name']  : 'ici'
    );
  }

}