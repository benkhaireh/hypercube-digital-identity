<template>
    <div class="fixed top-0 left-0 right-0 bottom-0 z-50" v-if="request">
        <div class="absolute top-0 right-0 left-0 backdrop"></div>
        <div
            class="relative mx-auto px-4 md:px-auto w-full lg:w-2/4 sm:w-4/5 py-4 z-10 h-full overflow-y-auto"
            v-click-away="hideRequest"
        >
            <form
                action=""
                method="post"
                class="px-4 py-8 md:px-8 shadow-lg rounded-xl bg-gray-100"
                @submit.prevent="requestService"
            >
                <p class="block w-full pb-6 text-gray-500">
                    {{ $t("form.requestDes") }}
                </p>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <input-comp
                        type="text"
                        label="fullname"
                        placeholder="Abdi Ali"
                        :label_txt="$t('form.fullname')"
                        icon="user-3"
                        v-model="formData.fullname"
                        :error="error.fullname"
                        supclass="capitalize"
                        required
                    />
                    <input-comp
                        type="text"
                        label="email"
                        placeholder="abdi@ali.com"
                        :label_txt="$t('form.email')"
                        icon="at"
                        v-model="formData.email"
                        :error="error.email"
                        required
                    />
                </div>
                <div class="block w-full mb-4">
                    <span class="block text-grey-darker font-bold mb-2">
                        {{ $t("form.choose") }}
                    </span>
                    <Multiselect
                        v-model="formData.service"
                        :options="options"
                        :placeholder="$t('form.solutions')"
                        :multiple="true"
                        :allowEmpty="false"
                        label="name"
                        track-by="name"
                        :selectLabel="$t('form.select')"
                        :deselectLabel="$t('form.deselect')"
                        :selectedLabel="$t('form.selected')"
                    ></Multiselect>
                </div>
                <textarea-comp
                    type="text"
                    label="message"
                    :placeholder="$t('form.tellUs')"
                    :label_txt="$t('form.project')"
                    icon="edit"
                    supclass="h-24"
                    v-model="formData.message"
                    :error="error.message"
                    limitmaxCount="350"
                    required
                ></textarea-comp>
                <div class="flex justify-end w-full mt-26">
                    <button
                        type="submit"
                        class="flex items-center px-6 py-2 bg-white border border-brand-primary text-brand-primary hover:bg-brand-primary focus:bg-brand-primary hover:text-white focus:text-white rounded-md"
                    >
                        <i class="ri-send-plane-2-line mr-2"></i>
                        {{ $t("form.mailit") }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import InputComp from "../components/InputComp.vue";
import TextareaComp from "../components/TextareaComp.vue";
import Multiselect from "vue-multiselect";
export default {
    name: "request",
    props: {
        request: {
            type: Boolean,
            default: true,
        },
        hasError: {
            type: Array,
            default: [],
        },
        hasSuccess: {
            type: Boolean,
            default: false,
        },
    },
    components: { Multiselect, InputComp, TextareaComp },
    data() {
        return {
            _token: document
                .querySelector('meta[name="_token"]')
                .getAttribute("content"),
            options: [
                {
                    id: "consulting",
                    name: this.$t("solutions.consulting.title"),
                },
                { id: "network", name: this.$t("solutions.network.title") },
                {
                    id: "integration",
                    name: this.$t("solutions.integration.title"),
                },
                { id: "security", name: this.$t("solutions.security.title") },
                { id: "digital", name: this.$t("solutions.digital.title") },
            ],
            formData: {
                fullname: "",
                email: "",
                message: "",
                service: [
                    {
                        id: "consulting",
                        name: this.$t("solutions.consulting.title"),
                    },
                ],
            },
            error: {
                fullname: "",
                email: "",
                message: "",
                service: "",
            },
        };
    },
    methods: {
        hideRequest: function () {
            this.$emit("request", false);
            this.formData.fullname = "";
            this.formData.email = "";
            this.formData.message = "";
            this.formData.service = [
                {
                    id: "consulting",
                    name: this.$t("solutions.consulting.title"),
                },
            ];

            this.error.fullname = "";
            this.error.email = "";
            this.error.message = "";
            this.error.service = ""
        },
        setService: function (service) {
            this.formData.service = this.options.find(
                (option) => option.id == service
            );
        },
        getCurrent: function (e) {
            console.log(e);
        },
        requestService: function () {
            const body = JSON.stringify(this.formData);
            this.$emit("dataForm", body);
        },
    },
    watch: {
        hasError: function (data) {
            console.log(data)
            const errors = Object.keys(data);
            for (let i = 0; i < errors.length; i++) {
                const errorTxt = data[errors[i]];
                this.error[errors[i]] = this.$t(
                    "form.error." + errorTxt.toString()
                );
            }
        },
        hasSuccess: function (data) {
            if (data == true) {
                this.hideRequest();
            }
        },
    },
};
</script>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
