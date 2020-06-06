jQuery( document ).on( 'keyup', function( e ) {
  var modal = UIkit.modal( '.uk-modal' );
  if ( e.keyCode === 27 && modal.isActive() ) {
      modal.hide();
  }
} );
