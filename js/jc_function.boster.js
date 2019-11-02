var jc_app = function() {
	const 	header 		= query('.header'),
			sidebar 	= query('.sidebar'),
			container 	= query('.container');
	
	if (header !== null) {
		let mode = header.getAttribute('mode');
		if (mode !== null) {
			if (mode == 'fixed') {
				let hW = header.clientHeight;
				header.classList.add('header-fixed');
				container.style.cssText = `margin-top: ${hW}px`;
			};
		};
	};
	if (sidebar !== null) {
		let mode = sidebar.getAttribute('mode');
		if (mode !== null) {
			if (mode == "fixed") {
				let hW = header.clientHeight,
					fs = sidebar.parentElement.clientWidth;
				sidebar.classList.add('sidebar-fixed');
				sidebar.style.cssText = `top: ${hW}px; width:${fs}px`;
			}
		}
	}
	
	queryAll('.spa-model').forEach(function(el) {
		let mode 		= el.getAttribute('mode'),
			load 		= el.getAttribute('load'),
			inner_id 	= el.getAttribute('inner-id');
		
		if (load !== null) {
			if (mode !== null) {
				jcEvent(el, 'click', function() {
					if (mode == "async") {
						window.location.href =  '?spa-model/' + inner_id.replace('#','') + '=' + load;
					}
					else if (mode == "sync") {
						if (load !== null) {
							window.location.href = load;
						}
					}
				});
			};		
		}
	});

	queryAll('.expand').forEach(function(el) {
		let target = el.getAttribute('expand-target');
		if (target !== null) {
			jcEvent(el, 'click', function() {
				let heightNode 	= 0,
					tg 			= query(target),
					node 		= tg.children,
					exAct 		= tg.classList.contains('expanded');
				if (exAct == false) {
					for (let i = 0; i < node.length; i++) {
						heightNode += node[i].offsetHeight;
					}
					tg.setAttribute('style', `height: ${heightNode.toString()}px;`);
					tg.classList.add('expanded');
				}
				else {
					heightNode 			= 0;
					tg.style.cssText 	= `height: ${heightNode.toString()}px;`;
					tg.classList.remove('expanded');
				}
			});
		}
	});

	queryAll('.table-striped').forEach(function(el) {
		let row = el.querySelectorAll('tr');
		row.forEach(function(elRow, num) {
			if (num % 2 == 0) {
				elRow.style.cssText = 'background: #efefef;';
			}
		});
	});

	queryAll('.tooltips').forEach(function(el, indk) {
		let atb 	= el.attributes;
		let place 	= atb.place.nodeValue,
			tips 	= atb.tips.nodeValue,
			mode 	= atb.mode.nodeValue;

		if (place == null || place == undefined) {
			place = "right";
		}
		if (tips == null || tips == undefined) {
			tips = "tooltips active";
		}
		if (mode == null || mode == undefined) {
			mode = "normal";
		}

		let elem 	= newTag('div'),
			txt 	= newText(tips);

		elem.classList.add('tips-active');
		elem.appendChild(txt);
		elem.classList.add('actTip-' + indk.toString());

		let postTips = function(clX, clY, elem, place, callback) {
			let	elH 	= elem.offsetHeight,
				elW 	= elem.offsetWidth,
				elPd 	= 10;

			let elX, elY;
			if (place == "top") {
				elY = (clY - elH) - elPd;
				elX = clX - (elW/2); 
			}
			else if (place == "right") {
				elY = clY - (elH/2);
				elX = clX + (elPd * 2);
			}
			else if (place == "bottom") {
				elY = (clY + elH);
				elX = clX - (elW/2) + 10; 
			}
			else if (place == "left") {
				elY = clY - (elH/2);
				elX = (clX - elW) - elPd;
			}
			if (typeof callback == "function") {
				callback({x: elX, y: elY});
			}
		}

		jcEvent(el, 'mousemove', function(e) {
			let clY 	= e.clientY,
				clX 	= e.clientX;
			let elX, elY;
			if (query('.actTip-' + indk.toString()) == null) {
				el.appendChild(elem);

				postTips(clX, clY, elem, place, function(res) {
					elX = res.x; elY = res.y;
				});
				elem.classList.add('tips-'+mode);
				elem.style.cssText = `padding: 5px 10px; top: ${elY}px; left: ${elX}px; z-index:99999999;`;
			}
			else {
				postTips(clX, clY, elem, place, function(res) {
					elX = res.x; elY = res.y;
				});
				elem.style.cssText = `padding: 5px 10px; top: ${elY}px; left: ${elX}px; z-index:99999999;`;
			}
			jcEvent(el, 'mouseleave', function() {
				elem.remove();
			});
		});
	});

	queryAll('.input-group').forEach(function(el) {

		if (el.children.length == 2) {
			let c 	= el.querySelector('.input-prepend');
			let inp = el.querySelector('.input-control');
			if (inp !== undefined && inp !== null) {
				if (inp.length !== 0) {
					c !== null ? inp.style.cssText = `border-bottom-left-radius: 0;border-top-left-radius: 0;`
						: inp.style.cssText = `border-bottom-right-radius: 0;border-top-right-radius: 0;`;
				}
			}
		}
		else if (el.children.length == 3) {
			let c 	= el.querySelector('.input-append');
			let inp = el.querySelectorAll('.input-control');
			if (inp !== undefined && inp !== null) {
				if (inp.length !== 0) {
					if (c == null) {
						inp[0].style.cssText = `border-radius: 0;`;
						inp[1].style.cssText = `border-bottom-left-radius: 0;border-top-left-radius: 0;`;
					}
					else {
						inp[1].style.cssText = `border-radius: 0;`;
						inp[0].style.cssText = `border-bottom-right-radius: 0;border-top-right-radius: 0;`
					}
				}	
			}
		}
	});

	queryAll('.dropdown').forEach(function(eldr) {
		let btnTgl 	= eldr.querySelector('.dropdown-toggle'),
			drMn 	= eldr.querySelector('.dropdown-menu');

		jcEvent(btnTgl, 'click', function() {
			drMn.classList.toggle('show');
		});
	});
	queryAll('.dropright').forEach(function(eldr) {
		let btnTgl 	= eldr.querySelector('.dropdown-toggle'),
			drMn 	= eldr.querySelector('.dropdown-menu');

		jcEvent(btnTgl, 'click', function() {
			drMn.classList.toggle('show');
			let cW = btnTgl.clientWidth,
				cH = btnTgl.clientHeight;
			drMn.style.cssText = `top: 0; left: ${cW}px`;
		});
	});

	queryAll('.dropleft').forEach(function(eldr) {
		let btnTgl 	= eldr.querySelector('.dropdown-toggle'),
			drMn 	= eldr.querySelector('.dropdown-menu');

		jcEvent(btnTgl, 'click', function() {
			drMn.classList.toggle('show');
			let cW = btnTgl.clientWidth,
				cH = btnTgl.clientHeight;
			drMn.style.cssText = `top: 0; right: ${cW}px`;
		});
	});

	queryAll('.droptop').forEach(function(eldr) {
		let btnTgl 	= eldr.querySelector('.dropdown-toggle'),
			drMn 	= eldr.querySelector('.dropdown-menu');

		jcEvent(btnTgl, 'click', function() {
			drMn.classList.toggle('show');
			let cW = btnTgl.clientWidth,
				cH = btnTgl.clientHeight;
			drMn.style.cssText = `bottom: ${cH}px; left: 0`;
		});
	});

	queryAll('.modal-toggle').forEach(function(el) {
		jcEvent(el, 'click', function() {
			let target 	= el.attributes.target.nodeValue,
				modal 	= query(target),
				modalW 	= modal.getAttribute('modal-width');
			modal.classList.toggle('modal-show');
			modal.querySelector('.modal-block').style.cssText = `max-width: ${modalW}`;	
		});
	});
}

function pageLoaderStart(ivalBack) {
	if (query('.loader-pack') !== null) {
		query('.page-loader').style.display = "block";
		let loaderItem 	= queryAll('.loader-item'),
			wL 			= 0,
			w_anm 		= 1;
		if (loaderItem !== null) {
			let invLoader = setInterval(function() {
				loaderItem.forEach(function(el) {
					if (el.classList.contains('loader-item-animate') == true) {
						el.classList.remove("loader-item-animate");
					}
					wL += w_anm;
					if (wL == loaderItem.length - 1) {
						w_anm = -1;
					}
					if (wL == 0){
						w_anm = 1;
					}
				});
				loaderItem[wL].classList.add('loader-item-animate')
			}, 300);

			if (typeof ivalBack == "function") {
				ivalBack(invLoader);
			}
		}
	}
}
pageLoaderStart(function(resIval) {
	jcEvent(window, 'load', function() {
		clearInterval(resIval);
		query('.page-loader').style.display = "none";
	});
});

jcEvent(window, 'load', function(res) {
	let mode = window.location.search;

	if (mode.length !== 0) {
		let data 	= mode.split('='),
			uri 	= data[1],
			spl  	= data[0],
			spa 	= spl.split('/'),
			model 	= spa[0].replace('?', ''),
			innerID = spa[1];
		if (model === "spa-model") {
			ajax.GET({
				url : uri,
			}, function(res) {
				if (res !== false) {
					if (query('#' + innerID) !== null) {
						query('#' + innerID).innerHTML = res;
						jc_app();
					}
					else {
						jc_alert("Attribte 'inner-id' not found");
					}	
				}
				else {
					jc_alert("Halaman Tidak Ditemukan!", false);
					jc_app();
				}
			});	
		}
	}
	else {
		jc_app();
	}
});
