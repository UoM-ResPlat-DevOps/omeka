<?php
class GraingerPopupLayoutPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_filters = array('exhibit_layouts');

    public function filterExhibitLayouts($layouts)
    {
        $layouts['grainger-popup-gallery'] = array(
            'name' => 'Grainger Popup Gallery',
            'description' => 'A popup gallery for Grainger Exhibits'
        );
        return $layouts;
    }
  

    
}

?>

