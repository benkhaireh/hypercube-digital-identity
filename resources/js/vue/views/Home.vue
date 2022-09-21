<template>
    <div class="block w-full">
        <section class="block w-full">
            <div class="container mx-auto">
                <div
                    class="flex flex-col w-full md:w-5/6 xl:w-2/3 pt-32 md:pt-48 mx-auto text-center"
                >
                    <h2
                        class="mb-5 text-3xl font-semibold leading-tight text-brand-primary md:text-5xl"
                    >
                        {{ $t("header.question") }}
                    </h2>
                    <p class="px-5 mb-10 text-xl text-brand-secondary">
                        {{ $t("header.answer") }}
                    </p>
                    <div class="block w-full text-center">
                        <button
                            type="button"
                            class="px-4 py-2 shadow-lg border border-brand-primary text-brand-primary rounded-md hover:bg-brand-primary hover:text-white focus:bg-brand-primary focus:text-white"
                            @click="showRequest"
                        >
                            {{ $t("form.getStarted") }}
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="block w-full pt-16 px-4">
            <div class="block w1/2 md:w-2/5 lg:w-2/4 mx-auto">
                <p class="text-gray-400 text-center">
                    {{ $t("business.info.first") }}
                </p>
            </div>
            <div
                class="grid grid-flow-row sm:grid-flow-col grid-cols-1 md:grid-cols-2 gap-6 px-6 mt-12 md:mt-32"
            >
                <div class="flex flex-col justify-center w-full lg:w-9/12">
                    <h3
                        class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                    >
                        {{ $t("business.title.first") }}
                    </h3>
                    <p class="my-2 text-gray-500">
                        {{ $t("business.info.second") }}
                        <button
                            type="button"
                            class="block px-4 py-2 mt-4 shadow-lg border border-brand-primary text-brand-primary rounded-md hover:bg-brand-primary hover:text-white focus:bg-brand-primary focus:text-white"
                            @click="showRequest"
                        >
                            {{ $t("form.getStarted") }}
                        </button>
                    </p>
                </div>

                <div class="hidden md:flex w-full justify-end">
                    <div class="block w-96 h-96">
                        <img
                            src="imgs/svgs/support.svg"
                            alt="Hypercube "
                            class=""
                        />
                    </div>
                </div>
            </div>
            <div
                class="grid grid-flow-row sm:grid-flow-col grid-cols-1 md:grid-cols-2 gap-6 px-6 mt-12 md:mt-20"
            >
                <div class="hidden md:flex w-full justify-start">
                    <div class="block w-96 h-96">
                        <img
                            src="imgs/svgs/resources.svg"
                            alt="Hypercube "
                            class=""
                        />
                    </div>
                </div>
                <div
                    class="flex flex-col justify-center ml-auto w-full lg:w-9/12"
                >
                    <h3
                        class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                    >
                        {{ $t("business.title.second") }}
                    </h3>
                    <p class="my-2 text-gray-500">
                        {{ $t("business.info.third") }}
                        <button
                            type="button"
                            class="block px-4 py-2 mt-4 shadow-lg border border-brand-primary text-brand-primary rounded-md hover:bg-brand-primary hover:text-white focus:bg-brand-primary focus:text-white"
                            @click="showRequest"
                        >
                            {{ $t("form.getStarted") }}
                        </button>
                    </p>
                </div>
            </div>
            <div
                class="grid grid-flow-row sm:grid-flow-col grid-cols-1 md:grid-cols-2 gap-6 px-6 mt-12 md:mt-20"
            >
                <div
                    class="flex flex-col md:items-start justify-center w-full lg:w-9/12"
                >
                    <h3
                        class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                    >
                        {{ $t("business.title.third") }}
                    </h3>
                    <p class="my-2 text-gray-500">
                        {{ $t("business.info.quart") }}
                        <button
                            type="button"
                            class="block px-4 py-2 mt-4 shadow-lg border border-brand-primary text-brand-primary rounded-md hover:bg-brand-primary hover:text-white focus:bg-brand-primary focus:text-white"
                            @click="showRequest"
                        >
                            {{ $t("form.getStarted") }}
                        </button>
                    </p>
                </div>

                <div class="hidden md:flex w-full justify-end">
                    <div class="block w-96 h-96">
                        <img
                            src="imgs/svgs/collaboration.svg"
                            alt="Hypercube "
                            class=""
                        />
                    </div>
                </div>
            </div>
        </section>
        <section class="block w-full px-4">
            <div class="block w-full pt-8 px-4">
                <div
                    class="relative text-gray-400 font-bold uppercase text-2xl text-center"
                >
                    <span
                        class="border border-gray-400 block w-1/2 mx-auto absolute top-1/2 left-0 right-0 z-10"
                    ></span>
                    <span
                        class="relative inline-block bg-white px-4 py-2 z-20"
                        >{{ $t("business.expertise") }}</span
                    >
                </div>
                <div
                    class="grid grid-flow-row sm:grid-flow-col grid-cols-1 md:grid-cols-2 gap-6 px-6 mt-12 md:mt-32"
                >
                    <div
                        class="flex flex-col items-start justify-center w-full lg:w-9/12"
                    >
                        <h3
                            class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                        >
                            {{ $t("solutions.consulting.title") }}
                        </h3>
                        <p class="my-2 text-gray-500">
                            {{ $t("solutions.consulting.description") }}
                            <button
                                type="button"
                                class="block px-4 py-2 mt-4 shadow-lg border border-brand-primary text-brand-primary rounded-md hover:bg-brand-primary hover:text-white focus:bg-brand-primary focus:text-white"
                                @click="getQuote('consulting', true)"
                            >
                                {{ $t("form.requestNow") }}
                            </button>
                        </p>
                    </div>

                    <div class="hidden md:flex w-full justify-end">
                        <div class="block w-96 h-96">
                            <img
                                src="imgs/svgs/consulting.svg"
                                alt="Hypercube "
                                class=""
                            />
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-flow-row sm:grid-flow-col grid-cols-1 md:grid-cols-2 gap-6 px-6 mt-12 md:mt-20"
                >
                    <div class="hidden md:flex w-full justify-start">
                        <div class="block w-96 h-96">
                            <img
                                src="imgs/svgs/network.svg"
                                alt="Hypercube "
                                class=""
                            />
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start justify-center ml-auto w-full lg:w-9/12"
                    >
                        <h3
                            class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                        >
                            {{ $t("solutions.network.title") }}
                        </h3>
                        <p class="my-2 text-gray-500">
                            {{ $t("solutions.network.description") }}
                            <button
                                type="button"
                                class="block px-4 py-2 mt-4 shadow-lg border border-brand-primary text-brand-primary rounded-md hover:bg-brand-primary hover:text-white focus:bg-brand-primary focus:text-white"
                                @click="getQuote('network', true)"
                            >
                                {{ $t("form.requestNow") }}
                            </button>
                        </p>
                    </div>
                </div>
                <div
                    class="grid grid-flow-row sm:grid-flow-col grid-cols-1 md:grid-cols-2 gap-6 px-6 mt-12 md:mt-20"
                >
                    <div
                        class="flex flex-col items-start justify-center w-full lg:w-9/12"
                    >
                        <h3
                            class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                        >
                            {{ $t("solutions.integration.title") }}
                        </h3>
                        <p class="my-2 text-gray-500">
                            {{ $t("solutions.integration.description") }}
                            <button
                                type="button"
                                class="block px-4 py-2 mt-4 shadow-lg border border-brand-primary text-brand-primary rounded-md hover:bg-brand-primary hover:text-white focus:bg-brand-primary focus:text-white"
                                @click="getQuote('integration', true)"
                            >
                                {{ $t("form.requestNow") }}
                            </button>
                        </p>
                    </div>

                    <div class="hidden md:flex w-full justify-end">
                        <div class="block w-96 h-96">
                            <img
                                src="imgs/svgs/integration.svg"
                                alt="Hypercube "
                                class=""
                            />
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-flow-row sm:grid-flow-col grid-cols-1 md:grid-cols-2 gap-6 px-6 mt-12 md:mt-20"
                >
                    <div class="hidden md:flex w-full justify-start">
                        <div class="block w-96 h-96">
                            <img
                                src="imgs/svgs/security.svg"
                                alt="Hypercube "
                                class=""
                            />
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start justify-center ml-auto w-full lg:w-9/12"
                    >
                        <h3
                            class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                        >
                            {{ $t("solutions.security.title") }}
                        </h3>
                        <p class="my-2 text-gray-500">
                            {{ $t("solutions.security.description") }}
                            <button
                                type="button"
                                class="block px-4 py-2 mt-4 shadow-lg border border-brand-primary text-brand-primary rounded-md hover:bg-brand-primary hover:text-white focus:bg-brand-primary focus:text-white"
                                @click="getQuote('security', true)"
                            >
                                {{ $t("form.requestNow") }}
                            </button>
                        </p>
                    </div>
                </div>
                <div
                    class="grid grid-flow-row sm:grid-flow-col grid-cols-1 md:grid-cols-2 gap-6 px-6 mt-12 md:mt-20"
                >
                    <div
                        class="flex flex-col items-start justify-center w-full lg:w-9/12"
                    >
                        <h3
                            class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                        >
                            {{ $t("solutions.digital.title") }}
                        </h3>
                        <p class="my-2 text-gray-500">
                            {{ $t("solutions.digital.description") }}
                            <button
                                type="button"
                                class="block px-4 py-2 mt-4 shadow-lg border border-brand-primary text-brand-primary rounded-md hover:bg-brand-primary hover:text-white focus:bg-brand-primary focus:text-white"
                                @click="getQuote('digital', true)"
                            >
                                {{ $t("form.requestNow") }}
                            </button>
                        </p>
                    </div>

                    <div class="hidden md:flex w-full justify-end">
                        <div class="block w-96 h-96">
                            <img
                                src="imgs/svgs/digital.svg"
                                alt="Hypercube "
                                class=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block w-full">
            <div class="block w-full pt-16 px-4">
                <div
                    class="relative text-gray-400 font-bold uppercase text-2xl text-center"
                >
                    <span
                        class="border border-gray-400 block w-1/2 mx-auto absolute top-1/2 left-0 right-0 z-10"
                    ></span>
                    <span
                        class="relative inline-block bg-white px-4 py-2 z-20"
                        >{{ $t("business.philosophy") }}</span
                    >
                </div>
                <div
                    class="flex items-center justify-between flex-wrap lg:flex-nowrap py-20 lg:px-20"
                >
                    <div
                        class="w-72 h-72 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg"
                    >
                        <span class="block w-full">
                            <i
                                class="ri-focus-3-line text-7xl text-brand-primary"
                            ></i>
                            <h2
                                class="text-brand-primary text-3xl font-bold mt-2"
                            >
                                {{ $t("philosophy.mission.title") }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t("philosophy.mission.description") }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-72 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg"
                    >
                        <span class="block w-full">
                            <i
                                class="ri-eye-2-line text-7xl text-brand-primary"
                            ></i>
                            <h2
                                class="text-brand-primary text-3xl font-bold mt-2"
                            >
                                {{ $t("philosophy.vision.title") }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t("philosophy.vision.description") }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-72 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg"
                    >
                        <span class="block w-full">
                            <i
                                class="ri-medal-line text-7xl text-brand-primary"
                            ></i>
                            <h2
                                class="text-brand-primary text-3xl font-bold mt-2"
                            >
                                {{ $t("philosophy.value.title") }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t("philosophy.value.description") }}
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="block w-full">
            <div class="block w-full pt-16 px-4">
                <div
                    class="relative text-gray-400 font-bold uppercase text-2xl text-center"
                >
                    <span
                        class="border border-gray-400 block w-1/2 mx-auto absolute top-1/2 left-0 right-0 z-10"
                    ></span>
                    <span
                        class="relative inline-block bg-white px-4 py-2 z-20"
                        >{{ $t("business.strength") }}</span
                    >
                </div>
                <div
                    class="flex items-center justify-between flex-wrap lg:flex-nowrap py-20 lg:px-10 2xl:px-20"
                >
                    <div
                        class="w-72 h-96 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg"
                    >
                        <span class="block w-full">
                            <i
                                class="ri-service-line text-7xl text-brand-primary"
                            ></i>
                            <h2
                                class="text-brand-primary text-3xl font-bold mt-2"
                            >
                                {{ $t("business.title.fourth") }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t("business.info.fourth") }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-96 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg"
                    >
                        <span class="block w-full">
                            <i
                                class="ri-settings-4-line text-7xl text-brand-primary"
                            ></i>
                            <h2
                                class="text-brand-primary text-3xl font-bold mt-2"
                            >
                                {{ $t("business.title.fifth") }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t("business.info.fifth") }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-96 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg"
                    >
                        <span class="block w-full">
                            <i
                                class="ri-shield-line text-7xl text-brand-primary"
                            ></i>
                            <h2
                                class="text-brand-primary text-3xl font-bold mt-2"
                            >
                                {{ $t("business.title.sixth") }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t("business.info.sixth") }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-96 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg"
                    >
                        <span class="block w-full">
                            <i
                                class="ri-team-line text-7xl text-brand-primary"
                            ></i>
                            <h2
                                class="text-brand-primary text-3xl font-bold mt-2"
                            >
                                {{ $t("business.title.seventh") }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t("business.info.seventh") }}
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="block w-full px-4">
            <div class="block w-full pt-12 px-4">
                <div
                    class="relative text-gray-400 font-bold uppercase text-2xl text-center"
                >
                    <span
                        class="border border-gray-400 block w-1/2 mx-auto absolute top-1/2 left-0 right-0 z-10"
                    ></span>
                    <span
                        class="relative inline-block bg-white px-4 py-2 z-20"
                        >{{ $t("business.trust") }}</span
                    >
                </div>
                <div
                    class="flex items-center flex-wrap lg:flex-nowrap justify-between pt-20 lg:px-20 mx-auto"
                >
                    <img
                        src="imgs/partner_fortinet.png"
                        alt="Hypercube Partner"
                        class="block w-60 h-10 mx-auto lg:mr-4 lg:ml-0 mb-12"
                    />
                    <img
                        src="imgs/partner_xerox.png"
                        alt="Hypercube Partner"
                        class="block w-60 h-10 mx-auto lg:mr-4 mb-12 lg:ml-0"
                    />
                    <img
                        src="imgs/partner_montran.png"
                        alt="Hypercube Partner"
                        class="block w-60 h-10 mx-auto lg:mr-4 mb-12 lg:ml-0"
                    />
                </div>
            </div>
        </section>
        <section class="block w-full px-4">
            <div class="block w-full pt-12 px-4">
                <div
                    class="relative text-gray-400 font-bold uppercase text-2xl text-center"
                >
                    <span
                        class="border border-gray-400 block w-1/2 mx-auto absolute top-1/2 left-0 right-0 z-10"
                    ></span>
                    <span
                        class="relative inline-block bg-white px-4 py-2 z-20"
                        >{{ $t("business.customer") }}</span
                    >
                </div>
                <div
                    class="flex items-center flex-wrap justify-center pt-20 lg:px-20 mx-auto"
                >
                    <img
                        src="imgs/1.PNG"
                        alt="Hypercube Partner"
                        class="block w-32 h-28 mr-8 mb-12"
                    />
                    <img
                        src="imgs/2.PNG"
                        alt="Hypercube Partner"
                        class="block w-32 h-28 mr-8 mb-12"
                    />
                    <img
                        src="imgs/3.PNG"
                        alt="Hypercube Partner"
                        class="block w-32 h-28 mr-8 mb-12"
                    />
                    <img
                        src="imgs/4.PNG"
                        alt="Hypercube Partner"
                        class="block w-32 h-28 mr-8 mb-12"
                    />
                    <img
                        src="imgs/5.PNG"
                        alt="Hypercube Partner"
                        class="block w-32 h-28 mr-8 mb-12"
                    />
                    <img
                        src="imgs/6.PNG"
                        alt="Hypercube Partner"
                        class="block w-32 h-28 mr-8 mb-12"
                    />
                    <img
                        src="imgs/7.PNG"
                        alt="Hypercube Partner"
                        class="block w-32 h-28 mr-8 mb-12"
                    />
                    <img
                        src="imgs/8.PNG"
                        alt="Hypercube Partner"
                        class="block w-32 h-28 mr-8 mb-12"
                    />
                    <img
                        src="imgs/9.PNG"
                        alt="Hypercube Partner"
                        class="block w-32 h-28 mr-8 mb-12"
                    />
                </div>
            </div>
        </section>
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
    </div>
</template>
<script>
import RequestComp from "../components/RequestComp.vue";
export default {
    name: "home",
    components: { RequestComp },
    data() {
        return {
            _token: document
                .querySelector('meta[name="_token"]')
                .getAttribute("content"),
            request: false,
            requestError: [],
            requestSuccess: false
        };
    },
    methods: {
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
                            setTimeout(() => {
                                window.location = "/";
                            }, 5000);
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
                    this.requestSuccess = true
                } else {
                    if (data.status == "error") {
                        this.requestError = data.info
                    } else {
                        this.$emit("alert", true);
                        this.$emit("altType", "error");
                        this.$emit(
                            "altTxt",
                            this.$t("form.error.unexpected")
                        );
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
