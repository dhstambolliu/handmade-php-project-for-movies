var MultiCarousel = function(t) {
  var e = {};

  function n(i) {
    if (e[i]) return e[i].exports;
    var s = e[i] = {
      i: i,
      l: !1,
      exports: {}
    };
    return t[i].call(s.exports, s, s.exports, n), s.l = !0, s.exports
  }
  return n.m = t, n.c = e, n.d = function(t, e, i) {
    n.o(t, e) || Object.defineProperty(t, e, {
      enumerable: !0,
      get: i
    })
  }, n.r = function(t) {
    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
      value: "Module"
    }), Object.defineProperty(t, "__esModule", {
      value: !0
    })
  }, n.t = function(t, e) {
    if (1 & e && (t = n(t)), 8 & e) return t;
    if (4 & e && "object" == typeof t && t && t.__esModule) return t;
    var i = Object.create(null);
    if (n.r(i), Object.defineProperty(i, "default", {
        enumerable: !0,
        value: t
      }), 2 & e && "string" != typeof t)
      for (var s in t) n.d(i, s, function(e) {
        return t[e]
      }.bind(null, s));
    return i
  }, n.n = function(t) {
    var e = t && t.__esModule ? function() {
      return t.default
    } : function() {
      return t
    };
    return n.d(e, "a", e), e
  }, n.o = function(t, e) {
    return Object.prototype.hasOwnProperty.call(t, e)
  }, n.p = "", n(n.s = 0)
}([function(t, e, n) {
  "use strict";

  function i() {}
  n.r(e);

  function s(t) {
    return t()
  }

  function r() {
    return Object.create(null)
  }

  function l(t) {
    t.forEach(s)
  }

  function o(t) {
    return "function" == typeof t
  }

  function a(t, e) {
    return t != t ? e == e : t !== e || t && "object" == typeof t || "function" == typeof t
  }
  new Set;

  function u(t, e) {
    t.appendChild(e)
  }

  function c(t, e, n) {
    t.insertBefore(e, n)
  }

  function f(t) {
    t.parentNode.removeChild(t)
  }

  function d(t) {
    return document.createElement(t)
  }

  function m(t) {
    return document.createTextNode(t)
  }

  function v() {
    return m(" ")
  }

  function h(t, e, n, i) {
    return t.addEventListener(e, n, i), () => t.removeEventListener(e, n, i)
  }
  let p;

  function w(t) {
    p = t
  }

  function g() {
    if (!p) throw new Error("Function called outside component initialization");
    return p
  }
  const x = [];
  let y;
  const $ = [],
    b = [],
    O = [];

  function _() {
    y || (y = Promise.resolve()).then(B)
  }

  function q(t) {
    b.push(t)
  }

  function B() {
    const t = new Set;
    do {
      for (; x.length;) {
        const t = x.shift();
        w(t), E(t.$$)
      }
      for (; $.length;) $.shift()();
      for (; b.length;) {
        const e = b.pop();
        t.has(e) || (e(), t.add(e))
      }
    } while (x.length);
    for (; O.length;) O.pop()();
    y = null
  }

  function E(t) {
    t.fragment && (t.update(t.dirty), l(t.before_render), t.fragment.p(t.dirty, t.ctx), t.dirty = null, t.after_render.forEach(q))
  }
  let L;

  function M(t, e) {
    t.$$ && (l(t.$$.on_destroy), t.$$.fragment.d(e), t.$$.on_destroy = t.$$.fragment = null, t.$$.ctx = {})
  }

  function S(t, e, n, a, u, c) {
    const f = p;
    w(t);
    const d = e.props || {},
      m = t.$$ = {
        fragment: null,
        ctx: null,
        props: c,
        update: i,
        not_equal: u,
        bound: r(),
        on_mount: [],
        on_destroy: [],
        before_render: [],
        after_render: [],
        context: new Map(f ? f.$$.context : []),
        callbacks: r(),
        dirty: null
      };
    let v = !1;
    var h;
    m.ctx = n ? n(t, d, (e, n) => {
      m.ctx && u(m.ctx[e], m.ctx[e] = n) && (m.bound[e] && m.bound[e](n), v && function(t, e) {
        t.$$.dirty || (x.push(t), _(), t.$$.dirty = {}), t.$$.dirty[e] = !0
      }(t, e))
    }) : d, m.update(), v = !0, l(m.before_render), m.fragment = a(m.ctx), e.target && (e.hydrate ? m.fragment.l((h = e.target, Array.from(h.childNodes))) : m.fragment.c(), e.intro && t.$$.fragment.i && t.$$.fragment.i(), function(t, e, n) {
      const {
        fragment: i,
        on_mount: r,
        on_destroy: a,
        after_render: u
      } = t.$$;
      i.m(e, n), q(() => {
        const e = r.map(s).filter(o);
        a ? a.push(...e) : l(e), t.$$.on_mount = []
      }), u.forEach(q)
    }(t, e.target, e.anchor), B()), w(f)
  }
  "undefined" != typeof HTMLElement && (L = class extends HTMLElement {
    constructor() {
      super(), this.attachShadow({
        mode: "open"
      })
    }
    connectedCallback() {
      for (const t in this.$$.slotted) this.appendChild(this.$$.slotted[t])
    }
    attributeChangedCallback(t, e, n) {
      this[t] = n
    }
    $destroy() {
      M(this, !0), this.$destroy = i
    }
    $on(t, e) {
      const n = this.$$.callbacks[t] || (this.$$.callbacks[t] = []);
      return n.push(e), () => {
        const t = n.indexOf(e); - 1 !== t && n.splice(t, 1)
      }
    }
    $set() {}
  });
  class k {
    $destroy() {
      M(this, !0), this.$destroy = i
    }
    $on(t, e) {
      const n = this.$$.callbacks[t] || (this.$$.callbacks[t] = []);
      return n.push(e), () => {
        const t = n.indexOf(e); - 1 !== t && n.splice(t, 1)
      }
    }
    $set() {}
  }

  function T(t) {
    var e, n;
    return {
      c() {
        (e = d("div")).innerHTML = '<svg width="28" height="28" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><defs><filter id="shadow" x="0" y="0" width="200%" height="200%"><feOffset result="offOut" in="SourceAlpha" dx="0" dy="0"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="10"></feGaussianBlur><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter></defs><path filter="url(#shadow)" d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z"></path></svg>', e.className = "previous svelte-v96mw1", n = h(e, "click", t.previous)
      },
      m(t, n) {
        c(t, e, n)
      },
      p: i,
      d(t) {
        t && f(e), n()
      }
    }
  }

  function j(t) {
    var e, n;
    return {
      c() {
        (e = d("div")).innerHTML = '<svg width="28" height="28" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><defs><filter id="shadow" x="0" y="0" width="200%" height="200%"><feOffset result="offOut" in="SourceAlpha" dx="0" dy="0"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="10"></feGaussianBlur><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter></defs><path filter="url(#shadow)" d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"></path></svg>', e.className = "next svelte-v96mw1", n = h(e, "click", t.next)
      },
      m(t, n) {
        c(t, e, n)
      },
      p: i,
      d(t) {
        t && f(e), n()
      }
    }
  }

  function G(t) {
    var e, n;
    return {
      c() {
        (e = d("div")).innerHTML = '<svg width="28" height="28" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><defs><filter id="shadow" x="0" y="0" width="200%" height="200%"><feOffset result="offOut" in="SourceAlpha" dx="0" dy="0"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="10"></feGaussianBlur><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter></defs><path filter="url(#shadow)" transform="translate(179.2 179.2) scale(0.8)" d="M1664 192v1408q0 26-19 45t-45 19h-512q-26 0-45-19t-19-45v-1408q0-26 19-45t45-19h512q26 0 45 19t19 45zm-896 0v1408q0 26-19 45t-45 19h-512q-26 0-45-19t-19-45v-1408q0-26 19-45t45-19h512q26 0 45 19t19 45z"></path></svg>', e.className = "pause svelte-v96mw1", n = h(e, "click", t.pause)
      },
      m(t, n) {
        c(t, e, n)
      },
      p: i,
      d(t) {
        t && f(e), n()
      }
    }
  }

  function C(t) {
    var e, n;
    return {
      c() {
        (e = d("div")).innerHTML = '<svg width="28" height="28" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><defs><filter id="shadow" x="0" y="0" width="200%" height="200%"><feOffset result="offOut" in="SourceAlpha" dx="0" dy="0"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="10"></feGaussianBlur><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter></defs><path filter="url(#shadow)" transform="translate(179.2 179.2) scale(0.8)" d="M1576 927l-1328 738q-23 13-39.5 3t-16.5-36v-1472q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path></svg>', e.className = "start svelte-v96mw1", n = h(e, "click", t.start)
      },
      m(t, n) {
        c(t, e, n)
      },
      p: i,
      d(t) {
        t && f(e), n()
      }
    }
  }

  function N(t) {
    var e, n, s, r, l, o, a = -1 !== t.controls.indexOf("previous") && T(t),
      m = -1 !== t.controls.indexOf("next") && j(t),
      h = t.timer && -1 !== t.controls.indexOf("pause") && G(t),
      p = !t.timer && -1 !== t.controls.indexOf("start") && C(t);
    return {
      c() {
        e = d("div"), a && a.c(), n = v(), m && m.c(), s = v(), h && h.c(), r = v(), p && p.c(), l = v(), (o = d("div")).className = "items svelte-v96mw1", e.className = "multicarousel svelte-v96mw1"
      },
      m(i, f) {
        var d;
        c(i, e, f), a && a.m(e, null), u(e, n), m && m.m(e, null), u(e, s), h && h.m(e, null), u(e, r), p && p.m(e, null), u(e, l), u(e, o), d = (() => t.div0_binding(o, null)), $.push(d)
      },
      p(t, i) {
        -1 !== i.controls.indexOf("previous") ? a ? a.p(t, i) : ((a = T(i)).c(), a.m(e, n)) : a && (a.d(1), a = null), -1 !== i.controls.indexOf("next") ? m ? m.p(t, i) : ((m = j(i)).c(), m.m(e, s)) : m && (m.d(1), m = null), i.timer && -1 !== i.controls.indexOf("pause") ? h ? h.p(t, i) : ((h = G(i)).c(), h.m(e, r)) : h && (h.d(1), h = null), i.timer || -1 === i.controls.indexOf("start") ? p && (p.d(1), p = null) : p ? p.p(t, i) : ((p = C(i)).c(), p.m(e, l)), t.items && (i.div0_binding(null, o), i.div0_binding(o, null))
      },
      i: i,
      o: i,
      d(n) {
        n && f(e), a && a.d(), m && m.d(), h && h.d(), p && p.d(), t.div0_binding(null, o)
      }
    }
  }

  function z(t, e, n) {
    let i, {
        delay: s = 1500,
        transition: r = 600,
        items: l = [],
        count: o = 5,
        controls: a = ["previous", "next", "pause", "start"]
      } = e,
      u = !1,
      c = null;
    var f;
    f = (() => {
      for (let t = 0; t < l.length; t++) i.appendChild(l[t]), l[t].style.width = p, n("items", l);
      for (let t = 0; t < o; t++) l[t].classList.add("active");
      i.style.left = "0", n("itemsElement", i), i.style.transition = h, n("itemsElement", i), v()
    }), g().$$.on_mount.push(f);
    const d = () => {
        if (u) return;
        n("transitioning", u = !0);
        const t = i.children;
        let e, s = !1;
        for (let n = 0; n < t.length; n++)
          if (s || !t[n].classList.contains("active")) {
            if (s && !t[n].classList.contains("active")) {
              t[n].classList.add("active");
              break
            }
          } else e = t[n], s = !0;
        i.style.transition = h, n("itemsElement", i), i.style.left = "-" + p, n("itemsElement", i), setTimeout(() => {
          e.classList.remove("active"), i.style.transition = "", n("itemsElement", i), i.style.left = "0", n("itemsElement", i), i.appendChild(e), n("transitioning", u = !1)
        }, r), c && v()
      },
      m = () => {
        clearInterval(c), n("timer", c = null)
      },
      v = () => {
        s > 0 && (c && m(), n("timer", c = setInterval(d, s)))
      };
    let h, p;
    return t.$set = (t => {
      "delay" in t && n("delay", s = t.delay), "transition" in t && n("transition", r = t.transition), "items" in t && n("items", l = t.items), "count" in t && n("count", o = t.count), "controls" in t && n("controls", a = t.controls)
    }), t.$$.update = ((t = {
      transition: 1,
      count: 1
    }) => {
      t.transition && n("cssTransition", h = `left ${r/1e3}s`), t.count && n("width", p = `${100/o}%`)
    }), {
      delay: s,
      transition: r,
      items: l,
      count: o,
      controls: a,
      itemsElement: i,
      timer: c,
      next: d,
      previous: () => {
        if (u) return;
        n("transitioning", u = !0);
        const t = i.children;
        let e = t[t.length - 1];
        e.classList.add("active"), i.insertBefore(e, t[0]), requestAnimationFrame(() => {
          i.style.transition = "", n("itemsElement", i), i.style.left = "-" + p, n("itemsElement", i), setTimeout(() => {
            i.style.transition = h, n("itemsElement", i), i.style.left = "0", n("itemsElement", i)
          }, 0)
        }), setTimeout(() => {
          for (let e = t.length - 1; e >= 0; e--)
            if (t[e].classList.contains("active")) {
              t[e].classList.remove("active");
              break
            } i.style.transition = "", n("itemsElement", i), n("transitioning", u = !1)
        }, r), c && v()
      },
      pause: m,
      start: v,
      div0_binding: function(t, e) {
        n("itemsElement", i = t)
      }
    }
  }
  e.default = class extends k {
    constructor(t) {
      var e;
      super(), document.getElementById("svelte-v96mw1-style") || ((e = d("style")).id = "svelte-v96mw1-style", e.textContent = ".multicarousel.svelte-v96mw1{position:relative;overflow:hidden;white-space:nowrap}.previous.svelte-v96mw1,.next.svelte-v96mw1,.pause.svelte-v96mw1,.start.svelte-v96mw1{position:absolute;cursor:pointer;display:flex;z-index:1;fill:#fff}.previous.svelte-v96mw1,.next.svelte-v96mw1{width:30px;align-items:center;height:100%}.previous.svelte-v96mw1{left:0;justify-content:flex-end}.next.svelte-v96mw1{right:0;justify-content:flex-start}.pause.svelte-v96mw1,.start.svelte-v96mw1{width:28px;left:50%;margin-left:-14px;height:30px;bottom:0;justify-content:center;align-items:flex-start}.items.svelte-v96mw1{white-space:nowrap;position:relative}.items.svelte-v96mw1>*{display:none}.items.svelte-v96mw1>*.active{display:inline-block}", u(document.head, e)), S(this, t, z, N, a, ["delay", "transition", "items", "count", "controls", "next", "previous", "pause", "start"])
    }
    get next() {
      return this.$$.ctx.next
    }
    get previous() {
      return this.$$.ctx.previous
    }
    get pause() {
      return this.$$.ctx.pause
    }
    get start() {
      return this.$$.ctx.start
    }
  }
}]).default;