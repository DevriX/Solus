(function($) {
	/* Off-Canvas Menu */
	$('.navigation-button').sidr({
		name: 'sidr-main',
		side: 'left',
		renaming: false,
		displace: false,
		source: '.main-navigation'
	});

	// Show hidden nav icon
	$(document).scroll(function() {
		var y = $(this).scrollTop();
		if (y > 200) {
			$('body').addClass('sidr-main-float')
		} else {
			$('body').removeClass('sidr-main-float')
		}
	});
})(jQuery);

( function( $ ) {
    // var container = document.getElementById( 'site-navigation' );
    var dropdownToggle = $( '<button />', {
        'class': 'dropdown-toggle',
        'aria-expanded': false
    } ).append( $( '<span />', {
        'class': 'screen-reader-text',
        text: "expand child menu"
    } ) );

    $(".sidr-inner").find( '.menu-item-has-children > a' ).after( dropdownToggle );

    // Toggle buttons and submenu items with active children menu items.
    $(".sidr-inner").find( '.current-menu-ancestor > button' ).addClass( 'toggled-on' );
    $(".sidr-inner").find( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

    // Add menu items with submenus to aria-haspopup="true".
    $(".sidr-inner").find( '.menu-item-has-children' ).attr( 'aria-haspopup', 'true' );

    $(".sidr-inner").find( '.dropdown-toggle' ).click( function( e ) {
        var _this = $( this )

        e.preventDefault();
        _this.toggleClass( 'toggled-on' );
        _this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );

        // jscs:disable
        _this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
    } );
} )( jQuery );
