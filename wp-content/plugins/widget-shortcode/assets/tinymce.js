(function($) {
	if ( typeof widgetShortcodeTinyMCE === 'undefined' )
		return;

	if ( widgetShortcodeTinyMCE.widgets.length < 1 )
		return;

	tinymce.PluginManager.add( 'widgetShortcode', function( editor, url ) {
		var items = [];
		$.each( widgetShortcodeTinyMCE.widgets, function( i, v ) {
			var item = {
				'text' : v.label,
				'body': {
					'type': v.label
				},
				'onclick' : function(){
					editor.insertContent( '[widget id="' + v.value + '"]' );
				}
			};
			items.push( item );
		} );

		editor.addButton( 'widgetShortcode', {
			title: widgetShortcodeTinyMCE.title,
			type : 'menubutton',
			image : widgetShortcodeTinyMCE.image,
			menu : items
		});
	});
})(jQuery);