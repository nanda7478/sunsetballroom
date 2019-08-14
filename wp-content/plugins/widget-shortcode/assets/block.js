( function( wp ) {
	var el = wp.element.createElement;
	var __ = wp.i18n.__;
	var ServerSideRender = wp.components.ServerSideRender;
	var InspectorControls = wp.editor.InspectorControls;
	var SelectControl = wp.components.SelectControl;

	wp.blocks.registerBlockType( 'widget-shortcode/block', {
		title: __( 'Widget Shortcode', 'widget-shortcode' ),
		icon: 'welcome-widgets-menus',
		category: 'widgets',
		attributes : {
			id: {
				default : '',
			},
		},
		// Display block preview and UI
		edit( props ) {
			return el( 'div', {}, [
				el( ServerSideRender, {
					block: "widget-shortcode/block",
					attributes:  props.attributes
				} ),
				el( InspectorControls, {}, [
					el( SelectControl, {
						value : props.attributes.id,
						label : __( 'Widget', 'widget-shortcode' ),
						options : widgetShortcodeGutenberg.widgets,
						onChange : function( id ) {
							props.setAttributes( { id } );
						},
					} )
				] )
			] )
		},
		save() {
			// nothing to see here, ServerSideRender handles this
			return null;
		},
	} );
}(
	window.wp
) );
