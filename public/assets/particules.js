document.addEventListener("DOMContentLoaded", function () {
    if (document.querySelector("#particles-js")) {
      particlesJS("particles-js", {
        "particles": {
          "number": {
            "value": 100,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#8B5CF6"
          },
          "shape": {
            "type": "circle"
          },
          "opacity": {
            "value": 1
          },
          "size": {
            "value": 2
          },
          "move": {
            "enable": true,
            "speed": 1,
            "direction": "none",
            "random": false,
            "out_mode": "out"
          },
          "line_linked": {
            "enable": false
          }
        }
      });
    }
  });
  