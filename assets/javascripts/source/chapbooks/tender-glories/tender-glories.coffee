jQuery ($) ->

  # CLICK FUNCTION

  $('.clickable').click (ev) ->

    # Get the window height/width

    winY = $(window).height()
    winX = $(window).width()

    # Get the click's position

    clickY = ev.pageY
    clickX = ev.pageX

    # Get the current scroll

    scrollY = $(window).scrollTop()
    scrollX = $(window).scrollLeft()

    # Get the current center

    centY = (winY / 2) + scrollY
    centX = (winX / 2) + scrollX

    # Calculate the difference

    diffY = clickY - centY
    diffX = clickX - centX

    # Animate

    $('html, body').animate
      scrollTop: scrollY + diffY
      scrollLeft: scrollX + diffX
