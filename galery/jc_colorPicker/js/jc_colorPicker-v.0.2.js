/* -------------------------------------------------------------------------------------------------------------------------------
# JCpicker 		: Simple Color Picker;
# Versi 		: v.0.2;
# created by 	: JC Programs;
------------------------------------------------------------------------------------------------------------------------------- */
class JCpicker {
	constructor(frame, targetFrame, callback, reType, panel) {
		const doc = document; const $ = (tg) => {const trg = doc.querySelector(tg); return trg}; const $$ = (tg) => {const trg = doc.querySelectorAll(tg); return trg};

		let jc_frameWidth, jc_frameHeight;

		if ( frame !== undefined && frame !== null 
			&& frame.width 	!== undefined && frame.width  !== null 
			&& frame.height !== undefined && frame.height !== null ) 
		{
			jc_frameWidth 	= frame.width;
			jc_frameHeight 	= frame.height;
		}
		else {
			jc_frameWidth 	= 225; // Nilai Default Width
			jc_frameHeight 	= 225; // Nilai Default Height
		}
		
		// ===========================================================================================================
		// Construct Executor 
		const _construct = {
			tag : ({tag, attrib, textNode, setCSS, target}) => {
				const 	el = doc.createElement(tag);
						el.style.cssText = setCSS;
						el.setAttribute(attrib.name, attrib.value);

				if (textNode !== undefined) {
					const	tx = doc.createTextNode(textNode);
							el.appendChild(tx);
				}

				if (target !== null && target !== undefined) {

					if (target.exec == "frame") {
						if (targetFrame !== undefined) {
							targetFrame.prepend(el);
						}
						else {
							$('body').prepend(el);
						}						
					}
					else if (target.exec == "append") {
						$(target.element).append(el);
					}
					else if (target.exec == "prepend") {
						$(target.element).prepend(el);
					}
					else if (target.exec == "appendChild") {
						$(target.element).appendChild(el);
					}
				}

				if (tag === "canvas") {
					_construct.drawRGB();
				}
			},
			drawRGB : (circleX = 0, circleY = 0) => {
				const 	cv  = $('#cv_jc_ColorPicker'),
						ctx = cv.getContext('2d');

						cv.width 	= jc_frameWidth;
						cv.height 	= jc_frameHeight;

				// clear Rect
				ctx.clearRect(0, 0, jc_frameWidth, jc_frameHeight);
				
				// Create Linear Gradian untuk selector Color
				let gradient = ctx.createLinearGradient(0, 0, jc_frameWidth, 0, 0);
					gradient.addColorStop(0.1 / 6, '#F00'); 
					gradient.addColorStop(1 / 6, '#FF0');
					gradient.addColorStop(2 / 6, '#0F0');
					gradient.addColorStop(3 / 6, '#0FF');
					gradient.addColorStop(4 / 6, '#00F');
					gradient.addColorStop(5 / 6, '#F0F');
					gradient.addColorStop(5.9 / 6, '#F00');

				ctx.fillStyle = gradient;
				ctx.fillRect(0.1, -0.1, jc_frameWidth - 0.1, jc_frameHeight + 0.1);

					gradient = ctx.createLinearGradient(0, 0, 0, jc_frameHeight);
					gradient.addColorStop(1, "rgba(126, 127, 127, 1)");
					gradient.addColorStop(0.1, "rgba(126, 127, 127, 0)");
					gradient.addColorStop(0, "rgba(0, 0, 0, 0)");
					gradient.addColorStop(1, "rgba(0, 0, 0, 1)");

				ctx.fillStyle = gradient;
				ctx.fillRect(0, 0, jc_frameWidth, jc_frameHeight);

				// circle picker
				let jc_framePosition 	= $('#jc_colorPicker');

				let jc_frameX = jc_framePosition.offsetLeft - 7.5,
					jc_frameY = jc_framePosition.offsetTop - 7.5;

				let crcX = circleX - jc_frameX, 
					crcY = circleY - jc_frameY, 
					arcR = 5;

				if ( crcX <= 0 ) {
					crcX = 0.1;
				}

				else if ( crcX >= jc_frameWidth ) {
					crcX = jc_frameWidth - 0.1;
				}

				if ( crcY <= 0 ) {
					crcY = 0.1;
				}
				else if ( crcY >= jc_frameHeight ) {
					crcY = jc_frameHeight - 0.1;
				}
					
				ctx.beginPath();
				ctx.arc(crcX, crcY, arcR, 0, Math.PI * 2);
				ctx.strokeStyle = "#fff";
				ctx.stroke();
				ctx.closePath();
				
				return {context: ctx, cX: crcX, cY: crcY};
			},
			drawHSL : (hue) => {
				let cv_prog  = $('#cv_jc_proges');
				
				if (cv_prog !== null) {
					let ctx_prog = cv_prog.getContext('2d');

					// clear Rect
					ctx_prog.clearRect(0, 0, cv_prog.width, cv_prog.height);

					let grad = ctx_prog.createLinearGradient(0, 0, 0, cv_prog.height);
						grad.addColorStop(0.1, "rgb(255, 255, 255)");
						grad.addColorStop(0.5,"#" + hue);
						grad.addColorStop(1, "rgb(0, 0, 0)");

					ctx_prog.fillStyle = grad;
					ctx_prog.fillRect(0, 0, cv_prog.width, cv_prog.height);
					this.ctxHSL = ctx_prog;
				}
			},

			dragHSL : (evY) =>{
				let comboProgres 	= $('#combo_jc_progeser');
				let cvHSL 			= $('#cv_jc_proges');

				let jc_positionFrm 	= $('#jc_colorPicker').offsetTop - 10;
				let comboTop 		= evY - jc_positionFrm;

				if (comboTop < 2) {
					comboTop = 2;
				}
				else if ( comboTop > jc_frameHeight) {
					comboTop = jc_frameHeight + 3;
				}
				comboProgres.style.top = String(comboTop) + "px";
				return {ctxHSL: this.ctxHSL, drY: comboTop};
				
			},

			hexa : (inR, inG, inB) => {
				if (inR !== null && inG !== null && inB !== null) {
					if (inR !== undefined && inG !== undefined && inB !== undefined) {
						let comHexa, hexR1, hexR2, hexG1, hexG2, hexB1, hexB2;
						let hexAry = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
						// R --------------------
						if (inR < 16) {
							hexR1 = '0';
							hexR2 = hexAry[inR];
						}
						else {
							hexR1 = hexAry[Math.floor(inR / 16)];
							hexR2 = hexAry[inR % 16];
						}

						// G --------------------
						if (inG < 16) {
							hexG1 = '0';
							hexG2 = hexAry[inG];
						}
						else {
							hexG1 = hexAry[Math.floor(inG / 16)];
							hexG2 = hexAry[inG % 16];
						}

						// B --------------------
						if (inB < 16) {
							hexB1 = '0';
							hexB2 = hexAry[inB];
						}
						else {
							hexB1 = hexAry[Math.floor(inB / 16)];
							hexB2 = hexAry[inB % 16];
						}

						// HEX COMBINE RGB -----
						if (comHexa !== null) {
							comHexa = String(hexR1) + String(hexR2) + String(hexG1) + String(hexG2) + String(hexB1) + String(hexB2);
						}
						else {
							comHexa = null;
						}

						return comHexa;
					}
					else {
						alert("ERROR! Data Color Undefined");
					}
				}
				else {
					alert("ERROR! Data Color Null");
				}
			}
		}

		// ===========================================================================================================
		// Regist all component
		const Register = function() {
			const newTag = () => {
				let jc_frameWidthPlush 	= 50,
					jc_frameHeightPlush = 12.5;

				if (panel !== undefined && panel !== null) {
					if (panel == true) {
						jc_frameWidthPlush  = 210;
						jc_frameHeightPlush = 12.5;
					}
				}

				_construct.tag({
					tag 		: "div", 
					attrib 		: {
						name 	: "id",
						value 	: "jc_colorPicker"
					},
					target 		: {
						exec 	: "frame"
					},
					setCSS 		: `
							box-shadow: 1px 1px 5px; 
							background: #eee; 
							margin: 0; 
							padding: 0px;
							width: ${String(jc_frameWidth + jc_frameWidthPlush)}px;
							height: ${String(jc_frameHeight + jc_frameHeightPlush)}px;
							border: 1px #ddd solid;
							border-radius: 5px;
							overflow:hidden;
							position:absolute;
						`
				});

				// Work Left -----------------
				_construct.tag({
					tag 		: "div", 
					attrib 		: {
						name 	: "id",
						value 	: "_jc_workLeft"
					},
					target 		: {
						element : "#jc_colorPicker",
						exec 	: "appendChild"
					},
					setCSS 		: `
							margin: 0; 
							padding: 5px; 
							width: ${String(jc_frameWidth + 50)}px; 
							height: ${String(jc_frameHeight)}px; 
							display: inline-block; 
							overflow: hidden;
							position: absolute;
						`
				});

				// Canvas -------------------
				_construct.tag({
					tag 		: "canvas", 
					attrib 		: {
						name 	: "id",
						value 	: "cv_jc_ColorPicker"
					},
					target 		: {
						element : "#_jc_workLeft",
						exec 	: "appendChild"
					},
					setCSS 		: `
							margin: 0;
							padding: 0px;
							width: ${String(jc_frameWidth)}px; 
							height: ${String(jc_frameHeight)}px; 
							border: 1px #606060 solid;
							position: absolute;
							left: 5px;
							top: 5px;
						`
				});

				// Canvas Progres ----------
				_construct.tag({
					tag 		: "canvas", 
					attrib 		: {
						name 	: "id",
						value 	: "cv_jc_proges"
					},
					target 		: {
						element : "#_jc_workLeft",
						exec 	: "appendChild"
					},
					setCSS 		: `
							margin: 0; 
							padding: 0px;
							width: 20px; 
							height: ${String(jc_frameHeight)}px; 
							border: 1px #606060 solid;
							position: absolute;
							right: 17.5px;
							top: 5px;
							cursor: pointer;
						`
				});

				// Combo Progreser -------
				_construct.tag({
					tag 		: "div", 
					attrib 		: {
						name 	: "id",
						value 	: "combo_jc_progeser"
					},
					target 		: {
						element : "#_jc_workLeft",
						exec 	: "append"
					},
					setCSS 		: `
							margin: 0; 
							padding: 0px;
							width: 30px;
							height: 3px;
							border: 2px #606060 solid;
							position: absolute;
							top: 2px;
							right: 11.5px;
							cursor: pointer;
						`
				});


				if (panel !== undefined && panel !== null) {
					if (panel == true) {
						// Work Right -----------------
						_construct.tag({
							tag 		: "div", 
							attrib 		: {
								name 	: "id",
								value 	: "_jc_workRight"
							},
							target 		: {
								element : "#jc_colorPicker",
								exec 	: "appendChild"
							},
							setCSS 		: `
									margin: 0;
									padding: 5px;
									width: 138.15px; 
									height: ${String(jc_frameHeight)}px; 
									display: inline-block; 
									overflow: hidden;
									position: absolute;
									right : 0px;
									top : 0px;
								`
						});

						// _jcLayout -----------------
						_construct.tag({
							tag 		: "div", 
							attrib 		: {
								name 	: "id",
								value 	: "_jcLayout"
							},
							target 		: {
								element : "#_jc_workRight",
								exec 	: "appendChild"
							},
							setCSS 		: `
									color: #fff; 
									margin: 0;
									margin-bottom: 10px;
									padding: 0px;
									width: 100%;
									border: 1px #ddd solid;
									height: 45%;
								`
						});

						// Label R --------------------
						_construct.tag({
							tag 		: "label", 
							attrib 		: {
								name 	: "for",
								value 	: "jc_r"
							},
							target 		: {
								element : "#_jc_workRight",
								exec 	: "appendChild"
							},
							textNode 	: "R ",
							setCSS 		: `
									color: #000;
									font-size: 15px; 
									margin: 0;
									padding: 0px;
									width : 10px;
									overflow: hidden;
								`
						});

						// Input R --------------------
						_construct.tag({
							tag 		: "input", 
							attrib 		: {
								name 	: "id",
								value 	: "jc_r"
							},
							target 		: {
								element : "#_jc_workRight",
								exec 	: "appendChild"
							},
							setCSS 		: `
									color: #000;
									font-size: 15px; 
									margin: 0;
									padding: 0px;
									width: 30px;
									height: 20%;
									border: 1px #ddd solid;

								`
						});

						// Label G --------------------
						_construct.tag({
							tag 		: "label", 
							attrib 		: {
								name 	: "for",
								value 	: "jc_g"
							},
							target 		: {
								element : "#_jc_workRight",
								exec 	: "appendChild"
							},
							textNode 	: "G ",
							setCSS 		: `
									color: #000;
									font-size: 15px; 
									margin: 0;
									padding: 0px;
									width : 10px;
									overflow: hidden;
								`
						});

						// Input G --------------------
						_construct.tag({
							tag 		: "input", 
							attrib 		: {
								name 	: "id",
								value 	: "jc_g"
							},
							target 		: {
								element : "#_jc_workRight",
								exec 	: "appendChild"
							},
							setCSS 		: `
									color: #000;
									font-size: 15px; 
									margin: 0;
									padding: 0px;
									width: 30px;
									height: 20%;
									border: 1px #ddd solid;
								`
						});

						// Label B --------------------
						_construct.tag({
							tag 		: "label", 
							attrib 		: {
								name 	: "for",
								value 	: "jc_b"
							},
							target 		: {
								element : "#_jc_workRight",
								exec 	: "appendChild"
							},
							textNode 	: "B ",
							setCSS 		: `
									color: #000;
									font-size: 15px; 
									margin: 0;
									padding: 0px;
									width : 10px;
									overflow: hidden;
								`
						});

						// Input B --------------------
						_construct.tag({
							tag 		: "input", 
							attrib 		: {
								name 	: "id",
								value 	: "jc_b"
							},
							target 		: {
								element : "#_jc_workRight",
								exec 	: "appendChild"
							},
							setCSS 		: `
									color: #000;
									font-size: 15px; 
									margin: 0;
									padding: 0px;
									width: 30px;
									height: 20%;
									border: 1px #ddd solid;
								`
						});

						// Label HEX ------------------
						_construct.tag({
							tag 		: "label", 
							attrib 		: {
								name 	: "for",
								value 	: "jc_hexa"
							},
							target 		: {
								element : "#_jc_workRight",
								exec 	: "appendChild"
							},
							textNode 	: "Hex ",
							setCSS 		: `
									color: #000;
									font-size: 15px; 
									margin: 0;
									width: 10px;
									margin-top: 5px;
									padding: 0px;
								`
						});

						// Input HEX -------------------
						_construct.tag({
							tag 		: "input", 
							attrib 		: {
								name 	: "id",
								value 	: "jc_hexa"
							},
							target 		: {
								element : "#_jc_workRight",
								exec 	: "appendChild"
							},
							setCSS 		: `
									color: #000;
									font-size: 15px; 
									margin: 0;
									margin-top: 5px;
									padding: 0px;
									width: 107.25px;
									height: 20%;
									border: 1px #ddd solid;
								`
						});
					}
				}
			},

			styleUp = () => {
				if (panel !== undefined && panel !== null) {
					if (panel == true) {
						let inR = $('#jc_r');
							inR.setAttribute('type', 'text');
						let inG = $('#jc_g');
							inG.setAttribute('type', 'text');
						let inB = $('#jc_b');
							inB.setAttribute('type', 'text');
						let inHex = $('#jc_hexa');
							inHex.setAttribute('type', 'text');
					}
				}
			}

			this.setReg = () =>{
				newTag(); styleUp();
			}
		}

		// ===========================================================================================================
		// response Closure all prosess
		const Active = function(r, g, b, hex) {
			let HEX 	= '#' + hex;
			let RGB 	= "rgb("+r+","+g+","+b+")";
			let type 	=  HEX; // Default Tipe Permintaan

			if (panel !== undefined && panel !== null) {
				if (panel == true) {
					$('#_jcLayout').style.background = RGB;
					$('#jc_r').value = r;
					$('#jc_g').value = g;
					$('#jc_b').value = b;
					
					$('#jc_hexa').value = HEX;		
				}
			}

			if (reType !== undefined && reType !== null) {
				if (reType == 'rgb') {
					type = RGB;
				}
				else if (reType == 'hex') {
					type = HEX;
				}
			}
			if (callback !== undefined && callback !== null) {
				callback(type);
			}
		}

		// ===========================================================================================================
		// response Event Mouse
		const activeMouse =  {
			mouseMove : (evX, evY) => {
				this.ex = evX;
				this.ey = evY;
			},

			mouseDown : () => {
				this.inv = setInterval(() => {
					let returnCtx = _construct.drawRGB(this.ex, this.ey);

					let imgData = returnCtx.context.getImageData(returnCtx.cX, returnCtx.cY, 1, 1);
					//console.log(returnCtx.cX + " " +returnCtx.cY);

					let r = imgData.data[0],
						g = imgData.data[1],
						b = imgData.data[2],
						hex = _construct.hexa(r, g, b);

					_construct.drawHSL(hex);  // Draw HSL

					new Active(r, g, b, hex); // Passing ke Active untuk manage layouting

					window.addEventListener('mouseup', () => {
						activeMouse.mouseInv();
					});

				}, 1);
			},
			
			mouseInv 	: () => {
				clearInterval(this.inv);
			},

			progDown 	: () => {
				this.invProg = setInterval(() => {

					if (this.ey !== undefined && this.ey !== NaN) {
						let returnCtxHSL = _construct.dragHSL(this.ey);
						let imgDataHSL = returnCtxHSL.ctxHSL.getImageData(1, returnCtxHSL.drY, 1, 1);
						let rH = imgDataHSL.data[0],
							gH = imgDataHSL.data[1],
							bH = imgDataHSL.data[2],
							hexH = _construct.hexa(rH, gH, bH);
						//console.log(returnCtxHSL.drY);

						new Active(rH, gH, bH, hexH); // Passing ke Active untuk manage layouting
					}
					window.addEventListener('mouseup', () => {
						activeMouse.progInv();
					});	
				}, 1);
			},

			progInv 	: () => {
				clearInterval(this.invProg);
			}
		}

		// ===========================================================================================================
		// Event List
		const set_listEvent = () =>{
			// -------------------------------------------------
			// RGB Picker Event 
			const cvPicker = $('#cv_jc_ColorPicker');

			cvPicker.addEventListener('mousedown', () => {
				activeMouse.mouseDown();

				window.addEventListener('mousemove', (ev) => {
					let evX 	= ev.clientX - 14;
					let evY 	= ev.clientY - 14;
					activeMouse.mouseMove(evX, evY);
				});
			});

			cvPicker.addEventListener('mouseup', () => {
				activeMouse.mouseInv();
			});

			// -------------------------------------------------
			// HSL Picker Progress Event 
			const cvProgress = $('#cv_jc_proges');
			cvProgress.addEventListener('mousedown', () => {
				activeMouse.progDown();

				window.addEventListener('mousemove', (ev) => {
					let evX 	= ev.clientX - 14;
					let evY 	= ev.clientY - 14;
					activeMouse.mouseMove(evX, evY);
				});
			});

			cvProgress.addEventListener('mouseup', () => {
				activeMouse.progInv();
			});

			// -------------------------------------------------
			// Combo Picker Progress Event 
			const comboPick = $('#combo_jc_progeser');
			comboPick.addEventListener('mousedown', () => {
				activeMouse.progDown();

				window.addEventListener('mousemove', (ev) => {
					let evX 	= ev.clientX - 14;
					let evY 	= ev.clientY - 14;
					activeMouse.mouseMove(evX, evY);
				});
			});

			comboPick.addEventListener('mouseup', () => {
				activeMouse.progInv();
			});

		}

		// ===========================================================================================================
		// Draw First Open Canvas Picker
		const firstDraw = () => {
			let returnCtx = _construct.drawRGB(0, 0);
						
			let imgData = returnCtx.context.getImageData(returnCtx.cX, returnCtx.cY, 1, 1);

			let r = imgData.data[0],
				g = imgData.data[1],
				b = imgData.data[2],
				hex = _construct.hexa(r, g, b);

			_construct.drawHSL(hex);  // Draw HSL
		}
		
		// ===========================================================================================================
		// Onload Window
		this.on = function() {
			const 	frmActS = $("#jc_colorPicker");
			if (frmActS == null) {
				const 	regist = new Register();
						regist.setReg(); 
				set_listEvent(); firstDraw();	
			}
		}
		this.off = function() {
			const 	frmActH = $("#jc_colorPicker");
			if (frmActH != null) {
				$('#jc_colorPicker').remove();
			}
		}
	}
}
