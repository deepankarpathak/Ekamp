<!-- Preload Images -->

<img src="<?php echo PMXI_Plugin::ROOT_URL . '/static/img/soflyy-logo.png'; ?>" class="wpallimport-preload-image"/>

<?php

$l10n = array(
	'queue_limit_exceeded' => 'You have attempted to queue too many files.',
	'file_exceeds_size_limit' => 'This file exceeds the maximum upload size for this site.',
	'zero_byte_file' => 'This file is empty. Please try another.',
	'invalid_filetype' => 'This file type is not allowed. Please try another.',
	'default_error' => 'An error occurred in the upload. Please try again later.',
	'missing_upload_url' => 'There was a configuration error. Please contact the server administrator.',
	'upload_limit_exceeded' => 'You may only upload 1 file.',
	'http_error' => 'HTTP error.',
	'upload_failed' => 'Upload failed.',
	'io_error' => 'IO error.',
	'security_error' => 'Security error.',
	'file_cancelled' => 'File canceled.',
	'upload_stopped' => 'Upload stopped.',
	'dismiss' => 'Dismiss',
	'crunching' => 'Crunching&hellip;',
	'deleted' => 'moved to the trash.',
	'error_uploading' => 'has failed to upload due to an error',
	'cancel_upload' => 'Cancel upload',
	'dismiss' => 'Dismiss'
);

?>
<script type="text/javascript">
	var plugin_url = '<?php echo WP_ALL_IMPORT_ROOT_URL; ?>';
	var swfuploadL10n = <?php echo json_encode($l10n); ?>;
</script>

<table class="wpallimport-layout wpallimport-step-1">
	<tr>
		<td class="left">
			<div class="wpallimport-wrapper">	
				<h2 class="wpallimport-wp-notices"></h2>
				<div class="wpallimport-header">
					<div class="wpallimport-logo"></div>
					<div class="wpallimport-title">
						<p><?php _e('WP All Import', 'wp_all_import_plugin'); ?></p>
						<h2><?php _e('Import XML / CSV', 'wp_all_import_plugin'); ?></h2>					
					</div>
					<div class="wpallimport-links">
						<a href="http://www.wpallimport.com/support/" target="_blank"><?php _e('Support', 'wp_all_import_plugin'); ?></a> | <a href="http://www.wpallimport.com/documentation/" target="_blank"><?php _e('Documentation', 'wp_all_import_plugin'); ?></a>
					</div>
				</div>			

				<div class="clear"></div>				
				
				<?php if ($this->errors->get_error_codes()): ?>
					<?php $this->error() ?>
				<?php endif ?>				

				<?php //do_action('pmxi_choose_file_header'); ?>

		        <form method="post" class="wpallimport-choose-file" enctype="multipart/form-data" autocomplete="off">
		        	
		        	<div class="wpallimport-upload-resource-step-one">

						<input type="hidden" name="is_submitted" value="1" />						
						
						<div class="clear"></div>											
						
						<div class="wpallimport-import-types">
							<h2><?php _e('First, specify how you want to import your data', 'wp_all_import_plugin'); ?></h2>
							<a class="wpallimport-import-from wpallimport-upload-type <?php echo ('upload' == $post['type'] and ! empty($_POST)) ? 'selected' : '' ?>" rel="upload_type" href="javascript:void(0);">
								<span class="wpallimport-icon"></span>
								<span class="wpallimport-icon-label"><?php _e('Upload a file', 'wp_all_import_plugin'); ?></span>
							</a>
							<a class="wpallimport-import-from wpallimport-url-type <?php echo 'url' == $post['type'] ? 'selected' : '' ?>" rel="url_type" href="javascript:void(0);">
								<span class="wpallimport-icon"></span>
								<span class="wpallimport-icon-label"><?php _e('Download from URL', 'wp_all_import_plugin'); ?></span>
							</a>
							<a class="wpallimport-import-from wpallimport-file-type <?php echo 'file' == $post['type'] ? 'selected' : '' ?>" rel="file_type" href="javascript:void(0);">
								<span class="wpallimport-icon"></span>
								<span class="wpallimport-icon-label"><?php _e('Use existing file', 'wp_all_import_plugin'); ?></span>
							</a>
						</div>
						
						<input type="hidden" value="<?php echo $post['type']; ?>" name="type"/>

						<div class="wpallimport-upload-type-container" rel="upload_type">						
							<div id="plupload-ui" class="wpallimport-file-type-options">
					            <div>				                
					                <input type="hidden" name="filepath" value="<?php echo $post['filepath'] ?>" id="filepath"/>
					                <a id="select-files" href="javascript:void(0);"/><?php _e('Click here to select file from your computer...', 'wp_all_import_plugin'); ?></a>
					                <div id="progressbar" class="wpallimport-progressbar">
					                	
					                </div>
					                <div id="progress" class="wpallimport-progress">
					                	<div id="upload_process" class="wpallimport-upload-process"></div>				                	
					                </div>
					            </div>
					        </div>
						</div>
						<div class="wpallimport-upload-type-container" rel="url_type">						
							<div class="wpallimport-file-type-options">
								<span class="wpallimport-url-icon"></span>
								<input type="text" class="regular-text" name="url" value="<?php echo ( ! empty($post['url'])) ? esc_attr($post['url']) : ''; ?>" placeholder="Enter a web address to download the file from..."/> 
								<a class="wpallimport-download-from-url rad4" href="javascript:void(0);"><?php _e('Download', 'wp_all_import_plugin'); ?></a>
								<span class="img_preloader" style="top:0; left: 5px; visibility: hidden; display: inline;"></span>
							</div>
							<div class="wpallimport-note" style="margin: 20px auto 0; font-size: 13px;">
								<?php _e('<strong>Hint:</strong> After you create this import, you can schedule it to run automatically, on a pre-defined schedule, with cron jobs. If anything in your file has changed, WP All Import can update your site with the changed data automatically.', 'wp_all_import_plugin'); ?>
							</div>
							<input type="hidden" name="downloaded" value="<?php echo $post['downloaded']; ?>"/>
						</div>
						<div class="wpallimport-upload-type-container" rel="file_type">			
							<?php $upload_dir = wp_upload_dir(); ?>					
							<div class="wpallimport-file-type-options">
								
								<?php
									$files_directory = DIRECTORY_SEPARATOR . PMXI_Plugin::FILES_DIRECTORY . DIRECTORY_SEPARATOR;

									$local_files = array_merge(
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.xml', PMXI_Helper::GLOB_RECURSE),
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.gz', PMXI_Helper::GLOB_RECURSE),
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.zip', PMXI_Helper::GLOB_RECURSE),
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.gzip', PMXI_Helper::GLOB_RECURSE),
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.csv', PMXI_Helper::GLOB_RECURSE),
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.dat', PMXI_Helper::GLOB_RECURSE),
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.psv', PMXI_Helper::GLOB_RECURSE),
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.json', PMXI_Helper::GLOB_RECURSE),
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.txt', PMXI_Helper::GLOB_RECURSE),
										PMXI_Helper::safe_glob($upload_dir['basedir'] . $files_directory . '*.sql', PMXI_Helper::GLOB_RECURSE)
									);
									sort($local_files);
									$sizes = array();
									if ( ! empty($local_files)){
										foreach ($local_files as $file) {
											$sizes[] = filesize($upload_dir['basedir'] . $files_directory . $file);
										}
									}
								?>
								<script type="text/javascript">									
									var existing_file_sizes = <?php echo json_encode($sizes) ?>;
								</script>

								<select id="file_selector">
									<option value=""><?php _e('Select a previously uploaded file', 'wp_all_import_plugin'); ?></option>
									<?php foreach ($local_files as $file) :?>
										<option value="<?php echo $file; ?>" <?php if ( $file == esc_attr($post['file'])):?>selected="selected"<?php endif; ?>><?php echo basename($file); ?></option>
									<?php endforeach; ?>
								</select>
								
								<input type="hidden" name="file" value="<?php echo esc_attr($post['file']); ?>"/>									
								
								<div class="wpallimport-note" style="margin: 0 auto; font-size: 13px;">
									<?php printf(__('Upload files to <strong>%s</strong> and they will appear in this list', 'wp_all_import_plugin'), $upload_dir['basedir'] . $files_directory) ?>
								</div>
							</div>
						</div>		
						<div id="wpallimport-url-upload-status"></div>				

						<?php if (empty($_GET['deligate'])): ?>	
						
						<div class="wpallimport-upload-resource-step-two">
						
							<div class="wpallimport-choose-post-type">

								<input type="hidden" name="wizard_type" value="<?php echo $post['wizard_type']; ?>"/>

								<h2 style="margin-top:0;"><?php _e('Import data from this file into...', 'wp_all_import_plugin'); ?></h2>
								
								<div class="wpallimport-choose-data-type">
									<a class="wpallimport-import-to rad4 wpallimport-to-new-items <?php if ($post['wizard_type'] == 'new') echo 'wpallimport-import-to-checked'; ?>" rel="new" href="javascript:void(0);">
										<span class="wpallimport-import-to-title"><?php _e('New Items', 'wp_all_import_plugin'); ?></span>
										<span class="wpallimport-import-to-arrow"></span>
									</a>
									<a class="wpallimport-import-to rad4 wpallimport-to-existing-items <?php if ($post['wizard_type'] == 'matching') echo 'wpallimport-import-to-checked'; ?>" rel="matching" href="javascript:void(0);">
										<span class="wpallimport-import-to-title"><?php _e('Existing Items', 'wp_all_import_plugin'); ?></span>
										<span class="wpallimport-import-to-arrow"></span>
									</a>
								</div>

								<?php
									
									$custom_types = get_post_types(array('_builtin' => true), 'objects') + get_post_types(array('_builtin' => false, 'show_ui' => true), 'objects'); 
									foreach ($custom_types as $key => $ct) {
										if (in_array($key, array('attachment', 'revision', 'nav_menu_item'))) unset($custom_types[$key]);
									}
									$custom_types = apply_filters( 'pmxi_custom_types', $custom_types );

									$hidden_post_types = get_post_types(array('_builtin' => false, 'show_ui' => false), 'objects');
									foreach ($hidden_post_types as $key => $ct) {
										if (in_array($key, array('attachment', 'revision', 'nav_menu_item'))) unset($hidden_post_types[$key]);
									}
									$hidden_post_types = apply_filters( 'pmxi_custom_types', $hidden_post_types );

								?>	
								<div class="wpallimport-choose-import-direction">
									<div class="wpallimport-extra-text-left">
										<div class="wpallimport-new-records"><?php _e('Create new', 'wp_all_import_plugin'); ?></div>
										<div class="wpallimport-existing-records"><?php _e('Import to existing', 'wp_all_import_plugin'); ?></div>
									</div>
									<div class="wpallimport-extra-text-right">
										<div class="wpallimport-new-records"><?php _e('for each record in my data file.', 'wp_all_import_plugin'); ?></div>
										<div class="wpallimport-existing-records"><?php _e('and update some or all of their data.', 'wp_all_import_plugin'); ?>
											<a class="wpallimport-help" href="#help" style="position: relative; top: -2px;" original-title="The Existing Items option is commonly used to update existing products with new stock quantities while leaving all their other data alone, update properties on your site with new pricing, etc. <br/><br/> In Step 4, you will map the records in your file to the existing items on your site and specify which data points will be updated and which will be left alone.">?</a>								
										</div>
									</div>
									<select name="custom_type_selector" id="custom_type_selector" class="wpallimport-post-types">								
										<?php if ( ! empty($custom_types)): ?>							
											<?php foreach ($custom_types as $key => $cpt) :?>	
												<?php 
													$image_src = 'dashicon-cpt';
													if (  in_array($key, array('post', 'page', 'product', 'import_users') ) )
														$image_src = 'dashicon-' . $key;										
												?>
											<option value="<?php echo $key; ?>" data-imagesrc="dashicon <?php echo $image_src; ?>"><?php echo $cpt->labels->name; ?></option>
											<?php endforeach; ?>
										<?php endif; ?>
										<?php if ( ! empty($hidden_post_types)): ?>							
											<?php foreach ($hidden_post_types as $key => $cpt) :?>	
												<?php 
													$image_src = 'dashicon-cpt';
													if (  in_array($key, array('post', 'page', 'product') ) )
														$image_src = 'dashicon-' . $key;
												?>
											<option value="<?php echo $key; ?>" data-imagesrc="dashicon <?php echo $image_src; ?>"><?php echo $cpt->labels->name; ?></option>								
											<?php endforeach; ?>
										<?php endif; ?>			
									</select>							
								</div>
								<div class="clear wpallimport-extra-text-below">
									<!--div class="wpallimport-existing-records">
										<p><?php _e('In Step 4, you will map the records in your file to the existing items on your site and specify which data points will be updated and which will be left alone.', 'wp_all_import_plugin'); ?></p>
										<p><?php _e('The Existing Items option is commonly used to update existing products with new stock quantities while leaving all their other data alone, update properties on your site with new pricing, etc.', 'wp_all_import_plugin'); ?></p>
									</div-->
								</div>
							</div>
						</div>
						<?php endif; ?>
					</div>					

					<p class="wpallimport-submit-buttons">
						<input type="hidden" name="custom_type" value="<?php echo $post['custom_type'];?>">
						<input type="hidden" name="is_submitted" value="1" />
						<?php wp_nonce_field('choose-file', '_wpnonce_choose-file'); ?>					
						<input type="submit" class="button button-primary button-hero wpallimport-large-button" value="<?php _e('Continue to Step 2', 'wp_all_import_plugin') ?>" id="advanced_upload"/>
					</p>
					
					<table><tr><td class="wpallimport-note"></td></tr></table>
				</form>
				<a href="http://soflyy.com/" target="_blank" class="wpallimport-created-by"><?php _e('Created by', 'wp_all_import_plugin'); ?> <span></span></a>
			</div>
		</td>		
	</tr>
</table>
