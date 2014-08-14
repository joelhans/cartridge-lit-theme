webm_height = null

jQuery ($) ->

  $(window).stellar
    horizontalScrolling: false
    hideDistantElements: false

  $('.prepare-toc')
  .waypoint () ->
    if $('.ptd-announce').length
      $('.respawn-campfire').fadeOut(5000)
    else
      return
  , {
    offset: 100
    triggerOnce: true
  }

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
  , offset: -250
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(2)').toggleClass('fleets-show')
  , offset: -300
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(3)').toggleClass('fleets-show')
  , offset: -350
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(4)').toggleClass('fleets-show')
  , offset: -400
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(5)').toggleClass('fleets-show')
  , offset: -450
  .waypoint () ->
    $('.fleets-of-labor-made-this-marked-infrastructure p:nth-of-type(6)').toggleClass('fleets-show')
  , offset: -500

  console.log 'This is Prepare to Die.'

$(window).load () ->

  webm = (720 * $(window).width()) / 1280
  $('.webm-gradients').css('height', webm)

  $('#evil-does-not-work-like-a-network')
  .waypoint () ->
    $('.evil-does-not-webm').get(0).play()
  , {
    offset: 100
    triggerOnce: true
  }
