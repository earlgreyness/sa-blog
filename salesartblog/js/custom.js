
/* * * * * * * * * * * * * * * * * *
 *
 *        Поиск по сайту
 *
 * * * * * * * * * * * * * * * * * */

//
// Обработка формы
//
$('#search-form, #m-search-form').submit(function() {

  var searchForm = $( this );

  if ( hasBlankRequiredFields( searchForm ) ) {

    return false;

  }

});


//
// Мобильный поиск
//
$('#m-search-btn').click(function() {

  var searchBox = $('#m-search-form');

  searchBox.toggleClass('active');

});


/* * * * * * * * * * * * * * * * * *
 *
 *       Подписка на обновления
 *
 * * * * * * * * * * * * * * * * * */

//
// Обработка формы
//
$('#subscribe-form, #modal-subscribe-form').submit(function() {

  var subscribeForm = $( this );

  if ( hasBlankRequiredFields( subscribeForm ) ) {

    return false;

  }

});


/* * * * * * * * * * * * * * * * * *
 *
 *   Модальное окно "Подпишитесь"
 *
 * * * * * * * * * * * * * * * * * */

//
// Инициализация
//
// var viewportWidth = document.documentElement.clientWidth;

// if ( viewportWidth > 1024 ) {

//   setTimeout(function() {
//     $.magnificPopup.open({

//       type: 'inline',
//       showCloseBtn: false,
//       midClick: true,

//       items: {
//         src: '#modal-subscribe'
//       },

//       mainClass: 'mfp-fade',

//     });
//   }, 5000);

// }

$('.m-subscribe').click(function() {

  $.magnificPopup.open({

    type: 'inline',
    showCloseBtn: false,
    midClick: true,

    items: {
      src: '#modal-subscribe'
    },

    mainClass: 'mfp-fade',

  });

});


//
// Закрытие
//
$('.modal-close').click(function() {

  $.magnificPopup.close();

});


/* * * * * * * * * * * * * * * * * *
 *
 *         Мобильное меню
 *
 * * * * * * * * * * * * * * * * * */

$('#m-services').click(function() {

  var mMenu = $('#m-menu');

  mMenu.addClass('active');

});

$('#m-menu-close').click(function() {

  var mMenu = $('#m-menu');

  mMenu.removeClass('active');

});


/* * * * * * * * * * * * * * * * * *
 *
 *    Вспомогательные функции
 *
 * * * * * * * * * * * * * * * * * */

//
// Обязательные поля
//
function hasBlankRequiredFields( form ) {
  var error = false;

  form.find( 'input, textarea' ).each(function() {
    var input = $( this );

    if ( input.data( 'required' ) && input.val() == '' ) {

      input.addClass( 'required' );

      input.on( 'blur', function() {

        if ( $( this ).val() != '' ) {
          $( this ).removeClass( 'required' );
        }

      });

      error = true;
    }
  });

  if ( error ) {
    form
      .find( '.required' )
      .first()
      .focus();
  }

  return error;
}

//
// Очистка формы
//
function cleanUpForm( form ) {

  form.find( 'input, textarea' ).each(function() {

    $( this )
      .removeClass( 'required' )
      .val('');
  });
}


$( document ).ready( function () {

  $( '.wp-caption a' ).magnificPopup({
    type: 'image'
  });

});
