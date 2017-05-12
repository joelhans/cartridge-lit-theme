$(document).ready ->

  $('.svg--poem')
    .waypoint (dir) ->
      if dir is 'down'
        $(this.element).attr "class", "svg--poem animated"
    ,
      offset: 'bottom-in-view'

  $('.svg--title')
    .waypoint (dir) ->
      if dir is 'down'
        $(this.element).attr "class", "svg--title animated"
    ,
      offset: 'bottom-in-view'
