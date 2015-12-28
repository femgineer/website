(function() {
	tinymce.PluginManager.add( 'symple_shortcodes_mce_button', function( editor, url ) {
		editor.addButton( 'symple_shortcodes_mce_button', {
			title: 'Shortcodes',
			type: 'menubutton',
			icon: 'icon symple-shortcodes-icon',
			menu: [
					{
						text: 'Button', /*--- Shortcode title display in admin listing ---*/
						onclick: function() 
						{
							editor.windowManager.open( {
								title: 'Popup Section Name', /*--- PopUp name ---*/ 
								body: 
								[
									{
										type: 'textbox',/*--- textfield ---*/
										name: 't_title',/*--- fieldname in shortcode ---*/
										label: 'Title', /*--- Fieldname gore here ---*/
										value: 'Button Title',
									},
									{
										type: 'textbox',
										name: 'links',
										label: 'Link',
										value: 'Link add here.',
									},
									{
										type: 'listbox',/*--- dropdown ---*/
										name: 'btn_colour',/*--- field name in shortcode ---*/
										label: 'Colour',  /*--- Fieldname gore here ---*/
										'values': [
											{text: 'lightpurple', value: 'lightpurple'},
											{text: 'purple', value: 'purple'},
											{text: 'green', value: 'green'},
											{text: 'yellow', value: 'yellow'},
											{text: 'black', value: 'black'},
											{text: 'gray', value: 'gray'},
											{text: 'darkgreen', value: 'darkgreen'},
											{text: 'darkpurple', value: 'darkpurple'},
											
										]	
									},
									{
										type: 'listbox',/*--- dropdown ---*/
										name: 'arrow',/*--- field name in shortcode ---*/
										label: 'Arrow',  /*--- Fieldname gore here ---*/
										'values': [
											{text: 'None', value: ''},
											{text: 'left', value: 'left'},
											{text: 'right', value: 'right'},
											
										]	
									},
									
								],
								onsubmit: function( e ) 
								{
									//editor.insertContent( '[sc_button href="' + e.data.field_name + '" title="' + e.data.textarea_ + '" ]' + e.data.textarea_ + '[/sc_button]'); 
									
									editor.insertContent('[BUTTON color="'+e.data.btn_colour+'" title="'+e.data.t_title+'" link="'+e.data.links+'" arrow="'+e.data.arrow+'"]');
									
								}
							});
						}						
					},
					
					{
						text: 'Link Button', /*--- Shortcode title display in admin listing ---*/
						onclick: function() 
						{
							editor.windowManager.open( {
								title: 'Link button', /*--- PopUp name ---*/ 
								body: 
								[
									{
										type: 'textbox',/*--- textfield ---*/
										name: 't_title',/*--- fieldname in shortcode ---*/
										label: 'Title', /*--- Fieldname gore here ---*/
										value: 'Button Title',
									},
									{
										type: 'textbox',
										name: 'links',
										label: 'Link',
										value: 'Link add here.',
									},
									{
										type: 'listbox',/*--- dropdown ---*/
										name: 'btn_colour',/*--- field name in shortcode ---*/
										label: 'Colour',  /*--- Fieldname gore here ---*/
										'values': [
											{text: 'lightpurple', value: 'lightpurple'},
											{text: 'purple', value: 'purple'},
											{text: 'green', value: 'green'},
											{text: 'yellow', value: 'yellow'},
											{text: 'black', value: 'black'},
											{text: 'gray', value: 'gray'},
											{text: 'darkgreen', value: 'darkgreen'},
											{text: 'darkpurple', value: 'darkpurple'},
											
										]	
									},
									{
										type: 'listbox',/*--- dropdown ---*/
										name: 'arrow',/*--- field name in shortcode ---*/
										label: 'Arrow',  /*--- Fieldname gore here ---*/
										'values': [
											{text: 'None', value: ''},
											{text: 'left', value: 'left'},
											{text: 'right', value: 'right'},
											
										]	
									},
									
								],
								onsubmit: function( e ) 
								{
									//editor.insertContent( '[sc_button href="' + e.data.field_name + '" title="' + e.data.textarea_ + '" ]' + e.data.textarea_ + '[/sc_button]'); 
									
									editor.insertContent('[LINK color="'+e.data.btn_colour+'" title="'+e.data.t_title+'" link="'+e.data.links+'" arrow="'+e.data.arrow+'"]');
									
								}
							});
						}						
					},
					
					{
						text: 'Testimonials', /*--- Shortcode title display in admin listing ---*/
						onclick: function() 
						{
							editor.windowManager.open( {
								title: 'Testimonials', /*--- PopUp name ---*/ 
								body: 
								[
									{
										type: 'textbox',/*--- textfield ---*/
										name: 'idnot',/*--- fieldname in shortcode ---*/
										label: 'Testimonials id', /*--- Fieldname gore here ---*/
										value: '',
									},
									
									
									
								],
								onsubmit: function( e ) 
								{
									//editor.insertContent( '[sc_button href="' + e.data.field_name + '" title="' + e.data.textarea_ + '" ]' + e.data.textarea_ + '[/sc_button]'); 
									
									editor.insertContent('[TESTIMONIAL id="' + e.data.idnot + '"]');
									
								}
							});
						}						
					},
					
					{
						text: 'Video Popup', /*--- Shortcode title display in admin listing ---*/
						onclick: function() 
						{
							editor.windowManager.open( {
								title: 'Testimonials', /*--- PopUp name ---*/ 
								body: 
								[
									{
										type: 'textbox',/*--- textfield ---*/
										name: 'vidurl',/*--- fieldname in shortcode ---*/
										label: 'Video URL', /*--- Fieldname gore here ---*/
										value: '',
									},
									{
										type: 'textbox',/*--- textfield ---*/
										name: 'imagepatht',/*--- fieldname in shortcode ---*/
										label: 'Image URL', /*--- Fieldname gore here ---*/
										value: '',
									},
									{
										type: 'listbox',/*--- dropdown ---*/
										name: 'alignment',/*--- field name in shortcode ---*/
										label: 'Align',  /*--- Fieldname gore here ---*/
										'values': [
											{text: 'center', value: 'center'},
											{text: 'left', value: 'left'},
											{text: 'right', value: 'right'},
											
										]	
									},
									
									
									
								],
								onsubmit: function( e ) 
								{
									//editor.insertContent( '[sc_button href="' + e.data.field_name + '" title="' + e.data.textarea_ + '" ]' + e.data.textarea_ + '[/sc_button]'); 
									
									editor.insertContent('[POPUP_VIDEO url="' + e.data.vidurl + '" image="' + e.data.imagepatht + '" align="' + e.data.alignment + '"]');
									
								}
							});
						}						
					},
					/*{
						text: 'Authour Info', 
						onclick: function() 
						{
							editor.windowManager.open( {
								title: 'Authour', 
								body: 
								[
									{
										type: 'textbox',
										name: 'aname',
										label: 'Authour Name', 
										value: '',
									},
									{
										type: 'textbox',
										name: 'textarea_',
										label: 'title',
										value: 'About Authour',
										multiline: true,
										minWidth: 400,
										minHeight: 200
									},
									
									
									
								],
								onsubmit: function( e ) 
								{
									
									
									editor.insertContent('[quote author="' + e.data.aname + '"]' + e.data.textarea_ + '[/quote]');
									
								}
							});
						}						
					},
					 */
					/* {
						text: 'Textarea', 
						onclick: function() 
						{
							editor.windowManager.open( {
								title: 'Popup Section Name',
								body: 
								[
									{
										type: 'textbox',
										name: 'field_name',
										label: 'title', 
										value: 'Title goes here.',
									},
									{
										type: 'textbox',
										name: 'textarea_',
										label: 'title',
										value: 'Title goes here.',
										multiline: true,
										minWidth: 400,
										minHeight: 200
									},
									
									
								],
								onsubmit: function( e ) 
								{
									editor.insertContent( '[sc_name title="' + e.data.field_name + '" ]' + e.data.textarea_ + '[/sc_name]');
								}
							});
						}
					}, */
					
				]
			});
		});
	})
();