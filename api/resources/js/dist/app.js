"use strict";
exports.__esModule = true;
require("./bootstrap");
require("../css/app.css");
var vue_1 = require("vue");
var vue3_1 = require("@inertiajs/vue3");
var inertia_helpers_1 = require("laravel-vite-plugin/inertia-helpers");
var vue_m_1 = require("../../vendor/tightenco/ziggy/dist/vue.m");
var appName = import.meta.env.VITE_APP_NAME || 'Laravel';
/* import the fontawesome core */
var fontawesome_svg_core_1 = require("@fortawesome/fontawesome-svg-core");
/* import font awesome icon component */
var vue_fontawesome_1 = require("@fortawesome/vue-fontawesome");
/* import specific icons */
var free_solid_svg_icons_1 = require("@fortawesome/free-solid-svg-icons");
var free_brands_svg_icons_1 = require("@fortawesome/free-brands-svg-icons");
/* add icons to the library */
fontawesome_svg_core_1.library.add(free_solid_svg_icons_1.faCamera, free_solid_svg_icons_1.faTerminal, free_solid_svg_icons_1.faNewspaper, free_solid_svg_icons_1.faShareNodes, free_solid_svg_icons_1.faArrowRight, free_brands_svg_icons_1.faGithub);
vue3_1.createInertiaApp({
    title: function (title) { return title + " - " + appName; },
    resolve: function (name) { return inertia_helpers_1.resolvePageComponent("./Pages/" + name + ".vue", import.meta.glob('./Pages/**/*.vue')); },
    setup: function (_a) {
        var el = _a.el, App = _a.App, props = _a.props, plugin = _a.plugin;
        vue_1.createApp({ render: function () { return vue_1.h(App, props); } })
            .use(plugin)
            .use(vue_m_1.ZiggyVue, Ziggy)
            .component('font-awesome-icon', vue_fontawesome_1.FontAwesomeIcon)
            .mixin({ methods: { route: window.route } })
            .mount(el);
    },
    progress: {
        color: '#4B5563'
    }
});
