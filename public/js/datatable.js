/*!
 Select for DataTables 1.2.7
 2015-2018 SpryMedia Ltd - datatables.net/license/mit
*/
(function (e) {
    "function" === typeof define && define.amd ? define(["jquery", "datatables.net"], function (i) {
        return e(i, window, document)
    }) : "object" === typeof exports ? module.exports = function (i, l) {
        i || (i = window);
        if (!l || !l.fn.dataTable) l = require("datatables.net")(i, l).$;
        return e(l, i, i.document)
    } : e(jQuery, window, document)
})(function (e, i, l, h) {
    function u(a, c, b) {
        var d;
        d = function (b, c) {
            if (b > c) var d = c,
                c = b,
                b = d;
            var f = !1;
            return a.columns(":visible").indexes().filter(function (a) {
                a === b && (f = !0);
                return a === c ? (f = !1, !0) : f
            })
        };
        var f = function (b, c) {
            var d = a.rows({
                search: "applied"
            }).indexes();
            if (d.indexOf(b) > d.indexOf(c)) var f = c,
                c = b,
                b = f;
            var e = !1;
            return d.filter(function (a) {
                a === b && (e = !0);
                return a === c ? (e = !1, !0) : e
            })
        };
        !a.cells({
            selected: !0
        }).any() && !b ? (d = d(0, c.column), b = f(0, c.row)) : (d = d(b.column, c.column), b = f(b.row, c.row));
        b = a.cells(b, d).flatten();
        a.cells(c, {
            selected: !0
        }).any() ? a.cells(b).deselect() : a.cells(b).select()
    }

    function q(a) {
        var c = a.settings()[0]._select.selector;
        e(a.table().container()).off("mousedown.dtSelect", c).off("mouseup.dtSelect", c).off("click.dtSelect", c);
        e("body").off("click.dtSelect" + a.table().node().id)
    }

    function x(a) {
        var c = e(a.table().container()),
            b = a.settings()[0],
            d = b._select.selector,
            f;
        c.on("mousedown.dtSelect", d, function (b) {
            if (b.shiftKey || b.metaKey || b.ctrlKey) c.css("-moz-user-select", "none").one("selectstart.dtSelect", d, function () {
                return !1
            });
            i.getSelection && (f = i.getSelection())
        }).on("mouseup.dtSelect", d, function () {
            c.css("-moz-user-select", "")
        }).on("click.dtSelect", d, function (b) {
            var c = a.select.items();
            if (i.getSelection) {
                var d = i.getSelection();
                if ((!d.anchorNode || e(d.anchorNode).closest("table")[0] === a.table().node()) && d !== f) return
            }
            var d = a.settings()[0],
                g = a.settings()[0].oClasses.sWrapper.replace(/ /g, ".");
            if (e(b.target).closest("div." + g)[0] == a.table().container() && (g = a.cell(e(b.target).closest("td, th")), g.any())) {
                var h = e.Event("user-select.dt");
                j(a, h, [c, g, b]);
                h.isDefaultPrevented() || (h = g.index(), "row" === c ? (c = h.row, r(b, a, d, "row", c)) : "column" === c ? (c = g.index().column, r(b, a, d, "column", c)) : "cell" === c && (c = g.index(), r(b, a, d, "cell", c)), d._select_lastCell = h)
            }
        });
        e("body").on("click.dtSelect" + a.table().node().id, function (c) {
            b._select.blurable && !e(c.target).parents().filter(a.table().container()).length && (0 !== e(c.target).parents("html").length && !e(c.target).parents("div.DTE").length) && o(b, !0)
        })
    }

    function j(a, c, b, d) {
        if (!d || a.flatten().length) "string" === typeof c && (c += ".dt"), b.unshift(a), e(a.table().node()).trigger(c, b)
    }

    function y(a) {
        var c = a.settings()[0];
        if (c._select.info && c.aanFeatures.i && "api" !== a.select.style()) {
            var b = a.rows({
                    selected: !0
                }).flatten().length,
                d = a.columns({
                    selected: !0
                }).flatten().length,
                f = a.cells({
                    selected: !0
                }).flatten().length,
                k = function (b, c, d) {
                    b.append(e('<span class="select-item"/>').append(a.i18n("select." + c + "s", {
                        _: "%d " + c + "s selected",
                        "0": "",
                        1: "1 " + c + " selected"
                    }, d)))
                };
            e.each(c.aanFeatures.i, function (c, a) {
                var a = e(a),
                    g = e('<span class="select-info"/>');
                k(g, "row", b);
                k(g, "column", d);
                k(g, "cell", f);
                var h = a.children("span.select-info");
                h.length && h.remove();
                "" !== g.text() && a.append(g)
            })
        }
    }

    function z(a, c, b, d) {
        var f = a[c + "s"]({
                search: "applied"
            }).indexes(),
            d = e.inArray(d, f),
            k = e.inArray(b, f);
        if (!a[c + "s"]({
                selected: !0
            }).any() && -1 === d) f.splice(e.inArray(b, f) + 1, f.length);
        else {
            if (d > k) var g = k,
                k = d,
                d = g;
            f.splice(k + 1, f.length);
            f.splice(0, d)
        }
        a[c](b, {
            selected: !0
        }).any() ? (f.splice(e.inArray(b, f), 1), a[c + "s"](f).deselect()) : a[c + "s"](f).select()
    }

    function o(a, c) {
        if (c || "single" === a._select.style) {
            var b = new g.Api(a);
            b.rows({
                selected: !0
            }).deselect();
            b.columns({
                selected: !0
            }).deselect();
            b.cells({
                selected: !0
            }).deselect()
        }
    }

    function r(a, c, b, d, f) {
        var e = c.select.style(),
            g = c[d](f, {
                selected: !0
            }).any();
        "os" === e ? a.ctrlKey || a.metaKey ? c[d](f).select(!g) : a.shiftKey ? "cell" === d ? u(c, f, b._select_lastCell || null) : z(c, d, f, b._select_lastCell ? b._select_lastCell[d] : null) : (a = c[d + "s"]({
            selected: !0
        }), g && 1 === a.flatten().length ? c[d](f).deselect() : (a.deselect(), c[d](f).select())) : "multi+shift" == e ? a.shiftKey ? "cell" === d ? u(c, f, b._select_lastCell || null) : z(c, d, f, b._select_lastCell ? b._select_lastCell[d] : null) : c[d](f).select(!g) : c[d](f).select(!g)
    }

    function p(a, c) {
        return function (b) {
            return b.i18n("buttons." + a, c)
        }
    }

    function s(a) {
        a = a._eventNamespace;
        return "draw.dt.DT" + a + " select.dt.DT" + a + " deselect.dt.DT" + a
    }
    var g = e.fn.dataTable;
    g.select = {};
    g.select.version = "1.2.7";
    g.select.init = function (a) {
        var c = a.settings()[0],
            b = c.oInit.select,
            d = g.defaults.select,
            b = b === h ? d : b,
            d = "row",
            f = "api",
            k = !1,
            v = !0,
            w = "td, th",
            i = "selected",
            j = !1;
        c._select = {};
        if (!0 === b) f = "os", j = !0;
        else if ("string" === typeof b) f = b, j = !0;
        else if (e.isPlainObject(b) && (b.blurable !== h && (k = b.blurable), b.info !== h && (v = b.info), b.items !== h && (d = b.items), b.style !== h && (f = b.style, j = !0), b.selector !== h && (w = b.selector), b.className !== h)) i = b.className;
        a.select.selector(w);
        a.select.items(d);
        a.select.style(f);
        a.select.blurable(k);
        a.select.info(v);
        c._select.className = i;
        e.fn.dataTable.ext.order["select-checkbox"] = function (b, c) {
            return this.api().column(c, {
                order: "index"
            }).nodes().map(function (c) {
                return "row" === b._select.items ? e(c).parent().hasClass(b._select.className) : "cell" === b._select.items ? e(c).hasClass(b._select.className) : !1
            })
        };
        !j && e(a.table().node()).hasClass("selectable") && a.select.style("os")
    };
    e.each([{
        type: "row",
        prop: "aoData"
    }, {
        type: "column",
        prop: "aoColumns"
    }], function (a, c) {
        g.ext.selector[c.type].push(function (b, a, f) {
            var a = a.selected,
                e, g = [];
            if (!0 !== a && !1 !== a) return f;
            for (var h = 0, i = f.length; h < i; h++) e = b[c.prop][f[h]], (!0 === a && !0 === e._select_selected || !1 === a && !e._select_selected) && g.push(f[h]);
            return g
        })
    });
    g.ext.selector.cell.push(function (a, c, b) {
        var c = c.selected,
            d, f = [];
        if (c === h) return b;
        for (var e = 0, g = b.length; e < g; e++) d = a.aoData[b[e].row], (!0 === c && d._selected_cells && !0 === d._selected_cells[b[e].column] || !1 === c && (!d._selected_cells || !d._selected_cells[b[e].column])) && f.push(b[e]);
        return f
    });
    var m = g.Api.register,
        n = g.Api.registerPlural;
    m("select()", function () {
        return this.iterator("table", function (a) {
            g.select.init(new g.Api(a))
        })
    });
    m("select.blurable()", function (a) {
        return a === h ? this.context[0]._select.blurable : this.iterator("table", function (c) {
            c._select.blurable = a
        })
    });
    m("select.info()", function (a) {
        return y === h ? this.context[0]._select.info : this.iterator("table", function (c) {
            c._select.info = a
        })
    });
    m("select.items()", function (a) {
        return a === h ? this.context[0]._select.items : this.iterator("table", function (c) {
            c._select.items = a;
            j(new g.Api(c), "selectItems", [a])
        })
    });
    m("select.style()", function (a) {
        return a === h ? this.context[0]._select.style : this.iterator("table", function (c) {
            c._select.style = a;
            if (!c._select_init) {
                var b = new g.Api(c);
                c.aoRowCreatedCallback.push({
                    fn: function (b, a, d) {
                        a = c.aoData[d];
                        a._select_selected && e(b).addClass(c._select.className);
                        b = 0;
                        for (d = c.aoColumns.length; b < d; b++)(c.aoColumns[b]._select_selected || a._selected_cells && a._selected_cells[b]) && e(a.anCells[b]).addClass(c._select.className)
                    },
                    sName: "select-deferRender"
                });
                b.on("preXhr.dt.dtSelect", function () {
                    var a = b.rows({
                            selected: !0
                        }).ids(!0).filter(function (b) {
                            return b !== h
                        }),
                        c = b.cells({
                            selected: !0
                        }).eq(0).map(function (c) {
                            var a = b.row(c.row).id(!0);
                            return a ? {
                                row: a,
                                column: c.column
                            } : h
                        }).filter(function (b) {
                            return b !== h
                        });
                    b.one("draw.dt.dtSelect", function () {
                        b.rows(a).select();
                        c.any() && c.each(function (c) {
                            b.cells(c.row, c.column).select()
                        })
                    })
                });
                b.on("draw.dtSelect.dt select.dtSelect.dt deselect.dtSelect.dt info.dt", function () {
                    y(b)
                });
                b.on("destroy.dtSelect", function () {
                    q(b);
                    b.off(".dtSelect")
                })
            }
            var d = new g.Api(c);
            q(d);
            "api" !== a && x(d);
            j(new g.Api(c), "selectStyle", [a])
        })
    });
    m("select.selector()", function (a) {
        return a === h ? this.context[0]._select.selector : this.iterator("table", function (c) {
            q(new g.Api(c));
            c._select.selector = a;
            "api" !== c._select.style && x(new g.Api(c))
        })
    });
    n("rows().select()", "row().select()", function (a) {
        var c = this;
        if (!1 === a) return this.deselect();
        this.iterator("row", function (b, c) {
            o(b);
            b.aoData[c]._select_selected = !0;
            e(b.aoData[c].nTr).addClass(b._select.className)
        });
        this.iterator("table", function (b, a) {
            j(c, "select", ["row", c[a]], !0)
        });
        return this
    });
    n("columns().select()", "column().select()", function (a) {
        var c = this;
        if (!1 === a) return this.deselect();
        this.iterator("column", function (b, c) {
            o(b);
            b.aoColumns[c]._select_selected = !0;
            var a = (new g.Api(b)).column(c);
            e(a.header()).addClass(b._select.className);
            e(a.footer()).addClass(b._select.className);
            a.nodes().to$().addClass(b._select.className)
        });
        this.iterator("table", function (b, a) {
            j(c, "select", ["column", c[a]], !0)
        });
        return this
    });
    n("cells().select()", "cell().select()", function (a) {
        var c = this;
        if (!1 === a) return this.deselect();
        this.iterator("cell", function (b, c, a) {
            o(b);
            c = b.aoData[c];
            c._selected_cells === h && (c._selected_cells = []);
            c._selected_cells[a] = !0;
            c.anCells && e(c.anCells[a]).addClass(b._select.className)
        });
        this.iterator("table", function (b, a) {
            j(c, "select", ["cell", c[a]], !0)
        });
        return this
    });
    n("rows().deselect()", "row().deselect()", function () {
        var a = this;
        this.iterator("row", function (c, b) {
            c.aoData[b]._select_selected = !1;
            e(c.aoData[b].nTr).removeClass(c._select.className)
        });
        this.iterator("table", function (c, b) {
            j(a, "deselect", ["row", a[b]], !0)
        });
        return this
    });
    n("columns().deselect()", "column().deselect()", function () {
        var a = this;
        this.iterator("column", function (c, b) {
            c.aoColumns[b]._select_selected = !1;
            var a = new g.Api(c),
                f = a.column(b);
            e(f.header()).removeClass(c._select.className);
            e(f.footer()).removeClass(c._select.className);
            a.cells(null, b).indexes().each(function (b) {
                var a = c.aoData[b.row],
                    d = a._selected_cells;
                a.anCells && (!d || !d[b.column]) && e(a.anCells[b.column]).removeClass(c._select.className)
            })
        });
        this.iterator("table", function (c, b) {
            j(a, "deselect", ["column", a[b]], !0)
        });
        return this
    });
    n("cells().deselect()", "cell().deselect()", function () {
        var a = this;
        this.iterator("cell", function (a, b, d) {
            b = a.aoData[b];
            b._selected_cells[d] = !1;
            b.anCells && !a.aoColumns[d]._select_selected && e(b.anCells[d]).removeClass(a._select.className)
        });
        this.iterator("table", function (c, b) {
            j(a, "deselect", ["cell", a[b]], !0)
        });
        return this
    });
    var t = 0;
    e.extend(g.ext.buttons, {
        selected: {
            text: p("selected", "Selected"),
            className: "buttons-selected",
            limitTo: ["rows", "columns", "cells"],
            init: function (a, c, b) {
                var d = this;
                b._eventNamespace = ".select" + t++;
                a.on(s(b), function () {
                    d.enable(-1 !== e.inArray("rows", b.limitTo) && a.rows({
                        selected: !0
                    }).any() || -1 !== e.inArray("columns", b.limitTo) && a.columns({
                        selected: !0
                    }).any() || -1 !== e.inArray("cells", b.limitTo) && a.cells({
                        selected: !0
                    }).any() ? !0 : !1)
                });
                this.disable()
            },
            destroy: function (a, c, b) {
                a.off(b._eventNamespace)
            }
        },
        selectedSingle: {
            text: p("selectedSingle", "Selected single"),
            className: "buttons-selected-single",
            init: function (a, c, b) {
                var d = this;
                b._eventNamespace = ".select" + t++;
                a.on(s(b), function () {
                    var b = a.rows({
                        selected: !0
                    }).flatten().length + a.columns({
                        selected: !0
                    }).flatten().length + a.cells({
                        selected: !0
                    }).flatten().length;
                    d.enable(1 === b)
                });
                this.disable()
            },
            destroy: function (a, c, b) {
                a.off(b._eventNamespace)
            }
        },
        selectAll: {
            text: p("selectAll", "Select all"),
            className: "buttons-select-all",
            action: function () {
                this[this.select.items() + "s"]().select()
            }
        },
        selectNone: {
            text: p("selectNone", "Deselect all"),
            className: "buttons-select-none",
            action: function () {
                o(this.settings()[0], !0)
            },
            init: function (a, c, b) {
                var d = this;
                b._eventNamespace = ".select" + t++;
                a.on(s(b), function () {
                    var b = a.rows({
                        selected: !0
                    }).flatten().length + a.columns({
                        selected: !0
                    }).flatten().length + a.cells({
                        selected: !0
                    }).flatten().length;
                    d.enable(0 < b)
                });
                this.disable()
            },
            destroy: function (a, c, b) {
                a.off(b._eventNamespace)
            }
        }
    });
    e.each(["Row", "Column", "Cell"], function (a, c) {
        var b = c.toLowerCase();
        g.ext.buttons["select" + c + "s"] = {
            text: p("select" + c + "s", "Select " + b + "s"),
            className: "buttons-select-" + b + "s",
            action: function () {
                this.select.items(b)
            },
            init: function (a) {
                var c = this;
                a.on("selectItems.dt.DT", function (a, d, e) {
                    c.active(e === b)
                })
            }
        }
    });
    e(l).on("preInit.dt.dtSelect", function (a, c) {
        "dt" === a.namespace && g.select.init(new g.Api(c))
    });
    return g.select
});
