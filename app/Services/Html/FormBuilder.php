<?php namespace App\Services\Html;

use Collective\Html\FormBuilder as CollectiveFormbuilder;
use Illuminate\Support\Facades\Request;
class FormBuilder extends CollectiveFormbuilder {

    public function ajax_control($type, $nom, $placeholder)
    {
        return sprintf('
            <div class="form-group">
                <label class="col-md-4 control-label">%s</label>
                <div class="col-md-6">
                    <input type="%s" class="form-control" name="%s">
                    <small class="help-block"></small>
                </div>
            </div>',
            $placeholder,
            $type,
            $nom
        );
    }
    public function control($type, $nom, $placeholder, $glyphicon = '', $required = '', $old = '')
    {
        return sprintf('
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon %s"></span></div>
                <span class="input input--minoru">
                <input class="form-control input__field input__field--minoru" type="%s" name="%s" placeholder="%s" required="%s" value="%s"/>
                <label class="input__label input__label--minoru" ></label>
                </span>
            </div>',
            $glyphicon,
            $type,
            $nom,
            $placeholder,
            $required,
            $old
        );
    }
    public function custom_checkbox($name, $placeholder, $old = '') {
        $old = $old ? 'checked' : '';
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
            $name,
            $name,
            $old,
            $name,
            $placeholder
        );
    }



    public function button_submit($texte)
    {
        return  '<button class="button">' .
                    '<input type="submit" value="' . $texte . '"/>' .
                '</button>';
    }

    public function ajax_button_submit()
    {
        return  '<div class="send">' .
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