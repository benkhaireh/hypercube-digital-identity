<template>
    <nav
        class="relative flex items-center justify-between bg-transparent py-6 px-4 md:px-8"
    >
        <a href="#" class="">
            <img src="imgs/brand.png" alt="" class="block w-full h-8 lg:h-10" />
        </a>
        <ul
            class="hidden flex-col p-4 mt-16 w-72 bg-gray-50 rounded-lg border border-gray-100 md:flex md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white"
        >
            <li>
                <router-link
                    to="home"
                    class="block py-2 px-4 rounded-lg whitespace-nowrap text-md text-center"
                    :class="
                        currentPage == 'home'
                            ? 'bg-brand-primary text-white'
                            : 'text-gray-500 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-brand-primary'
                    "
                    aria-current="page"
                    >{{ $t("navbar.home") }}</router-link
                >
            </li>
            <li>
                <router-link
                    to="projects"
                    class="block py-2 px-4 rounded-lg whitespace-nowrap text-md text-center"
                    :class="
                        currentPage == 'projects'
                            ? 'bg-brand-primary text-white'
                            : 'text-gray-500 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-brand-primary'
                    "
                    >{{ $t("navbar.projects") }}</router-link
                >
            </li>
            <li>
                <router-link
                    to="contact"
                    class="block py-2 px-4 rounded-lg whitespace-nowrap text-md text-center"
                    :class="
                        currentPage == 'contact'
                            ? 'bg-brand-primary text-white'
                            : 'text-gray-500 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-brand-primary'
                    "
                    >{{ $t("navbar.contact") }}</router-link
                >
            </li>
        </ul>
        <div class="inline-block relative">
            <button
                type="button"
                class="flex items-center justify-between w-26 py-1 border border-gray-300 bg-transparent text-gray-500 rounded-md hover:bg-gray-200"
                @click="language = !language"
            >
                <i class="ri-global-line ml-4"></i>
                <span class="pl-3 text-sm">{{ current_lang }}</span>
                <i class="ri-arrow-down-s-line lg:text-xl ml-2 mr-2"></i>
            </button>
            <div
                class="absolute top-0 right-0 left-0 mt-12 bg-gray-100 border shadow-lg rounded-md"
                v-if="language"
                v-click-away="hideLanguage"
            >
                <a
                    href="#"
                    class="block px-4 py-2 hover:bg-gray-100 rounded-t-md"
                    :class="
                        this.$i18n.locale == 'fr' ? 'bg-gray-100' : 'bg-white'
                    "
                    @click="setLocale('fr', 'Français')"
                    >Français</a
                >
                <a
                    href="#"
                    class="block px-4 py-2 hover:bg-gray-100 rounded-b-md"
                    :class="
                        this.$i18n.locale == 'en' ? 'bg-gray-100' : 'bg-white'
                    "
                    @click="setLocale('en', 'English')"
                    >English</a
                >
            </div>
        </div>
        <div class="relative md:hidden">
            <ul
                class="flex-col p-4 mt-12 w-72 bg-gray-50 rounded-lg border border-gray-100 md:hidden"
                :class="
                    navitems == true ? 'absolute top-0 right-4 flex' : 'hidden'
                "
            >
                <li>
                    <router-link
                        to="home"
                        class="block py-2 pr-4 pl-3 rounded whitespace-nowrap"
                        :class="
                            currentPage == 'home'
                                ? 'bg-brand-primary text-white'
                                : 'text-gray-500 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-brand-primary'
                        "
                        aria-current="page"
                        >{{ $t("navbar.home") }}</router-link
                    >
                </li>
                <li>
                    <router-link
                        to="projects"
                        class="block py-2 pr-4 pl-3 rounded whitespace-nowrap"
                        :class="
                            currentPage == 'projects'
                                ? 'bg-brand-primary text-white'
                                : 'text-gray-500 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-brand-primary'
                        "
                        >{{ $t("navbar.projects") }}</router-link
                    >
                </li>
                <li>
                    <router-link
                        to="contact"
                        class="block py-2 pr-4 pl-3 rounded whitespace-nowrap"
                        :class="
                            currentPage == 'contact'
                                ? 'bg-brand-primary text-white'
                                : 'text-gray-500 rounded hover:bg-gray-200 md:hover:bg-transparent md:hover:text-brand-primary'
                        "
                        >{{ $t("navbar.contact") }}</router-link
                    >
                </li>
            </ul>
            <button
                type="button"
                class="flex md:hidden items-center font-bold text-brand-primary hover:text-brand-primary-dark"
                @click="navitems = !navitems"
            >
                <i class="ri-apps-fill text-2xl"></i>
            </button>
        </div>
    </nav>
</template>
<script>
export default {
    name: "navbar",
    data() {
        return {
            currentPage: null,
            language: false,
            current_lang: this.$i18n.locale == "fr" ? "Français" : "English",
            navitems: false,
        };
    },
    methods: {
        hideLanguage: function () {
            this.language = false;
        },
        setLocale: function (lang, current_lang) {
            this.$i18n.locale = lang;
            this.current_lang = current_lang;
            this.language = false;
            localStorage.setItem("locale", lang);
        },
    },
    mounted() {
        this.currentPage = this.$route.name;
    },
    computed: {
        currentPage: function () {
            return this.$route.name;
        },
    },
};
</script>
