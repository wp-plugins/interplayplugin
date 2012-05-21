<?php

/**
 * 
 * @package			org.interplay.wordpress.event.template
 * @title			list.php
 * @contributors 	AJ Michels (www.ajmichels.com)
 * @version 		1.5.0
 * @copyright		Copyright (C) 2012 Body Wisdom, Inc
 * 					
 * 					This program is free software; you can redistribute it and/or
 * 					modify it under the terms of the GNU General Public License
 * 					as published by the Free Software Foundation; either version 2
 * 					of the License, or (at your option) any later version.
 * 					
 * 					This program is distributed in the hope that it will be useful,
 * 					but WITHOUT ANY WARRANTY; without even the implied warranty of
 * 					MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * 					GNU General Public License for more details.
 * 					
 * 					You should have received a copy of the GNU General Public License
 * 					along with this program; if not, write to the Free Software
 * 					Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 */

?>

<?php if ( is_array( $events ) && count( $events ) > 0 ) { ?>
	
	<div class="interplay-plugin events treelist">
		<?php foreach ( $events as $event ) { echo $event->htmlContent; } ?>
	</div>
	
<?php } else { ?>
	
	<div class="interplay-plugin message">There are currently no events.</div>
	
<?php } ?>