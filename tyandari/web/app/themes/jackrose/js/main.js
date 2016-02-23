;jQuery.noConflict();

(function( $ ) {
	"use strict";

	$( document ).on( 'ready', function() {

		var $window = $( window ),
		    $document = $( document ),
		    $body = $( 'body' ),
		    jackrose = {
		    	heroShort : undefined,
		    	heroLong : undefined,
		    };

		/**
		 * Function: Detect Mobile Device
		 */
		// source: http://www.abeautifulsite.net/detecting-mobile-devices-with-javascript/
		var isMobile = {
			Android: function() {
				return navigator.userAgent.match( /Android/i );
			},
			BlackBerry: function() {
				return navigator.userAgent.match( /BlackBerry/i );
			},
			iOS: function() {
				return navigator.userAgent.match( /iPhone|iPad|iPod/i );
			},
			Opera: function() {
				return navigator.userAgent.match( /Opera Mini/i );
			},
			Windows: function() {
				return navigator.userAgent.match( /IEMobile/i );
			},
			any: function() {
				return ( isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows() );
			},
		};

		/**
		 * IE9 Placeholder
		 */
		if ( ! ( 'placeholder' in document.createElement( 'input' ) ) ) {
			$( 'form' ).on( 'submit', function() {
				$( this ).find( '[placeholder]' ).each(function() {
					var $input = $( this );
					if ( $input.val() == $input.attr( 'placeholder' ) ) {
						$input.val( '' );
					};
				});
			});

			$( '[placeholder]' ).on( 'focus', function() {
				var $input = $( this );
				if ( $input.val() == $input.attr( 'placeholder' ) ) {
					$input.val( '' );
					$input.removeClass( 'placeholder' );
				};
			}).on( 'blur', function() {
				var $input = $( this );
				if ( $input.val() == '' || $input.val() == $input.attr( 'placeholder' ) ) {
					$input.addClass( 'placeholder' );
					$input.val( $input.attr( 'placeholder' ) );
				};
			}).blur();
		}

		/**
		 * Animation
		 */
		var $els = $( '[class*="jr-animation-"]' );
		
		// Only enable animation when on non mobile devices.
		if ( $body.hasClass( 'jr-enable-animations' ) && ! isMobile.any() ) {
			$els.one( 'inview', function() {
				$( this ).addClass( 'jr-animate' );
			});
		}
		// Otherwise just disable it.
		else {
			$els.addClass( 'jr-no-animate' );
		}

		/**
		 * Floating Header
		 */
		// Check if header has floating mode enabled.
		if ( $( '.header-section' ).hasClass( 'header-floating' ) ) {
			var detectFloatingHeader = function() {
				if ( $window.scrollTop() >= $( '.header-anchor' ).offset().top - $body.offset().top ) {
					$( '.header-section' ).addClass( 'floating' ).css( 'top', $body.offset().top );
				} else {
					$( '.header-section' ).removeClass( 'floating' ).css( 'top', '' );
				}
			}
			detectFloatingHeader();
			$window.on( 'resize', detectFloatingHeader );
			$window.on( 'scroll', detectFloatingHeader );
		}

		/**
		 * Navigation menu toggle
		 */
		$( '.header-navigation-toggle' ).on( 'click', function( e ) {
			e.preventDefault();
			$( this ).toggleClass( 'active' );
		});
		$( '.header-navigation ul a' ).on( 'click', function( e ) {
			$( '.header-navigation-toggle' ).removeClass( 'active' );
		});

		/**
		 * Jackrose Parallax
		 */
		// Generate parallax background elements.
		$( '[data-jr-parallax]' ).each(function( i, el ) {
			var $el = $( el ),
			    $bg = $( '<div></div>' ),
			    $img = $( '<img>' ),
			    data = JSON.parse( $el.attr( 'data-jr-parallax' ) );

			// Reset native background image style.
			$el.css( 'background-image', '' ).css( 'position', 'relative' );

			// New background element.
			$bg.addClass( 'jr-parallax' ).attr( 'data-stellar-ratio', '0.5' );
			$img.attr( 'src', data.src );
			$img.attr( 'width', data.width );
			$img.attr( 'height', data.height );
			$img.prependTo( $bg );
			$bg.prependTo( $el );
		});

		/**
		 * Resize Background
		 */
		var resizeBG = function() {
			$( '.jr-parallax video, .jr-parallax img' ).each(function( i, el ) {
				var $el       = $( el ),
				    $section  = $el.parent(),
				    min_w     = 0,
				    el_w      = el.tagName == 'VIDEO' ? el.videoWidth : el.naturalWidth,
				    el_h      = el.tagName == 'VIDEO' ? el.videoHeight : el.naturalHeight,
				    section_w = $section.outerWidth(),
				    section_h = $section.outerHeight(),
				    scale_w   = section_w / el_w,
				    scale_h   = section_h / el_h,
				    scale     = scale_w > scale_h ? scale_w : scale_h,
				    new_el_w, new_el_h, offset_top, offset_left;

				if ( scale * el_w < min_w ) {
					scale = min_w / el_w;
				};

				new_el_w = scale * el_w;
				new_el_h = scale * el_h;
				offset_left = ( new_el_w - section_w ) / 2 * -1;
				// offset_top  = ( new_el_h - section_h ) / 2 * -1;
				offset_top  = 0;

				$el.css( 'width', new_el_w );
				$el.css( 'height', new_el_h );
				$el.css( 'margin-top', offset_top );
				$el.css( 'margin-left', offset_left );
			});
		}
		$window.on( 'pageStart', resizeBG );
		$window.on( 'resize', function() {
			// slick has timeout 50
			setTimeout( resizeBG, 100 );
		});

		/**
		 * Navigation Maximum Height
		 */
		var navigationMaxHeight = function() {
			$( '.header-navigation > div > ul' ).css( 'max-height', $window.height() - $( '.header-section' ).innerHeight() - $body.offset().top );
		}
		navigationMaxHeight();
		$window.on( 'resize', navigationMaxHeight );

		/**
		 * Hero Logo Fade Out
		 */
		if ( $( '.hero-logo' ).length > 0 ) {
			var fadeOutHeroLogo = function() {
				var $logo = $( '.hero-logo' ),
				    scroll = $window.scrollTop(),
				    target = $logo.offset().top + ( 0.7 * $logo.outerHeight() );

				$logo.css( 'opacity', 1 - ( scroll / target ).toFixed( 2 ) );
			}
			fadeOutHeroLogo();
			$window.on( 'scroll', fadeOutHeroLogo );
			$window.on( 'resize', fadeOutHeroLogo );
		}

		/**
		 * Smooth Scroll Navigation
		 */
		$( 'a[href="#"]' ).on( 'click', function( e ) {
			e.preventDefault();
		});
		$( '.header-navigation ul a, a.anchor-link' ).on( 'click', function( e ) {
			if ( location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname ) {
				var hash = this.hash,
				    $target = $( hash ),
				    target_top = $target.offset().top - $( '.header-section' ).innerHeight() - $body.offset().top,
				    speed = Math.abs( $window.scrollTop() - target_top ) / 2.5;
				$target = $target.length ? $target : $( '[name=' + this.hash.slice(1) +']' );
				if ( $target.length ) {
					$( 'html,body' ).animate({
						scrollTop: target_top,
					}, speed );
					return false;
				}
			}
		});

		/**
		 * Countdown
		 */
		if ( $.fn.countdown ) {
			$( '.jr-so-countdown' ).each(function( i, el ) {
				var $el = $( el ),
				    target = $el.attr( 'data-jr-target' ),
				    $fragments = $el.children();

				$el.countdown( target, {
					elapse: true,
				}).on( 'update.countdown', function( e ) {

					$fragments.each(function( j, fragment ) {
						var $fragment = $( fragment ),
						    format = $fragment.attr( 'data-jr-format' ),
						    singular = $fragment.attr( 'data-jr-singular' ),
						    plural = $fragment.attr( 'data-jr-plural' );

						$fragment.find( 'big' ).html( e.strftime( '%' + format ) );
						$fragment.find( 'small' ).html( e.strftime( '%!' + format + ':' + singular + ',' + plural + ';' ) );
					});
				});
			});
		}

		/**
		 * Light gallery
		 */
		if ( $.fn.lightGallery ) {
			$( '.lightgallery.jr-so-gallery-grid-items' ).each(function( i, el ) {
				var $el = $( el );

				$el.lightGallery({
					selector: '.jr-so-gallery-grid-item > a',
					download: false,
				});
			});
		}

		/**
		 * Isotope
		 */
		if ( $.fn.isotope ) {
			$( '.jr-so-gallery-grid' ).each(function( i, el ) {
				var $el = $( el ),
				    $grid = $el.find( '.jr-so-gallery-grid-items' ),
				    $filter = $el.find( '.jr-so-gallery-grid-filters' );

				$grid.imagesLoaded(function() {
					$grid.isotope({
						itemSelector: '.jr-so-gallery-grid-item',
						transitionDuration: '1s',
					});
				});

				$filter.on( 'click', 'a', function( e ) {
					e.preventDefault();
					var $el = $( this );

					$el.siblings().removeClass( 'active' );
					$el.addClass( 'active' );
					$grid.isotope({ filter: $el.attr( 'data-filter' ) });
				});
			});
		};

		/**
		 * Maplace
		 */
		if ( typeof Maplace == 'function' ) {
			$( '.jr-so-google-maps' ).each(function( i, el ) {
				var id = $( el ).attr( 'data-jr-id' );
				new Maplace( jr_so_google_maps[ id ] ).Load();
			});
			$( '[id*="gmaps-"]' ).css( 'max-height', 0.7 * $window.height() );

			$window.on( 'resize', function() {
				$( '[id*="gmaps-"]' ).css( 'max-height', 0.7 * $window.height() );
			});
		};

		/**
		 * Slick Slider
		 */
		if ( $.fn.slick ) {
			$window.on( 'pageStart', function() {
				// Hero Slider
				var $hero = $( '.hero-slider.slick' ),
				    autoplay = $hero.attr( 'data-slick-autoplay' );

				$hero.slick({
					autoplay: ( autoplay < 1 ) ? false : true,
					autoplaySpeed: autoplay * 1000,
					arrows: false,
					customPaging: function( slider, i ) {
						return '<a data-role="none">' + (i + 1) + '</a>';
					},
					dots: true,
					fade: true,
					infinite: true,
					speed: 1000,
				}).on( 'setPosition', function( e, slick ) {

					var $current = $( slick.$slides[ slick.currentSlide ] ),
					    $current_video = $current.find( 'video' );

					if ( $current_video.length > 0 ) $current_video.get(0).play();

				}).on( 'beforeChange', function( e, slick, currentSlide, nextSlide ) {

					var $current = $( slick.$slides[ currentSlide ] ),
					    $current_video = $( slick.$slides[ currentSlide ] ).find( 'video' ),
					    $next_video = $( slick.$slides[ nextSlide ] ).find( 'video' );

					$current.addClass( 'crossfade' );
					if ( $current_video.length > 0 ) $current_video.get(0).pause();
					if ( $next_video.length > 0 ) $next_video.get(0).play();

				}).on( 'afterChange', function( e, slick, currentSlide ) {

					$( slick.$slides ).removeClass( 'crossfade' );

				}).slick( 'setPosition' );

				// Quote Slider
				$( '.jr-so-quote.slick' ).slick({
					arrows: false,
					customPaging: function( slider, i ) {
						return '<a data-role="none">' + (i + 1) + '</a>';
					},
					dots: true,
					fade: true,
					infinite: true,
					speed: 1000,
				});
			});
		}

		/**
		 * Hero Effect
		 */
		if ( $.fn.sakura && $( '#hero-effect' ).length > 0 && ! isMobile.any() ) {
			$window.on( 'pageStart', function() {
				var $el = $( '#hero-effect' ),
				    effect = $el.attr( 'data-jr-effect' );

				$el.sakura({
					className: 'hero-effect-item ' + effect,
					maxSize: ( effect == 'snow' ) ? 7 : 14,
					minSize: ( effect == 'snow' ) ? 4 : 9,
					newOn: ( effect == 'snow' ) ? 200 : 300,
				});
			});
		}

		/**
		 * Stellar
		 */
		$window.on( 'pageStart', function() {
			// Destory existing stellar instance
			$window.stellar( 'destroy' );

			// Reinit stellar on non mobile devices
			if ( $.fn.stellar && ! isMobile.any() ) {
				$window.stellar({
					verticalOffset: function() { return $body.offset().top },
					positionProperty: 'transform',
					responsive: true,
					hideDistantElements: false,
				});
			}
		});

		/**
		 * Preloader
		 */
		// Check if current page is using preloader.
		if ( $( '#preloader' ).length > 0 ) {
			// Wait until the preloader is done, then trigger pageStart.
			Pace.on( 'done', function() {
				$( '#preloader' ).addClass( 'jr-preloader-done' );
				$window.trigger( 'pageStart' );
			});
		}
		// No preloader, trigger pageStart right away.
		else {
			$window.trigger( 'pageStart' );
		}
	});
})( jQuery );