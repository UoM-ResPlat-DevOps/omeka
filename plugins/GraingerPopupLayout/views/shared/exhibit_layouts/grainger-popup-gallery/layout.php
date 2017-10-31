<ul class="lb-album">
   <?php 
   $number = 0;
   foreach  ($attachments as $attachment): ?>
    <?php 
      $item = $attachment->getItem();
      $file = $attachment->getFile();
      
      $itemLink = record_url($item);
      $itemTitle = metadata($item, array('Dublin Core', 'Title'));
      $itemCreator = metadata($item, array('Dublin Core', 'Creator'));
      $itemUri = metadata($file,'square_thumbnail_uri');
      $itemfullUri = metadata($file,'fullsize_uri');
      $number++;
    ?>

        
	<li><div class="popup">
		<a href="#image-<?php echo $number?>">
			<img src="<?php echo $itemUri?>" alt="<?php echo $itemTitle?>">
                        <div class="hoveroverlay"><div class="text"></div>
                        </div>
                </a></div>
		<div class="lb-overlay" id="image-<?php echo $number?>">
			<img src="<?php echo $itemfullUri?>" alt="<?php echo $itemTitle?>" />
			<div>
				<h3><?php echo $itemTitle?></h3>
                                <p><?php echo $itemCreator?><br><a class="view-item" href="<?php echo $itemLink ?>">Open item</a></p>
				<a href="#image-<?php echo $number-1?>" class="lb-prev">Prev</a>
				<a href="#image-<?php echo $number+1?>" class="lb-next">Next</a>
			</div>
			<a href="#page" class="lb-close">x Close</a>
		</div>
	</li>
	



      <?php endforeach ?>
</ul>
