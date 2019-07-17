<?php 
// add menu to admin menu
function add_social_media_links(){
	add_options_page('social media links options','social media links','manage_options','socialmedia-options','social_media_add');
}

// add settings to control functionality ---------
function social_media_add(){
	// init settings
	global $socialmedia_options;

	ob_start(); ?>
		<div class="wrap">
			<h2><?php _e('social media to your content','social_domain'); ?></h2>
			<p><?php _e('social media settings to posts','social_domain'); ?></p>
			<form method="post" action="options.php">
				<?php settings_fields('social_media_group'); ?>
				<table class="form-table">
					<tbody>
						<tr>
							<h2><?php _e('settings of links','social_domain') ?></h2>
							<th scope="row">
								<label for="socialmedia_settings[enable]">
									<?php _e('enable add social media','social_domain'); ?>
								</label>
							</th>
							<td>
								<input type="checkbox" name="socialmedia_settings[enable]" id="socialmedia_settings[enable]" value="1"
								<?php checked('1',$socialmedia_options['enable']); ?>>
							</td>						
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[show_feed]">
									<?php _e('show in posts','social_domain'); ?>
								</label>
							</th>
							<td>
								<input type="checkbox" name="socialmedia_settings[show_feed]" id="socialmedia_settings[show_feed]" value="1"
								<?php checked('1',$socialmedia_options['show_feed']); ?>>
							</td>						
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[links color]">
									<?php _e('color to social media icons','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="text" name="socialmedia_settings[color_link]" id="socialmedia_settings[color_link]"
								value="<?php echo $socialmedia_options['color_link']; ?>">
								<p><?php _e('your color','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th>
								<h2><?php _e('add social media urls','social_domain') ?></h2>					
							</th>
						</tr>														
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[facebook]">
									<?php _e('facebook link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[facebook]" id="socialmedia_settings[facebook]"
								value="<?php echo $socialmedia_options['facebook']; ?>">
								<p><?php _e('your facebook link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[linkedin]">
									<?php _e('linkedin link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[linkedin]" id="socialmedia_settings[linkedin]"
								value="<?php echo $socialmedia_options['linkedin']; ?>">
								<p><?php _e('your linkedin link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[twitter]">
									<?php _e('twitter link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[twitter]" id="socialmedia_settings[twitter]"
								value="<?php echo $socialmedia_options['twitter']; ?>">
								<p><?php _e('your twitter link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[behance]">
									<?php _e('behance link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[behance]" id="socialmedia_settings[behance]"
								value="<?php echo $socialmedia_options['behance']; ?>">
								<p><?php _e('your behance link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[dribble]">
									<?php _e('dribble link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[dribble]" id="socialmedia_settings[dribble]"
								value="<?php echo $socialmedia_options['dribble']; ?>">
								<p><?php _e('your dribble link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[instagram]">
									<?php _e('instagram link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[instagram]" id="socialmedia_settings[instagram]"
								value="<?php echo $socialmedia_options['instagram']; ?>">
								<p><?php _e('your instagram link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[youtube]">
									<?php _e('youtube link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[youtube]" id="socialmedia_settings[youtube]"
								value="<?php echo $socialmedia_options['youtube']; ?>">
								<p><?php _e('your youtube link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[skype]">
									<?php _e('skype link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[skype]" id="socialmedia_settings[skype]"
								value="<?php echo $socialmedia_options['skype']; ?>">
								<p><?php _e('your skype link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[reddit]">
									<?php _e('reddit link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[reddit]" id="socialmedia_settings[reddit]"
								value="<?php echo $socialmedia_options['reddit']; ?>">
								<p><?php _e('your reddit link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[wikipedia]">
									<?php _e('wikipedia link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[wikipedia]" id="socialmedia_settings[wikipedia]"
								value="<?php echo $socialmedia_options['wikipedia']; ?>">
								<p><?php _e('your wikipedia link','social_domain'); ?></p>
							</td>								
						</tr>
						<tr>
							<th scope="row">
								<label for="socialmedia_settings[pinterest]">
									<?php _e('pinterest link','social_domain'); ?>
								</label>
							</th>
							<td>
								<input class="reguler-text" type="url" name="socialmedia_settings[pinterest]" id="socialmedia_settings[pinterest]"
								value="<?php echo $socialmedia_options['pinterest']; ?>">
								<p><?php _e('your pinterest link','social_domain'); ?></p>
							</td>								
						</tr>																																										
					</tbody>
				</table>
				<button class="button button-primary" type="submit" name="submit" id="submit" value="<?php _e('save changes','social_domain') ?>"> <?php _e('save changes','social_domain') ?></button>
			</form>
		</div>
	<?php
	echo ob_get_clean();
}

add_action('admin_menu','add_social_media_links');

function social_media_register_settings(){
	register_setting('social_media_group','socialmedia_settings');
}

add_action('admin_init','social_media_register_settings');
