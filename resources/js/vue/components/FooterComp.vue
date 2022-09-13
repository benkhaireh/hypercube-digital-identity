<template>
    <footer class="px-6 py-8 bg-gray-800 shadow-lg">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0 max-w-xs">
                <a href="/" class="flex items-center">
                    <img
                        src="/imgs/brand.png"
                        class="mr-3 h-12"
                        alt="Safe Tech Logo"
                    />
                </a>
                <p class="text-gray-400 text-sm mt-4">
                    {{ $t('footer.description') }}
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3">
                <div class="mb-6">
                    <h2
                        class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
                    >
                        {{ $t('footer.resources.title') }}
                    </h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline focus:underline"
                                >{{ $t('footer.resources.quotation') }}</a
                            >
                        </li>
                        <li class="mb-4">
                            <a
                                href="/crowdfunding"
                                class="hover:underline focus:underline"
                                >{{ $t('footer.resources.portfolio') }}</a
                            >
                        </li>
                        <li>
                            <a
                                href="/ecommerce"
                                class="hover:underline focus:underline"
                                >{{ $t('footer.resources.contact') }}</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="mb-6">
                    <h2
                        class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
                    >
                    {{ $t('footer.partners') }}
                    </h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a
                                href="https://www.fortinet.com/"
                                class="hover:underline focus:underline"
                                >Fortinet</a
                            >
                        </li>
                        <li class="mb-4">
                            <a
                                href="https://www.xerox.com/"
                                class="hover:underline focus:underline"
                                >Xerox</a
                            >
                        </li>
                        <li>
                            <a
                                href="https://www.montran.com/"
                                class="hover:underline focus:underline"
                                >Montran</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="mb-6">
                    <h2
                        class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
                    >
                    {{ $t('footer.intouch') }}
                    </h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4 flex items-center">
                            <i class="ri-phone-line mr-2"></i
                            ><a
                                href="tel:+25321352929"
                                class="hover:underline focus:underline"
                                >+253 21 352 929</a
                            >
                        </li>
                        <li class="mb-4 flex items-center">
                            <i class="ri-at-line mr-2"></i
                            ><a
                                href="mailto:contact@hypercube.dj"
                                class="hover:underline focus:underline"
                            >
                                contact@hypercube.dj</a
                            >
                        </li>
                        <li class="flex items-center">
                            <i class="ri-map-pin-line mr-2"></i
                            ><span>Cite aviation, Djibouti</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-500 sm:mx-auto lg:my-8" />
        <div class="flex items-center justify-between">
            <span class="text-sm text-gray-500 sm:text-center"
                >&copy; 2022 HYPERCUBE</span
            >
            <div class="flex space-x-6 sm:justify-center text-sm">
                <a
                    href="#"
                    @click="setLocale('en', 'English')"
                    class="text-gray-500 hover:underline focus:underline"
                    >English</a
                >
                <a
                    href="#"
                    @click="setLocale('fr', 'Français')"
                    class="text-gray-500 hover:underline focus:underline"
                    >Français</a
                >
            </div>
        </div>
    </footer>
</template>
<script>
export default {
    name: "FooterBar",
    methods: {
        setLocale: function (lang, current_lang) {
            if (lang == "en") return;
            this.$i18n.locale = lang;
            this.current_lang = current_lang;
            this.language = false;
            localStorage.setItem("locale", lang);
        },
    },
};
</script>
