<?php
class GraingerGalleryLayoutPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_filters = array('exhibit_layouts');

    public function filterExhibitLayouts($layouts)
    {
        $layouts['grainger-gallery'] = array(
            'name' => 'Grainger Gallery',
            'description' => 'A new gallery for Grainger Exhibits'
        );
        return $layouts;
    }
  

    
}

?>

