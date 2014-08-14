jQuery ($) ->

  $('.nav-fiction').hover () ->
    $('.nav-dropdown-fiction').show()
  , () ->
    $('.nav-dropdown-fiction').hide()

  $('.nav-poetry').hover () ->
    $('.nav-dropdown-poetry').show()
  , () ->
    $('.nav-dropdown-poetry').hide()

  $('.nav-non-fiction').hover () ->
    $('.nav-dropdown-non-fiction').show()
  , () ->
    $('.nav-dropdown-non-fiction').hide()
