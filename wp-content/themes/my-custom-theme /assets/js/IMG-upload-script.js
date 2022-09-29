// jQuery(function($){
//     $('body').on('click', '.aw_upload_image_button', function(e){
//         e.preventDefault();
//         aw_uploader = wp.media({
//             title: 'Custom image',
//             button: {
//                 text: 'Select'
//             },
//             multiple: false
//         }).on('select', function() {
//             var attachment = aw_uploader.state().get('selection').first().toJSON();
//             $('#aw_custom_image').val(attachment.url);
//         })
//         .open();
//     });
// });

// (function( $ ) {
// 	'use strict';

// 	$(function() {
		
// 		$('#upload_image').click(open_custom_media_window);

// 		function open_custom_media_window() {
			
// 			if (this.window === undefined) {
// 				this.window = wp.media({
// 					title: 'Select Image',
// 					library: {type: 'image'},
// 					multiple: false,
// 					button: {text: 'Select'}
// 				});

// 				var self = this;
// 				this.window.on('select', function() {
// 					var response = self.window.state().get('selection').first().toJSON();

// 					$('.wp_attachment_id').val(response.id);
// 					$('.image').attr('src', response.sizes.thumbnail.url);
//                     $('.image').show();
// 				});
// 			}

// 			this.window.open();
// 			return false;
// 		}
// 	});
// })( jQuery );