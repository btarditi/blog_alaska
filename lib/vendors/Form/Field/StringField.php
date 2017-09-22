<?php
namespace Form\Field;
 
class StringField extends Field
{
  protected $maxLength;
 
  public function buildWidget()
  {
    $widget = '';
 
    if (!empty($this->errorMessage))
    {
      $widget .= $this->errorMessage.'<br />';
    }
 
    $widget .= '<div class="form-group">';
    $widget .= '<label for="'. $this->name .'" class="col-sm-3 control-label">'.$this->label.'</label>';
    $widget .= '<div class="col-sm-9">';
    $widget .= '<input class="form-control" type="text" required="true" name="'.$this->name.'" ';
 
    if (!empty($this->value))
    {
      $widget .= ' value="'.htmlspecialchars($this->value).'"';
    }
 
    if (!empty($this->maxLength))
    {
      $widget .= ' maxlength="'.$this->maxLength.'"';
    }
 
    return $widget .= ' /></div></div>';
  }
 
  public function setMaxLength($maxLength)
  {
    $maxLength = (int) $maxLength;
 
    if ($maxLength > 0)
    {
      $this->maxLength = $maxLength;
    }
    else
    {
      throw new \RuntimeException('La longueur maximale doit être un nombre supérieur à 0');
    }
  }
}