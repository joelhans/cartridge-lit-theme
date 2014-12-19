reader_name = null

jQuery ($) ->

  # INIT

  win_h = $(window).height()

  $('.fm-keyboard-keys').children('li').addClass('fm-option')

  # FRONT MATTER

  $('.fm-keyboard-keys-uppercase, .fm-keyboard-keys-lowercase').children().addClass('fm-option')

  # box hover
  box_hover = (target) ->
    hover_box = $('.fm-hover-box')
    target_pos = target.offset()
    hover_box.css
      width: target.css "width"
      height: target.css "height"
      left: target_pos.left
      top: target_pos.top

  $('.fm-option').on 'mouseenter', () ->
    box_hover($(this))

  # loading keyboard
  $('.fm-create').click () ->
    $('.fm-hover-box').animate { opacity: 0 }, 1000
    $('.fm-create-delete').animate { opacity: 0 }, 1000, () ->
      $('.fm-hover-box').css 'transition', 'none'
      box_hover($('.fm-keyboard-keys-uppercase').children().first())
      $('.fm-hover-box').animate { opacity: 1 }, 1000
      $('.fm-keyboard').animate { opacity: 1 }, 1000, () ->
        $('.fm-hover-box').css 'transition', 'all 0.2s'

  # keyboard functions
  $('.fm-keyboard ul li').click () ->
    keyDown = $(this)
    nameCache = $('.fm-textarea').html()

    # If we're adding a letter.
    if !keyDown.is('.fm-keyboard-back, .fm-keyboard-end')
      name = nameCache + keyDown.html()
      $('.fm-textarea').html(name)

    # If we're deleting a letter.
    if keyDown.is('.fm-keyboard-back')
      name = nameCache.slice(0,-1)
      $('.fm-textarea').html(name)

  # ending keyboard, loading creating, loading title
  $('.fm-keyboard-end').click () ->
    nameCache = $('.fm-textarea').html()

    # if player name is empty
    if nameCache is ''
      $('.fm-enter-name').addClass('fm-enter-name-please').html 'Please enter a name.'

    # if player name isnt empty
    else
      $('.fm-player-name').html $('.fm-textarea').html()
      $('.fm-hover-box').animate { opacity: 0 }, 1000
      $('.fm-keyboard').animate { opacity: 0 }, 1000, () ->
        $('.fm-hover-box').css 'display', 'none'
        $('.fm-creating').animate { opacity: 1 }, 1000, () ->

    counter = 0
    ellipses = setInterval () ->
      number = new Array(counter + 1).join('.')
      $('.fm-ellipsis').html(number)
      counter++
    , 300

    setTimeout () ->
      $('.fm-creating').animate { opacity: 0 }, 1000, () ->
        $('.fm-title').animate { opacity: 1 }, 1000
        $('.content').fadeIn 1000
        clearInterval(ellipses)
    , 5000
