jQuery ($) ->

  # CLICK FUNCTION

  $('.clickable').click (ev) ->

    # Get the window height/width

    winY = $(window).height()

    # Get the click's position

    clickY = ev.pageY

    # Get the current scroll

    scrollY = $(window).scrollTop()

    # Get the current center

    centY = (winY / 2) + scrollY

    # Calculate the difference

    diffY = clickY - centY
    if clickY > centY
      diffY = diffY + 200
    else
      diffY = diffY - 200

    # Animate

    $('html, body').animate
      scrollTop: scrollY + diffY
