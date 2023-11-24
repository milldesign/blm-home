//ここに追加したいJavaScript、jQueryを記入してください。
//このJavaScriptファイルは、親テーマのJavaScriptファイルのあとに呼び出されます。
//JavaScriptやjQueryで親テーマのjavascript.jsに加えて関数を記入したい時に使用します。

$(document).ready(function() {
  const body = $('body');
  const menuToggle = $('#menu-toggle');
  const menuContainer = "#" + menuToggle.attr('aria-controls');
  const menuItem = $('ul.drawer-links a');
  let scrollPosition;

  menuItem.attr('tabindex', '-1');

  // ドロワーメニューの開閉
  menuToggle.click(function() {
    if (menuToggle.attr('aria-expanded') === 'true') {
      menuClose(menuContainer);
      window.scrollTo(0, scrollPosition);
    } else {
      menuOpen(menuContainer);
  }
  });

  $('.drawer-links a[href*="#"]').click(function() {
    menuClose(menuContainer);
  });

  function menuOpen(menuContainer) {
    scrollPosition = window.scrollY;
    menuToggle.addClass('active');
    menuToggle.attr('aria-expanded', 'true');
    menuToggle.attr('aria-label', 'Close');
    $(menuContainer).attr('aria-hidden', 'false');
    body.addClass('fixed');
    body.css('padding-top', $( '#wpadminbar' ).innerHeight() + 'px');
    $('#menu-container').css('margin-top', $( '#wpadminbar' ).innerHeight() + 'px');
    menuItem.attr('tabindex', '0');
  }

  function menuClose(menuContainer) {
    body.removeClass('fixed');
    body.css('padding-top', 0);
    menuToggle.removeClass('active');
    menuToggle.attr('aria-expanded', 'false');
    menuToggle.attr('aria-label', 'Menu');
    $(menuContainer).attr('aria-hidden', 'true');
    menuItem.attr('tabindex', '-1');
  }

  // ページ遷移時のヘッダー分位置調整
  window.addEventListener( 'load', function() {
    const headerHight = document.getElementById( 'header-container' ).clientHeight;

    if( location.hash.length ) {
      $( 'body, html' ).stop().scrollTop( 0 );
      setTimeout( function() {
        scrollToAnker( location.hash ) ;
      }, 100);
    }

    if ( typeof scrollToAnker != 'function' ) {
      function scrollToAnker( hash ) {
        let target = $( hash );
        let position;
        if (window.matchMedia("(min-width: 1025px)").matches) {
          if ( $('#wpadminbar').length ) {
            position = target.offset().top - (headerHight + $('#wpadminbar').innerHeight() + 45);
          } else {
            position = target.offset().top - (headerHight + 45);
          }
        } else {
          position = target.offset().top - headerHight;
        };
        $( 'body,html' ).stop().animate( { scrollTop: position }, 500 );
      }
    }
    
    $( 'a[href*="#"]' ).on( 'click', function() {
      var href = $( this ).attr( 'href' ).substr( $( this ).attr( 'href' ).indexOf( '#' ) );
      var target = $( href == "#" || href == "" ? 'html' : href );
      if( target != undefined ) {
        let position;

        if ( $('#wpadminbar').length ) {
          position = target.offset().top - (headerHight + $('#wpadminbar').innerHeight());
        } else {
          position = target.offset().top - headerHight;
        }
        
        $( 'html, body' ).animate( { scrollTop: position }, 500, 'swing' );
      }
      return false;
    });
  }, false );


  // スクロールに合わせてアニメーション
  $(window).scroll(function() {
    $( '.animation' ).each( function() {
			var elemPos = $( this ).offset().top + 50;
			var scroll = $( window ).scrollTop();
			var windowHeight = $( window ).height();

			if ( scroll >= elemPos - windowHeight ) {
				$( this ).addClass( 'active' );
			}
      // else {
			// 	$( this ).removeClass( 'active' );
			// }
    });
  });
});

