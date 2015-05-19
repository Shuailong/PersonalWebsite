// from prototype; short version
function $(element) { return document.getElementById(element); }

// strong encryption, even stronger than AES and RC4 and Twofish combined. :p
// nah seriously, this hopefully will drive at least some of the address collectors away :p
// and IE users of course :D
function decode(str) {
	str = decodeURIComponent(str);
	var rv = '';
	for (var i = 0; i < str.length; ++i) {
		rv += String.fromCharCode((str.charCodeAt(i) - (i + 32)));
	}
	return rv.split('').reverse().join('');
}
function decodeMails() {
	for (var i = 0, k; k = $('mail' + i); ++i) {
		var m = decode(k.getAttribute('title'));
		k.removeAttribute('title');
		while (k.childNodes.length) {
			k.removeChild(k.childNodes[0]);
		}
		var a = document.createElement('a');
		a.setAttribute('href', 'mailto:' + m);
		a.appendChild(document.createTextNode(m));
		k.appendChild(a);
		togglePGP(k);
	}
}
function load(evt) {
	decodeMails();
	
	var links = document.getElementsByTagName('a');
	for (var i = 0; i < links.length; ++i) {
		var l = links[i];
		if (!l.hasAttribute('href')) {
			continue;
		}
		if (!/^https?:/.test(l.getAttribute('href'))) {
			if (/^https?:/.test(l.href)) {
				l.setAttribute('title', 'Internal: ' + l.href);
			}
			else if (/^mailto:/.test(l.href)) {
				l.setAttribute('title', 'Compose email');
			}
		}
		else {
			l.setAttribute('title', 'External: ' + l.href);
		}
	}
}
function togglePGP(elem) {
	for (; elem && elem.nodeName.toLowerCase() != 'pre'; elem = elem.nextSibling);
	elem.style.display = (elem.style.display == 'none') ? 'block' : 'none';
	return false;
}
if ('attachEvent' in this) {
	attachEvent('onload', load);
}
else {
	addEventListener("load", load, false);
}
