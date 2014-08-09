jQuery ($) ->

  console.log 'This is Prepare to Die.'

  $(window).stellar
    horizontalScrolling: false
    hideDistantElements: false

  getRandom = (min, max) ->
    Math.random() * (max - min) + min

  # $('.parallax').find('img').each (i) ->
  # #   $(this).data('stellar-ratio', getRandom(1,6))
  # #   $(this).css('top', getRandom(0,600))
  #   $(this).css('left', getRandom(0,$(window).width))
