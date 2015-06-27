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

    public function button_submit($texte)
    {

        return '<p class="signin button">' .
            '<input class="btn-form" type="submit" value="' . $texte . '"/>' .
            '</p>';

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