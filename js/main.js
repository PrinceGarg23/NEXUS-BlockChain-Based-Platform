function styleDefault(){
	$('#particles-js').css("background-color", "rgb(0,0,0)");
	particlesJS("particles-js", {
		"particles": {
		"number": {
			"value": 80,
			"density": {
			"enable": true,
			"value_area": 800
			}
		},
		"color": {
			"value": "#ffffff"
		},
		"shape": {
			"type": "circle",
			"stroke": {
			"width": 0,
			"color": "#000000"
			},
			"polygon": {
			"nb_sides": 5
			},
			"image": {
			"src": "img/github.svg",
			"width": 100,
			"height": 100
			}
		},
		"opacity": {
			"value": 0.5,
			"random": false,
			"anim": {
			"enable": false,
			"speed": 1,
			"opacity_min": 0.1,
			"sync": false
			}
		},
		"size": {
			"value": 3,
			"random": true,
			"anim": {
			"enable": false,
			"speed": 40,
			"size_min": 0.1,
			"sync": false
			}
		},
		"line_linked": {
			"enable": true,
			"distance": 150,
			"color": "#ffffff",
			"opacity": 0.4,
			"width": 1
		},
		"move": {
			"enable": true,
			"speed": 6,
			"direction": "none",
			"random": false,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
			"enable": false,
			"rotateX": 600,
			"rotateY": 1200
			}
		}
		},
		"interactivity": {
		"detect_on": "canvas",
		"events": {
			"onhover": {
			"enable": true,
			"mode": "grab"
			},
			"onclick": {
			"enable": true,
			"mode": "push"
			},
			"resize": true
		},
		"modes": {
			"grab": {
			"distance": 400,
			"line_linked": {
				"opacity": 1
			}
			},
			"bubble": {
			"distance": 400,
			"size": 40,
			"duration": 2,
			"opacity": 8,
			"speed": 3
			},
			"repulse": {
			"distance": 200,
			"duration": 0.4
			},
			"push": {
			"particles_nb": 4
			},
			"remove": {
			"particles_nb": 2
			}
		}
		},
		"retina_detect": true
	});
};
function styleSpace(){
	$('#particles-js').css("background-color", "rgb(35,39,65)");
	particlesJS("particles-js", {
		"particles": {
			"number": {
				"value": 160,
				"density": {
				"enable": true,
				"value_area": 800
				}
			},
			"color": {
				"value": "#ffffff"
			},
			"shape": {
				"type": "circle",
				"stroke": {
				"width": 0,
				"color": "#000000"
				},
				"polygon": {
				"nb_sides": 5
				},
				"image": {
				"src": "img/github.svg",
				"width": 100,
				"height": 100
				}
			},
			"opacity": {
				"value": 1,
				"random": true,
				"anim": {
				"enable": true,
				"speed": 1,
				"opacity_min": 0,
				"sync": false
				}
			},
			"size": {
				"value": 3,
				"random": true,
				"anim": {
				"enable": false,
				"speed": 4,
				"size_min": 0.3,
				"sync": false
				}
			},
			"line_linked": {
				"enable": false,
				"distance": 150,
				"color": "#ffffff",
				"opacity": 0.4,
				"width": 1
			},
			"move": {
				"enable": true,
				"speed": 1,
				"direction": "none",
				"random": true,
				"straight": false,
				"out_mode": "out",
				"bounce": false,
				"attract": {
				"enable": false,
				"rotateX": 600,
				"rotateY": 600
				}
			}
			},
			"interactivity": {
			"detect_on": "canvas",
			"events": {
				"onhover": {
				"enable": true,
				"mode": "bubble"
				},
				"onclick": {
				"enable": true,
				"mode": "repuls"
				},
				"resize": true
			},
			"modes": {
				"grab": {
				"distance": 400,
				"line_linked": {
					"opacity": 1
				}
				},
				"bubble": {
				"distance": 250,
				"size": 0,
				"duration": 2,
				"opacity": 0,
				"speed": 3
				},
				"repulse": {
				"distance": 150,
				"duration": 0.4
				},
				"push": {
				"particles_nb": 4
				},
				"remove": {
				"particles_nb": 2
				}
			}
		},
		"retina_detect": true
		});
};

function styleKUPA(){
	$('#particles-js').css("background-color", "rgb(0,0,0)");
	particlesJS("particles-js", {
		"particles": {
		"number": {
			"value": 200,
			"density": {
			"enable": true,
			"value_area": 800
			}
		},
		"color": {
			"value": "#FF5722"
		},
		"shape": {
			"type": "polygon",
			"stroke": {
			"width": 0,
			"color": "#FF5722"
			},
			"polygon": {
			"nb_sides": 5
			},
			"image": {
			"src": "img/github.svg",
			"width": 100,
			"height": 100
			}
		},
		"opacity": {
			"value": 0.5,
			"random": true,
			"anim": {
			"enable": false,
			"speed": 1,
			"opacity_min": 0.1,
			"sync": false
			}
		},
		"size": {
			"value": 10,
			"random": true,
			"anim": {
			"enable": false,
			"speed": 40,
			"size_min": 0.1,
			"sync": false
			}
		},
		"line_linked": {
			"enable": false,
			"distance": 500,
			"color": "#ffffff",
			"opacity": 0.4,
			"width": 2
		},
		"move": {
			"enable": true,
			"speed": 6,
			"direction": "bottom",
			"random": false,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
			"enable": false,
			"rotateX": 600,
			"rotateY": 1200
			}
		}
		},
		"interactivity": {
		"detect_on": "canvas",
		"events": {
			"onhover": {
			"enable": true,
			"mode": "bubble"
			},
			"onclick": {
			"enable": true,
			"mode": "repulse"
			},
			"resize": true
		},
		"modes": {
			"grab": {
			"distance": 400,
			"line_linked": {
				"opacity": 0.5
			}
			},
			"bubble": {
			"distance": 400,
			"size": 4,
			"duration": 0.3,
			"opacity": 1,
			"speed": 3
			},
			"repulse": {
			"distance": 200,
			"duration": 0.4
			},
			"push": {
			"particles_nb": 4
			},
			"remove": {
			"particles_nb": 2
			}
		}
		},
		"retina_detect": true

	});
};

function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
	if (!event.target.matches('#user img')) {
	  var dropdowns = document.getElementsByClassName("dropdown-content");
	  var i;
	  for (i = 0; i < dropdowns.length; i++) {
		var openDropdown = dropdowns[i];
		if (openDropdown.classList.contains('show')) {
		  openDropdown.classList.remove('show');
		}
	  }
	}
  }