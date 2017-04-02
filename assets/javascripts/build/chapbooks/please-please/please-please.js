(function() {
  $(document).ready(function() {
    var colorIndices, colors, gradientSpeed, step, updateGradient;
    $('.svg--poem').waypoint(function(dir) {
      if (dir === 'down') {
        console.log('hi');
        return $(this.element).attr("class", "svg--poem animated");
      }
    }, {
      offset: 'bottom-in-view'
    });
    colors = [[62, 35, 255, 0.1], [60, 255, 60, 0.1], [255, 35, 98, 0.1], [45, 175, 230, 0.1], [255, 0, 255, 0.1], [255, 128, 0, 0.1]];
    step = 0;
    colorIndices = [0, 1, 2, 3];
    gradientSpeed = 0.02;
    updateGradient = function() {
      var a1, a2, b1, b2, c0_0, c0_1, c1_0, c1_1, color1, color2, g1, g2, istep, r1, r2;
      if ($ === void 0) {
        return;
      }
      c0_0 = colors[colorIndices[0]];
      c0_1 = colors[colorIndices[1]];
      c1_0 = colors[colorIndices[2]];
      c1_1 = colors[colorIndices[3]];
      istep = 1 - step;
      r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
      g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
      b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
      a1 = c0_0[3];
      color1 = "rgba(" + r1 + "," + g1 + "," + b1 + "," + a1 + ")";
      r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
      g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
      b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
      a2 = c0_0[3];
      color2 = "rgba(" + r2 + "," + g2 + "," + b2 + "," + a2 + ")";
      $('#gradient').css("background-image", "linear-gradient(to right, " + color1 + ", " + color2 + ")");
      step += gradientSpeed;
      if (step >= 1) {
        step %= 1;
        colorIndices[0] = colorIndices[1];
        colorIndices[2] = colorIndices[3];
        colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
        return colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
      }
    };
    return setInterval(function() {
      return updateGradient();
    }, 100);
  });

}).call(this);
