<template>
    <footer class="px-6 py-8 bg-gray-800 shadow-lg">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0 max-w-xs">
                <a href="/" class="flex items-center">
                    <img
                        src="/imgs/brand.png"
                        class="mr-3 h-12 lg:h-16"
                        alt="Safe Tech Logo"
                    />
                </a>
                <p class="text-gray-400 mt-4">
                    {{ $t("footer.description") }}
                </p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3">
                <div class="mb-6">
                    <h2
                        class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
                    >
                        {{ $t("footer.resources.title") }}
                    </h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <button
                                type="button"
                                class="hover:underline focus:underline"
                                @click="showRequest"
                            >
                                {{ $t("footer.resources.quotation") }}
                            </button>
                        </li>
                        <li class="mb-4">
                            <a
                                href="/projects"
                                class="hover:underline focus:underline"
                                >{{ $t("footer.resources.portfolio") }}</a
                            >
                        </li>
                        <li class="mb-4">
                            <a
                                href="/aboutus"
                                class="hover:underline focus:underline"
                                >{{ $t("footer.resources.about") }}</a
                            >
                        </li>
                        <li>
                            <a
                                href="/contactus"
                                class="hover:underline focus:underline"
                                >{{ $t("footer.resources.contact") }}</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="mb-6">
                    <h2
                        class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
                    >
                        {{ $t("footer.partners") }}
                    </h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a
                                href="https://www.xerox.com/"
                                class="hover:underline focus:underline"
                                >Xerox</a
                            >
                        </li>
                        <li class="mb-4">
                            <a
                                href="https://www.fortinet.com/"
                                class="hover:underline focus:underline"
                                >Fortinet</a
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
                        {{ $t("footer.intouch") }}
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
            <span class="text-gray-500 sm:text-center"
                >&copy; 2022 HYPERCUBE, Together Beyond The Limits</span
            >
            <div class="flex space-x-6 sm:justify-center">
                <button
                    type="button"
                    @click="setLocale('en', 'English')"
                    class="text-gray-500 hover:underline focus:underline"
                >
                    English
                </button>
                <button
                    type="button"
                    @click="setLocale('fr', 'Français')"
                    class="text-gray-500 hover:underline focus:underline"
                >
                    Français
                </button>
            </div>
        </div>
        <section>
            <request-comp
                :request="request"
                @request="setRequest"
                @dataForm="requestService"
                :hasError="requestError"
                :hasSuccess="requestSuccess"
                ref="request"
            ></request-comp>
        </section>
    </footer>
</template>
<script>
import RequestComp from "../components/RequestComp.vue";
export default {
    name: "FooterBar",
    components: { RequestComp },
    data() {
        return {
            _token: document
                .querySelector('meta[name="_token"]')
                .getAttribute("content"),
            request: false,
            requestError: [],
            requestSuccess: false,
        };
    },
    methods: {
        setLocale: function (lang, current_lang) {
            if (lang == "en") return;
            this.$i18n.locale = lang;
            this.current_lang = current_lang;
            this.language = false;
            localStorage.setItem("locale", lang);
        },
        showRequest: function () {
            this.request = true;
        },
        setRequest: function (e) {
            this.request = e;
        },
        getQuote: function (quote, request) {
            this.request = request;
            this.$refs.request.setService(quote);
        },
        requestService: function (dataForm) {
            this.$emit("loader", true);
            const header = {
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": this._token,
                },
            };

            const body = dataForm;

            const service = async () => {
                let data = await axios
                    .post("/request/service", body, header)
                    .catch((error) => {
                        if (error.response.status == 419) {
                            this.$emit("alert", true);
                            this.$emit("altType", "error");
                            this.$emit(
                                "altTxt",
                                this.$t("form.error.unexpected")
                            );
                        }
                        this.$emit("loader", false);
                    })
                    .then((response) => {
                        return response.data;
                    });
                if (data.status == "success") {
                    this.$emit("alert", true);
                    this.$emit("altType", data.status);
                    this.$emit("altTxt", this.$t(data.info.toString()));
                    this.requestSuccess = true;
                } else {
                    if (data.status == "error") {
                        this.requestError = data.info;
                    } else {
                        this.$emit("alert", true);
                        this.$emit("altType", "error");
                        this.$emit("altTxt", this.$t("form.error.unexpected"));
                    }
                }
                this.$emit("loader", false);
            };
            setTimeout(() => {
                this.$emit("loader", false);
            }, 30000);
            service();
        },
    },
};
</script>
