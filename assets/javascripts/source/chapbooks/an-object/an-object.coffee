reader_name = null

jQuery ($) ->

  # INIT

  win_h = $(window).height()
  win_h_r = Math.round(win_h / 10) * 10

  console.log win_h

  # position background image
  offset = win_h - ((win_h - 800) * 2)
  $('.an-object-background').css 'top', -(offset)

  bg_offset = (push) ->
    return Math.round((win_h + push) / 10) * 10

  # Frontmatter
  $('.bg-ocean-beach').css 'top', bg_offset(1800)
  # Open Water
  $('.bg-beach').css 'top', bg_offset(2100)
  # The Village of Whealbrook
  $('.bg-snow').css 'top', bg_offset(3360)
  $('.bg-snow-trans').css 'top', bg_offset(2400)
  $('.bg-village-whealbrook').css 'top', bg_offset(2960)
  $('.bg-forest-trans-up-one').css 'top', bg_offset(4000)
  $('.bg-forest-one').css 'top', bg_offset(4320)
  $('.bg-forest-trans-down-one').css 'top', bg_offset(4960)
  # The Town of Roundbeck
  $('.bg-village-roundbeck').css 'top', bg_offset(4920)
  $('.bg-girl-one').css 'top', bg_offset(5260)
  $('.bg-girl-portal-one').css 'top', bg_offset(5200)
  # Uptaten Towers
  $('.bg-forest-trans-up-two').css 'top', bg_offset(7350)
  $('.bg-forest-two').css 'top', bg_offset(7670)
  $('.bg-girl-two').css 'top', bg_offset(7410)
  $('.bg-girl-portal-two').css 'top', bg_offset(7350)
  $('.bg-uptaten').css 'top', bg_offset(7860)
  $('.bg-girl-three').css 'top', bg_offset(7900)
  $('.bg-girl-portal-three').css 'top', bg_offset(7840)
  $('.bg-girl-four').css 'top', bg_offset(8510)
  $('.bg-girl-portal-four').css 'top', bg_offset(8410)
  $('.bg-girl-five').css 'top', bg_offset(9030)
  $('.bg-girl-portal-five').css 'top', bg_offset(8970)
  $('.bg-girl-six').css 'top', bg_offset(9530)
  $('.bg-girl-portal-six').css 'top', bg_offset(9470)
  # The Village of Whealbrook (II)
  $('.bg-forest-three').css 'top', bg_offset(9460)
  $('.bg-forest-trans-down-two').css 'top', bg_offset(10100)
  $('.bg-village-whealbrook-two').css 'top', bg_offset(10240)
  $('.bg-snow-trans-down').css 'top', bg_offset(11400)
  $('.bg-snow-trans-down-two').css 'top', bg_offset(12260)
  $('.bg-grass').css 'top', bg_offset(11400)
  # Coburg Castle
  $('.bg-grass-river').css 'top', bg_offset(13800)
  # The Cave Where Your Father Dies
  $('.bg-cave').css 'top', bg_offset(15400)
  $('.bg-cave-mouth').css 'top', bg_offset(15400)
  $('.bg-cave-int').css 'top', bg_offset(15760)
  $('.bg-fadeout').css 'top', bg_offset(16500)
  $('.bg-faded').css 'top', bg_offset(19500)

  # set front-matter and back-matter heights
  $('.front-matter, .back-matter').height win_h

  # Add class via JS instead of HMTL (whoopsies).
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
    $('.fm-create-delete, .interact-hover-box').animate { opacity: '0' }, 2000, () ->
      $('.fm-keyboard').addClass 'interact-showing'
      box_hover($('.fm-keyboard-keys-uppercase').children().first())
      $('.fm-keyboard, .interact-hover-box').animate { opacity: '1' }, 2000, () ->
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
      $('.fm-keyboard, .interact-hover-box').animate { opacity: 0 }, 2000, () ->
        $('.fm-keyboard').hide()
        $('.fm-creating').addClass 'interact-showing'
        $('.interact-hover-box').css 'display', 'none'
        $('.fm-creating, .interact-hover-box').animate { opacity: 1 }, 2000, () ->
          counter = 0
          ellipses = setInterval () ->
            number = new Array(counter + 1).join('.')
            $('.fm-ellipsis').html(number)
            counter++
          , 300

          setTimeout () ->
            $('.fm-creating').animate { opacity: '0' }, 2000, () ->
              $('.fm-title').addClass 'interact-showing'
              $('.fm-title').animate { opacity: '1' }, 2000
              $('.content, .back-matter').fadeIn 2000
              clearInterval(ellipses)
          , 5000

  # loading respite, then acknowledgments
  $('.flood').height (win_h_r + 400)
  flood = () ->
    flood_y = -(win_h_r) - 400
    floody = setInterval () ->
      flood_y = flood_y + 10
      if flood_y >= 10
        clearInterval(floody)
      else
        $('.flood').css('bottom', flood_y)
    , 800

  sure_showing = false
  animating = false
  $('.bm-yes').click () ->
    if $('.bm-continue, .bm-sure').is ':animated'
      return false
    else
      if sure_showing is false
        $('.interact-hover-box').css 'transition', 'none'
        animating = true
        $('.bm-continue, .interact-hover-box').animate { opacity: '0' }, 2000, () ->
          $('.bm-sure').addClass 'interact-showing'
          box_hover($('.bm-sure-options').children().first())
          $('.bm-sure, .interact-hover-box').animate { opacity: '1' }, 2000, () ->
            console.log 'Sure opened.'
            sure_showing = true
            animating = false

      else if sure_showing is true
        $('.interact-hover-box').css 'transition', 'none'
        $('.bm-sure, .interact-hover-box').animate { opacity: '0' }, 2000, () ->
          $('.bm-sure').addClass 'interact-showing'
          box_hover($('.bm-sure-options').children().first())
          $('.bm-sure, .interact-hover-box').animate { opacity: '1' }, 2000, () ->
            sure_showing = false
            animating = false

  $('.bm-no').click () ->
    if $('.bm-continue, .bm-sure').is ':animated'
      return false
    else
      $('.interact-hover-box').css 'transition', 'none'
      $('.bm-continue, .bm-sure, .interact-hover-box').animate { opacity: '0' }, 2000, () ->
        $('.bm-respite').addClass 'interact-showing'
        $('.bm-respite').animate { opacity: '1' }, 2000, () ->
          setTimeout () ->
            $('.bm-respite').animate { opacity: '0' }, 2000, () ->
              $('.bm-acknowledgments').addClass 'interact-showing'
              $('.bm-acknowledgments').animate { opacity: '1' }, 2000
          , 4000
      setTimeout () ->
        flood()
      , 10000
