(function (n, t, i) {
    var u = i(n),
        f = i(t),
        r = (i.fancybox = function () {
            r.open.apply(this, arguments);
        }),
        e = !1,
        o = null;
    i.extend(r, {
        version: "2.0.4",
        defaults: {
            padding: 15,
            margin: 20,
            width: 800,
            height: 600,
            minWidth: 200,
            minHeight: 200,
            maxWidth: 9999,
            maxHeight: 9999,
            autoSize: !0,
            fitToView: !0,
            aspectRatio: !1,
            topRatio: 0.5,
            fixed:
                !i.browser.msie ||
                6 < i.browser.version ||
                !t.documentElement.hasOwnProperty("ontouchstart"),
            scrolling: "auto",
            wrapCSS: "fancybox-default",
            arrows: !0,
            closeBtn: !0,
            closeClick: !1,
            nextClick: !1,
            mouseWheel: !0,
            autoPlay: !1,
            playSpeed: 3e3,
            modal: !1,
            loop: !0,
            ajax: {},
            keys: {
                next: [13, 32, 34, 39, 40],
                prev: [8, 33, 37, 38],
                close: [27],
            },
            tpl: {
                wrap:
                    '<div class="fancybox-wrap"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div>',
                image: '<img class="fancybox-image" src="{href}" alt="" />',
                iframe:
                    '<iframe class="fancybox-iframe" name="fancybox-frame{rnd}" frameborder="0" hspace="0" ' +
                    (i.browser.msie ? 'allowtransparency="true""' : "") +
                    ' scrolling="{scrolling}" src="{href}"></iframe>',
                swf:
                    '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="wmode" value="transparent" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{href}" /><embed src="{href}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="100%" height="100%" wmode="transparent"></embed></object>',
                error:
                    '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
                closeBtn:
                    '<div title="Close" class="fancybox-item fancybox-close"></div>',
                next:
                    '<a title="Next" class="fancybox-item fancybox-next"><span></span></a>',
                prev:
                    '<a title="Previous" class="fancybox-item fancybox-prev"><span></span></a>',
            },
            openEffect: "fade",
            openSpeed: 250,
            openEasing: "swing",
            openOpacity: !0,
            openMethod: "zoomIn",
            closeEffect: "fade",
            closeSpeed: 250,
            closeEasing: "swing",
            closeOpacity: !0,
            closeMethod: "zoomOut",
            nextEffect: "elastic",
            nextSpeed: 300,
            nextEasing: "swing",
            nextMethod: "changeIn",
            prevEffect: "elastic",
            prevSpeed: 300,
            prevEasing: "swing",
            prevMethod: "changeOut",
            helpers: {
                overlay: {
                    speedIn: 0,
                    speedOut: 300,
                    opacity: 0.8,
                    css: { cursor: "pointer" },
                    closeClick: !0,
                },
                title: { type: "float" },
            },
        },
        group: {},
        opts: {},
        coming: null,
        current: null,
        isOpen: !1,
        isOpened: !1,
        wrap: null,
        outer: null,
        inner: null,
        player: { timer: null, isActive: !1 },
        ajaxLoad: null,
        imgPreload: null,
        transitions: {},
        helpers: {},
        open: function (n, t) {
            i.isArray(n) || (n = [n]);
            n.length &&
                (r.close(!0),
                (r.opts = i.extend(!0, {}, r.defaults, t)),
                (r.group = n),
                r._start(r.opts.index || 0));
        },
        cancel: function () {
            (r.coming && !1 === r.trigger("onCancel")) ||
                ((r.coming = null),
                r.hideLoading(),
                r.ajaxLoad && r.ajaxLoad.abort(),
                (r.ajaxLoad = null),
                !r.imgPreload) ||
                (r.imgPreload.onload = r.imgPreload.onabort = r.imgPreload.onerror = null);
        },
        close: function (n) {
            r.cancel();
            r.current &&
                !1 !== r.trigger("beforeClose") &&
                (r.unbindEvents(),
                !r.isOpen || (n && !0 === n[0])
                    ? (i(".fancybox-wrap").stop().trigger("onReset").remove(),
                      r._afterZoomOut())
                    : ((r.isOpen = r.isOpened = !1),
                      i(".fancybox-item").remove(),
                      r.wrap.stop(!0).removeClass("fancybox-opened"),
                      r.inner.css("overflow", "hidden"),
                      r.transitions[r.current.closeMethod]()));
        },
        play: function (n) {
            var t = function () {
                    clearTimeout(r.player.timer);
                },
                u = function () {
                    t();
                    r.current &&
                        r.player.isActive &&
                        (r.player.timer = setTimeout(
                            r.next,
                            r.current.playSpeed
                        ));
                },
                f = function () {
                    t();
                    i("body").unbind(".player");
                    r.player.isActive = !1;
                    r.trigger("onPlayEnd");
                };
            r.player.isActive || (n && !1 === n[0])
                ? f()
                : r.current &&
                  (r.current.loop || r.current.index < r.group.length - 1) &&
                  ((r.player.isActive = !0),
                  i("body").bind({
                      "afterShow.player onUpdate.player": u,
                      "onCancel.player beforeClose.player": f,
                      "beforeLoad.player": t,
                  }),
                  u(),
                  r.trigger("onPlayStart"));
        },
        next: function () {
            r.current && r.jumpto(r.current.index + 1);
        },
        prev: function () {
            r.current && r.jumpto(r.current.index - 1);
        },
        jumpto: function (n) {
            r.current &&
                ((n = parseInt(n, 10)),
                1 < r.group.length &&
                    r.current.loop &&
                    (n >= r.group.length
                        ? (n = 0)
                        : 0 > n && (n = r.group.length - 1)),
                "undefined" != typeof r.group[n] && (r.cancel(), r._start(n)));
        },
        reposition: function (n) {
            r.isOpen && r.wrap.css(r._getPosition(n));
        },
        update: function () {
            r.isOpen &&
                (e ||
                    (o = setInterval(function () {
                        e &&
                            ((e = !1), clearTimeout(o), r.current) &&
                            (r.current.autoSize &&
                                (r.inner.height("auto"),
                                (r.current.height = r.inner.height())),
                            r._setDimension(),
                            r.current.canGrow && r.inner.height("auto"),
                            r.reposition(),
                            r.trigger("onUpdate"));
                    }, 100)),
                (e = !0));
        },
        toggle: function () {
            r.isOpen &&
                ((r.current.fitToView = !r.current.fitToView), r.update());
        },
        hideLoading: function () {
            i("#fancybox-loading").remove();
        },
        showLoading: function () {
            r.hideLoading();
            i('<div id="fancybox-loading"></div>')
                .click(r.cancel)
                .appendTo("form");
        },
        getViewport: function () {
            return {
                x: u.scrollLeft(),
                y: u.scrollTop(),
                w: u.width(),
                h: u.height(),
            };
        },
        unbindEvents: function () {
            r.wrap && r.wrap.unbind(".fb");
            f.unbind(".fb");
            u.unbind(".fb");
        },
        bindEvents: function () {
            var t = r.current,
                n = t.keys;
            t &&
                (u.bind("resize.fb, orientationchange.fb", r.update),
                n &&
                    f.bind("keydown.fb", function (t) {
                        var u;
                        t.ctrlKey ||
                            t.altKey ||
                            t.shiftKey ||
                            t.metaKey ||
                            !(
                                0 >
                                i.inArray(t.target.tagName.toLowerCase(), [
                                    "input",
                                    "textarea",
                                    "select",
                                    "button",
                                ])
                            ) ||
                            ((u = t.keyCode),
                            -1 < i.inArray(u, n.close)
                                ? (r.close(), t.preventDefault())
                                : -1 < i.inArray(u, n.next)
                                ? (r.next(), t.preventDefault())
                                : -1 < i.inArray(u, n.prev) &&
                                  (r.prev(), t.preventDefault()));
                    }),
                i.fn.mousewheel &&
                    t.mouseWheel &&
                    1 < r.group.length &&
                    r.wrap.bind("mousewheel.fb", function (n, t) {
                        var u = i(n.target).get(0);
                        (0 === u.clientHeight ||
                            u.scrollHeight === u.clientHeight) &&
                            (n.preventDefault(), r[0 < t ? "prev" : "next"]());
                    }));
        },
        trigger: function (n) {
            var u,
                t =
                    r[
                        -1 <
                        i.inArray(n, ["onCancel", "beforeLoad", "afterLoad"])
                            ? "coming"
                            : "current"
                    ];
            if (t) {
                if (
                    (i.isFunction(t[n]) &&
                        (u = t[n].apply(
                            t,
                            Array.prototype.slice.call(arguments, 1)
                        )),
                    !1 === u)
                )
                    return !1;
                t.helpers &&
                    i.each(t.helpers, function (u, f) {
                        f &&
                            "undefined" != typeof r.helpers[u] &&
                            i.isFunction(r.helpers[u][n]) &&
                            r.helpers[u][n](f, t);
                    });
                i.event.trigger(n + ".fb");
            }
        },
        isImage: function (n) {
            return n && n.match(/\.(jpg|gif|png|bmp|jpeg)(.*)?$/i);
        },
        isSWF: function (n) {
            return n && n.match(/\.(swf)(.*)?$/i);
        },
        _start: function (n) {
            var t = {},
                f = r.group[n] || null,
                e,
                u,
                o;
            "object" == typeof f &&
                (f.nodeType || f instanceof i) &&
                ((e = !0), i.metadata && (t = i(f).metadata()));
            t = i.extend(
                !0,
                {},
                r.opts,
                { index: n, element: f },
                i.isPlainObject(f) ? f : t
            );
            i.each(["href", "title", "content", "type"], function (n, u) {
                t[u] = r.opts[u] || (e && i(f).attr(u)) || t[u] || null;
            });
            "number" == typeof t.margin &&
                (t.margin = [t.margin, t.margin, t.margin, t.margin]);
            t.modal &&
                i.extend(!0, t, {
                    closeBtn: !1,
                    closeClick: !1,
                    nextClick: !1,
                    arrows: !1,
                    mouseWheel: !1,
                    keys: null,
                    helpers: {
                        overlay: { css: { cursor: "auto" }, closeClick: !1 },
                    },
                });
            r.coming = t;
            !1 === r.trigger("beforeLoad")
                ? (r.coming = null)
                : ((u = t.type),
                  (n = t.href),
                  u ||
                      (e &&
                          ((o = i(f).data("fancybox-type")),
                          !o &&
                              f.className &&
                              (u = (o = f.className.match(/fancybox\.(\w+)/))
                                  ? o[1]
                                  : null)),
                      !u &&
                          n &&
                          (r.isImage(n)
                              ? (u = "image")
                              : r.isSWF(n)
                              ? (u = "swf")
                              : n.match(/^#/) && (u = "inline")),
                      u || (u = e ? "inline" : "html"),
                      (t.type = u)),
                  "inline" === u || "html" === u
                      ? ((t.content =
                            t.content || ("inline" === u && n ? i(n) : f)),
                        t.content.length || (u = null))
                      : ((t.href = n || f), t.href || (u = null)),
                  (t.group = r.group),
                  "image" === u
                      ? r._loadImage()
                      : "ajax" === u
                      ? r._loadAjax()
                      : u
                      ? r._afterLoad()
                      : r._error("type"));
        },
        _error: function (n) {
            i.extend(r.coming, {
                type: "html",
                autoSize: !0,
                minHeight: "0",
                hasError: n,
                content: r.coming.tpl.error,
            });
            r._afterLoad();
        },
        _loadImage: function () {
            r.imgPreload = new Image();
            r.imgPreload.onload = function () {
                this.onload = this.onerror = null;
                r.coming.width = this.width;
                r.coming.height = this.height;
                r._afterLoad();
            };
            r.imgPreload.onerror = function () {
                this.onload = this.onerror = null;
                r._error("image");
            };
            r.imgPreload.src = r.coming.href;
            r.imgPreload.complete || r.showLoading();
        },
        _loadAjax: function () {
            r.showLoading();
            r.ajaxLoad = i.ajax(
                i.extend({}, r.coming.ajax, {
                    url: r.coming.href,
                    error: function (n, t) {
                        "abort" !== t ? r._error("ajax", n) : r.hideLoading();
                    },
                    success: function (n, t) {
                        "success" === t &&
                            ((r.coming.content = n), r._afterLoad());
                    },
                })
            );
        },
        _preload: function () {
            var n = r.group,
                t = r.current.index,
                u = function (n) {
                    n && r.isImage(n) && (new Image().src = n);
                };
            1 < n.length &&
                (u(i(n[t + 1] || n[0]).attr("href")),
                u(i(n[t - 1] || n[n.length - 1]).attr("href")));
        },
        _afterLoad: function () {
            r.hideLoading();
            !r.coming || !1 === r.trigger("afterLoad", r.current)
                ? (r.coming = !1)
                : (r.isOpened
                      ? (i(".fancybox-item").remove(),
                        r.wrap.stop(!0).removeClass("fancybox-opened"),
                        r.inner.css("overflow", "hidden"),
                        r.transitions[r.current.prevMethod]())
                      : (i(".fancybox-wrap").stop().trigger("onReset").remove(),
                        r.trigger("afterClose")),
                  r.unbindEvents(),
                  (r.isOpen = !1),
                  (r.current = r.coming),
                  (r.coming = !1),
                  (r.wrap = i(r.current.tpl.wrap)
                      .addClass("fancybox-tmp " + r.current.wrapCSS)
                      .appendTo("form")),
                  (r.outer = i(".fancybox-outer", r.wrap).css(
                      "padding",
                      r.current.padding + "px"
                  )),
                  (r.inner = i(".fancybox-inner", r.wrap)),
                  r._setContent(),
                  r.trigger("beforeShow"),
                  r._setDimension(),
                  r.wrap.hide().removeClass("fancybox-tmp"),
                  r.bindEvents(),
                  r._preload(),
                  r.transitions[
                      r.isOpened ? r.current.nextMethod : r.current.openMethod
                  ]());
        },
        _setContent: function () {
            var t,
                u,
                n = r.current,
                f = n.type;
            switch (f) {
                case "inline":
                case "ajax":
                case "html":
                    t = n.content;
                    "inline" === f &&
                        t instanceof i &&
                        ((t = t.show().detach()),
                        t.parent().hasClass("fancybox-inner") &&
                            t
                                .parents(".fancybox-wrap")
                                .trigger("onReset")
                                .remove(),
                        i(r.wrap).bind("onReset", function () {
                            t.appendTo("form").hide();
                        }));
                    n.autoSize &&
                        ((u = i('<div class="fancybox-tmp"></div>')
                            .appendTo(i("form"))
                            .append(t)),
                        (n.width = u.outerWidth()),
                        (n.height = u.outerHeight(!0)),
                        (t = u.contents().detach()),
                        u.remove());
                    break;
                case "image":
                    t = n.tpl.image.replace("{href}", n.href);
                    n.aspectRatio = !0;
                    break;
                case "swf":
                    t = n.tpl.swf
                        .replace(/\{width\}/g, n.width)
                        .replace(/\{height\}/g, n.height)
                        .replace(/\{href\}/g, n.href);
                    break;
                case "iframe":
                    t = n.tpl.iframe
                        .replace("{href}", n.href)
                        .replace("{scrolling}", n.scrolling)
                        .replace("{rnd}", new Date().getTime());
            }
            -1 < i.inArray(f, ["image", "swf", "iframe"]) &&
                ((n.autoSize = !1), (n.scrolling = !1));
            r.inner.append(t);
        },
        _setDimension: function () {
            var l = r.wrap,
                p = r.outer,
                y = r.inner,
                u = r.current,
                a = r.getViewport(),
                e = u.margin,
                f = 2 * u.padding,
                n = u.width + f,
                t = u.height + f,
                v = u.width / u.height,
                h = u.maxWidth,
                o = u.maxHeight,
                s = u.minWidth,
                c = u.minHeight;
            if (
                ((a.w -= e[1] + e[3]),
                (a.h -= e[0] + e[2]),
                -1 < n.toString().indexOf("%") &&
                    (n = (a.w * parseFloat(n)) / 100),
                -1 < t.toString().indexOf("%") &&
                    (t = (a.h * parseFloat(t)) / 100),
                u.fitToView && ((h = Math.min(a.w, h)), (o = Math.min(a.h, o))),
                (s = Math.min(n, s)),
                (c = Math.min(n, c)),
                (h = Math.max(s, h)),
                (o = Math.max(c, o)),
                u.aspectRatio
                    ? (n > h && ((n = h), (t = (n - f) / v + f)),
                      t > o && ((t = o), (n = (t - f) * v + f)),
                      n < s && ((n = s), (t = (n - f) / v + f)),
                      t < c && ((t = c), (n = (t - f) * v + f)))
                    : ((n = Math.max(s, Math.min(n, h))),
                      (t = Math.max(c, Math.min(t, o)))),
                (n = Math.round(n)),
                (t = Math.round(t)),
                i(l.add(p).add(y)).width("auto").height("auto"),
                y.width(n - f).height(t - f),
                l.width(n),
                (e = l.height()),
                n > h || e > o)
            )
                for (; (n > h || e > o) && n > s && e > c; )
                    (t -= 10),
                        u.aspectRatio
                            ? ((n = Math.round((t - f) * v + f)),
                              n < s && ((n = s), (t = (n - f) / v + f)))
                            : (n -= 10),
                        y.width(n - f).height(t - f),
                        l.width(n),
                        (e = l.height());
            u.dim = { width: n, height: e };
            u.canGrow = u.autoSize && t > c && t < o;
            u.canShrink = !1;
            u.canExpand = !1;
            n - f < u.width || t - f < u.height
                ? (u.canExpand = !0)
                : (n > a.w || e > a.h) && n > s && t > c && (u.canShrink = !0);
            l = e - f;
            r.innerSpace = l - y.height();
            r.outerSpace = l - p.height();
        },
        _getPosition: function (n) {
            var f = r.current,
                u = r.getViewport(),
                t = f.margin,
                e = r.wrap.width() + t[1] + t[3],
                o = r.wrap.height() + t[0] + t[2],
                i = { position: "absolute", top: t[0] + u.y, left: t[3] + u.x };
            return (
                f.fixed &&
                    (!n || !1 === n[0]) &&
                    o <= u.h &&
                    e <= u.w &&
                    (i = { position: "fixed", top: t[0], left: t[3] }),
                (i.top =
                    Math.ceil(Math.max(i.top, i.top + (u.h - o) * f.topRatio)) +
                    "px"),
                (i.left =
                    Math.ceil(Math.max(i.left, i.left + 0.5 * (u.w - e))) +
                    "px"),
                i
            );
        },
        _afterZoomIn: function () {
            var n = r.current;
            r.isOpen = r.isOpened = !0;
            r.wrap.addClass("fancybox-opened").css("overflow", "visible");
            r.update();
            r.inner.css(
                "overflow",
                "auto" === n.scrolling
                    ? "auto"
                    : "yes" === n.scrolling
                    ? "scroll"
                    : "hidden"
            );
            (n.closeClick || n.nextClick) &&
                r.inner
                    .css("cursor", "pointer")
                    .bind("click.fb", n.nextClick ? r.next : r.close);
            n.closeBtn &&
                i(n.tpl.closeBtn).appendTo(r.wrap).bind("click.fb", r.close);
            n.arrows &&
                1 < r.group.length &&
                ((n.loop || 0 < n.index) &&
                    i(n.tpl.prev).appendTo(r.wrap).bind("click.fb", r.prev),
                (n.loop || n.index < r.group.length - 1) &&
                    i(n.tpl.next).appendTo(r.wrap).bind("click.fb", r.next));
            r.trigger("afterShow");
            r.opts.autoPlay &&
                !r.player.isActive &&
                ((r.opts.autoPlay = !1), r.play());
        },
        _afterZoomOut: function () {
            r.trigger("afterClose");
            r.wrap.trigger("onReset").remove();
            i.extend(r, {
                group: {},
                opts: {},
                current: null,
                isOpened: !1,
                isOpen: !1,
                wrap: null,
                outer: null,
                inner: null,
            });
        },
    });
    r.transitions = {
        getOrigPosition: function () {
            var n = r.current.element,
                t = {},
                f = 50,
                e = 50,
                u;
            return (
                n && n.nodeName && i(n).is(":visible")
                    ? ((u = i(n).find("img:first")),
                      u.length
                          ? ((t = u.offset()),
                            (f = u.outerWidth()),
                            (e = u.outerHeight()))
                          : (t = i(n).offset()))
                    : ((n = r.getViewport()),
                      (t.top = n.y + 0.5 * (n.h - e)),
                      (t.left = n.x + 0.5 * (n.w - f))),
                {
                    top: Math.ceil(t.top) + "px",
                    left: Math.ceil(t.left) + "px",
                    width: Math.ceil(f) + "px",
                    height: Math.ceil(e) + "px",
                }
            );
        },
        step: function (n, t) {
            var i, u, f;
            ("width" === t.prop || "height" === t.prop) &&
                ((u = f = Math.ceil(n - 2 * r.current.padding)),
                "height" === t.prop &&
                    ((i = (n - t.start) / (t.end - t.start)),
                    t.start > t.end && (i = 1 - i),
                    (u -= r.innerSpace * i),
                    (f -= r.outerSpace * i)),
                r.inner[t.prop](u),
                r.outer[t.prop](f));
        },
        zoomIn: function () {
            var u = r.wrap,
                n = r.current,
                t,
                f;
            t = n.dim;
            "elastic" === n.openEffect
                ? ((f = i.extend({}, t, r._getPosition(!0))),
                  delete f.position,
                  (t = this.getOrigPosition()),
                  n.openOpacity && ((t.opacity = 0), (f.opacity = 1)),
                  u
                      .css(t)
                      .show()
                      .animate(f, {
                          duration: n.openSpeed,
                          easing: n.openEasing,
                          step: this.step,
                          complete: r._afterZoomIn,
                      }))
                : (u.css(i.extend({}, t, r._getPosition())),
                  "fade" === n.openEffect
                      ? u.fadeIn(n.openSpeed, r._afterZoomIn)
                      : (u.show(), r._afterZoomIn()));
        },
        zoomOut: function () {
            var t = r.wrap,
                n = r.current,
                i;
            "elastic" === n.closeEffect
                ? ("fixed" === t.css("position") && t.css(r._getPosition(!0)),
                  (i = this.getOrigPosition()),
                  n.closeOpacity && (i.opacity = 0),
                  t.animate(i, {
                      duration: n.closeSpeed,
                      easing: n.closeEasing,
                      step: this.step,
                      complete: r._afterZoomOut,
                  }))
                : t.fadeOut(
                      "fade" === n.closeEffect ? n.closeSpeed : 0,
                      r._afterZoomOut
                  );
        },
        changeIn: function () {
            var t = r.wrap,
                i = r.current,
                n;
            "elastic" === i.nextEffect
                ? ((n = r._getPosition(!0)),
                  (n.opacity = 0),
                  (n.top = parseInt(n.top, 10) - 200 + "px"),
                  t
                      .css(n)
                      .show()
                      .animate(
                          { opacity: 1, top: "+=200px" },
                          { duration: i.nextSpeed, complete: r._afterZoomIn }
                      ))
                : (t.css(r._getPosition()),
                  "fade" === i.nextEffect
                      ? t.hide().fadeIn(i.nextSpeed, r._afterZoomIn)
                      : (t.show(), r._afterZoomIn()));
        },
        changeOut: function () {
            var t = r.wrap,
                n = r.current,
                u = function () {
                    i(this).trigger("onReset").remove();
                };
            t.removeClass("fancybox-opened");
            "elastic" === n.prevEffect
                ? t.animate(
                      { opacity: 0, top: "+=200px" },
                      { duration: n.prevSpeed, complete: u }
                  )
                : t.fadeOut("fade" === n.prevEffect ? n.prevSpeed : 0, u);
        },
    };
    r.helpers.overlay = {
        overlay: null,
        update: function () {
            var n, r;
            this.overlay.width(0).height(0);
            i.browser.msie
                ? ((n = Math.max(
                      t.documentElement.scrollWidth,
                      t.body.scrollWidth
                  )),
                  (r = Math.max(
                      t.documentElement.offsetWidth,
                      t.body.offsetWidth
                  )),
                  (n = n < r ? u.width() : n))
                : (n = f.width());
            this.overlay.width(n).height(f.height());
        },
        beforeShow: function (n) {
            this.overlay ||
                ((this.overlay = i('<div id="fancybox-overlay"></div>')
                    .css(n.css || { background: "black" })
                    .appendTo("form")),
                this.update(),
                n.closeClick && this.overlay.bind("click.fb", r.close),
                u.bind("resize.fb", i.proxy(this.update, this)),
                this.overlay.fadeTo(n.speedIn || "fast", n.opacity || 1));
        },
        onUpdate: function () {
            this.update();
        },
        afterClose: function (n) {
            this.overlay &&
                this.overlay.fadeOut(n.speedOut || "fast", function () {
                    i(this).remove();
                });
            this.overlay = null;
        },
    };
    r.helpers.title = {
        beforeShow: function (n) {
            var t;
            (t = r.current.title) &&
                ((t = i(
                    '<div class="fancybox-title fancybox-title-' +
                        n.type +
                        '-wrap">' +
                        t +
                        "</div>"
                ).appendTo("form")),
                "float" === n.type &&
                    (t.width(t.width()),
                    t.wrapInner('<span class="child"></span>'),
                    (r.current.margin[2] += Math.abs(
                        parseInt(t.css("margin-bottom"), 10)
                    ))),
                t.appendTo(
                    "over" === n.type
                        ? r.inner
                        : "outside" === n.type
                        ? r.wrap
                        : r.outer
                ));
        },
    };
    i.fn.fancybox = function (n) {
        function e(n) {
            var e = [],
                f,
                o = this.rel;
            n.ctrlKey ||
                n.altKey ||
                n.shiftKey ||
                n.metaKey ||
                (n.preventDefault(),
                (n = i(this).data("fancybox-group")),
                "undefined" != typeof n
                    ? (f = n ? "data-fancybox-group" : !1)
                    : o &&
                      "" !== o &&
                      "nofollow" !== o &&
                      ((n = o), (f = "rel")),
                f &&
                    (e = t.length
                        ? i(t).filter("[" + f + '="' + n + '"]')
                        : i("[" + f + '="' + n + '"]')),
                e.length
                    ? ((u.index = e.index(this)), r.open(e.get(), u))
                    : r.open(this, u));
        }
        var u = n || {},
            t = this.selector || "";
        return (
            t
                ? f
                      .undelegate(t, "click.fb-start")
                      .delegate(t, "click.fb-start", e)
                : i(this).unbind("click.fb-start").bind("click.fb-start", e),
            this
        );
    };
})(window, document, jQuery);
