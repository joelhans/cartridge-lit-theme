jQuery ($) ->

  $(window).stellar
    horizontalScrolling: false
    hideDistantElements: false

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
