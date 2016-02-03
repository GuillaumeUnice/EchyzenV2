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

  public function customLinkIcon($array)
  {
    return sprintf('<a href="%s">
                <button class="button--icon button--sacnite" type="submit">
                  <i class="button__icon glyphicon %s"></i>
                </button>
              </a>',
      (isset($array['route'])) ? $array['route'] : '#',
      (isset($array['glyphicon'])) ? $array['glyphicon'] : ''
    );
  }

}