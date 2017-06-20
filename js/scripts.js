( function( $ ) {
	$( document ).ready( function() {
		var dongle = location.search.replace( "?", "" ).split( "=" );

		if ( dongle === "dev" ) {
			$( "." + dongle ).show();
		}

		if ( dongle === "es" ) {
			$( "body" ).addClass( "espanol" );
		}

		// Responded Spine Shrinks on Scroll
		$( document ).scroll( function() {
			var top = $( document ).scrollTop();

			if ( top > 50 ) {
				$( "#spine" ).not( ".inserted" ).addClass( "scanned" );
			} else {
				$( "#spine" ).removeClass( "scanned" );
			}
		} );

		/* Clicking Outside Closes It */
		$( document ).mouseup( function( e ) {
			var container = $( "#spine.inserted" );

			if ( container.has( e.target ).length === 0 ) {
				container.toggleClass( "inserted out" );
			}
		} );

		/* Touching Outside Closes It */
		$( document ).on( "touchstart", function( event ) {
			if ( !$( event.target ).closest( "#spine.inserted" ).length ) {
				$( "#spine.inserted" ).toggleClass( "inserted out" );
			}
		} );

		$( "nav ul" ).parents( "li" ).addClass( "parent" ).append( "<u></u>" );
		$( "nav ul" ).siblings( "a" ).addClass( "sibling" );
		$( "nav u" ).click( function() {
			$( this ).parent( "li" ).siblings().removeClass( "opened" );
			$( this ).parent( "li" ).toggleClass( "opened" );
		} );
		$( "#offsite li a" ).append( " <i class='icon-external-link'></i>" );
	} );
}( jQuery ) );
