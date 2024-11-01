<?php
	
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
	
function spice_archive_page_shortocodes() {
	add_options_page( 'Archive Page Shortcodes', 'Spice archive Page', 'update_core', 'spice_archive_page', 'Spice_archive_page_shortocodes_function' );
	}
	
add_action( 'admin_menu', 'spice_archive_page_shortocodes' );	
		
function spice_archive_page_shortocodes_function(){ ?>
	
	<div class="postbox-container metabox-holder meta-box-sortables" style="width: 65%">
		<div style="margin:0 5px;">
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br></div>
				<h3 class="handle">Spice Archive Page Plugin Settings</h3>
				<div class="inside">
					<form method="post" action="options.php">
						<fieldset class="options">
							<table class="form-table">
                                <tbody>
									<tr>
                                    <th>Description</th>
                                    <td>
                                        <p>Spice archvie page plugin gives you shortcode for displaying yearly and monthly archives. You can use the shortcode in posts, pages and sidebars</p>
                                    </td>
									</tr><tr>
                                    <th>Shortcode</th>
                                    <td>
                                        <p>Paste the shortcode <strong>[spicearchive]</strong> in pages.</p>
                                    </td>
                                </tr><tr>
                                    <th>Shortcode Attributes</th>
                                    <td>
                                            <p><b>type</b> - The type of archive you want to display like yearly,monthly and daily, for displaying monthly archive pass attribute type along with value monthly i.e type="monthly"</p>
											<p><b>limit</b> - Count of results you want to show, ie if you are displaying monthly archive then limit="5" will show only 5 months in which posts published.</p>

                                    </td>
                                </tr>
                                

                                </tbody></table>
							</fieldset>
					</form></div>
				</div>
			</div>
		</div>
		
		<div class="postbox-container side metabox-holder meta-box-sortables" style="width:35%;">
			<div style="margin:0 5px;">
				<div class="postbox">
					<div class="handlediv" title="Click to toggle"><br></div>
					<div class="inside">
                    <h3>Example Usage</h3>
               
				<p>For displaying yearly archive use shortcode <br> <strong>[spicearchive type="yearly"]</strong></p>

				<p>Use this shortcode for displaying latest 5 months in which posts are published <br><strong>[spicearchive type="monthly" limit ="5"]</strong></p>

				<p></p>
                                    
                </div>				
				</div>
			</div>
			<div class="clear"></div>
		</div>
	
	<?php } ?>