class Hexa {
	constructor(inR, inG, inB) {
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