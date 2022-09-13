import "./bootstrap";
import "../css/remixicon.css";
import "../css/app.css";
import "../css/default.css";

import { createApp } from "vue";
import router from "./vue/router/index.js";
import App from "./vue/App.vue";

import { createI18n } from "vue-i18n";
import { directive } from "vue3-click-away";

import fr from "./vue/lang/fr.json";
import en from "./vue/lang/en.json";

const words = {
    en: en,
    fr: fr,
};

const i18n = new createI18n({
    locale: localStorage.getItem("locale") == "en" ? "en" : "fr",
    fallbackLocale: localStorage.getItem("locale") == "en" ? "en" : "fr",
    messages: words,
});

createApp(App)
    .use(router)
    .use(i18n)
    .directive("click-away", directive)
    .mount("#app");
