$ ->

  # https://codepen.io/zyklus/pen/prvnb
  # https://codepen.io/anon/pen/JNBxgM

  # init canvas
  canvas     = $('canvas')
  ctx        = canvas[0].getContext('2d')
  ctx2       = canvas[1].getContext('2d')
  mDown      = false
  r1         = 100
  r2         = 300
  density    = .7
  hideOnMove = true
  hideFill   = 'rgba( 0, 0, 0, .95 )'
  overlay    = 'rgba( 0, 0, 0, 1 )'
  ctxWidth   = window.innerWidth
  ctxHeight  = window.outerHeight

  # resize the canvases
  canvas[0].width = ctxWidth
  canvas[0].height = ctxHeight
  canvas[1].width = ctxWidth
  canvas[1].height = ctxHeight

  # black out the canvas
  ctx.fillStyle = overlay
  ctx.fillRect 0, 0, ctxWidth, ctxHeight

  # set up our "eraser"
  ctx.globalCompositeOperation = 'destination-out'

  canvas.last().on('mousemove touchmove', (ev, ev2) ->
    ev2 and (ev = ev2)

    pX = ev.clientX
    pY = ev.clientY

    console.log ev.touches

    # reveal wherever we drag
    radGrd = ctx.createRadialGradient(pX, pY, r1, pX, pY, r2)
    radGrd.addColorStop 0, 'rgba( 0, 0, 0,  1 )'
    radGrd.addColorStop density, 'rgba( 0, 0, 0, .1 )'
    radGrd.addColorStop 1, 'rgba( 0, 0, 0,  0 )'

    ctx.fillStyle = radGrd
    ctx.fillRect pX - r2, pY - r2, r2 * 2, r2 * 2

    # partially hide the entire map and re-reval where we are now
    ctx2.globalCompositeOperation = 'source-over'
    ctx2.clearRect 0, 0, ctxWidth, ctxHeight
    ctx2.fillStyle = hideFill
    ctx2.fillRect 0, 0, ctxWidth, ctxHeight

    radGrd = ctx.createRadialGradient(pX, pY, r1, pX, pY, r2)
    radGrd.addColorStop 0, 'rgba( 0, 0, 0,  1 )'
    radGrd.addColorStop .8, 'rgba( 0, 0, 0, .1 )'
    radGrd.addColorStop 1, 'rgba( 0, 0, 0,  0 )'

    ctx2.globalCompositeOperation = 'destination-out'
    ctx2.fillStyle = radGrd
    ctx2.fillRect pX - r2, pY - r2, r2 * 2, r2 * 2
    return

  ).trigger 'mousemove',
    clientX: 150
    clientY: 150

  return
