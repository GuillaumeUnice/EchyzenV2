<?php namespace App\Services\Html;

use Collective\Html\FormBuilder as CollectiveFormbuilder;

class FormBuilder extends CollectiveFormbuilder
{

  public function ajaxInput($array)
  {
    return sprintf('
            <div class="form-group">
                <label class="col-md-4 control-label">%s</label>
                <div class="col-md-6">
                    <input type="%s" class="form-control" name="%s">
                    <small class="help-block"></small>
                </div>
            </div>',
      (isset($array['placeholder'])) ? $array['placeholder'] : '',
      (isset($array['type'])) ? $array['type'] : '',
      (isset($array['name'])) ? $array['name'] : ''

    );
  }

  public function customMultipleSelectOpen($array)
  {
    return sprintf('
      <div class="form-group">
        <div class="input-group-addon"><span class="glyphicon %s"></span>&nbsp;&nbsp;%s</div>
          <select class="select-multiple custom-select2 form-control" name="%s" multiple>
      ',
      (isset($array['glyphicon'])) ? $array['glyphicon'] : '',
      (isset($array['description'])) ? $array['description'] : '',
      (isset($array['name'])) ? $array['name'] : ''
    );
  }

  public function customMultipleSelectOption($array)
  {
    return sprintf('
        <option value="%s" %s >%s</option>
       ',
      (isset($array['value'])) ? $array['value'] : '',
      (isset($array['selected'])) ? $array['selected'] : '',
      (isset($array['name'])) ? $array['name'] : ''
    );
  }

  public function customMultipleSelectClose($array = null)
  {
    return sprintf('
      </select>
        </div>
       '
    );
  }

  public function customInput($array)
  {
    return sprintf('
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon %s"></span></div>
                <span class="input input--minoru">
                <input class="form-control input__field input__field--minoru" type="%s" name="%s" placeholder="%s" %s value="%s" min="%s" max="%s" />
                <label class="input__label input__label--minoru" ></label>
                </span>
            </div>',
      (isset($array['glyphicon'])) ? $array['glyphicon'] : '',
      (isset($array['type'])) ? $array['type'] : '',
      (isset($array['name'])) ? $array['name'] : '',
      (isset($array['placeholder'])) ? $array['placeholder'] : '',
      (isset($array['required'])) ? $array['required'] : '',
      (isset($array['old'])) ? $array['old'] : '',
      (isset($array['min'])) ? $array['min'] : '',
      (isset($array['max'])) ? $array['max'] : ''
    );
  }

  /**
   * @param $array
   * @return string
   */
  public function customTextarea($array)
  {
    return sprintf('
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon %s"></span></div>
                <textarea class="form-control %s" name="%s" placeholder="%s" cols="%s" rows="%s" %s>%s</textarea>
                <div class="input-group-addon"><span>%s</span></div>
            </div>',
      (isset($array['glyphicon'])) ? $array['glyphicon'] : '',
      (isset($array['class'])) ? $array['class'] : '',
      (isset($array['name'])) ? $array['name'] : '',
      (isset($array['placeholder'])) ? $array['placeholder'] : '',
      (isset($array['cols'])) ? $array['cols'] : '30',
      (isset($array['rows'])) ? $array['rows'] : '5',
      (isset($array['required'])) ? $array['required'] : '',
      (isset($array['old'])) ? $array['old'] : '',
      (isset($array['description'])) ? $array['description'] : ''

    );
  }

  public function customCheckbox($array)//$name, $placeholder, $old = '')
  {
    return sprintf('
            <div class="form-group">
                <div class="checkbox">
                    <ul>
                        <li>
                            <input id="%s" name="%s" type="checkbox" %s>
                            <label for="%s">%s</label>
                        </li>
                    </ul>
                </div>
            </div>',
      (isset($array['name'])) ? $array['name'] : '',
      (isset($array['name'])) ? $array['name'] : '',
      (isset($array['old'])) ? 'checked' : '',
      (isset($array['name'])) ? $array['name'] : '',
      (isset($array['placeholder'])) ? $array['placeholder'] : ''
    );
  }

  public function iconSubmit($array)
  {
    return sprintf('<button class="button--icon button--sacnite" type="submit">
                <i class="button__icon glyphicon %s"></i>
            </button>',
      (isset($array['glyphicon'])) ? $array['glyphicon'] : ''
    );
  }


  public function buttonSubmit($array)
  {
    return sprintf('<button class="button">' .
      '<input type="submit" value="%s"/>' .
      '</button>',
      (isset($array['text'])) ? $array['text'] : ''
    );
  }

  public function ajaxButtonSubmit($array = null)
  {
    return '<div class="send">' .
    '<div class="send-indicator">' .
    '<div class="send-indicator-dot"></div>' .
    '<div class="send-indicator-dot"></div>' .
    '<div class="send-indicator-dot"></div>' .
    '<div class="send-indicator-dot"></div>' .
    '</div>' .
    '<button type="submit" class="send-button">' .
    '<div class="sent-bg"></div>' .
    '<i class="fa fa-send send-icon"></i>' .
    '<i class="fa fa-check sent-icon"></i>' .
    '</button>' .
    '</div>' .
    '<div style="display: none;">' .
    '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800">' .
    '<defs>' .
    '<filter id="goo">' .
    '<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />' .
    '<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />' .
    '<feComposite in="SourceGraphic" in2="goo" operator="atop"/>' .
    '</filter>' .
    '<filter id="goo-no-comp">' .
    '<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />' .
    '<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />' .
    '</filter>' .
    '</defs>' .
    '</svg>' .
    '</div>';

  }

}
