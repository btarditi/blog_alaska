<?php
namespace Form\Field;

class HiddenField extends Field
{
    public function buildWidget()
    {
        $widget = '';
        if (!empty($this->errorMessage))
        {
            $widget .= $this->errorMessage.'<br />';
        }
        $widget .= '<div class="form-group">';
        $widget .= '<label class="col-sm-3 control-label" for="' . $this->name . '"></label>';
        $widget .= '<div class="col-sm-9">';
        $widget .= '<input class="form-control" type="hidden" required="true" name="' . $this->name . '"  ';
        if (!empty($this->value))
        {
            $salt = substr(md5(time()), 0, 23);
            $widget .= ' value="'. $salt .'"';
        }
        $widget .= '/>';
        $widget .= '</div></div>';
        return $widget;
    }
}