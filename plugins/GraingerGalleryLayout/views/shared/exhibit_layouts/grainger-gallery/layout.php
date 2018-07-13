<?php 

function exhibitUomAttachmentGallery($attachments, $fileOptions = array(), $linkProps = array())
    {
        if (!isset($fileOptions['imageSize'])) {
            $fileOptions['imageSize'] = 'square_thumbnail';
        }
        
        $html = '';
        foreach  ($attachments as $attachment) {
            $html .= '<div class="exhibit-item exhibit-gallery-item"><div class="hovereffect">';
            $html .= $this->view->exhibitGalleryAttachment($attachment, $fileOptions, $linkProps, true);
            $html .= '</a></div></div>';
        }
    
        return apply_filters('exhibit_attachment_gallery_markup', $html,
            compact('attachments', 'fileOptions', 'linkProps'));
    }
    ?>
    
 <?php foreach  ($attachments as $attachment): ?>
    <?php 
      $item = $attachment->getItem();
      $itemLink = record_url($item);
      $itemImageTag = item_image('square_thumbnail', array(), 0, $item);
      $itemTitle = metadata($item, array('Dublin Core', 'Title'));
      $itemTags = tag_string($item, 'items/browse', '');
    ?>
    
    <div class="exhibit-item exhibit-gallery-item"><div class="hovereffect">
            <a href="<?php echo $itemLink ?>"><?php echo $itemImageTag?> <div class="overlay"><div class="exhibit-item-caption"><p><?php echo $itemTitle ?></p></div>
             </div> </a></div></div>
        
    
      <?php endforeach ?>