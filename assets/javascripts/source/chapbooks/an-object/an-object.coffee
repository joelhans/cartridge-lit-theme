reader_name = null

jQuery ($) ->

  # INIT

  win_h = $(window).height()

  # position background image
  offset = win_h - ((win_h - 800) * 2)
  console.log offset
  $('.an-object-background').css 'top', -(offset)

  bg_offset = (push) ->
    return Math.round((win_h + push) / 10) * 10

  $('.bg-ocean-beach').css 'top', bg_offset(1800)
  $('.bg-beach').css 'top', bg_offset(2100)
  $('.bg-grass-trans').css 'top', bg_offset(3600)
  $('.bg-grass').css 'top', bg_offset(4560)
  $('.bg-girl-one').css 'top', bg_offset(5260)
  $('.bg-dirt-trans').css 'top', bg_offset(8000)

  $('.bg-wood-trans-up').css 'top', Math.round((win_h + 2300) / 10) * 10
  $('.bg-wood-trans-down').css 'top', Math.round((win_h + 4000) / 10) * 10
  $('.bg-wood').css 'top', Math.round((win_h + 2610) / 10) * 10
  $('.bg-button').css 'top', Math.round((win_h + 6300) / 10) * 10

  # set front-matter and back-matter heights
  $('.front-matter, .back-matter').height win_h

  $('.content article').each () ->
    offset = $(this).offset()
    console.log offset.top

  $('.fm-keyboard-keys').children('li').addClass('interact-option')

  # FRONT MATTER

  $('.fm-keyboard-keys-uppercase, .fm-keyboard-keys-lowercase').children().addClass('interact-option')

  # box hover
  box_hover = (target) ->
    hover_box = $('.interact-hover-box')
    target_pos = target.offset()
    hover_box.css
      width: target.css "width"
      height: target.css "height"
      left: target_pos.left
      top: target_pos.top

  $('.interact-option').on 'mouseenter', () ->
    $('.interact-hover-box').show()
    box_hover($(this))

  # loading keyboard
  $('.fm-create').click () ->
    $('.interact-hover-box').css 'transition', 'none'
    $('.fm-create-delete, .interact-hover-box').animate { opacity: '0' }, 1000, () ->
      $('.fm-keyboard').addClass 'interact-showing'
      box_hover($('.fm-keyboard-keys-uppercase').children().first())
      $('.fm-keyboard, .interact-hover-box').animate { opacity: '1' }, 1000, () ->
        $('.interact-hover-box').css 'transition', 'all 0.2s'

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
      $('.interact-hover-box').css 'transition', 'none'
      $('.fm-keyboard, .interact-hover-box').animate { opacity: 0 }, 1000, () ->
        $('.fm-keyboard').hide()
        $('.fm-creating').addClass 'interact-showing'
        $('.interact-hover-box').css 'display', 'none'
        $('.fm-creating, .interact-hover-box').animate { opacity: 1 }, 1000, () ->
          counter = 0
          ellipses = setInterval () ->
            number = new Array(counter + 1).join('.')
            $('.fm-ellipsis').html(number)
            counter++
          , 300

          setTimeout () ->
            $('.fm-creating').animate { opacity: '0' }, 1000, () ->
              $('.fm-title').addClass 'interact-showing'
              $('.fm-title').animate { opacity: '1' }, 1000
              $('.content').fadeIn 1000
              clearInterval(ellipses)
          , 5000

  # loading respite, then acknowledgments

  $('.bm-yes').click () ->
    $('.interact-hover-box').css 'transition', 'none'
    $('.bm-continue, .interact-hover-box').animate { opacity: '0' }, 1000, () ->
      $('.bm-respite').addClass 'interact-showing'
      $('.bm-respite').animate { opacity: '1' }, 1000, () ->
        setTimeout () ->
          $('.bm-respite').animate { opacity: '0' }, 1000, () ->
            $('.bm-acknowledgments').addClass 'interact-showing'
            $('.bm-acknowledgments').animate { opacity: '1' }, 1000
        , 5000
