() ->

  console.log 'Sup.'
  console.log 'Double-sup.'

  $('.nav-fiction').hover () ->
    console.log 'Hi.'
  , () ->
    console.log 'Bye.'

  $('.nav-poetry').hover () ->
    console.log 'Hi.'
  , () ->
    console.log 'Bye.'

  $('.nav-non-fiction').hover () ->
    console.log 'Hi.'
  , () ->
    console.log 'Bye.'
