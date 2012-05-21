<?php

/**
 * 
 * @package			org.interplay.wordpress.admin.template
 * @title			pluginSettings.php
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
 
 $clearCacheLink = $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING'];
 if ( !array_key_exists( 'clearCache', $_REQUEST ) ) {
	$clearCacheLink .= '&clearCache';
 }

?>

<script type="text/javascript"> 
<!--
	jQuery(function($) {
		$("#calendar-color-primary").attachColorPicker();
		$("#calendar-color-accent").attachColorPicker();
		$("#countdown-color-primary").attachColorPicker();
		$("#countdown-color-accent").attachColorPicker();
	});
//-->
</script> 

<div class="wrap"> 
	
	<div id="icon-options-general" class="icon32"><br /></div>
	
	<h2>Interplay Plugin Settings</h2>
	
	<form method="post" action="options.php">
		
		<?php echo $formHeader; ?>
		
		<div>
			
			<fieldset>
				<legend><h3>General Settings</h3></legend> 
				
				<table class="form-table"> 
					
					<tr valign="top"> 
						<th scope="row"><label for="subscription_key">Subscription Key</label></th> 
						<td>
							<input name="subscription_key" type="text" id="subscription_key" 
								value="<?php echo $subscriptionKey; ?>" size="56" />
						</td> 
					</tr>
					
					<tr valign="top"> 
						<th scope="row"><label for="single-event-page">Single Event Page</label></th> 
						<td>
							<input name="single-event-page" type="text" id="single-event-page" 
								value="<?php echo $singleEventPage; ?>" size="56" /><br/>
							<span><em>post/page permalink for [InterplaySingleEvent/]</em></span>
						</td> 
					</tr>
					
					<tr valign="top"> 
						<th scope="row"><label for="single-event-page">Data Cache</label></th> 
						<td>
							<a href="<?php echo $clearCacheLink; ?>">Clear Cache</a><br/>
							<span><em>The Interplay wordpress plugin uses data caching to improve<br/>
							performance. However, this can sometimes result in your information not<br/> 
							being displayed immediately after making changes on the Interplay.org<br/>
							website in the leaders circle. This link will clear the data cache and<br/>
							can be used anytime this issue occurs.</em></span>
						</td> 
					</tr>
					
				</table>
				
			</fieldset>
			
			<h3>Configuration</h3>
			
			<p>There are currently three different types of data which can be displayed with the 
				plugin.  <em>Events</em> (Happenings), <em>Leaders</em>, and <em>Performing Groups</em>.  
				Displaying this information on your site is done via shortcodes.  These shortcodes 
				are placed on pages or posts and are then replaced by the interplay content when 
				users view the page.  A good approach is to create a page for each of the different 
				types of content and place the appropriate shortcode on each page.</p>
			
			<h4>ShortCodes</h4>
			
			<dl>
				<dt style="font-weight:bold;">[InterplayEvents/]</dt>
				<dd>This shortcode will display all events associated with the region or leader
					defined with the web service account.</dd>
					
				<dt style="font-weight:bold;">[InterplaySingleEvent/]</dt>
				<dd>This shortcaode will display the full details for a single interplay event. This
					process requires that an identifier for the event be included in the URL.
					<em>ex. http://mydomain.com/?page_id=2&event=123</em></dd>
				
				<dt style="font-weight:bold;">[InterplayLeaders/]</dt>
				<dd>This shortcode will display all leaders associated with the region defined with 
					the web service account. If the web service account is associated with a leader
					rather than a region only that leader will be displayed in this list.</dd>
					
				<dt style="font-weight:bold;">[InterplayPerformances/]</dt>
				<dd>This shortcode will display all performing groups associated with the region or 
					leader defined with the web service account.</dd>
			</dl>
			
			<p><em>Note: Use of the shortcodes may result in links to external websites (links back
				 to interplay.org and links to leader websites) being output on your website.</em></p>
			
			<h3>Support</h3>
			
			<p>If you experience issues either using or setting up the plugin please feel free to 
				contact <a href="mailto:wordpress@interplay.org">wordpress@interplay.org</a>.</p>
			
		</div>
		
		<div>
			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</div>
		
	</form>
	
</div>