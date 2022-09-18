// new Splide( '.splide' ).mount();
document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide', {    
                                // type   : 'loop',
                                // padding: {
                                // right: '5rem',
                                // left : '5rem',
                                // },
                                // perPage: 3,
	                            // rewind : true,
                                type   : 'loop',
                                perPage: 3,
                                focus  : 'center',
                                height   : '20rem',
	                            // autoWidth: true,
                                // height     : '19rem',
                                
                            } ).mount();
} );