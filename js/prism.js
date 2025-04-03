/* PrismJS 1.30.0
https://prismjs.com/download.html#themes=prism&languages=markup+css+clike+javascript+bash+css-extras+csv+dns-zone-file+docker+ignore+java+json+json5+jsonp+less+markdown+markup-templating+mongodb+nginx+php+python+sass+scss+sql+twig+typescript+typoscript+velocity+vim+wiki+yaml&plugins=command-line+toolbar+copy-to-clipboard */
var _self = "undefined" != typeof window ? window : "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? self : {},
	Prism = (function (e) {
		var n = /(?:^|\s)lang(?:uage)?-([\w-]+)(?=\s|$)/i,
			t = 0,
			r = {},
			a = {
				manual: e.Prism && e.Prism.manual,
				disableWorkerMessageHandler: e.Prism && e.Prism.disableWorkerMessageHandler,
				util: {
					encode: function e(n) {
						return n instanceof i
							? new i(n.type, e(n.content), n.alias)
							: Array.isArray(n)
							? n.map(e)
							: n
									.replace(/&/g, "&amp;")
									.replace(/</g, "&lt;")
									.replace(/\u00a0/g, " ");
					},
					type: function (e) {
						return Object.prototype.toString.call(e).slice(8, -1);
					},
					objId: function (e) {
						return e.__id || Object.defineProperty(e, "__id", { value: ++t }), e.__id;
					},
					clone: function e(n, t) {
						var r, i;
						switch (((t = t || {}), a.util.type(n))) {
							case "Object":
								if (((i = a.util.objId(n)), t[i])) return t[i];
								for (var l in ((r = {}), (t[i] = r), n)) n.hasOwnProperty(l) && (r[l] = e(n[l], t));
								return r;
							case "Array":
								return (
									(i = a.util.objId(n)),
									t[i]
										? t[i]
										: ((r = []),
										  (t[i] = r),
										  n.forEach(function (n, a) {
												r[a] = e(n, t);
										  }),
										  r)
								);
							default:
								return n;
						}
					},
					getLanguage: function (e) {
						for (; e; ) {
							var t = n.exec(e.className);
							if (t) return t[1].toLowerCase();
							e = e.parentElement;
						}
						return "none";
					},
					setLanguage: function (e, t) {
						(e.className = e.className.replace(RegExp(n, "gi"), "")), e.classList.add("language-" + t);
					},
					currentScript: function () {
						if ("undefined" == typeof document) return null;
						if (document.currentScript && "SCRIPT" === document.currentScript.tagName) return document.currentScript;
						try {
							throw new Error();
						} catch (r) {
							var e = (/at [^(\r\n]*\((.*):[^:]+:[^:]+\)$/i.exec(r.stack) || [])[1];
							if (e) {
								var n = document.getElementsByTagName("script");
								for (var t in n) if (n[t].src == e) return n[t];
							}
							return null;
						}
					},
					isActive: function (e, n, t) {
						for (var r = "no-" + n; e; ) {
							var a = e.classList;
							if (a.contains(n)) return !0;
							if (a.contains(r)) return !1;
							e = e.parentElement;
						}
						return !!t;
					},
				},
				languages: {
					plain: r,
					plaintext: r,
					text: r,
					txt: r,
					extend: function (e, n) {
						var t = a.util.clone(a.languages[e]);
						for (var r in n) t[r] = n[r];
						return t;
					},
					insertBefore: function (e, n, t, r) {
						var i = (r = r || a.languages)[e],
							l = {};
						for (var o in i)
							if (i.hasOwnProperty(o)) {
								if (o == n) for (var s in t) t.hasOwnProperty(s) && (l[s] = t[s]);
								t.hasOwnProperty(o) || (l[o] = i[o]);
							}
						var u = r[e];
						return (
							(r[e] = l),
							a.languages.DFS(a.languages, function (n, t) {
								t === u && n != e && (this[n] = l);
							}),
							l
						);
					},
					DFS: function e(n, t, r, i) {
						i = i || {};
						var l = a.util.objId;
						for (var o in n)
							if (n.hasOwnProperty(o)) {
								t.call(n, o, n[o], r || o);
								var s = n[o],
									u = a.util.type(s);
								"Object" !== u || i[l(s)] ? "Array" !== u || i[l(s)] || ((i[l(s)] = !0), e(s, t, o, i)) : ((i[l(s)] = !0), e(s, t, null, i));
							}
					},
				},
				plugins: {},
				highlightAll: function (e, n) {
					a.highlightAllUnder(document, e, n);
				},
				highlightAllUnder: function (e, n, t) {
					var r = { callback: t, container: e, selector: 'code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code' };
					a.hooks.run("before-highlightall", r), (r.elements = Array.prototype.slice.apply(r.container.querySelectorAll(r.selector))), a.hooks.run("before-all-elements-highlight", r);
					for (var i, l = 0; (i = r.elements[l++]); ) a.highlightElement(i, !0 === n, r.callback);
				},
				highlightElement: function (n, t, r) {
					var i = a.util.getLanguage(n),
						l = a.languages[i];
					a.util.setLanguage(n, i);
					var o = n.parentElement;
					o && "pre" === o.nodeName.toLowerCase() && a.util.setLanguage(o, i);
					var s = { element: n, language: i, grammar: l, code: n.textContent };
					function u(e) {
						(s.highlightedCode = e), a.hooks.run("before-insert", s), (s.element.innerHTML = s.highlightedCode), a.hooks.run("after-highlight", s), a.hooks.run("complete", s), r && r.call(s.element);
					}
					if ((a.hooks.run("before-sanity-check", s), (o = s.element.parentElement) && "pre" === o.nodeName.toLowerCase() && !o.hasAttribute("tabindex") && o.setAttribute("tabindex", "0"), !s.code)) return a.hooks.run("complete", s), void (r && r.call(s.element));
					if ((a.hooks.run("before-highlight", s), s.grammar))
						if (t && e.Worker) {
							var c = new Worker(a.filename);
							(c.onmessage = function (e) {
								u(e.data);
							}),
								c.postMessage(JSON.stringify({ language: s.language, code: s.code, immediateClose: !0 }));
						} else u(a.highlight(s.code, s.grammar, s.language));
					else u(a.util.encode(s.code));
				},
				highlight: function (e, n, t) {
					var r = { code: e, grammar: n, language: t };
					if ((a.hooks.run("before-tokenize", r), !r.grammar)) throw new Error('The language "' + r.language + '" has no grammar.');
					return (r.tokens = a.tokenize(r.code, r.grammar)), a.hooks.run("after-tokenize", r), i.stringify(a.util.encode(r.tokens), r.language);
				},
				tokenize: function (e, n) {
					var t = n.rest;
					if (t) {
						for (var r in t) n[r] = t[r];
						delete n.rest;
					}
					var a = new s();
					return (
						u(a, a.head, e),
						o(e, a, n, a.head, 0),
						(function (e) {
							for (var n = [], t = e.head.next; t !== e.tail; ) n.push(t.value), (t = t.next);
							return n;
						})(a)
					);
				},
				hooks: {
					all: {},
					add: function (e, n) {
						var t = a.hooks.all;
						(t[e] = t[e] || []), t[e].push(n);
					},
					run: function (e, n) {
						var t = a.hooks.all[e];
						if (t && t.length) for (var r, i = 0; (r = t[i++]); ) r(n);
					},
				},
				Token: i,
			};
		function i(e, n, t, r) {
			(this.type = e), (this.content = n), (this.alias = t), (this.length = 0 | (r || "").length);
		}
		function l(e, n, t, r) {
			e.lastIndex = n;
			var a = e.exec(t);
			if (a && r && a[1]) {
				var i = a[1].length;
				(a.index += i), (a[0] = a[0].slice(i));
			}
			return a;
		}
		function o(e, n, t, r, s, g) {
			for (var f in t)
				if (t.hasOwnProperty(f) && t[f]) {
					var h = t[f];
					h = Array.isArray(h) ? h : [h];
					for (var d = 0; d < h.length; ++d) {
						if (g && g.cause == f + "," + d) return;
						var v = h[d],
							p = v.inside,
							m = !!v.lookbehind,
							y = !!v.greedy,
							k = v.alias;
						if (y && !v.pattern.global) {
							var x = v.pattern.toString().match(/[imsuy]*$/)[0];
							v.pattern = RegExp(v.pattern.source, x + "g");
						}
						for (var b = v.pattern || v, w = r.next, A = s; w !== n.tail && !(g && A >= g.reach); A += w.value.length, w = w.next) {
							var P = w.value;
							if (n.length > e.length) return;
							if (!(P instanceof i)) {
								var E,
									S = 1;
								if (y) {
									if (!(E = l(b, A, e, m)) || E.index >= e.length) break;
									var L = E.index,
										O = E.index + E[0].length,
										C = A;
									for (C += w.value.length; L >= C; ) C += (w = w.next).value.length;
									if (((A = C -= w.value.length), w.value instanceof i)) continue;
									for (var j = w; j !== n.tail && (C < O || "string" == typeof j.value); j = j.next) S++, (C += j.value.length);
									S--, (P = e.slice(A, C)), (E.index -= A);
								} else if (!(E = l(b, 0, P, m))) continue;
								L = E.index;
								var N = E[0],
									_ = P.slice(0, L),
									M = P.slice(L + N.length),
									W = A + P.length;
								g && W > g.reach && (g.reach = W);
								var I = w.prev;
								if ((_ && ((I = u(n, I, _)), (A += _.length)), c(n, I, S), (w = u(n, I, new i(f, p ? a.tokenize(N, p) : N, k, N))), M && u(n, w, M), S > 1)) {
									var T = { cause: f + "," + d, reach: W };
									o(e, n, t, w.prev, A, T), g && T.reach > g.reach && (g.reach = T.reach);
								}
							}
						}
					}
				}
		}
		function s() {
			var e = { value: null, prev: null, next: null },
				n = { value: null, prev: e, next: null };
			(e.next = n), (this.head = e), (this.tail = n), (this.length = 0);
		}
		function u(e, n, t) {
			var r = n.next,
				a = { value: t, prev: n, next: r };
			return (n.next = a), (r.prev = a), e.length++, a;
		}
		function c(e, n, t) {
			for (var r = n.next, a = 0; a < t && r !== e.tail; a++) r = r.next;
			(n.next = r), (r.prev = n), (e.length -= a);
		}
		if (
			((e.Prism = a),
			(i.stringify = function e(n, t) {
				if ("string" == typeof n) return n;
				if (Array.isArray(n)) {
					var r = "";
					return (
						n.forEach(function (n) {
							r += e(n, t);
						}),
						r
					);
				}
				var i = { type: n.type, content: e(n.content, t), tag: "span", classes: ["token", n.type], attributes: {}, language: t },
					l = n.alias;
				l && (Array.isArray(l) ? Array.prototype.push.apply(i.classes, l) : i.classes.push(l)), a.hooks.run("wrap", i);
				var o = "";
				for (var s in i.attributes) o += " " + s + '="' + (i.attributes[s] || "").replace(/"/g, "&quot;") + '"';
				return "<" + i.tag + ' class="' + i.classes.join(" ") + '"' + o + ">" + i.content + "</" + i.tag + ">";
			}),
			!e.document)
		)
			return e.addEventListener
				? (a.disableWorkerMessageHandler ||
						e.addEventListener(
							"message",
							function (n) {
								var t = JSON.parse(n.data),
									r = t.language,
									i = t.code,
									l = t.immediateClose;
								e.postMessage(a.highlight(i, a.languages[r], r)), l && e.close();
							},
							!1
						),
				  a)
				: a;
		var g = a.util.currentScript();
		function f() {
			a.manual || a.highlightAll();
		}
		if ((g && ((a.filename = g.src), g.hasAttribute("data-manual") && (a.manual = !0)), !a.manual)) {
			var h = document.readyState;
			"loading" === h || ("interactive" === h && g && g.defer) ? document.addEventListener("DOMContentLoaded", f) : window.requestAnimationFrame ? window.requestAnimationFrame(f) : window.setTimeout(f, 16);
		}
		return a;
	})(_self);
"undefined" != typeof module && module.exports && (module.exports = Prism), "undefined" != typeof global && (global.Prism = Prism);
(Prism.languages.markup = {
	comment: { pattern: /<!--(?:(?!<!--)[\s\S])*?-->/, greedy: !0 },
	prolog: { pattern: /<\?[\s\S]+?\?>/, greedy: !0 },
	doctype: { pattern: /<!DOCTYPE(?:[^>"'[\]]|"[^"]*"|'[^']*')+(?:\[(?:[^<"'\]]|"[^"]*"|'[^']*'|<(?!!--)|<!--(?:[^-]|-(?!->))*-->)*\]\s*)?>/i, greedy: !0, inside: { "internal-subset": { pattern: /(^[^\[]*\[)[\s\S]+(?=\]>$)/, lookbehind: !0, greedy: !0, inside: null }, string: { pattern: /"[^"]*"|'[^']*'/, greedy: !0 }, punctuation: /^<!|>$|[[\]]/, "doctype-tag": /^DOCTYPE/i, name: /[^\s<>'"]+/ } },
	cdata: { pattern: /<!\[CDATA\[[\s\S]*?\]\]>/i, greedy: !0 },
	tag: {
		pattern: /<\/?(?!\d)[^\s>\/=$<%]+(?:\s(?:\s*[^\s>\/=]+(?:\s*=\s*(?:"[^"]*"|'[^']*'|[^\s'">=]+(?=[\s>]))|(?=[\s/>])))+)?\s*\/?>/,
		greedy: !0,
		inside: {
			tag: { pattern: /^<\/?[^\s>\/]+/, inside: { punctuation: /^<\/?/, namespace: /^[^\s>\/:]+:/ } },
			"special-attr": [],
			"attr-value": {
				pattern: /=\s*(?:"[^"]*"|'[^']*'|[^\s'">=]+)/,
				inside: {
					punctuation: [
						{ pattern: /^=/, alias: "attr-equals" },
						{ pattern: /^(\s*)["']|["']$/, lookbehind: !0 },
					],
				},
			},
			punctuation: /\/?>/,
			"attr-name": { pattern: /[^\s>\/]+/, inside: { namespace: /^[^\s>\/:]+:/ } },
		},
	},
	entity: [{ pattern: /&[\da-z]{1,8};/i, alias: "named-entity" }, /&#x?[\da-f]{1,8};/i],
}),
	(Prism.languages.markup.tag.inside["attr-value"].inside.entity = Prism.languages.markup.entity),
	(Prism.languages.markup.doctype.inside["internal-subset"].inside = Prism.languages.markup),
	Prism.hooks.add("wrap", function (a) {
		"entity" === a.type && (a.attributes.title = a.content.replace(/&amp;/, "&"));
	}),
	Object.defineProperty(Prism.languages.markup.tag, "addInlined", {
		value: function (a, e) {
			var s = {};
			(s["language-" + e] = { pattern: /(^<!\[CDATA\[)[\s\S]+?(?=\]\]>$)/i, lookbehind: !0, inside: Prism.languages[e] }), (s.cdata = /^<!\[CDATA\[|\]\]>$/i);
			var t = { "included-cdata": { pattern: /<!\[CDATA\[[\s\S]*?\]\]>/i, inside: s } };
			t["language-" + e] = { pattern: /[\s\S]+/, inside: Prism.languages[e] };
			var n = {};
			(n[a] = {
				pattern: RegExp(
					"(<__[^>]*>)(?:<!\\[CDATA\\[(?:[^\\]]|\\](?!\\]>))*\\]\\]>|(?!<!\\[CDATA\\[)[^])*?(?=</__>)".replace(/__/g, function () {
						return a;
					}),
					"i"
				),
				lookbehind: !0,
				greedy: !0,
				inside: t,
			}),
				Prism.languages.insertBefore("markup", "cdata", n);
		},
	}),
	Object.defineProperty(Prism.languages.markup.tag, "addAttribute", {
		value: function (a, e) {
			Prism.languages.markup.tag.inside["special-attr"].push({ pattern: RegExp("(^|[\"'\\s])(?:" + a + ")\\s*=\\s*(?:\"[^\"]*\"|'[^']*'|[^\\s'\">=]+(?=[\\s>]))", "i"), lookbehind: !0, inside: { "attr-name": /^[^\s=]+/, "attr-value": { pattern: /=[\s\S]+/, inside: { value: { pattern: /(^=\s*(["']|(?!["'])))\S[\s\S]*(?=\2$)/, lookbehind: !0, alias: [e, "language-" + e], inside: Prism.languages[e] }, punctuation: [{ pattern: /^=/, alias: "attr-equals" }, /"|'/] } } } });
		},
	}),
	(Prism.languages.html = Prism.languages.markup),
	(Prism.languages.mathml = Prism.languages.markup),
	(Prism.languages.svg = Prism.languages.markup),
	(Prism.languages.xml = Prism.languages.extend("markup", {})),
	(Prism.languages.ssml = Prism.languages.xml),
	(Prism.languages.atom = Prism.languages.xml),
	(Prism.languages.rss = Prism.languages.xml);
!(function (s) {
	var e = /(?:"(?:\\(?:\r\n|[\s\S])|[^"\\\r\n])*"|'(?:\\(?:\r\n|[\s\S])|[^'\\\r\n])*')/;
	(s.languages.css = { comment: /\/\*[\s\S]*?\*\//, atrule: { pattern: RegExp("@[\\w-](?:[^;{\\s\"']|\\s+(?!\\s)|" + e.source + ")*?(?:;|(?=\\s*\\{))"), inside: { rule: /^@[\w-]+/, "selector-function-argument": { pattern: /(\bselector\s*\(\s*(?![\s)]))(?:[^()\s]|\s+(?![\s)])|\((?:[^()]|\([^()]*\))*\))+(?=\s*\))/, lookbehind: !0, alias: "selector" }, keyword: { pattern: /(^|[^\w-])(?:and|not|only|or)(?![\w-])/, lookbehind: !0 } } }, url: { pattern: RegExp("\\burl\\((?:" + e.source + "|(?:[^\\\\\r\n()\"']|\\\\[^])*)\\)", "i"), greedy: !0, inside: { function: /^url/i, punctuation: /^\(|\)$/, string: { pattern: RegExp("^" + e.source + "$"), alias: "url" } } }, selector: { pattern: RegExp("(^|[{}\\s])[^{}\\s](?:[^{};\"'\\s]|\\s+(?![\\s{])|" + e.source + ")*(?=\\s*\\{)"), lookbehind: !0 }, string: { pattern: e, greedy: !0 }, property: { pattern: /(^|[^-\w\xA0-\uFFFF])(?!\s)[-_a-z\xA0-\uFFFF](?:(?!\s)[-\w\xA0-\uFFFF])*(?=\s*:)/i, lookbehind: !0 }, important: /!important\b/i, function: { pattern: /(^|[^-a-z0-9])[-a-z0-9]+(?=\()/i, lookbehind: !0 }, punctuation: /[(){};:,]/ }), (s.languages.css.atrule.inside.rest = s.languages.css);
	var t = s.languages.markup;
	t && (t.tag.addInlined("style", "css"), t.tag.addAttribute("style", "css"));
})(Prism);
Prism.languages.clike = {
	comment: [
		{ pattern: /(^|[^\\])\/\*[\s\S]*?(?:\*\/|$)/, lookbehind: !0, greedy: !0 },
		{ pattern: /(^|[^\\:])\/\/.*/, lookbehind: !0, greedy: !0 },
	],
	string: { pattern: /(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/, greedy: !0 },
	"class-name": { pattern: /(\b(?:class|extends|implements|instanceof|interface|new|trait)\s+|\bcatch\s+\()[\w.\\]+/i, lookbehind: !0, inside: { punctuation: /[.\\]/ } },
	keyword: /\b(?:break|catch|continue|do|else|finally|for|function|if|in|instanceof|new|null|return|throw|try|while)\b/,
	boolean: /\b(?:false|true)\b/,
	function: /\b\w+(?=\()/,
	number: /\b0x[\da-f]+\b|(?:\b\d+(?:\.\d*)?|\B\.\d+)(?:e[+-]?\d+)?/i,
	operator: /[<>]=?|[!=]=?=?|--?|\+\+?|&&?|\|\|?|[?*/~^%]/,
	punctuation: /[{}[\];(),.:]/,
};
(Prism.languages.javascript = Prism.languages.extend("clike", {
	"class-name": [Prism.languages.clike["class-name"], { pattern: /(^|[^$\w\xA0-\uFFFF])(?!\s)[_$A-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\.(?:constructor|prototype))/, lookbehind: !0 }],
	keyword: [
		{ pattern: /((?:^|\})\s*)catch\b/, lookbehind: !0 },
		{ pattern: /(^|[^.]|\.\.\.\s*)\b(?:as|assert(?=\s*\{)|async(?=\s*(?:function\b|\(|[$\w\xA0-\uFFFF]|$))|await|break|case|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally(?=\s*(?:\{|$))|for|from(?=\s*(?:['"]|$))|function|(?:get|set)(?=\s*(?:[#\[$\w\xA0-\uFFFF]|$))|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|static|super|switch|this|throw|try|typeof|undefined|var|void|while|with|yield)\b/, lookbehind: !0 },
	],
	function: /#?(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*(?:\.\s*(?:apply|bind|call)\s*)?\()/,
	number: { pattern: RegExp("(^|[^\\w$])(?:NaN|Infinity|0[bB][01]+(?:_[01]+)*n?|0[oO][0-7]+(?:_[0-7]+)*n?|0[xX][\\dA-Fa-f]+(?:_[\\dA-Fa-f]+)*n?|\\d+(?:_\\d+)*n|(?:\\d+(?:_\\d+)*(?:\\.(?:\\d+(?:_\\d+)*)?)?|\\.\\d+(?:_\\d+)*)(?:[Ee][+-]?\\d+(?:_\\d+)*)?)(?![\\w$])"), lookbehind: !0 },
	operator: /--|\+\+|\*\*=?|=>|&&=?|\|\|=?|[!=]==|<<=?|>>>?=?|[-+*/%&|^!=<>]=?|\.{3}|\?\?=?|\?\.?|[~:]/,
})),
	(Prism.languages.javascript["class-name"][0].pattern = /(\b(?:class|extends|implements|instanceof|interface|new)\s+)[\w.\\]+/),
	Prism.languages.insertBefore("javascript", "keyword", {
		regex: { pattern: RegExp("((?:^|[^$\\w\\xA0-\\uFFFF.\"'\\])\\s]|\\b(?:return|yield))\\s*)/(?:(?:\\[(?:[^\\]\\\\\r\n]|\\\\.)*\\]|\\\\.|[^/\\\\\\[\r\n])+/[dgimyus]{0,7}|(?:\\[(?:[^[\\]\\\\\r\n]|\\\\.|\\[(?:[^[\\]\\\\\r\n]|\\\\.|\\[(?:[^[\\]\\\\\r\n]|\\\\.)*\\])*\\])*\\]|\\\\.|[^/\\\\\\[\r\n])+/[dgimyus]{0,7}v[dgimyus]{0,7})(?=(?:\\s|/\\*(?:[^*]|\\*(?!/))*\\*/)*(?:$|[\r\n,.;:})\\]]|//))"), lookbehind: !0, greedy: !0, inside: { "regex-source": { pattern: /^(\/)[\s\S]+(?=\/[a-z]*$)/, lookbehind: !0, alias: "language-regex", inside: Prism.languages.regex }, "regex-delimiter": /^\/|\/$/, "regex-flags": /^[a-z]+$/ } },
		"function-variable": { pattern: /#?(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*[=:]\s*(?:async\s*)?(?:\bfunction\b|(?:\((?:[^()]|\([^()]*\))*\)|(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*)\s*=>))/, alias: "function" },
		parameter: [
			{ pattern: /(function(?:\s+(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*)?\s*\(\s*)(?!\s)(?:[^()\s]|\s+(?![\s)])|\([^()]*\))+(?=\s*\))/, lookbehind: !0, inside: Prism.languages.javascript },
			{ pattern: /(^|[^$\w\xA0-\uFFFF])(?!\s)[_$a-z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*=>)/i, lookbehind: !0, inside: Prism.languages.javascript },
			{ pattern: /(\(\s*)(?!\s)(?:[^()\s]|\s+(?![\s)])|\([^()]*\))+(?=\s*\)\s*=>)/, lookbehind: !0, inside: Prism.languages.javascript },
			{ pattern: /((?:\b|\s|^)(?!(?:as|async|await|break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|undefined|var|void|while|with|yield)(?![$\w\xA0-\uFFFF]))(?:(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*\s*)\(\s*|\]\s*\(\s*)(?!\s)(?:[^()\s]|\s+(?![\s)])|\([^()]*\))+(?=\s*\)\s*\{)/, lookbehind: !0, inside: Prism.languages.javascript },
		],
		constant: /\b[A-Z](?:[A-Z_]|\dx?)*\b/,
	}),
	Prism.languages.insertBefore("javascript", "string", { hashbang: { pattern: /^#!.*/, greedy: !0, alias: "comment" }, "template-string": { pattern: /`(?:\\[\s\S]|\$\{(?:[^{}]|\{(?:[^{}]|\{[^}]*\})*\})+\}|(?!\$\{)[^\\`])*`/, greedy: !0, inside: { "template-punctuation": { pattern: /^`|`$/, alias: "string" }, interpolation: { pattern: /((?:^|[^\\])(?:\\{2})*)\$\{(?:[^{}]|\{(?:[^{}]|\{[^}]*\})*\})+\}/, lookbehind: !0, inside: { "interpolation-punctuation": { pattern: /^\$\{|\}$/, alias: "punctuation" }, rest: Prism.languages.javascript } }, string: /[\s\S]+/ } }, "string-property": { pattern: /((?:^|[,{])[ \t]*)(["'])(?:\\(?:\r\n|[\s\S])|(?!\2)[^\\\r\n])*\2(?=\s*:)/m, lookbehind: !0, greedy: !0, alias: "property" } }),
	Prism.languages.insertBefore("javascript", "operator", { "literal-property": { pattern: /((?:^|[,{])[ \t]*)(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*:)/m, lookbehind: !0, alias: "property" } }),
	Prism.languages.markup && (Prism.languages.markup.tag.addInlined("script", "javascript"), Prism.languages.markup.tag.addAttribute("on(?:abort|blur|change|click|composition(?:end|start|update)|dblclick|error|focus(?:in|out)?|key(?:down|up)|load|mouse(?:down|enter|leave|move|out|over|up)|reset|resize|scroll|select|slotchange|submit|unload|wheel)", "javascript")),
	(Prism.languages.js = Prism.languages.javascript);
!(function (e) {
	var t = "\\b(?:BASH|BASHOPTS|BASH_ALIASES|BASH_ARGC|BASH_ARGV|BASH_CMDS|BASH_COMPLETION_COMPAT_DIR|BASH_LINENO|BASH_REMATCH|BASH_SOURCE|BASH_VERSINFO|BASH_VERSION|COLORTERM|COLUMNS|COMP_WORDBREAKS|DBUS_SESSION_BUS_ADDRESS|DEFAULTS_PATH|DESKTOP_SESSION|DIRSTACK|DISPLAY|EUID|GDMSESSION|GDM_LANG|GNOME_KEYRING_CONTROL|GNOME_KEYRING_PID|GPG_AGENT_INFO|GROUPS|HISTCONTROL|HISTFILE|HISTFILESIZE|HISTSIZE|HOME|HOSTNAME|HOSTTYPE|IFS|INSTANCE|JOB|LANG|LANGUAGE|LC_ADDRESS|LC_ALL|LC_IDENTIFICATION|LC_MEASUREMENT|LC_MONETARY|LC_NAME|LC_NUMERIC|LC_PAPER|LC_TELEPHONE|LC_TIME|LESSCLOSE|LESSOPEN|LINES|LOGNAME|LS_COLORS|MACHTYPE|MAILCHECK|MANDATORY_PATH|NO_AT_BRIDGE|OLDPWD|OPTERR|OPTIND|ORBIT_SOCKETDIR|OSTYPE|PAPERSIZE|PATH|PIPESTATUS|PPID|PS1|PS2|PS3|PS4|PWD|RANDOM|REPLY|SECONDS|SELINUX_INIT|SESSION|SESSIONTYPE|SESSION_MANAGER|SHELL|SHELLOPTS|SHLVL|SSH_AUTH_SOCK|TERM|UID|UPSTART_EVENTS|UPSTART_INSTANCE|UPSTART_JOB|UPSTART_SESSION|USER|WINDOWID|XAUTHORITY|XDG_CONFIG_DIRS|XDG_CURRENT_DESKTOP|XDG_DATA_DIRS|XDG_GREETER_DATA_DIR|XDG_MENU_PREFIX|XDG_RUNTIME_DIR|XDG_SEAT|XDG_SEAT_PATH|XDG_SESSION_DESKTOP|XDG_SESSION_ID|XDG_SESSION_PATH|XDG_SESSION_TYPE|XDG_VTNR|XMODIFIERS)\\b",
		a = { pattern: /(^(["']?)\w+\2)[ \t]+\S.*/, lookbehind: !0, alias: "punctuation", inside: null },
		n = { bash: a, environment: { pattern: RegExp("\\$" + t), alias: "constant" }, variable: [{ pattern: /\$?\(\([\s\S]+?\)\)/, greedy: !0, inside: { variable: [{ pattern: /(^\$\(\([\s\S]+)\)\)/, lookbehind: !0 }, /^\$\(\(/], number: /\b0x[\dA-Fa-f]+\b|(?:\b\d+(?:\.\d*)?|\B\.\d+)(?:[Ee]-?\d+)?/, operator: /--|\+\+|\*\*=?|<<=?|>>=?|&&|\|\||[=!+\-*/%<>^&|]=?|[?~:]/, punctuation: /\(\(?|\)\)?|,|;/ } }, { pattern: /\$\((?:\([^)]+\)|[^()])+\)|`[^`]+`/, greedy: !0, inside: { variable: /^\$\(|^`|\)$|`$/ } }, { pattern: /\$\{[^}]+\}/, greedy: !0, inside: { operator: /:[-=?+]?|[!\/]|##?|%%?|\^\^?|,,?/, punctuation: /[\[\]]/, environment: { pattern: RegExp("(\\{)" + t), lookbehind: !0, alias: "constant" } } }, /\$(?:\w+|[#?*!@$])/], entity: /\\(?:[abceEfnrtv\\"]|O?[0-7]{1,3}|U[0-9a-fA-F]{8}|u[0-9a-fA-F]{4}|x[0-9a-fA-F]{1,2})/ };
	(e.languages.bash = {
		shebang: { pattern: /^#!\s*\/.*/, alias: "important" },
		comment: { pattern: /(^|[^"{\\$])#.*/, lookbehind: !0 },
		"function-name": [
			{ pattern: /(\bfunction\s+)[\w-]+(?=(?:\s*\(?:\s*\))?\s*\{)/, lookbehind: !0, alias: "function" },
			{ pattern: /\b[\w-]+(?=\s*\(\s*\)\s*\{)/, alias: "function" },
		],
		"for-or-select": { pattern: /(\b(?:for|select)\s+)\w+(?=\s+in\s)/, alias: "variable", lookbehind: !0 },
		"assign-left": { pattern: /(^|[\s;|&]|[<>]\()\w+(?:\.\w+)*(?=\+?=)/, inside: { environment: { pattern: RegExp("(^|[\\s;|&]|[<>]\\()" + t), lookbehind: !0, alias: "constant" } }, alias: "variable", lookbehind: !0 },
		parameter: { pattern: /(^|\s)-{1,2}(?:\w+:[+-]?)?\w+(?:\.\w+)*(?=[=\s]|$)/, alias: "variable", lookbehind: !0 },
		string: [
			{ pattern: /((?:^|[^<])<<-?\s*)(\w+)\s[\s\S]*?(?:\r?\n|\r)\2/, lookbehind: !0, greedy: !0, inside: n },
			{ pattern: /((?:^|[^<])<<-?\s*)(["'])(\w+)\2\s[\s\S]*?(?:\r?\n|\r)\3/, lookbehind: !0, greedy: !0, inside: { bash: a } },
			{ pattern: /(^|[^\\](?:\\\\)*)"(?:\\[\s\S]|\$\([^)]+\)|\$(?!\()|`[^`]+`|[^"\\`$])*"/, lookbehind: !0, greedy: !0, inside: n },
			{ pattern: /(^|[^$\\])'[^']*'/, lookbehind: !0, greedy: !0 },
			{ pattern: /\$'(?:[^'\\]|\\[\s\S])*'/, greedy: !0, inside: { entity: n.entity } },
		],
		environment: { pattern: RegExp("\\$?" + t), alias: "constant" },
		variable: n.variable,
		function: { pattern: /(^|[\s;|&]|[<>]\()(?:add|apropos|apt|apt-cache|apt-get|aptitude|aspell|automysqlbackup|awk|basename|bash|bc|bconsole|bg|bzip2|cal|cargo|cat|cfdisk|chgrp|chkconfig|chmod|chown|chroot|cksum|clear|cmp|column|comm|composer|cp|cron|crontab|csplit|curl|cut|date|dc|dd|ddrescue|debootstrap|df|diff|diff3|dig|dir|dircolors|dirname|dirs|dmesg|docker|docker-compose|du|egrep|eject|env|ethtool|expand|expect|expr|fdformat|fdisk|fg|fgrep|file|find|fmt|fold|format|free|fsck|ftp|fuser|gawk|git|gparted|grep|groupadd|groupdel|groupmod|groups|grub-mkconfig|gzip|halt|head|hg|history|host|hostname|htop|iconv|id|ifconfig|ifdown|ifup|import|install|ip|java|jobs|join|kill|killall|less|link|ln|locate|logname|logrotate|look|lpc|lpr|lprint|lprintd|lprintq|lprm|ls|lsof|lynx|make|man|mc|mdadm|mkconfig|mkdir|mke2fs|mkfifo|mkfs|mkisofs|mknod|mkswap|mmv|more|most|mount|mtools|mtr|mutt|mv|nano|nc|netstat|nice|nl|node|nohup|notify-send|npm|nslookup|op|open|parted|passwd|paste|pathchk|ping|pkill|pnpm|podman|podman-compose|popd|pr|printcap|printenv|ps|pushd|pv|quota|quotacheck|quotactl|ram|rar|rcp|reboot|remsync|rename|renice|rev|rm|rmdir|rpm|rsync|scp|screen|sdiff|sed|sendmail|seq|service|sftp|sh|shellcheck|shuf|shutdown|sleep|slocate|sort|split|ssh|stat|strace|su|sudo|sum|suspend|swapon|sync|sysctl|tac|tail|tar|tee|time|timeout|top|touch|tr|traceroute|tsort|tty|umount|uname|unexpand|uniq|units|unrar|unshar|unzip|update-grub|uptime|useradd|userdel|usermod|users|uudecode|uuencode|v|vcpkg|vdir|vi|vim|virsh|vmstat|wait|watch|wc|wget|whereis|which|who|whoami|write|xargs|xdg-open|yarn|yes|zenity|zip|zsh|zypper)(?=$|[)\s;|&])/, lookbehind: !0 },
		keyword: { pattern: /(^|[\s;|&]|[<>]\()(?:case|do|done|elif|else|esac|fi|for|function|if|in|select|then|until|while)(?=$|[)\s;|&])/, lookbehind: !0 },
		builtin: { pattern: /(^|[\s;|&]|[<>]\()(?:\.|:|alias|bind|break|builtin|caller|cd|command|continue|declare|echo|enable|eval|exec|exit|export|getopts|hash|help|let|local|logout|mapfile|printf|pwd|read|readarray|readonly|return|set|shift|shopt|source|test|times|trap|type|typeset|ulimit|umask|unalias|unset)(?=$|[)\s;|&])/, lookbehind: !0, alias: "class-name" },
		boolean: { pattern: /(^|[\s;|&]|[<>]\()(?:false|true)(?=$|[)\s;|&])/, lookbehind: !0 },
		"file-descriptor": { pattern: /\B&\d\b/, alias: "important" },
		operator: { pattern: /\d?<>|>\||\+=|=[=~]?|!=?|<<[<-]?|[&\d]?>>|\d[<>]&?|[<>][&=]?|&[>&]?|\|[&|]?/, inside: { "file-descriptor": { pattern: /^\d/, alias: "important" } } },
		punctuation: /\$?\(\(?|\)\)?|\.\.|[{}[\];\\]/,
		number: { pattern: /(^|\s)(?:[1-9]\d*|0)(?:[.,]\d+)?\b/, lookbehind: !0 },
	}),
		(a.inside = e.languages.bash);
	for (var s = ["comment", "function-name", "for-or-select", "assign-left", "parameter", "string", "environment", "function", "keyword", "builtin", "boolean", "file-descriptor", "operator", "punctuation", "number"], o = n.variable[1].inside, i = 0; i < s.length; i++) o[s[i]] = e.languages.bash[s[i]];
	(e.languages.sh = e.languages.bash), (e.languages.shell = e.languages.bash);
})(Prism);
!(function (e) {
	var a,
		n = /("|')(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/;
	(e.languages.css.selector = {
		pattern: e.languages.css.selector.pattern,
		lookbehind: !0,
		inside: (a = {
			"pseudo-element": /:(?:after|before|first-letter|first-line|selection)|::[-\w]+/,
			"pseudo-class": /:[-\w]+/,
			class: /\.[-\w]+/,
			id: /#[-\w]+/,
			attribute: { pattern: RegExp("\\[(?:[^[\\]\"']|" + n.source + ")*\\]"), greedy: !0, inside: { punctuation: /^\[|\]$/, "case-sensitivity": { pattern: /(\s)[si]$/i, lookbehind: !0, alias: "keyword" }, namespace: { pattern: /^(\s*)(?:(?!\s)[-*\w\xA0-\uFFFF])*\|(?!=)/, lookbehind: !0, inside: { punctuation: /\|$/ } }, "attr-name": { pattern: /^(\s*)(?:(?!\s)[-\w\xA0-\uFFFF])+/, lookbehind: !0 }, "attr-value": [n, { pattern: /(=\s*)(?:(?!\s)[-\w\xA0-\uFFFF])+(?=\s*$)/, lookbehind: !0 }], operator: /[|~*^$]?=/ } },
			"n-th": [
				{ pattern: /(\(\s*)[+-]?\d*[\dn](?:\s*[+-]\s*\d+)?(?=\s*\))/, lookbehind: !0, inside: { number: /[\dn]+/, operator: /[+-]/ } },
				{ pattern: /(\(\s*)(?:even|odd)(?=\s*\))/i, lookbehind: !0 },
			],
			combinator: />|\+|~|\|\|/,
			punctuation: /[(),]/,
		}),
	}),
		(e.languages.css.atrule.inside["selector-function-argument"].inside = a),
		e.languages.insertBefore("css", "property", { variable: { pattern: /(^|[^-\w\xA0-\uFFFF])--(?!\s)[-_a-z\xA0-\uFFFF](?:(?!\s)[-\w\xA0-\uFFFF])*/i, lookbehind: !0 } });
	var r = { pattern: /(\b\d+)(?:%|[a-z]+(?![\w-]))/, lookbehind: !0 },
		i = { pattern: /(^|[^\w.-])-?(?:\d+(?:\.\d+)?|\.\d+)/, lookbehind: !0 };
	e.languages.insertBefore("css", "function", {
		operator: { pattern: /(\s)[+\-*\/](?=\s)/, lookbehind: !0 },
		hexcode: { pattern: /\B#[\da-f]{3,8}\b/i, alias: "color" },
		color: [
			{ pattern: /(^|[^\w-])(?:AliceBlue|AntiqueWhite|Aqua|Aquamarine|Azure|Beige|Bisque|Black|BlanchedAlmond|Blue|BlueViolet|Brown|BurlyWood|CadetBlue|Chartreuse|Chocolate|Coral|CornflowerBlue|Cornsilk|Crimson|Cyan|DarkBlue|DarkCyan|DarkGoldenRod|DarkGr[ae]y|DarkGreen|DarkKhaki|DarkMagenta|DarkOliveGreen|DarkOrange|DarkOrchid|DarkRed|DarkSalmon|DarkSeaGreen|DarkSlateBlue|DarkSlateGr[ae]y|DarkTurquoise|DarkViolet|DeepPink|DeepSkyBlue|DimGr[ae]y|DodgerBlue|FireBrick|FloralWhite|ForestGreen|Fuchsia|Gainsboro|GhostWhite|Gold|GoldenRod|Gr[ae]y|Green|GreenYellow|HoneyDew|HotPink|IndianRed|Indigo|Ivory|Khaki|Lavender|LavenderBlush|LawnGreen|LemonChiffon|LightBlue|LightCoral|LightCyan|LightGoldenRodYellow|LightGr[ae]y|LightGreen|LightPink|LightSalmon|LightSeaGreen|LightSkyBlue|LightSlateGr[ae]y|LightSteelBlue|LightYellow|Lime|LimeGreen|Linen|Magenta|Maroon|MediumAquaMarine|MediumBlue|MediumOrchid|MediumPurple|MediumSeaGreen|MediumSlateBlue|MediumSpringGreen|MediumTurquoise|MediumVioletRed|MidnightBlue|MintCream|MistyRose|Moccasin|NavajoWhite|Navy|OldLace|Olive|OliveDrab|Orange|OrangeRed|Orchid|PaleGoldenRod|PaleGreen|PaleTurquoise|PaleVioletRed|PapayaWhip|PeachPuff|Peru|Pink|Plum|PowderBlue|Purple|RebeccaPurple|Red|RosyBrown|RoyalBlue|SaddleBrown|Salmon|SandyBrown|SeaGreen|SeaShell|Sienna|Silver|SkyBlue|SlateBlue|SlateGr[ae]y|Snow|SpringGreen|SteelBlue|Tan|Teal|Thistle|Tomato|Transparent|Turquoise|Violet|Wheat|White|WhiteSmoke|Yellow|YellowGreen)(?![\w-])/i, lookbehind: !0 },
			{ pattern: /\b(?:hsl|rgb)\(\s*\d{1,3}\s*,\s*\d{1,3}%?\s*,\s*\d{1,3}%?\s*\)\B|\b(?:hsl|rgb)a\(\s*\d{1,3}\s*,\s*\d{1,3}%?\s*,\s*\d{1,3}%?\s*,\s*(?:0|0?\.\d+|1)\s*\)\B/i, inside: { unit: r, number: i, function: /[\w-]+(?=\()/, punctuation: /[(),]/ } },
		],
		entity: /\\[\da-f]{1,8}/i,
		unit: r,
		number: i,
	});
})(Prism);
Prism.languages.csv = { value: /[^\r\n,"]+|"(?:[^"]|"")*"(?!")/, punctuation: /,/ };
(Prism.languages["dns-zone-file"] = {
	comment: /;.*/,
	string: { pattern: /"(?:\\.|[^"\\\r\n])*"/, greedy: !0 },
	variable: [
		{ pattern: /(^\$ORIGIN[ \t]+)\S+/m, lookbehind: !0 },
		{ pattern: /(^|\s)@(?=\s|$)/, lookbehind: !0 },
	],
	keyword: /^\$(?:INCLUDE|ORIGIN|TTL)(?=\s|$)/m,
	class: { pattern: /(^|\s)(?:CH|CS|HS|IN)(?=\s|$)/, lookbehind: !0, alias: "keyword" },
	type: { pattern: /(^|\s)(?:A|A6|AAAA|AFSDB|APL|ATMA|CAA|CDNSKEY|CDS|CERT|CNAME|DHCID|DLV|DNAME|DNSKEY|DS|EID|GID|GPOS|HINFO|HIP|IPSECKEY|ISDN|KEY|KX|LOC|MAILA|MAILB|MB|MD|MF|MG|MINFO|MR|MX|NAPTR|NB|NBSTAT|NIMLOC|NINFO|NS|NSAP|NSAP-PTR|NSEC|NSEC3|NSEC3PARAM|NULL|NXT|OPENPGPKEY|PTR|PX|RKEY|RP|RRSIG|RT|SIG|SINK|SMIMEA|SOA|SPF|SRV|SSHFP|TA|TKEY|TLSA|TSIG|TXT|UID|UINFO|UNSPEC|URI|WKS|X25)(?=\s|$)/, lookbehind: !0, alias: "keyword" },
	punctuation: /[()]/,
}),
	(Prism.languages["dns-zone"] = Prism.languages["dns-zone-file"]);
!(function (e) {
	var n = "(?:[ \t]+(?![ \t])(?:<SP_BS>)?|<SP_BS>)".replace(/<SP_BS>/g, function () {
			return "\\\\[\r\n](?:\\s|\\\\[\r\n]|#.*(?!.))*(?![\\s#]|\\\\[\r\n])";
		}),
		r = "\"(?:[^\"\\\\\r\n]|\\\\(?:\r\n|[^]))*\"|'(?:[^'\\\\\r\n]|\\\\(?:\r\n|[^]))*'",
		t = "--[\\w-]+=(?:<STR>|(?![\"'])(?:[^\\s\\\\]|\\\\.)+)".replace(/<STR>/g, function () {
			return r;
		}),
		o = { pattern: RegExp(r), greedy: !0 },
		i = { pattern: /(^[ \t]*)#.*/m, lookbehind: !0, greedy: !0 };
	function a(e, r) {
		return (
			(e = e
				.replace(/<OPT>/g, function () {
					return t;
				})
				.replace(/<SP>/g, function () {
					return n;
				})),
			RegExp(e, r)
		);
	}
	(e.languages.docker = {
		instruction: {
			pattern: /(^[ \t]*)(?:ADD|ARG|CMD|COPY|ENTRYPOINT|ENV|EXPOSE|FROM|HEALTHCHECK|LABEL|MAINTAINER|ONBUILD|RUN|SHELL|STOPSIGNAL|USER|VOLUME|WORKDIR)(?=\s)(?:\\.|[^\r\n\\])*(?:\\$(?:\s|#.*$)*(?![\s#])(?:\\.|[^\r\n\\])*)*/im,
			lookbehind: !0,
			greedy: !0,
			inside: {
				options: { pattern: a("(^(?:ONBUILD<SP>)?\\w+<SP>)<OPT>(?:<SP><OPT>)*", "i"), lookbehind: !0, greedy: !0, inside: { property: { pattern: /(^|\s)--[\w-]+/, lookbehind: !0 }, string: [o, { pattern: /(=)(?!["'])(?:[^\s\\]|\\.)+/, lookbehind: !0 }], operator: /\\$/m, punctuation: /=/ } },
				keyword: [
					{ pattern: a("(^(?:ONBUILD<SP>)?HEALTHCHECK<SP>(?:<OPT><SP>)*)(?:CMD|NONE)\\b", "i"), lookbehind: !0, greedy: !0 },
					{ pattern: a("(^(?:ONBUILD<SP>)?FROM<SP>(?:<OPT><SP>)*(?!--)[^ \t\\\\]+<SP>)AS", "i"), lookbehind: !0, greedy: !0 },
					{ pattern: a("(^ONBUILD<SP>)\\w+", "i"), lookbehind: !0, greedy: !0 },
					{ pattern: /^\w+/, greedy: !0 },
				],
				comment: i,
				string: o,
				variable: /\$(?:\w+|\{[^{}"'\\]*\})/,
				operator: /\\$/m,
			},
		},
		comment: i,
	}),
		(e.languages.dockerfile = e.languages.docker);
})(Prism);
!(function (n) {
	(n.languages.ignore = { comment: /^#.*/m, entry: { pattern: /\S(?:.*(?:(?:\\ )|\S))?/, alias: "string", inside: { operator: /^!|\*\*?|\?/, regex: { pattern: /(^|[^\\])\[[^\[\]]*\]/, lookbehind: !0 }, punctuation: /\// } } }), (n.languages.gitignore = n.languages.ignore), (n.languages.hgignore = n.languages.ignore), (n.languages.npmignore = n.languages.ignore);
})(Prism);
!(function (e) {
	var n = /\b(?:abstract|assert|boolean|break|byte|case|catch|char|class|const|continue|default|do|double|else|enum|exports|extends|final|finally|float|for|goto|if|implements|import|instanceof|int|interface|long|module|native|new|non-sealed|null|open|opens|package|permits|private|protected|provides|public|record(?!\s*[(){}[\]<>=%~.:,;?+\-*/&|^])|requires|return|sealed|short|static|strictfp|super|switch|synchronized|this|throw|throws|to|transient|transitive|try|uses|var|void|volatile|while|with|yield)\b/,
		t = "(?:[a-z]\\w*\\s*\\.\\s*)*(?:[A-Z]\\w*\\s*\\.\\s*)*",
		s = { pattern: RegExp("(^|[^\\w.])" + t + "[A-Z](?:[\\d_A-Z]*[a-z]\\w*)?\\b"), lookbehind: !0, inside: { namespace: { pattern: /^[a-z]\w*(?:\s*\.\s*[a-z]\w*)*(?:\s*\.)?/, inside: { punctuation: /\./ } }, punctuation: /\./ } };
	(e.languages.java = e.languages.extend("clike", { string: { pattern: /(^|[^\\])"(?:\\.|[^"\\\r\n])*"/, lookbehind: !0, greedy: !0 }, "class-name": [s, { pattern: RegExp("(^|[^\\w.])" + t + "[A-Z]\\w*(?=\\s+\\w+\\s*[;,=()]|\\s*(?:\\[[\\s,]*\\]\\s*)?::\\s*new\\b)"), lookbehind: !0, inside: s.inside }, { pattern: RegExp("(\\b(?:class|enum|extends|implements|instanceof|interface|new|record|throws)\\s+)" + t + "[A-Z]\\w*\\b"), lookbehind: !0, inside: s.inside }], keyword: n, function: [e.languages.clike.function, { pattern: /(::\s*)[a-z_]\w*/, lookbehind: !0 }], number: /\b0b[01][01_]*L?\b|\b0x(?:\.[\da-f_p+-]+|[\da-f_]+(?:\.[\da-f_p+-]+)?)\b|(?:\b\d[\d_]*(?:\.[\d_]*)?|\B\.\d[\d_]*)(?:e[+-]?\d[\d_]*)?[dfl]?/i, operator: { pattern: /(^|[^.])(?:<<=?|>>>?=?|->|--|\+\+|&&|\|\||::|[?:~]|[-+*/%&|^!=<>]=?)/m, lookbehind: !0 }, constant: /\b[A-Z][A-Z_\d]+\b/ })),
		e.languages.insertBefore("java", "string", { "triple-quoted-string": { pattern: /"""[ \t]*[\r\n](?:(?:"|"")?(?:\\.|[^"\\]))*"""/, greedy: !0, alias: "string" }, char: { pattern: /'(?:\\.|[^'\\\r\n]){1,6}'/, greedy: !0 } }),
		e.languages.insertBefore("java", "class-name", {
			annotation: { pattern: /(^|[^.])@\w+(?:\s*\.\s*\w+)*/, lookbehind: !0, alias: "punctuation" },
			generics: { pattern: /<(?:[\w\s,.?]|&(?!&)|<(?:[\w\s,.?]|&(?!&)|<(?:[\w\s,.?]|&(?!&)|<(?:[\w\s,.?]|&(?!&))*>)*>)*>)*>/, inside: { "class-name": s, keyword: n, punctuation: /[<>(),.:]/, operator: /[?&|]/ } },
			import: [
				{ pattern: RegExp("(\\bimport\\s+)" + t + "(?:[A-Z]\\w*|\\*)(?=\\s*;)"), lookbehind: !0, inside: { namespace: s.inside.namespace, punctuation: /\./, operator: /\*/, "class-name": /\w+/ } },
				{ pattern: RegExp("(\\bimport\\s+static\\s+)" + t + "(?:\\w+|\\*)(?=\\s*;)"), lookbehind: !0, alias: "static", inside: { namespace: s.inside.namespace, static: /\b\w+$/, punctuation: /\./, operator: /\*/, "class-name": /\w+/ } },
			],
			namespace: {
				pattern: RegExp(
					"(\\b(?:exports|import(?:\\s+static)?|module|open|opens|package|provides|requires|to|transitive|uses|with)\\s+)(?!<keyword>)[a-z]\\w*(?:\\.[a-z]\\w*)*\\.?".replace(/<keyword>/g, function () {
						return n.source;
					})
				),
				lookbehind: !0,
				inside: { punctuation: /\./ },
			},
		});
})(Prism);
(Prism.languages.json = { property: { pattern: /(^|[^\\])"(?:\\.|[^\\"\r\n])*"(?=\s*:)/, lookbehind: !0, greedy: !0 }, string: { pattern: /(^|[^\\])"(?:\\.|[^\\"\r\n])*"(?!\s*:)/, lookbehind: !0, greedy: !0 }, comment: { pattern: /\/\/.*|\/\*[\s\S]*?(?:\*\/|$)/, greedy: !0 }, number: /-?\b\d+(?:\.\d+)?(?:e[+-]?\d+)?\b/i, punctuation: /[{}[\],]/, operator: /:/, boolean: /\b(?:false|true)\b/, null: { pattern: /\bnull\b/, alias: "keyword" } }), (Prism.languages.webmanifest = Prism.languages.json);
!(function (n) {
	var e = /("|')(?:\\(?:\r\n?|\n|.)|(?!\1)[^\\\r\n])*\1/;
	n.languages.json5 = n.languages.extend("json", {
		property: [
			{ pattern: RegExp(e.source + "(?=\\s*:)"), greedy: !0 },
			{ pattern: /(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*:)/, alias: "unquoted" },
		],
		string: { pattern: e, greedy: !0 },
		number: /[+-]?\b(?:NaN|Infinity|0x[a-fA-F\d]+)\b|[+-]?(?:\b\d+(?:\.\d*)?|\B\.\d+)(?:[eE][+-]?\d+\b)?/,
	});
})(Prism);
(Prism.languages.jsonp = Prism.languages.extend("json", { punctuation: /[{}[\]();,.]/ })), Prism.languages.insertBefore("jsonp", "punctuation", { function: /(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?=\s*\()/ });
(Prism.languages.less = Prism.languages.extend("css", { comment: [/\/\*[\s\S]*?\*\//, { pattern: /(^|[^\\])\/\/.*/, lookbehind: !0 }], atrule: { pattern: /@[\w-](?:\((?:[^(){}]|\([^(){}]*\))*\)|[^(){};\s]|\s+(?!\s))*?(?=\s*\{)/, inside: { punctuation: /[:()]/ } }, selector: { pattern: /(?:@\{[\w-]+\}|[^{};\s@])(?:@\{[\w-]+\}|\((?:[^(){}]|\([^(){}]*\))*\)|[^(){};@\s]|\s+(?!\s))*?(?=\s*\{)/, inside: { variable: /@+[\w-]+/ } }, property: /(?:@\{[\w-]+\}|[\w-])+(?:\+_?)?(?=\s*:)/, operator: /[+\-*\/]/ })), Prism.languages.insertBefore("less", "property", { variable: [{ pattern: /@[\w-]+\s*:/, inside: { punctuation: /:/ } }, /@@?[\w-]+/], "mixin-usage": { pattern: /([{;]\s*)[.#](?!\d)[\w-].*?(?=[(;])/, lookbehind: !0, alias: "function" } });
!(function (n) {
	function e(n) {
		return (
			(n = n.replace(/<inner>/g, function () {
				return "(?:\\\\.|[^\\\\\n\r]|(?:\n|\r\n?)(?![\r\n]))";
			})),
			RegExp("((?:^|[^\\\\])(?:\\\\{2})*)(?:" + n + ")")
		);
	}
	var t = "(?:\\\\.|``(?:[^`\r\n]|`(?!`))+``|`[^`\r\n]+`|[^\\\\|\r\n`])+",
		a = "\\|?__(?:\\|__)+\\|?(?:(?:\n|\r\n?)|(?![^]))".replace(/__/g, function () {
			return t;
		}),
		i = "\\|?[ \t]*:?-{3,}:?[ \t]*(?:\\|[ \t]*:?-{3,}:?[ \t]*)+\\|?(?:\n|\r\n?)";
	(n.languages.markdown = n.languages.extend("markup", {})),
		n.languages.insertBefore("markdown", "prolog", {
			"front-matter-block": { pattern: /(^(?:\s*[\r\n])?)---(?!.)[\s\S]*?[\r\n]---(?!.)/, lookbehind: !0, greedy: !0, inside: { punctuation: /^---|---$/, "front-matter": { pattern: /\S+(?:\s+\S+)*/, alias: ["yaml", "language-yaml"], inside: n.languages.yaml } } },
			blockquote: { pattern: /^>(?:[\t ]*>)*/m, alias: "punctuation" },
			table: { pattern: RegExp("^" + a + i + "(?:" + a + ")*", "m"), inside: { "table-data-rows": { pattern: RegExp("^(" + a + i + ")(?:" + a + ")*$"), lookbehind: !0, inside: { "table-data": { pattern: RegExp(t), inside: n.languages.markdown }, punctuation: /\|/ } }, "table-line": { pattern: RegExp("^(" + a + ")" + i + "$"), lookbehind: !0, inside: { punctuation: /\||:?-{3,}:?/ } }, "table-header-row": { pattern: RegExp("^" + a + "$"), inside: { "table-header": { pattern: RegExp(t), alias: "important", inside: n.languages.markdown }, punctuation: /\|/ } } } },
			code: [
				{ pattern: /((?:^|\n)[ \t]*\n|(?:^|\r\n?)[ \t]*\r\n?)(?: {4}|\t).+(?:(?:\n|\r\n?)(?: {4}|\t).+)*/, lookbehind: !0, alias: "keyword" },
				{ pattern: /^```[\s\S]*?^```$/m, greedy: !0, inside: { "code-block": { pattern: /^(```.*(?:\n|\r\n?))[\s\S]+?(?=(?:\n|\r\n?)^```$)/m, lookbehind: !0 }, "code-language": { pattern: /^(```).+/, lookbehind: !0 }, punctuation: /```/ } },
			],
			title: [
				{ pattern: /\S.*(?:\n|\r\n?)(?:==+|--+)(?=[ \t]*$)/m, alias: "important", inside: { punctuation: /==+$|--+$/ } },
				{ pattern: /(^\s*)#.+/m, lookbehind: !0, alias: "important", inside: { punctuation: /^#+|#+$/ } },
			],
			hr: { pattern: /(^\s*)([*-])(?:[\t ]*\2){2,}(?=\s*$)/m, lookbehind: !0, alias: "punctuation" },
			list: { pattern: /(^\s*)(?:[*+-]|\d+\.)(?=[\t ].)/m, lookbehind: !0, alias: "punctuation" },
			"url-reference": { pattern: /!?\[[^\]]+\]:[\t ]+(?:\S+|<(?:\\.|[^>\\])+>)(?:[\t ]+(?:"(?:\\.|[^"\\])*"|'(?:\\.|[^'\\])*'|\((?:\\.|[^)\\])*\)))?/, inside: { variable: { pattern: /^(!?\[)[^\]]+/, lookbehind: !0 }, string: /(?:"(?:\\.|[^"\\])*"|'(?:\\.|[^'\\])*'|\((?:\\.|[^)\\])*\))$/, punctuation: /^[\[\]!:]|[<>]/ }, alias: "url" },
			bold: { pattern: e("\\b__(?:(?!_)<inner>|_(?:(?!_)<inner>)+_)+__\\b|\\*\\*(?:(?!\\*)<inner>|\\*(?:(?!\\*)<inner>)+\\*)+\\*\\*"), lookbehind: !0, greedy: !0, inside: { content: { pattern: /(^..)[\s\S]+(?=..$)/, lookbehind: !0, inside: {} }, punctuation: /\*\*|__/ } },
			italic: { pattern: e("\\b_(?:(?!_)<inner>|__(?:(?!_)<inner>)+__)+_\\b|\\*(?:(?!\\*)<inner>|\\*\\*(?:(?!\\*)<inner>)+\\*\\*)+\\*"), lookbehind: !0, greedy: !0, inside: { content: { pattern: /(^.)[\s\S]+(?=.$)/, lookbehind: !0, inside: {} }, punctuation: /[*_]/ } },
			strike: { pattern: e("(~~?)(?:(?!~)<inner>)+\\2"), lookbehind: !0, greedy: !0, inside: { content: { pattern: /(^~~?)[\s\S]+(?=\1$)/, lookbehind: !0, inside: {} }, punctuation: /~~?/ } },
			"code-snippet": { pattern: /(^|[^\\`])(?:``[^`\r\n]+(?:`[^`\r\n]+)*``(?!`)|`[^`\r\n]+`(?!`))/, lookbehind: !0, greedy: !0, alias: ["code", "keyword"] },
			url: { pattern: e('!?\\[(?:(?!\\])<inner>)+\\](?:\\([^\\s)]+(?:[\t ]+"(?:\\\\.|[^"\\\\])*")?\\)|[ \t]?\\[(?:(?!\\])<inner>)+\\])'), lookbehind: !0, greedy: !0, inside: { operator: /^!/, content: { pattern: /(^\[)[^\]]+(?=\])/, lookbehind: !0, inside: {} }, variable: { pattern: /(^\][ \t]?\[)[^\]]+(?=\]$)/, lookbehind: !0 }, url: { pattern: /(^\]\()[^\s)]+/, lookbehind: !0 }, string: { pattern: /(^[ \t]+)"(?:\\.|[^"\\])*"(?=\)$)/, lookbehind: !0 } } },
		}),
		["url", "bold", "italic", "strike"].forEach(function (e) {
			["url", "bold", "italic", "strike", "code-snippet"].forEach(function (t) {
				e !== t && (n.languages.markdown[e].inside.content.inside[t] = n.languages.markdown[t]);
			});
		}),
		n.hooks.add("after-tokenize", function (n) {
			("markdown" !== n.language && "md" !== n.language) ||
				(function n(e) {
					if (e && "string" != typeof e)
						for (var t = 0, a = e.length; t < a; t++) {
							var i = e[t];
							if ("code" === i.type) {
								var r = i.content[1],
									o = i.content[3];
								if (r && o && "code-language" === r.type && "code-block" === o.type && "string" == typeof r.content) {
									var l = r.content.replace(/\b#/g, "sharp").replace(/\b\+\+/g, "pp"),
										s = "language-" + (l = (/[a-z][\w-]*/i.exec(l) || [""])[0].toLowerCase());
									o.alias ? ("string" == typeof o.alias ? (o.alias = [o.alias, s]) : o.alias.push(s)) : (o.alias = [s]);
								}
							} else n(i.content);
						}
				})(n.tokens);
		}),
		n.hooks.add("wrap", function (e) {
			if ("code-block" === e.type) {
				for (var t = "", a = 0, i = e.classes.length; a < i; a++) {
					var s = e.classes[a],
						d = /language-(.+)/.exec(s);
					if (d) {
						t = d[1];
						break;
					}
				}
				var p = n.languages[t];
				if (p)
					e.content = n.highlight(
						e.content.replace(r, "").replace(/&(\w{1,8}|#x?[\da-f]{1,8});/gi, function (n, e) {
							var t;
							return "#" === (e = e.toLowerCase())[0] ? ((t = "x" === e[1] ? parseInt(e.slice(2), 16) : Number(e.slice(1))), l(t)) : o[e] || n;
						}),
						p,
						t
					);
				else if (t && "none" !== t && n.plugins.autoloader) {
					var u = "md-" + new Date().valueOf() + "-" + Math.floor(1e16 * Math.random());
					(e.attributes.id = u),
						n.plugins.autoloader.loadLanguages(t, function () {
							var e = document.getElementById(u);
							e && (e.innerHTML = n.highlight(e.textContent, n.languages[t], t));
						});
				}
			}
		});
	var r = RegExp(n.languages.markup.tag.pattern.source, "gi"),
		o = { amp: "&", lt: "<", gt: ">", quot: '"' },
		l = String.fromCodePoint || String.fromCharCode;
	n.languages.md = n.languages.markdown;
})(Prism);
!(function (e) {
	function n(e, n) {
		return "___" + e.toUpperCase() + n + "___";
	}
	Object.defineProperties((e.languages["markup-templating"] = {}), {
		buildPlaceholders: {
			value: function (t, a, r, o) {
				if (t.language === a) {
					var c = (t.tokenStack = []);
					(t.code = t.code.replace(r, function (e) {
						if ("function" == typeof o && !o(e)) return e;
						for (var r, i = c.length; -1 !== t.code.indexOf((r = n(a, i))); ) ++i;
						return (c[i] = e), r;
					})),
						(t.grammar = e.languages.markup);
				}
			},
		},
		tokenizePlaceholders: {
			value: function (t, a) {
				if (t.language === a && t.tokenStack) {
					t.grammar = e.languages[a];
					var r = 0,
						o = Object.keys(t.tokenStack);
					!(function c(i) {
						for (var u = 0; u < i.length && !(r >= o.length); u++) {
							var g = i[u];
							if ("string" == typeof g || (g.content && "string" == typeof g.content)) {
								var l = o[r],
									s = t.tokenStack[l],
									f = "string" == typeof g ? g : g.content,
									p = n(a, l),
									k = f.indexOf(p);
								if (k > -1) {
									++r;
									var m = f.substring(0, k),
										d = new e.Token(a, e.tokenize(s, t.grammar), "language-" + a, s),
										h = f.substring(k + p.length),
										v = [];
									m && v.push.apply(v, c([m])), v.push(d), h && v.push.apply(v, c([h])), "string" == typeof g ? i.splice.apply(i, [u, 1].concat(v)) : (g.content = v);
								}
							} else g.content && c(g.content);
						}
						return i;
					})(t.tokens);
				}
			},
		},
	});
})(Prism);
!(function ($) {
	var e = ["$eq", "$gt", "$gte", "$in", "$lt", "$lte", "$ne", "$nin", "$and", "$not", "$nor", "$or", "$exists", "$type", "$expr", "$jsonSchema", "$mod", "$regex", "$text", "$where", "$geoIntersects", "$geoWithin", "$near", "$nearSphere", "$all", "$elemMatch", "$size", "$bitsAllClear", "$bitsAllSet", "$bitsAnyClear", "$bitsAnySet", "$comment", "$elemMatch", "$meta", "$slice", "$currentDate", "$inc", "$min", "$max", "$mul", "$rename", "$set", "$setOnInsert", "$unset", "$addToSet", "$pop", "$pull", "$push", "$pullAll", "$each", "$position", "$slice", "$sort", "$bit", "$addFields", "$bucket", "$bucketAuto", "$collStats", "$count", "$currentOp", "$facet", "$geoNear", "$graphLookup", "$group", "$indexStats", "$limit", "$listLocalSessions", "$listSessions", "$lookup", "$match", "$merge", "$out", "$planCacheStats", "$project", "$redact", "$replaceRoot", "$replaceWith", "$sample", "$set", "$skip", "$sort", "$sortByCount", "$unionWith", "$unset", "$unwind", "$setWindowFields", "$abs", "$accumulator", "$acos", "$acosh", "$add", "$addToSet", "$allElementsTrue", "$and", "$anyElementTrue", "$arrayElemAt", "$arrayToObject", "$asin", "$asinh", "$atan", "$atan2", "$atanh", "$avg", "$binarySize", "$bsonSize", "$ceil", "$cmp", "$concat", "$concatArrays", "$cond", "$convert", "$cos", "$dateFromParts", "$dateToParts", "$dateFromString", "$dateToString", "$dayOfMonth", "$dayOfWeek", "$dayOfYear", "$degreesToRadians", "$divide", "$eq", "$exp", "$filter", "$first", "$floor", "$function", "$gt", "$gte", "$hour", "$ifNull", "$in", "$indexOfArray", "$indexOfBytes", "$indexOfCP", "$isArray", "$isNumber", "$isoDayOfWeek", "$isoWeek", "$isoWeekYear", "$last", "$last", "$let", "$literal", "$ln", "$log", "$log10", "$lt", "$lte", "$ltrim", "$map", "$max", "$mergeObjects", "$meta", "$min", "$millisecond", "$minute", "$mod", "$month", "$multiply", "$ne", "$not", "$objectToArray", "$or", "$pow", "$push", "$radiansToDegrees", "$range", "$reduce", "$regexFind", "$regexFindAll", "$regexMatch", "$replaceOne", "$replaceAll", "$reverseArray", "$round", "$rtrim", "$second", "$setDifference", "$setEquals", "$setIntersection", "$setIsSubset", "$setUnion", "$size", "$sin", "$slice", "$split", "$sqrt", "$stdDevPop", "$stdDevSamp", "$strcasecmp", "$strLenBytes", "$strLenCP", "$substr", "$substrBytes", "$substrCP", "$subtract", "$sum", "$switch", "$tan", "$toBool", "$toDate", "$toDecimal", "$toDouble", "$toInt", "$toLong", "$toObjectId", "$toString", "$toLower", "$toUpper", "$trim", "$trunc", "$type", "$week", "$year", "$zip", "$count", "$dateAdd", "$dateDiff", "$dateSubtract", "$dateTrunc", "$getField", "$rand", "$sampleRate", "$setField", "$unsetField", "$comment", "$explain", "$hint", "$max", "$maxTimeMS", "$min", "$orderby", "$query", "$returnKey", "$showDiskLoc", "$natural"],
		t =
			"(?:" +
			(e = e.map(function ($) {
				return $.replace("$", "\\$");
			})).join("|") +
			")\\b";
	($.languages.mongodb = $.languages.extend("javascript", {})), $.languages.insertBefore("mongodb", "string", { property: { pattern: /(?:(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1|(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*)(?=\s*:)/, greedy: !0, inside: { keyword: RegExp("^(['\"])?" + t + "(?:\\1)?$") } } }), ($.languages.mongodb.string.inside = { url: { pattern: /https?:\/\/[-\w@:%.+~#=]{1,256}\.[a-z0-9()]{1,6}\b[-\w()@:%+.~#?&/=]*/i, greedy: !0 }, entity: { pattern: /\b(?:(?:[01]?\d\d?|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d\d?|2[0-4]\d|25[0-5])\b/, greedy: !0 } }), $.languages.insertBefore("mongodb", "constant", { builtin: { pattern: RegExp("\\b(?:" + ["ObjectId", "Code", "BinData", "DBRef", "Timestamp", "NumberLong", "NumberDecimal", "MaxKey", "MinKey", "RegExp", "ISODate", "UUID"].join("|") + ")\\b"), alias: "keyword" } });
})(Prism);
!(function (e) {
	var n = /\$(?:\w[a-z\d]*(?:_[^\x00-\x1F\s"'\\()$]*)?|\{[^}\s"'\\]+\})/i;
	e.languages.nginx = { comment: { pattern: /(^|[\s{};])#.*/, lookbehind: !0, greedy: !0 }, directive: { pattern: /(^|\s)\w(?:[^;{}"'\\\s]|\\.|"(?:[^"\\]|\\.)*"|'(?:[^'\\]|\\.)*'|\s+(?:#.*(?!.)|(?![#\s])))*?(?=\s*[;{])/, lookbehind: !0, greedy: !0, inside: { string: { pattern: /((?:^|[^\\])(?:\\\\)*)(?:"(?:[^"\\]|\\.)*"|'(?:[^'\\]|\\.)*')/, lookbehind: !0, greedy: !0, inside: { escape: { pattern: /\\["'\\nrt]/, alias: "entity" }, variable: n } }, comment: { pattern: /(\s)#.*/, lookbehind: !0, greedy: !0 }, keyword: { pattern: /^\S+/, greedy: !0 }, boolean: { pattern: /(\s)(?:off|on)(?!\S)/, lookbehind: !0 }, number: { pattern: /(\s)\d+[a-z]*(?!\S)/i, lookbehind: !0 }, variable: n } }, punctuation: /[{};]/ };
})(Prism);
!(function (e) {
	var a = /\/\*[\s\S]*?\*\/|\/\/.*|#(?!\[).*/,
		t = [{ pattern: /\b(?:false|true)\b/i, alias: "boolean" }, { pattern: /(::\s*)\b[a-z_]\w*\b(?!\s*\()/i, greedy: !0, lookbehind: !0 }, { pattern: /(\b(?:case|const)\s+)\b[a-z_]\w*(?=\s*[;=])/i, greedy: !0, lookbehind: !0 }, /\b(?:null)\b/i, /\b[A-Z_][A-Z0-9_]*\b(?!\s*\()/],
		i = /\b0b[01]+(?:_[01]+)*\b|\b0o[0-7]+(?:_[0-7]+)*\b|\b0x[\da-f]+(?:_[\da-f]+)*\b|(?:\b\d+(?:_\d+)*\.?(?:\d+(?:_\d+)*)?|\B\.\d+)(?:e[+-]?\d+)?/i,
		n = /<?=>|\?\?=?|\.{3}|\??->|[!=]=?=?|::|\*\*=?|--|\+\+|&&|\|\||<<|>>|[?~]|[/^|%*&<>.+-]=?/,
		s = /[{}\[\](),:;]/;
	e.languages.php = {
		delimiter: { pattern: /\?>$|^<\?(?:php(?=\s)|=)?/i, alias: "important" },
		comment: a,
		variable: /\$+(?:\w+\b|(?=\{))/,
		package: { pattern: /(namespace\s+|use\s+(?:function\s+)?)(?:\\?\b[a-z_]\w*)+\b(?!\\)/i, lookbehind: !0, inside: { punctuation: /\\/ } },
		"class-name-definition": { pattern: /(\b(?:class|enum|interface|trait)\s+)\b[a-z_]\w*(?!\\)\b/i, lookbehind: !0, alias: "class-name" },
		"function-definition": { pattern: /(\bfunction\s+)[a-z_]\w*(?=\s*\()/i, lookbehind: !0, alias: "function" },
		keyword: [{ pattern: /(\(\s*)\b(?:array|bool|boolean|float|int|integer|object|string)\b(?=\s*\))/i, alias: "type-casting", greedy: !0, lookbehind: !0 }, { pattern: /([(,?]\s*)\b(?:array(?!\s*\()|bool|callable|(?:false|null)(?=\s*\|)|float|int|iterable|mixed|object|self|static|string)\b(?=\s*\$)/i, alias: "type-hint", greedy: !0, lookbehind: !0 }, { pattern: /(\)\s*:\s*(?:\?\s*)?)\b(?:array(?!\s*\()|bool|callable|(?:false|null)(?=\s*\|)|float|int|iterable|mixed|never|object|self|static|string|void)\b/i, alias: "return-type", greedy: !0, lookbehind: !0 }, { pattern: /\b(?:array(?!\s*\()|bool|float|int|iterable|mixed|object|string|void)\b/i, alias: "type-declaration", greedy: !0 }, { pattern: /(\|\s*)(?:false|null)\b|\b(?:false|null)(?=\s*\|)/i, alias: "type-declaration", greedy: !0, lookbehind: !0 }, { pattern: /\b(?:parent|self|static)(?=\s*::)/i, alias: "static-context", greedy: !0 }, { pattern: /(\byield\s+)from\b/i, lookbehind: !0 }, /\bclass\b/i, { pattern: /((?:^|[^\s>:]|(?:^|[^-])>|(?:^|[^:]):)\s*)\b(?:abstract|and|array|as|break|callable|case|catch|clone|const|continue|declare|default|die|do|echo|else|elseif|empty|enddeclare|endfor|endforeach|endif|endswitch|endwhile|enum|eval|exit|extends|final|finally|fn|for|foreach|function|global|goto|if|implements|include|include_once|instanceof|insteadof|interface|isset|list|match|namespace|never|new|or|parent|print|private|protected|public|readonly|require|require_once|return|self|static|switch|throw|trait|try|unset|use|var|while|xor|yield|__halt_compiler)\b/i, lookbehind: !0 }],
		"argument-name": { pattern: /([(,]\s*)\b[a-z_]\w*(?=\s*:(?!:))/i, lookbehind: !0 },
		"class-name": [
			{ pattern: /(\b(?:extends|implements|instanceof|new(?!\s+self|\s+static))\s+|\bcatch\s*\()\b[a-z_]\w*(?!\\)\b/i, greedy: !0, lookbehind: !0 },
			{ pattern: /(\|\s*)\b[a-z_]\w*(?!\\)\b/i, greedy: !0, lookbehind: !0 },
			{ pattern: /\b[a-z_]\w*(?!\\)\b(?=\s*\|)/i, greedy: !0 },
			{ pattern: /(\|\s*)(?:\\?\b[a-z_]\w*)+\b/i, alias: "class-name-fully-qualified", greedy: !0, lookbehind: !0, inside: { punctuation: /\\/ } },
			{ pattern: /(?:\\?\b[a-z_]\w*)+\b(?=\s*\|)/i, alias: "class-name-fully-qualified", greedy: !0, inside: { punctuation: /\\/ } },
			{ pattern: /(\b(?:extends|implements|instanceof|new(?!\s+self\b|\s+static\b))\s+|\bcatch\s*\()(?:\\?\b[a-z_]\w*)+\b(?!\\)/i, alias: "class-name-fully-qualified", greedy: !0, lookbehind: !0, inside: { punctuation: /\\/ } },
			{ pattern: /\b[a-z_]\w*(?=\s*\$)/i, alias: "type-declaration", greedy: !0 },
			{ pattern: /(?:\\?\b[a-z_]\w*)+(?=\s*\$)/i, alias: ["class-name-fully-qualified", "type-declaration"], greedy: !0, inside: { punctuation: /\\/ } },
			{ pattern: /\b[a-z_]\w*(?=\s*::)/i, alias: "static-context", greedy: !0 },
			{ pattern: /(?:\\?\b[a-z_]\w*)+(?=\s*::)/i, alias: ["class-name-fully-qualified", "static-context"], greedy: !0, inside: { punctuation: /\\/ } },
			{ pattern: /([(,?]\s*)[a-z_]\w*(?=\s*\$)/i, alias: "type-hint", greedy: !0, lookbehind: !0 },
			{ pattern: /([(,?]\s*)(?:\\?\b[a-z_]\w*)+(?=\s*\$)/i, alias: ["class-name-fully-qualified", "type-hint"], greedy: !0, lookbehind: !0, inside: { punctuation: /\\/ } },
			{ pattern: /(\)\s*:\s*(?:\?\s*)?)\b[a-z_]\w*(?!\\)\b/i, alias: "return-type", greedy: !0, lookbehind: !0 },
			{ pattern: /(\)\s*:\s*(?:\?\s*)?)(?:\\?\b[a-z_]\w*)+\b(?!\\)/i, alias: ["class-name-fully-qualified", "return-type"], greedy: !0, lookbehind: !0, inside: { punctuation: /\\/ } },
		],
		constant: t,
		function: { pattern: /(^|[^\\\w])\\?[a-z_](?:[\w\\]*\w)?(?=\s*\()/i, lookbehind: !0, inside: { punctuation: /\\/ } },
		property: { pattern: /(->\s*)\w+/, lookbehind: !0 },
		number: i,
		operator: n,
		punctuation: s,
	};
	var l = { pattern: /\{\$(?:\{(?:\{[^{}]+\}|[^{}]+)\}|[^{}])+\}|(^|[^\\{])\$+(?:\w+(?:\[[^\r\n\[\]]+\]|->\w+)?)/, lookbehind: !0, inside: e.languages.php },
		r = [
			{ pattern: /<<<'([^']+)'[\r\n](?:.*[\r\n])*?\1;/, alias: "nowdoc-string", greedy: !0, inside: { delimiter: { pattern: /^<<<'[^']+'|[a-z_]\w*;$/i, alias: "symbol", inside: { punctuation: /^<<<'?|[';]$/ } } } },
			{ pattern: /<<<(?:"([^"]+)"[\r\n](?:.*[\r\n])*?\1;|([a-z_]\w*)[\r\n](?:.*[\r\n])*?\2;)/i, alias: "heredoc-string", greedy: !0, inside: { delimiter: { pattern: /^<<<(?:"[^"]+"|[a-z_]\w*)|[a-z_]\w*;$/i, alias: "symbol", inside: { punctuation: /^<<<"?|[";]$/ } }, interpolation: l } },
			{ pattern: /`(?:\\[\s\S]|[^\\`])*`/, alias: "backtick-quoted-string", greedy: !0 },
			{ pattern: /'(?:\\[\s\S]|[^\\'])*'/, alias: "single-quoted-string", greedy: !0 },
			{ pattern: /"(?:\\[\s\S]|[^\\"])*"/, alias: "double-quoted-string", greedy: !0, inside: { interpolation: l } },
		];
	e.languages.insertBefore("php", "variable", {
		string: r,
		attribute: {
			pattern: /#\[(?:[^"'\/#]|\/(?![*/])|\/\/.*$|#(?!\[).*$|\/\*(?:[^*]|\*(?!\/))*\*\/|"(?:\\[\s\S]|[^\\"])*"|'(?:\\[\s\S]|[^\\'])*')+\](?=\s*[a-z$#])/im,
			greedy: !0,
			inside: {
				"attribute-content": {
					pattern: /^(#\[)[\s\S]+(?=\]$)/,
					lookbehind: !0,
					inside: {
						comment: a,
						string: r,
						"attribute-class-name": [
							{ pattern: /([^:]|^)\b[a-z_]\w*(?!\\)\b/i, alias: "class-name", greedy: !0, lookbehind: !0 },
							{ pattern: /([^:]|^)(?:\\?\b[a-z_]\w*)+/i, alias: ["class-name", "class-name-fully-qualified"], greedy: !0, lookbehind: !0, inside: { punctuation: /\\/ } },
						],
						constant: t,
						number: i,
						operator: n,
						punctuation: s,
					},
				},
				delimiter: { pattern: /^#\[|\]$/, alias: "punctuation" },
			},
		},
	}),
		e.hooks.add("before-tokenize", function (a) {
			/<\?/.test(a.code) && e.languages["markup-templating"].buildPlaceholders(a, "php", /<\?(?:[^"'/#]|\/(?![*/])|("|')(?:\\[\s\S]|(?!\1)[^\\])*\1|(?:\/\/|#(?!\[))(?:[^?\n\r]|\?(?!>))*(?=$|\?>|[\r\n])|#\[|\/\*(?:[^*]|\*(?!\/))*(?:\*\/|$))*?(?:\?>|$)/g);
		}),
		e.hooks.add("after-tokenize", function (a) {
			e.languages["markup-templating"].tokenizePlaceholders(a, "php");
		});
})(Prism);
(Prism.languages.python = { comment: { pattern: /(^|[^\\])#.*/, lookbehind: !0, greedy: !0 }, "string-interpolation": { pattern: /(?:f|fr|rf)(?:("""|''')[\s\S]*?\1|("|')(?:\\.|(?!\2)[^\\\r\n])*\2)/i, greedy: !0, inside: { interpolation: { pattern: /((?:^|[^{])(?:\{\{)*)\{(?!\{)(?:[^{}]|\{(?!\{)(?:[^{}]|\{(?!\{)(?:[^{}])+\})+\})+\}/, lookbehind: !0, inside: { "format-spec": { pattern: /(:)[^:(){}]+(?=\}$)/, lookbehind: !0 }, "conversion-option": { pattern: /![sra](?=[:}]$)/, alias: "punctuation" }, rest: null } }, string: /[\s\S]+/ } }, "triple-quoted-string": { pattern: /(?:[rub]|br|rb)?("""|''')[\s\S]*?\1/i, greedy: !0, alias: "string" }, string: { pattern: /(?:[rub]|br|rb)?("|')(?:\\.|(?!\1)[^\\\r\n])*\1/i, greedy: !0 }, function: { pattern: /((?:^|\s)def[ \t]+)[a-zA-Z_]\w*(?=\s*\()/g, lookbehind: !0 }, "class-name": { pattern: /(\bclass\s+)\w+/i, lookbehind: !0 }, decorator: { pattern: /(^[\t ]*)@\w+(?:\.\w+)*/m, lookbehind: !0, alias: ["annotation", "punctuation"], inside: { punctuation: /\./ } }, keyword: /\b(?:_(?=\s*:)|and|as|assert|async|await|break|case|class|continue|def|del|elif|else|except|exec|finally|for|from|global|if|import|in|is|lambda|match|nonlocal|not|or|pass|print|raise|return|try|while|with|yield)\b/, builtin: /\b(?:__import__|abs|all|any|apply|ascii|basestring|bin|bool|buffer|bytearray|bytes|callable|chr|classmethod|cmp|coerce|compile|complex|delattr|dict|dir|divmod|enumerate|eval|execfile|file|filter|float|format|frozenset|getattr|globals|hasattr|hash|help|hex|id|input|int|intern|isinstance|issubclass|iter|len|list|locals|long|map|max|memoryview|min|next|object|oct|open|ord|pow|property|range|raw_input|reduce|reload|repr|reversed|round|set|setattr|slice|sorted|staticmethod|str|sum|super|tuple|type|unichr|unicode|vars|xrange|zip)\b/, boolean: /\b(?:False|None|True)\b/, number: /\b0(?:b(?:_?[01])+|o(?:_?[0-7])+|x(?:_?[a-f0-9])+)\b|(?:\b\d+(?:_\d+)*(?:\.(?:\d+(?:_\d+)*)?)?|\B\.\d+(?:_\d+)*)(?:e[+-]?\d+(?:_\d+)*)?j?(?!\w)/i, operator: /[-+%=]=?|!=|:=|\*\*?=?|\/\/?=?|<[<=>]?|>[=>]?|[&|^~]/, punctuation: /[{}[\];(),.:]/ }), (Prism.languages.python["string-interpolation"].inside.interpolation.inside.rest = Prism.languages.python), (Prism.languages.py = Prism.languages.python);
!(function (e) {
	(e.languages.sass = e.languages.extend("css", { comment: { pattern: /^([ \t]*)\/[\/*].*(?:(?:\r?\n|\r)\1[ \t].+)*/m, lookbehind: !0, greedy: !0 } })), e.languages.insertBefore("sass", "atrule", { "atrule-line": { pattern: /^(?:[ \t]*)[@+=].+/m, greedy: !0, inside: { atrule: /(?:@[\w-]+|[+=])/ } } }), delete e.languages.sass.atrule;
	var r = /\$[-\w]+|#\{\$[-\w]+\}/,
		t = [/[+*\/%]|[=!]=|<=?|>=?|\b(?:and|not|or)\b/, { pattern: /(\s)-(?=\s)/, lookbehind: !0 }];
	e.languages.insertBefore("sass", "property", { "variable-line": { pattern: /^[ \t]*\$.+/m, greedy: !0, inside: { punctuation: /:/, variable: r, operator: t } }, "property-line": { pattern: /^[ \t]*(?:[^:\s]+ *:.*|:[^:\s].*)/m, greedy: !0, inside: { property: [/[^:\s]+(?=\s*:)/, { pattern: /(:)[^:\s]+/, lookbehind: !0 }], punctuation: /:/, variable: r, operator: t, important: e.languages.sass.important } } }), delete e.languages.sass.property, delete e.languages.sass.important, e.languages.insertBefore("sass", "punctuation", { selector: { pattern: /^([ \t]*)\S(?:,[^,\r\n]+|[^,\r\n]*)(?:,[^,\r\n]+)*(?:,(?:\r?\n|\r)\1[ \t]+\S(?:,[^,\r\n]+|[^,\r\n]*)(?:,[^,\r\n]+)*)*/m, lookbehind: !0, greedy: !0 } });
})(Prism);
(Prism.languages.scss = Prism.languages.extend("css", { comment: { pattern: /(^|[^\\])(?:\/\*[\s\S]*?\*\/|\/\/.*)/, lookbehind: !0 }, atrule: { pattern: /@[\w-](?:\([^()]+\)|[^()\s]|\s+(?!\s))*?(?=\s+[{;])/, inside: { rule: /@[\w-]+/ } }, url: /(?:[-a-z]+-)?url(?=\()/i, selector: { pattern: /(?=\S)[^@;{}()]?(?:[^@;{}()\s]|\s+(?!\s)|#\{\$[-\w]+\})+(?=\s*\{(?:\}|\s|[^}][^:{}]*[:{][^}]))/, inside: { parent: { pattern: /&/, alias: "important" }, placeholder: /%[-\w]+/, variable: /\$[-\w]+|#\{\$[-\w]+\}/ } }, property: { pattern: /(?:[-\w]|\$[-\w]|#\{\$[-\w]+\})+(?=\s*:)/, inside: { variable: /\$[-\w]+|#\{\$[-\w]+\}/ } } })), Prism.languages.insertBefore("scss", "atrule", { keyword: [/@(?:content|debug|each|else(?: if)?|extend|for|forward|function|if|import|include|mixin|return|use|warn|while)\b/i, { pattern: /( )(?:from|through)(?= )/, lookbehind: !0 }] }), Prism.languages.insertBefore("scss", "important", { variable: /\$[-\w]+|#\{\$[-\w]+\}/ }), Prism.languages.insertBefore("scss", "function", { "module-modifier": { pattern: /\b(?:as|hide|show|with)\b/i, alias: "keyword" }, placeholder: { pattern: /%[-\w]+/, alias: "selector" }, statement: { pattern: /\B!(?:default|optional)\b/i, alias: "keyword" }, boolean: /\b(?:false|true)\b/, null: { pattern: /\bnull\b/, alias: "keyword" }, operator: { pattern: /(\s)(?:[-+*\/%]|[=!]=|<=?|>=?|and|not|or)(?=\s)/, lookbehind: !0 } }), (Prism.languages.scss.atrule.inside.rest = Prism.languages.scss);
Prism.languages.sql = { comment: { pattern: /(^|[^\\])(?:\/\*[\s\S]*?\*\/|(?:--|\/\/|#).*)/, lookbehind: !0 }, variable: [{ pattern: /@(["'`])(?:\\[\s\S]|(?!\1)[^\\])+\1/, greedy: !0 }, /@[\w.$]+/], string: { pattern: /(^|[^@\\])("|')(?:\\[\s\S]|(?!\2)[^\\]|\2\2)*\2/, greedy: !0, lookbehind: !0 }, identifier: { pattern: /(^|[^@\\])`(?:\\[\s\S]|[^`\\]|``)*`/, greedy: !0, lookbehind: !0, inside: { punctuation: /^`|`$/ } }, function: /\b(?:AVG|COUNT|FIRST|FORMAT|LAST|LCASE|LEN|MAX|MID|MIN|MOD|NOW|ROUND|SUM|UCASE)(?=\s*\()/i, keyword: /\b(?:ACTION|ADD|AFTER|ALGORITHM|ALL|ALTER|ANALYZE|ANY|APPLY|AS|ASC|AUTHORIZATION|AUTO_INCREMENT|BACKUP|BDB|BEGIN|BERKELEYDB|BIGINT|BINARY|BIT|BLOB|BOOL|BOOLEAN|BREAK|BROWSE|BTREE|BULK|BY|CALL|CASCADED?|CASE|CHAIN|CHAR(?:ACTER|SET)?|CHECK(?:POINT)?|CLOSE|CLUSTERED|COALESCE|COLLATE|COLUMNS?|COMMENT|COMMIT(?:TED)?|COMPUTE|CONNECT|CONSISTENT|CONSTRAINT|CONTAINS(?:TABLE)?|CONTINUE|CONVERT|CREATE|CROSS|CURRENT(?:_DATE|_TIME|_TIMESTAMP|_USER)?|CURSOR|CYCLE|DATA(?:BASES?)?|DATE(?:TIME)?|DAY|DBCC|DEALLOCATE|DEC|DECIMAL|DECLARE|DEFAULT|DEFINER|DELAYED|DELETE|DELIMITERS?|DENY|DESC|DESCRIBE|DETERMINISTIC|DISABLE|DISCARD|DISK|DISTINCT|DISTINCTROW|DISTRIBUTED|DO|DOUBLE|DROP|DUMMY|DUMP(?:FILE)?|DUPLICATE|ELSE(?:IF)?|ENABLE|ENCLOSED|END|ENGINE|ENUM|ERRLVL|ERRORS|ESCAPED?|EXCEPT|EXEC(?:UTE)?|EXISTS|EXIT|EXPLAIN|EXTENDED|FETCH|FIELDS|FILE|FILLFACTOR|FIRST|FIXED|FLOAT|FOLLOWING|FOR(?: EACH ROW)?|FORCE|FOREIGN|FREETEXT(?:TABLE)?|FROM|FULL|FUNCTION|GEOMETRY(?:COLLECTION)?|GLOBAL|GOTO|GRANT|GROUP|HANDLER|HASH|HAVING|HOLDLOCK|HOUR|IDENTITY(?:COL|_INSERT)?|IF|IGNORE|IMPORT|INDEX|INFILE|INNER|INNODB|INOUT|INSERT|INT|INTEGER|INTERSECT|INTERVAL|INTO|INVOKER|ISOLATION|ITERATE|JOIN|KEYS?|KILL|LANGUAGE|LAST|LEAVE|LEFT|LEVEL|LIMIT|LINENO|LINES|LINESTRING|LOAD|LOCAL|LOCK|LONG(?:BLOB|TEXT)|LOOP|MATCH(?:ED)?|MEDIUM(?:BLOB|INT|TEXT)|MERGE|MIDDLEINT|MINUTE|MODE|MODIFIES|MODIFY|MONTH|MULTI(?:LINESTRING|POINT|POLYGON)|NATIONAL|NATURAL|NCHAR|NEXT|NO|NONCLUSTERED|NULLIF|NUMERIC|OFF?|OFFSETS?|ON|OPEN(?:DATASOURCE|QUERY|ROWSET)?|OPTIMIZE|OPTION(?:ALLY)?|ORDER|OUT(?:ER|FILE)?|OVER|PARTIAL|PARTITION|PERCENT|PIVOT|PLAN|POINT|POLYGON|PRECEDING|PRECISION|PREPARE|PREV|PRIMARY|PRINT|PRIVILEGES|PROC(?:EDURE)?|PUBLIC|PURGE|QUICK|RAISERROR|READS?|REAL|RECONFIGURE|REFERENCES|RELEASE|RENAME|REPEAT(?:ABLE)?|REPLACE|REPLICATION|REQUIRE|RESIGNAL|RESTORE|RESTRICT|RETURN(?:ING|S)?|REVOKE|RIGHT|ROLLBACK|ROUTINE|ROW(?:COUNT|GUIDCOL|S)?|RTREE|RULE|SAVE(?:POINT)?|SCHEMA|SECOND|SELECT|SERIAL(?:IZABLE)?|SESSION(?:_USER)?|SET(?:USER)?|SHARE|SHOW|SHUTDOWN|SIMPLE|SMALLINT|SNAPSHOT|SOME|SONAME|SQL|START(?:ING)?|STATISTICS|STATUS|STRIPED|SYSTEM_USER|TABLES?|TABLESPACE|TEMP(?:ORARY|TABLE)?|TERMINATED|TEXT(?:SIZE)?|THEN|TIME(?:STAMP)?|TINY(?:BLOB|INT|TEXT)|TOP?|TRAN(?:SACTIONS?)?|TRIGGER|TRUNCATE|TSEQUAL|TYPES?|UNBOUNDED|UNCOMMITTED|UNDEFINED|UNION|UNIQUE|UNLOCK|UNPIVOT|UNSIGNED|UPDATE(?:TEXT)?|USAGE|USE|USER|USING|VALUES?|VAR(?:BINARY|CHAR|CHARACTER|YING)|VIEW|WAITFOR|WARNINGS|WHEN|WHERE|WHILE|WITH(?: ROLLUP|IN)?|WORK|WRITE(?:TEXT)?|YEAR)\b/i, boolean: /\b(?:FALSE|NULL|TRUE)\b/i, number: /\b0x[\da-f]+\b|\b\d+(?:\.\d*)?|\B\.\d+\b/i, operator: /[-+*\/=%^~]|&&?|\|\|?|!=?|<(?:=>?|<|>)?|>[>=]?|\b(?:AND|BETWEEN|DIV|ILIKE|IN|IS|LIKE|NOT|OR|REGEXP|RLIKE|SOUNDS LIKE|XOR)\b/i, punctuation: /[;[\]()`,.]/ };
(Prism.languages.twig = { comment: /^\{#[\s\S]*?#\}$/, "tag-name": { pattern: /(^\{%-?\s*)\w+/, lookbehind: !0, alias: "keyword" }, delimiter: { pattern: /^\{[{%]-?|-?[%}]\}$/, alias: "punctuation" }, string: { pattern: /("|')(?:\\.|(?!\1)[^\\\r\n])*\1/, inside: { punctuation: /^['"]|['"]$/ } }, keyword: /\b(?:even|if|odd)\b/, boolean: /\b(?:false|null|true)\b/, number: /\b0x[\dA-Fa-f]+|(?:\b\d+(?:\.\d*)?|\B\.\d+)(?:[Ee][-+]?\d+)?/, operator: [{ pattern: /(\s)(?:and|b-and|b-or|b-xor|ends with|in|is|matches|not|or|same as|starts with)(?=\s)/, lookbehind: !0 }, /[=<>]=?|!=|\*\*?|\/\/?|\?:?|[-+~%|]/], punctuation: /[()\[\]{}:.,]/ }),
	Prism.hooks.add("before-tokenize", function (e) {
		"twig" === e.language && Prism.languages["markup-templating"].buildPlaceholders(e, "twig", /\{(?:#[\s\S]*?#|%[\s\S]*?%|\{[\s\S]*?\})\}/g);
	}),
	Prism.hooks.add("after-tokenize", function (e) {
		Prism.languages["markup-templating"].tokenizePlaceholders(e, "twig");
	});
!(function (e) {
	(e.languages.typescript = e.languages.extend("javascript", { "class-name": { pattern: /(\b(?:class|extends|implements|instanceof|interface|new|type)\s+)(?!keyof\b)(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*(?:\s*<(?:[^<>]|<(?:[^<>]|<[^<>]*>)*>)*>)?/, lookbehind: !0, greedy: !0, inside: null }, builtin: /\b(?:Array|Function|Promise|any|boolean|console|never|number|string|symbol|unknown)\b/ })), e.languages.typescript.keyword.push(/\b(?:abstract|declare|is|keyof|readonly|require)\b/, /\b(?:asserts|infer|interface|module|namespace|type)\b(?=\s*(?:[{_$a-zA-Z\xA0-\uFFFF]|$))/, /\btype\b(?=\s*(?:[\{*]|$))/), delete e.languages.typescript.parameter, delete e.languages.typescript["literal-property"];
	var s = e.languages.extend("typescript", {});
	delete s["class-name"], (e.languages.typescript["class-name"].inside = s), e.languages.insertBefore("typescript", "function", { decorator: { pattern: /@[$\w\xA0-\uFFFF]+/, inside: { at: { pattern: /^@/, alias: "operator" }, function: /^[\s\S]+/ } }, "generic-function": { pattern: /#?(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*\s*<(?:[^<>]|<(?:[^<>]|<[^<>]*>)*>)*>(?=\s*\()/, greedy: !0, inside: { function: /^#?(?!\s)[_$a-zA-Z\xA0-\uFFFF](?:(?!\s)[$\w\xA0-\uFFFF])*/, generic: { pattern: /<[\s\S]+/, alias: "class-name", inside: s } } } }), (e.languages.ts = e.languages.typescript);
})(Prism);
!(function (E) {
	var n = /\b(?:ACT|ACTIFSUB|CARRAY|CASE|CLEARGIF|COA|COA_INT|CONSTANTS|CONTENT|CUR|EDITPANEL|EFFECT|EXT|FILE|FLUIDTEMPLATE|FORM|FRAME|FRAMESET|GIFBUILDER|GMENU|GMENU_FOLDOUT|GMENU_LAYERS|GP|HMENU|HRULER|HTML|IENV|IFSUB|IMAGE|IMGMENU|IMGMENUITEM|IMGTEXT|IMG_RESOURCE|INCLUDE_TYPOSCRIPT|JSMENU|JSMENUITEM|LLL|LOAD_REGISTER|NO|PAGE|RECORDS|RESTORE_REGISTER|TEMPLATE|TEXT|TMENU|TMENUITEM|TMENU_LAYERS|USER|USER_INT|_GIFBUILDER|global|globalString|globalVar)\b/;
	(E.languages.typoscript = {
		comment: [
			{ pattern: /(^|[^\\])\/\*[\s\S]*?(?:\*\/|$)/, lookbehind: !0 },
			{ pattern: /(^|[^\\:= \t]|(?:^|[^= \t])[ \t]+)\/\/.*/, lookbehind: !0, greedy: !0 },
			{ pattern: /(^|[^"'])#.*/, lookbehind: !0, greedy: !0 },
		],
		function: [
			{ pattern: /<INCLUDE_TYPOSCRIPT:\s*source\s*=\s*(?:"[^"\r\n]*"|'[^'\r\n]*')\s*>/, inside: { string: { pattern: /"[^"\r\n]*"|'[^'\r\n]*'/, inside: { keyword: n } }, keyword: { pattern: /INCLUDE_TYPOSCRIPT/ } } },
			{ pattern: /@import\s*(?:"[^"\r\n]*"|'[^'\r\n]*')/, inside: { string: /"[^"\r\n]*"|'[^'\r\n]*'/ } },
		],
		string: { pattern: /^([^=]*=[< ]?)(?:(?!\]\n).)*/, lookbehind: !0, inside: { function: /\{\$.*\}/, keyword: n, number: /^\d+$/, punctuation: /[,|:]/ } },
		keyword: n,
		number: { pattern: /\b\d+\s*[.{=]/, inside: { operator: /[.{=]/ } },
		tag: { pattern: /\.?[-\w\\]+\.?/, inside: { punctuation: /\./ } },
		punctuation: /[{}[\];(),.:|]/,
		operator: /[<>]=?|[!=]=?=?|--?|\+\+?|&&?|\|\|?|[?*/~^%]/,
	}),
		(E.languages.tsconfig = E.languages.typoscript);
})(Prism);
!(function (e) {
	e.languages.velocity = e.languages.extend("markup", {});
	var n = { variable: { pattern: /(^|[^\\](?:\\\\)*)\$!?(?:[a-z][\w-]*(?:\([^)]*\))?(?:\.[a-z][\w-]*(?:\([^)]*\))?|\[[^\]]+\])*|\{[^}]+\})/i, lookbehind: !0, inside: {} }, string: { pattern: /"[^"]*"|'[^']*'/, greedy: !0 }, number: /\b\d+\b/, boolean: /\b(?:false|true)\b/, operator: /[=!<>]=?|[+*/%-]|&&|\|\||\.\.|\b(?:eq|g[et]|l[et]|n(?:e|ot))\b/, punctuation: /[(){}[\]:,.]/ };
	(n.variable.inside = { string: n.string, function: { pattern: /([^\w-])[a-z][\w-]*(?=\()/, lookbehind: !0 }, number: n.number, boolean: n.boolean, punctuation: n.punctuation }),
		e.languages.insertBefore("velocity", "comment", {
			unparsed: { pattern: /(^|[^\\])#\[\[[\s\S]*?\]\]#/, lookbehind: !0, greedy: !0, inside: { punctuation: /^#\[\[|\]\]#$/ } },
			"velocity-comment": [
				{ pattern: /(^|[^\\])#\*[\s\S]*?\*#/, lookbehind: !0, greedy: !0, alias: "comment" },
				{ pattern: /(^|[^\\])##.*/, lookbehind: !0, greedy: !0, alias: "comment" },
			],
			directive: { pattern: /(^|[^\\](?:\\\\)*)#@?(?:[a-z][\w-]*|\{[a-z][\w-]*\})(?:\s*\((?:[^()]|\([^()]*\))*\))?/i, lookbehind: !0, inside: { keyword: { pattern: /^#@?(?:[a-z][\w-]*|\{[a-z][\w-]*\})|\bin\b/, inside: { punctuation: /[{}]/ } }, rest: n } },
			variable: n.variable,
		}),
		(e.languages.velocity.tag.inside["attr-value"].inside.rest = e.languages.velocity);
})(Prism);
Prism.languages.vim = {
	string: /"(?:[^"\\\r\n]|\\.)*"|'(?:[^'\r\n]|'')*'/,
	comment: /".*/,
	function: /\b\w+(?=\()/,
	keyword: /\b(?:N|Next|P|Print|X|XMLent|XMLns|ab|abbreviate|abc|abclear|abo|aboveleft|al|all|ar|arga|argadd|argd|argdelete|argdo|arge|argedit|argg|argglobal|argl|arglocal|args|argu|argument|as|ascii|b|bN|bNext|ba|bad|badd|ball|bd|bdelete|be|bel|belowright|bf|bfirst|bl|blast|bm|bmodified|bn|bnext|bo|botright|bp|bprevious|br|brea|break|breaka|breakadd|breakd|breakdel|breakl|breaklist|brewind|bro|browse|bufdo|buffer|buffers|bun|bunload|bw|bwipeout|c|cN|cNext|cNfcNfile|ca|cabbrev|cabc|cabclear|cad|caddb|caddbuffer|caddexpr|caddf|caddfile|cal|call|cat|catch|cb|cbuffer|cc|ccl|cclose|cd|ce|center|cex|cexpr|cf|cfile|cfir|cfirst|cg|cgetb|cgetbuffer|cgete|cgetexpr|cgetfile|change|changes|chd|chdir|che|checkpath|checkt|checktime|cl|cla|clast|clist|clo|close|cmapc|cmapclear|cn|cnew|cnewer|cnext|cnf|cnfile|cnorea|cnoreabbrev|co|col|colder|colo|colorscheme|comc|comclear|comp|compiler|con|conf|confirm|continue|cope|copen|copy|cp|cpf|cpfile|cprevious|cq|cquit|cr|crewind|cu|cuna|cunabbrev|cunmap|cw|cwindow|d|debugg|debuggreedy|delc|delcommand|delete|delf|delfunction|delm|delmarks|di|diffg|diffget|diffoff|diffpatch|diffpu|diffput|diffsplit|diffthis|diffu|diffupdate|dig|digraphs|display|dj|djump|dl|dlist|dr|drop|ds|dsearch|dsp|dsplit|e|earlier|echoe|echoerr|echom|echomsg|echon|edit|el|else|elsei|elseif|em|emenu|en|endf|endfo|endfor|endfun|endfunction|endif|endt|endtry|endw|endwhile|ene|enew|ex|exi|exit|exu|exusage|f|file|files|filetype|fin|fina|finally|find|fini|finish|fir|first|fix|fixdel|fo|fold|foldc|foldclose|foldd|folddoc|folddoclosed|folddoopen|foldo|foldopen|for|fu|fun|function|go|goto|gr|grep|grepa|grepadd|h|ha|hardcopy|help|helpf|helpfind|helpg|helpgrep|helpt|helptags|hid|hide|his|history|ia|iabbrev|iabc|iabclear|if|ij|ijump|il|ilist|imapc|imapclear|in|inorea|inoreabbrev|isearch|isp|isplit|iu|iuna|iunabbrev|iunmap|j|join|ju|jumps|k|kee|keepalt|keepj|keepjumps|keepmarks|l|lN|lNext|lNf|lNfile|la|lad|laddb|laddbuffer|laddexpr|laddf|laddfile|lan|language|last|later|lb|lbuffer|lc|lcd|lch|lchdir|lcl|lclose|left|lefta|leftabove|let|lex|lexpr|lf|lfile|lfir|lfirst|lg|lgetb|lgetbuffer|lgete|lgetexpr|lgetfile|lgr|lgrep|lgrepa|lgrepadd|lh|lhelpgrep|list|ll|lla|llast|lli|llist|lm|lmak|lmake|lmap|lmapc|lmapclear|ln|lne|lnew|lnewer|lnext|lnf|lnfile|lnoremap|lo|loadview|loc|lockmarks|lockv|lockvar|lol|lolder|lop|lopen|lp|lpf|lpfile|lprevious|lr|lrewind|ls|lt|ltag|lu|lunmap|lv|lvimgrep|lvimgrepa|lvimgrepadd|lw|lwindow|m|ma|mak|make|mark|marks|mat|match|menut|menutranslate|mk|mkexrc|mks|mksession|mksp|mkspell|mkv|mkvie|mkview|mkvimrc|mod|mode|move|mz|mzf|mzfile|mzscheme|n|nbkey|new|next|nmapc|nmapclear|noh|nohlsearch|norea|noreabbrev|nu|number|nun|nunmap|o|omapc|omapclear|on|only|open|opt|options|ou|ounmap|p|pc|pclose|pe|ped|pedit|perl|perld|perldo|po|pop|popu|popup|pp|ppop|pre|preserve|prev|previous|print|prof|profd|profdel|profile|promptf|promptfind|promptr|promptrepl|ps|psearch|ptN|ptNext|pta|ptag|ptf|ptfirst|ptj|ptjump|ptl|ptlast|ptn|ptnext|ptp|ptprevious|ptr|ptrewind|pts|ptselect|pu|put|pw|pwd|py|pyf|pyfile|python|q|qa|qall|quit|quita|quitall|r|read|rec|recover|red|redi|redir|redo|redr|redraw|redraws|redrawstatus|reg|registers|res|resize|ret|retab|retu|return|rew|rewind|ri|right|rightb|rightbelow|ru|rub|ruby|rubyd|rubydo|rubyf|rubyfile|runtime|rv|rviminfo|sN|sNext|sa|sal|sall|san|sandbox|sargument|sav|saveas|sb|sbN|sbNext|sba|sball|sbf|sbfirst|sbl|sblast|sbm|sbmodified|sbn|sbnext|sbp|sbprevious|sbr|sbrewind|sbuffer|scrip|scripte|scriptencoding|scriptnames|se|set|setf|setfiletype|setg|setglobal|setl|setlocal|sf|sfind|sfir|sfirst|sh|shell|sign|sil|silent|sim|simalt|sl|sla|slast|sleep|sm|smagic|smap|smapc|smapclear|sme|smenu|sn|snext|sni|sniff|sno|snomagic|snor|snoremap|snoreme|snoremenu|so|sor|sort|source|sp|spe|spelld|spelldump|spellgood|spelli|spellinfo|spellr|spellrepall|spellu|spellundo|spellw|spellwrong|split|spr|sprevious|sre|srewind|st|sta|stag|star|startg|startgreplace|startinsert|startr|startreplace|stj|stjump|stop|stopi|stopinsert|sts|stselect|sun|sunhide|sunm|sunmap|sus|suspend|sv|sview|syncbind|t|tN|tNext|ta|tab|tabN|tabNext|tabc|tabclose|tabd|tabdo|tabe|tabedit|tabf|tabfind|tabfir|tabfirst|tabl|tablast|tabm|tabmove|tabn|tabnew|tabnext|tabo|tabonly|tabp|tabprevious|tabr|tabrewind|tabs|tag|tags|tc|tcl|tcld|tcldo|tclf|tclfile|te|tearoff|tf|tfirst|th|throw|tj|tjump|tl|tlast|tm|tmenu|tn|tnext|to|topleft|tp|tprevious|tr|trewind|try|ts|tselect|tu|tunmenu|u|una|unabbreviate|undo|undoj|undojoin|undol|undolist|unh|unhide|unlet|unlo|unlockvar|unm|unmap|up|update|ve|verb|verbose|version|vert|vertical|vi|vie|view|vim|vimgrep|vimgrepa|vimgrepadd|visual|viu|viusage|vmapc|vmapclear|vne|vnew|vs|vsplit|vu|vunmap|w|wN|wNext|wa|wall|wh|while|win|winc|wincmd|windo|winp|winpos|winsize|wn|wnext|wp|wprevious|wq|wqa|wqall|write|ws|wsverb|wv|wviminfo|x|xa|xall|xit|xm|xmap|xmapc|xmapclear|xme|xmenu|xn|xnoremap|xnoreme|xnoremenu|xu|xunmap|y|yank)\b/,
	builtin: /\b(?:acd|ai|akm|aleph|allowrevins|altkeymap|ambiwidth|ambw|anti|antialias|arab|arabic|arabicshape|ari|arshape|autochdir|autocmd|autoindent|autoread|autowrite|autowriteall|aw|awa|background|backspace|backup|backupcopy|backupdir|backupext|backupskip|balloondelay|ballooneval|balloonexpr|bdir|bdlay|beval|bex|bexpr|bg|bh|bin|binary|biosk|bioskey|bk|bkc|bomb|breakat|brk|browsedir|bs|bsdir|bsk|bt|bufhidden|buflisted|buftype|casemap|ccv|cdpath|cedit|cfu|ch|charconvert|ci|cin|cindent|cink|cinkeys|cino|cinoptions|cinw|cinwords|clipboard|cmdheight|cmdwinheight|cmp|cms|columns|com|comments|commentstring|compatible|complete|completefunc|completeopt|consk|conskey|copyindent|cot|cpo|cpoptions|cpt|cscopepathcomp|cscopeprg|cscopequickfix|cscopetag|cscopetagorder|cscopeverbose|cspc|csprg|csqf|cst|csto|csverb|cuc|cul|cursorcolumn|cursorline|cwh|debug|deco|def|define|delcombine|dex|dg|dict|dictionary|diff|diffexpr|diffopt|digraph|dip|dir|directory|dy|ea|ead|eadirection|eb|ed|edcompatible|ef|efm|ei|ek|enc|encoding|endofline|eol|ep|equalalways|equalprg|errorbells|errorfile|errorformat|esckeys|et|eventignore|expandtab|exrc|fcl|fcs|fdc|fde|fdi|fdl|fdls|fdm|fdn|fdo|fdt|fen|fenc|fencs|fex|ff|ffs|fileencoding|fileencodings|fileformat|fileformats|fillchars|fk|fkmap|flp|fml|fmr|foldcolumn|foldenable|foldexpr|foldignore|foldlevel|foldlevelstart|foldmarker|foldmethod|foldminlines|foldnestmax|foldtext|formatexpr|formatlistpat|formatoptions|formatprg|fp|fs|fsync|ft|gcr|gd|gdefault|gfm|gfn|gfs|gfw|ghr|gp|grepformat|grepprg|gtl|gtt|guicursor|guifont|guifontset|guifontwide|guiheadroom|guioptions|guipty|guitablabel|guitabtooltip|helpfile|helpheight|helplang|hf|hh|hi|hidden|highlight|hk|hkmap|hkmapp|hkp|hl|hlg|hls|hlsearch|ic|icon|iconstring|ignorecase|im|imactivatekey|imak|imc|imcmdline|imd|imdisable|imi|iminsert|ims|imsearch|inc|include|includeexpr|incsearch|inde|indentexpr|indentkeys|indk|inex|inf|infercase|insertmode|invacd|invai|invakm|invallowrevins|invaltkeymap|invanti|invantialias|invar|invarab|invarabic|invarabicshape|invari|invarshape|invautochdir|invautoindent|invautoread|invautowrite|invautowriteall|invaw|invawa|invbackup|invballooneval|invbeval|invbin|invbinary|invbiosk|invbioskey|invbk|invbl|invbomb|invbuflisted|invcf|invci|invcin|invcindent|invcompatible|invconfirm|invconsk|invconskey|invcopyindent|invcp|invcscopetag|invcscopeverbose|invcst|invcsverb|invcuc|invcul|invcursorcolumn|invcursorline|invdeco|invdelcombine|invdg|invdiff|invdigraph|invdisable|invea|inveb|inved|invedcompatible|invek|invendofline|inveol|invequalalways|inverrorbells|invesckeys|invet|invex|invexpandtab|invexrc|invfen|invfk|invfkmap|invfoldenable|invgd|invgdefault|invguipty|invhid|invhidden|invhk|invhkmap|invhkmapp|invhkp|invhls|invhlsearch|invic|invicon|invignorecase|invim|invimc|invimcmdline|invimd|invincsearch|invinf|invinfercase|invinsertmode|invis|invjoinspaces|invjs|invlazyredraw|invlbr|invlinebreak|invlisp|invlist|invloadplugins|invlpl|invlz|invma|invmacatsui|invmagic|invmh|invml|invmod|invmodeline|invmodifiable|invmodified|invmore|invmousef|invmousefocus|invmousehide|invnu|invnumber|invodev|invopendevice|invpaste|invpi|invpreserveindent|invpreviewwindow|invprompt|invpvw|invreadonly|invremap|invrestorescreen|invrevins|invri|invrightleft|invrightleftcmd|invrl|invrlc|invro|invrs|invru|invruler|invsb|invsc|invscb|invscrollbind|invscs|invsecure|invsft|invshellslash|invshelltemp|invshiftround|invshortname|invshowcmd|invshowfulltag|invshowmatch|invshowmode|invsi|invsm|invsmartcase|invsmartindent|invsmarttab|invsmd|invsn|invsol|invspell|invsplitbelow|invsplitright|invspr|invsr|invssl|invsta|invstartofline|invstmp|invswapfile|invswf|invta|invtagbsearch|invtagrelative|invtagstack|invtbi|invtbidi|invtbs|invtermbidi|invterse|invtextauto|invtextmode|invtf|invtgst|invtildeop|invtimeout|invtitle|invto|invtop|invtr|invttimeout|invttybuiltin|invttyfast|invtx|invvb|invvisualbell|invwa|invwarn|invwb|invweirdinvert|invwfh|invwfw|invwildmenu|invwinfixheight|invwinfixwidth|invwiv|invwmnu|invwrap|invwrapscan|invwrite|invwriteany|invwritebackup|invws|isf|isfname|isi|isident|isk|iskeyword|isprint|joinspaces|js|key|keymap|keymodel|keywordprg|km|kmp|kp|langmap|langmenu|laststatus|lazyredraw|lbr|lcs|linebreak|lines|linespace|lisp|lispwords|listchars|loadplugins|lpl|lsp|lz|macatsui|magic|makeef|makeprg|matchpairs|matchtime|maxcombine|maxfuncdepth|maxmapdepth|maxmem|maxmempattern|maxmemtot|mco|mef|menuitems|mfd|mh|mis|mkspellmem|ml|mls|mm|mmd|mmp|mmt|modeline|modelines|modifiable|modified|more|mouse|mousef|mousefocus|mousehide|mousem|mousemodel|mouses|mouseshape|mouset|mousetime|mp|mps|msm|mzq|mzquantum|nf|noacd|noai|noakm|noallowrevins|noaltkeymap|noanti|noantialias|noar|noarab|noarabic|noarabicshape|noari|noarshape|noautochdir|noautoindent|noautoread|noautowrite|noautowriteall|noaw|noawa|nobackup|noballooneval|nobeval|nobin|nobinary|nobiosk|nobioskey|nobk|nobl|nobomb|nobuflisted|nocf|noci|nocin|nocindent|nocompatible|noconfirm|noconsk|noconskey|nocopyindent|nocp|nocscopetag|nocscopeverbose|nocst|nocsverb|nocuc|nocul|nocursorcolumn|nocursorline|nodeco|nodelcombine|nodg|nodiff|nodigraph|nodisable|noea|noeb|noed|noedcompatible|noek|noendofline|noeol|noequalalways|noerrorbells|noesckeys|noet|noex|noexpandtab|noexrc|nofen|nofk|nofkmap|nofoldenable|nogd|nogdefault|noguipty|nohid|nohidden|nohk|nohkmap|nohkmapp|nohkp|nohls|noic|noicon|noignorecase|noim|noimc|noimcmdline|noimd|noincsearch|noinf|noinfercase|noinsertmode|nois|nojoinspaces|nojs|nolazyredraw|nolbr|nolinebreak|nolisp|nolist|noloadplugins|nolpl|nolz|noma|nomacatsui|nomagic|nomh|noml|nomod|nomodeline|nomodifiable|nomodified|nomore|nomousef|nomousefocus|nomousehide|nonu|nonumber|noodev|noopendevice|nopaste|nopi|nopreserveindent|nopreviewwindow|noprompt|nopvw|noreadonly|noremap|norestorescreen|norevins|nori|norightleft|norightleftcmd|norl|norlc|noro|nors|noru|noruler|nosb|nosc|noscb|noscrollbind|noscs|nosecure|nosft|noshellslash|noshelltemp|noshiftround|noshortname|noshowcmd|noshowfulltag|noshowmatch|noshowmode|nosi|nosm|nosmartcase|nosmartindent|nosmarttab|nosmd|nosn|nosol|nospell|nosplitbelow|nosplitright|nospr|nosr|nossl|nosta|nostartofline|nostmp|noswapfile|noswf|nota|notagbsearch|notagrelative|notagstack|notbi|notbidi|notbs|notermbidi|noterse|notextauto|notextmode|notf|notgst|notildeop|notimeout|notitle|noto|notop|notr|nottimeout|nottybuiltin|nottyfast|notx|novb|novisualbell|nowa|nowarn|nowb|noweirdinvert|nowfh|nowfw|nowildmenu|nowinfixheight|nowinfixwidth|nowiv|nowmnu|nowrap|nowrapscan|nowrite|nowriteany|nowritebackup|nows|nrformats|numberwidth|nuw|odev|oft|ofu|omnifunc|opendevice|operatorfunc|opfunc|osfiletype|pa|para|paragraphs|paste|pastetoggle|patchexpr|patchmode|path|pdev|penc|pex|pexpr|pfn|ph|pheader|pi|pm|pmbcs|pmbfn|popt|preserveindent|previewheight|previewwindow|printdevice|printencoding|printexpr|printfont|printheader|printmbcharset|printmbfont|printoptions|prompt|pt|pumheight|pvh|pvw|qe|quoteescape|readonly|remap|report|restorescreen|revins|rightleft|rightleftcmd|rl|rlc|ro|rs|rtp|ruf|ruler|rulerformat|runtimepath|sbo|sc|scb|scr|scroll|scrollbind|scrolljump|scrolloff|scrollopt|scs|sect|sections|secure|sel|selection|selectmode|sessionoptions|sft|shcf|shellcmdflag|shellpipe|shellquote|shellredir|shellslash|shelltemp|shelltype|shellxquote|shiftround|shiftwidth|shm|shortmess|shortname|showbreak|showcmd|showfulltag|showmatch|showmode|showtabline|shq|si|sidescroll|sidescrolloff|siso|sj|slm|smartcase|smartindent|smarttab|smc|smd|softtabstop|sol|spc|spell|spellcapcheck|spellfile|spelllang|spellsuggest|spf|spl|splitbelow|splitright|sps|sr|srr|ss|ssl|ssop|stal|startofline|statusline|stl|stmp|su|sua|suffixes|suffixesadd|sw|swapfile|swapsync|swb|swf|switchbuf|sws|sxq|syn|synmaxcol|syntax|t_AB|t_AF|t_AL|t_CS|t_CV|t_Ce|t_Co|t_Cs|t_DL|t_EI|t_F1|t_F2|t_F3|t_F4|t_F5|t_F6|t_F7|t_F8|t_F9|t_IE|t_IS|t_K1|t_K3|t_K4|t_K5|t_K6|t_K7|t_K8|t_K9|t_KA|t_KB|t_KC|t_KD|t_KE|t_KF|t_KG|t_KH|t_KI|t_KJ|t_KK|t_KL|t_RI|t_RV|t_SI|t_Sb|t_Sf|t_WP|t_WS|t_ZH|t_ZR|t_al|t_bc|t_cd|t_ce|t_cl|t_cm|t_cs|t_da|t_db|t_dl|t_fs|t_k1|t_k2|t_k3|t_k4|t_k5|t_k6|t_k7|t_k8|t_k9|t_kB|t_kD|t_kI|t_kN|t_kP|t_kb|t_kd|t_ke|t_kh|t_kl|t_kr|t_ks|t_ku|t_le|t_mb|t_md|t_me|t_mr|t_ms|t_nd|t_op|t_se|t_so|t_sr|t_te|t_ti|t_ts|t_ue|t_us|t_ut|t_vb|t_ve|t_vi|t_vs|t_xs|tabline|tabpagemax|tabstop|tagbsearch|taglength|tagrelative|tagstack|tal|tb|tbi|tbidi|tbis|tbs|tenc|term|termbidi|termencoding|terse|textauto|textmode|textwidth|tgst|thesaurus|tildeop|timeout|timeoutlen|title|titlelen|titleold|titlestring|toolbar|toolbariconsize|top|tpm|tsl|tsr|ttimeout|ttimeoutlen|ttm|tty|ttybuiltin|ttyfast|ttym|ttymouse|ttyscroll|ttytype|tw|tx|uc|ul|undolevels|updatecount|updatetime|ut|vb|vbs|vdir|verbosefile|vfile|viewdir|viewoptions|viminfo|virtualedit|visualbell|vop|wak|warn|wb|wc|wcm|wd|weirdinvert|wfh|wfw|whichwrap|wi|wig|wildchar|wildcharm|wildignore|wildmenu|wildmode|wildoptions|wim|winaltkeys|window|winfixheight|winfixwidth|winheight|winminheight|winminwidth|winwidth|wiv|wiw|wm|wmh|wmnu|wmw|wop|wrap|wrapmargin|wrapscan|writeany|writebackup|writedelay|ww)\b/,
	number: /\b(?:0x[\da-f]+|\d+(?:\.\d+)?)\b/i,
	operator: /\|\||&&|[-+.]=?|[=!](?:[=~][#?]?)?|[<>]=?[#?]?|[*\/%?]|\b(?:is(?:not)?)\b/,
	punctuation: /[{}[\](),;:]/,
};
(Prism.languages.wiki = Prism.languages.extend("markup", { "block-comment": { pattern: /(^|[^\\])\/\*[\s\S]*?\*\//, lookbehind: !0, alias: "comment" }, heading: { pattern: /^(=+)[^=\r\n].*?\1/m, inside: { punctuation: /^=+|=+$/, important: /.+/ } }, emphasis: { pattern: /('{2,5}).+?\1/, inside: { "bold-italic": { pattern: /(''''').+?(?=\1)/, lookbehind: !0, alias: ["bold", "italic"] }, bold: { pattern: /(''')[^'](?:.*?[^'])?(?=\1)/, lookbehind: !0 }, italic: { pattern: /('')[^'](?:.*?[^'])?(?=\1)/, lookbehind: !0 }, punctuation: /^''+|''+$/ } }, hr: { pattern: /^-{4,}/m, alias: "punctuation" }, url: [/ISBN +(?:97[89][ -]?)?(?:\d[ -]?){9}[\dx]\b|(?:PMID|RFC) +\d+/i, /\[\[.+?\]\]|\[.+?\]/], variable: [/__[A-Z]+__/, /\{{3}.+?\}{3}/, /\{\{.+?\}\}/], symbol: [/^#redirect/im, /~{3,5}/], "table-tag": { pattern: /((?:^|[|!])[|!])[^|\r\n]+\|(?!\|)/m, lookbehind: !0, inside: { "table-bar": { pattern: /\|$/, alias: "punctuation" }, rest: Prism.languages.markup.tag.inside } }, punctuation: /^(?:\{\||\|\}|\|-|[*#:;!|])|\|\||!!/m })), Prism.languages.insertBefore("wiki", "tag", { nowiki: { pattern: /<(nowiki|pre|source)\b[^>]*>[\s\S]*?<\/\1>/i, inside: { tag: { pattern: /<(?:nowiki|pre|source)\b[^>]*>|<\/(?:nowiki|pre|source)>/i, inside: Prism.languages.markup.tag.inside } } } });
!(function (e) {
	var n = /[*&][^\s[\]{},]+/,
		r = /!(?:<[\w\-%#;/?:@&=+$,.!~*'()[\]]+>|(?:[a-zA-Z\d-]*!)?[\w\-%#;/?:@&=+$.~*'()]+)?/,
		t = "(?:" + r.source + "(?:[ \t]+" + n.source + ")?|" + n.source + "(?:[ \t]+" + r.source + ")?)",
		a = "(?:[^\\s\\x00-\\x08\\x0e-\\x1f!\"#%&'*,\\-:>?@[\\]`{|}\\x7f-\\x84\\x86-\\x9f\\ud800-\\udfff\\ufffe\\uffff]|[?:-]<PLAIN>)(?:[ \t]*(?:(?![#:])<PLAIN>|:<PLAIN>))*".replace(/<PLAIN>/g, function () {
			return "[^\\s\\x00-\\x08\\x0e-\\x1f,[\\]{}\\x7f-\\x84\\x86-\\x9f\\ud800-\\udfff\\ufffe\\uffff]";
		}),
		d = "\"(?:[^\"\\\\\r\n]|\\\\.)*\"|'(?:[^'\\\\\r\n]|\\\\.)*'";
	function o(e, n) {
		n = (n || "").replace(/m/g, "") + "m";
		var r = "([:\\-,[{]\\s*(?:\\s<<prop>>[ \t]+)?)(?:<<value>>)(?=[ \t]*(?:$|,|\\]|\\}|(?:[\r\n]\\s*)?#))"
			.replace(/<<prop>>/g, function () {
				return t;
			})
			.replace(/<<value>>/g, function () {
				return e;
			});
		return RegExp(r, n);
	}
	(e.languages.yaml = {
		scalar: {
			pattern: RegExp(
				"([\\-:]\\s*(?:\\s<<prop>>[ \t]+)?[|>])[ \t]*(?:((?:\r?\n|\r)[ \t]+)\\S[^\r\n]*(?:\\2[^\r\n]+)*)".replace(/<<prop>>/g, function () {
					return t;
				})
			),
			lookbehind: !0,
			alias: "string",
		},
		comment: /#.*/,
		key: {
			pattern: RegExp(
				"((?:^|[:\\-,[{\r\n?])[ \t]*(?:<<prop>>[ \t]+)?)<<key>>(?=\\s*:\\s)"
					.replace(/<<prop>>/g, function () {
						return t;
					})
					.replace(/<<key>>/g, function () {
						return "(?:" + a + "|" + d + ")";
					})
			),
			lookbehind: !0,
			greedy: !0,
			alias: "atrule",
		},
		directive: { pattern: /(^[ \t]*)%.+/m, lookbehind: !0, alias: "important" },
		datetime: { pattern: o("\\d{4}-\\d\\d?-\\d\\d?(?:[tT]|[ \t]+)\\d\\d?:\\d{2}:\\d{2}(?:\\.\\d*)?(?:[ \t]*(?:Z|[-+]\\d\\d?(?::\\d{2})?))?|\\d{4}-\\d{2}-\\d{2}|\\d\\d?:\\d{2}(?::\\d{2}(?:\\.\\d*)?)?"), lookbehind: !0, alias: "number" },
		boolean: { pattern: o("false|true", "i"), lookbehind: !0, alias: "important" },
		null: { pattern: o("null|~", "i"), lookbehind: !0, alias: "important" },
		string: { pattern: o(d), lookbehind: !0, greedy: !0 },
		number: { pattern: o("[+-]?(?:0x[\\da-f]+|0o[0-7]+|(?:\\d+(?:\\.\\d*)?|\\.\\d+)(?:e[+-]?\\d+)?|\\.inf|\\.nan)", "i"), lookbehind: !0 },
		tag: r,
		important: n,
		punctuation: /---|[:[\]{}\-,|>?]|\.\.\./,
	}),
		(e.languages.yml = e.languages.yaml);
})(Prism);
!(function () {
	if ("undefined" != typeof Prism && "undefined" != typeof document) {
		var e = /(?:^|\s)command-line(?:\s|$)/,
			t = "command-line-prompt",
			n = "".startsWith
				? function (e, t) {
						return e.startsWith(t);
				  }
				: function (e, t) {
						return 0 === e.indexOf(t);
				  },
			a = "".endsWith
				? function (e, t) {
						return e.endsWith(t);
				  }
				: function (e, t) {
						var n = e.length;
						return e.substring(n - t.length, n) === t;
				  };
		Prism.hooks.add("before-highlight", function (i) {
			var o = r(i);
			if (!o.complete && i.code) {
				var s = i.element.parentElement;
				if (s && /pre/i.test(s.nodeName) && (e.test(s.className) || e.test(i.element.className))) {
					var l = i.element.querySelector("." + t);
					l && l.remove();
					var m = i.code.split("\n");
					o.numberOfLines = m.length;
					var u = (o.outputLines = []),
						c = s.getAttribute("data-output"),
						d = s.getAttribute("data-filter-output");
					if (null !== c)
						c.split(",").forEach(function (e) {
							var t = e.split("-"),
								n = parseInt(t[0], 10),
								a = 2 === t.length ? parseInt(t[1], 10) : n;
							if (!isNaN(n) && !isNaN(a)) {
								n < 1 && (n = 1), a > m.length && (a = m.length), a--;
								for (var r = --n; r <= a; r++) (u[r] = m[r]), (m[r] = "");
							}
						});
					else if (d) for (var p = 0; p < m.length; p++) n(m[p], d) && ((u[p] = m[p].slice(d.length)), (m[p] = ""));
					for (var f = (o.continuationLineIndicies = new Set()), h = s.getAttribute("data-continuation-str"), v = s.getAttribute("data-filter-continuation"), g = 0; g < m.length; g++) {
						var b = m[g];
						b && (h && a(b, h) && f.add(g + 1), g > 0 && v && n(b, v) && ((m[g] = b.slice(v.length)), f.add(g)));
					}
					i.code = m.join("\n");
				} else o.complete = !0;
			} else o.complete = !0;
		}),
			Prism.hooks.add("before-insert", function (e) {
				var t = r(e);
				if (!t.complete) {
					for (var n = e.highlightedCode.split("\n"), a = t.outputLines || [], i = 0, o = n.length; i < o; i++) a.hasOwnProperty(i) ? (n[i] = '<span class="token output">' + Prism.util.encode(a[i]) + "</span>") : (n[i] = '<span class="token command">' + n[i] + "</span>");
					e.highlightedCode = n.join("\n");
				}
			}),
			Prism.hooks.add("complete", function (n) {
				if (
					(function (e) {
						return "command-line" in (e.vars = e.vars || {});
					})(n)
				) {
					var a = r(n);
					if (!a.complete) {
						var i = n.element.parentElement;
						e.test(n.element.className) && (n.element.className = n.element.className.replace(e, " ")), e.test(i.className) || (i.className += " command-line");
						var o,
							s = "",
							l = a.numberOfLines || 0,
							m = b("data-prompt", "");
						o = "" !== m ? '<span data-prompt="' + m + '"></span>' : '<span data-user="' + b("data-user", "user") + '" data-host="' + b("data-host", "localhost") + '"></span>';
						for (var u = a.continuationLineIndicies || new Set(), c = '<span data-continuation-prompt="' + b("data-continuation-prompt", ">") + '"></span>', d = 0; d < l; d++) u.has(d) ? (s += c) : (s += o);
						var p = document.createElement("span");
						(p.className = t), (p.innerHTML = s);
						for (var f = a.outputLines || [], h = 0, v = f.length; h < v; h++)
							if (f.hasOwnProperty(h)) {
								var g = p.children[h];
								g.removeAttribute("data-user"), g.removeAttribute("data-host"), g.removeAttribute("data-prompt");
							}
						n.element.insertBefore(p, n.element.firstChild), (a.complete = !0);
					}
				}
				function b(e, t) {
					return (i.getAttribute(e) || t).replace(/"/g, "&quot");
				}
			});
	}
	function r(e) {
		var t = (e.vars = e.vars || {});
		return (t["command-line"] = t["command-line"] || {});
	}
})();
!(function () {
	if ("undefined" != typeof Prism && "undefined" != typeof document) {
		var e = [],
			t = {},
			n = function () {};
		Prism.plugins.toolbar = {};
		var a = (Prism.plugins.toolbar.registerButton = function (n, a) {
				var r;
				(r =
					"function" == typeof a
						? a
						: function (e) {
								var t;
								return (
									"function" == typeof a.onClick
										? (((t = document.createElement("button")).type = "button"),
										  t.addEventListener("click", function () {
												a.onClick.call(this, e);
										  }))
										: "string" == typeof a.url
										? ((t = document.createElement("a")).href = a.url)
										: (t = document.createElement("span")),
									a.className && t.classList.add(a.className),
									(t.textContent = a.text),
									t
								);
						  }),
					n in t ? console.warn('There is a button with the key "' + n + '" registered already.') : e.push((t[n] = r));
			}),
			r = (Prism.plugins.toolbar.hook = function (a) {
				var r = a.element.parentNode;
				if (r && /pre/i.test(r.nodeName) && !r.parentNode.classList.contains("code-toolbar")) {
					var o = document.createElement("div");
					o.classList.add("code-toolbar"), r.parentNode.insertBefore(o, r), o.appendChild(r);
					var i = document.createElement("div");
					i.classList.add("toolbar");
					var l = e,
						d = (function (e) {
							for (; e; ) {
								var t = e.getAttribute("data-toolbar-order");
								if (null != t) return (t = t.trim()).length ? t.split(/\s*,\s*/g) : [];
								e = e.parentElement;
							}
						})(a.element);
					d &&
						(l = d.map(function (e) {
							return t[e] || n;
						})),
						l.forEach(function (e) {
							var t = e(a);
							if (t) {
								var n = document.createElement("div");
								n.classList.add("toolbar-item"), n.appendChild(t), i.appendChild(n);
							}
						}),
						o.appendChild(i);
				}
			});
		a("label", function (e) {
			var t = e.element.parentNode;
			if (t && /pre/i.test(t.nodeName) && t.hasAttribute("data-label")) {
				var n,
					a,
					r = t.getAttribute("data-label");
				try {
					a = document.querySelector("template#" + r);
				} catch (e) {}
				return a ? (n = a.content) : (t.hasAttribute("data-url") ? ((n = document.createElement("a")).href = t.getAttribute("data-url")) : (n = document.createElement("span")), (n.textContent = r)), n;
			}
		}),
			Prism.hooks.add("complete", r);
	}
})();
!(function () {
	function t(t) {
		var e = document.createElement("textarea");
		(e.value = t.getText()), (e.style.top = "0"), (e.style.left = "0"), (e.style.position = "fixed"), document.body.appendChild(e), e.focus(), e.select();
		try {
			var o = document.execCommand("copy");
			setTimeout(function () {
				o ? t.success() : t.error();
			}, 1);
		} catch (e) {
			setTimeout(function () {
				t.error(e);
			}, 1);
		}
		document.body.removeChild(e);
	}
	"undefined" != typeof Prism &&
		"undefined" != typeof document &&
		(Prism.plugins.toolbar
			? Prism.plugins.toolbar.registerButton("copy-to-clipboard", function (e) {
					var o = e.element,
						n = (function (t) {
							var e = { copy: "Copy", "copy-error": "Press Ctrl+C to copy", "copy-success": "Copied!", "copy-timeout": 5e3 };
							for (var o in e) {
								for (var n = "data-prismjs-" + o, c = t; c && !c.hasAttribute(n); ) c = c.parentElement;
								c && (e[o] = c.getAttribute(n));
							}
							return e;
						})(o),
						c = document.createElement("button");
					(c.className = "copy-to-clipboard-button"), c.setAttribute("type", "button");
					var r = document.createElement("span");
					return (
						c.appendChild(r),
						u("copy"),
						(function (e, o) {
							e.addEventListener("click", function () {
								!(function (e) {
									navigator.clipboard
										? navigator.clipboard.writeText(e.getText()).then(e.success, function () {
												t(e);
										  })
										: t(e);
								})(o);
							});
						})(c, {
							getText: function () {
								return o.textContent;
							},
							success: function () {
								u("copy-success"), i();
							},
							error: function () {
								u("copy-error"),
									setTimeout(function () {
										!(function (t) {
											window.getSelection().selectAllChildren(t);
										})(o);
									}, 1),
									i();
							},
						}),
						c
					);
					function i() {
						setTimeout(function () {
							u("copy");
						}, n["copy-timeout"]);
					}
					function u(t) {
						(r.textContent = n[t]), c.setAttribute("data-copy-state", t);
					}
			  })
			: console.warn("Copy to Clipboard plugin loaded before Toolbar plugin."));
})();
