webm_height = null

jQuery ($) ->

  # INIT

  win_h = $(window).height()

  # $(window).stellar
  #   horizontalScrolling: false
  #   hideDistantElements: false

  $('.prepare-header').height(win_h)
  $('.prepare-header div').height(win_h / 3)
  $('.prepare-header div h1').fitText(0.6)

  # $('.prepare-content').height(win_h)

  # NAVIGATION MENU

  $('.prepare-toc').waypoint () ->
    $('nav').slideToggle('slow')

  $('.nav-toc').children().removeClass('nav-item-lit')
  $('.prepare-header, .prepare-toc, .prepare-content, .prepare-footer')
  .waypoint (direction) ->
    toc_id = $(this).attr('id')
    toc_target = $('.nav-toc a[href$="'+toc_id+'"]')
    toc_i = $('.nav-toc a').index toc_target
    toc_top = -Math.abs toc_i * 40

    if direction is 'down' and $('.nav-toc').is('.nav-open') is false
      $('.nav-toc').children().removeClass('nav-item-lit')
      $(toc_target).addClass('nav-item-lit')
      $('.nav-toc').data 'toc-top-pos', toc_top
      $('.nav-toc').children('a').css 'top', toc_top

    else if direction is 'down' and $('.nav-toc').is('.nav-open') is true
      $('.nav-toc').children().removeClass('nav-item-lit')
      $(toc_target).addClass('nav-item-lit')
      $('.nav-toc').data 'toc-top-pos', toc_top

  , offset: 40

  .waypoint (direction) ->
    toc_id = $(this).attr('id')
    toc_target = $('.nav-toc a[href$="'+toc_id+'"]')
    toc_i = $('.nav-toc a').index toc_target
    toc_top = -Math.abs toc_i * 40

    if direction is 'up' and $('.nav-toc').is('.nav-open') is false
      $('.nav-toc').children().removeClass('nav-item-lit')
      $(toc_target).addClass('nav-item-lit')
      $('.nav-toc').data 'toc-top-pos', toc_top
      $('.nav-toc').children('a').css 'top', toc_top

    else if direction is 'up' and $('.nav-toc').is('.nav-open') is true
      $('.nav-toc').children().removeClass('nav-item-lit')
      $(toc_target).addClass('nav-item-lit')
      $('.nav-toc').data 'toc-top-pos', toc_top

  , offset : () ->
    return -Math.abs($(this).outerHeight())

  $('.nav-menu').click () ->

    # Open navigation menu
    if $('.nav-toc').is('.nav-open') is false
      $('.nav-toc').addClass 'nav-open'
      $('.nav-toc').css
        'overflow-y': 'auto'
        'height': 'auto'
      $('.nav-toc').children('a').css 'top', 0
      if $('.nav-toc').height() > win_h
        $('.nav-toc').css
          'overflow-y': 'scroll'
          'height': win_h

    # Close navigation menu
    else if $('.nav-toc').is('.nav-open') is true
      toc_top_pos = $('.nav-toc').data 'toc-top-pos'
      console.log toc_top_pos
      $('.nav-toc').removeClass 'nav-open'
      $('.nav-toc').children('a').css 'top', toc_top_pos
      $('.nav-toc').scrollTop(0)
      $('.nav-toc').css
        'overflow': 'hidden'
        'height': 40

  # WAYPOINTS

  $('#fleets-of-labor-made-this-marked-infrastructure')
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(1)').toggleClass('fleets-show')
  , offset: 100
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(2)').toggleClass('fleets-show')
  , offset: 50
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(3)').toggleClass('fleets-show')
  , offset: 0
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(4)').toggleClass('fleets-show')
  , offset: -50
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(5)').toggleClass('fleets-show')
  , offset: -100
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(6)').toggleClass('fleets-show')
  , offset: -150
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(1)').toggleClass('fleets-show')
  , offset: -200
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(2)').toggleClass('fleets-show')
  , offset: -250
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(3)').toggleClass('fleets-show')
  , offset: -300
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(4)').toggleClass('fleets-show')
  , offset: -350
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(5)').toggleClass('fleets-show')
  , offset: -400
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(6)').toggleClass('fleets-show')
  , offset: -450

  $.stellar
    horizontalScrolling: false
    hideDistantElements: false

  console.log 'Hi.'

$(window).load () ->

  webm = (720 * $(window).width()) / 1280
  $('#evil-does-not-work-like-a-network, #evil-does-not-work-like-a-network .container').css('height', webm)


  $('#evil-does-not-work-like-a-network')
  .waypoint () ->
    $('.evil-does-not-webm').get(0).play()
  , {
    offset: 100
    triggerOnce: true
  }
