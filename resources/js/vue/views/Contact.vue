<template>
    <div class="block w-full">
        <section class="block w-full">
            <div class="container mx-auto">
                <div
                    class="flex flex-col w-full lg:w-5/6 xl:w-2/3 pt-32 lg:pt-48 mx-auto text-center"
                >
                    <h2
                        class="mb-5 text-3xl font-semibold leading-tight text-brand-primary md:text-5xl"
                    >
                        {{ $t("header.contact") }}
                    </h2>
                    <p class="px-5 mb-10 text-xl text-brand-secondary">
                        {{ $t("header.talk") }}
                    </p>
                </div>
            </div>
        </section>
        <section class="block w-full pt-16 pb-16 px-4 md:w-2/3 mx-auto">
            <div class="mb-8">
                <ul class="flex items-center text-gray-600 dark:text-gray-400">
                    <li class="flex items-center mr-12 whitespace-nowrap">
                        <i class="ri-phone-line mr-2"></i
                        ><a
                            href="tel:+25321352929"
                            class="hover:underline focus:underline"
                            >+253 21 352 929</a
                        >
                    </li>
                    <li class="flex items-center mr-12 whitespace-nowrap">
                        <i class="ri-at-line mr-2"></i
                        ><a
                            href="mailto:contact@hypercube.dj"
                            class="hover:underline focus:underline"
                        >
                            contact@hypercube.dj</a
                        >
                    </li>
                    <li class="flex items-center whitespace-nowrap">
                        <i class="ri-map-pin-line mr-2"></i
                        ><span>Cite aviation, Djibouti</span>
                    </li>
                </ul>
            </div>
            <form
                action=""
                class="block container mx-auto"
                method="post"
                @submit.prevent="contactUs"
            >
                <div class="grid grid-cols-2 gap-3">
                    <input-comp
                        type="text"
                        label="firstname"
                        :label_txt="$t('form.firstname')"
                        icon="user"
                        v-model="formData.firstname"
                        :error="error.firstname"
                        supclass="capitalize"
                        required
                    />
                    <input-comp
                        type="text"
                        label="lastname"
                        :label_txt="$t('form.lastname')"
                        icon="user-2"
                        v-model="formData.lastname"
                        :error="error.lastname"
                        supclass="capitalize"
                        required
                    />
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <input-comp
                        type="email"
                        label="email"
                        :label_txt="$t('form.email')"
                        icon="at"
                        v-model="formData.email"
                        :error="error.email"
                        required
                    />
                    <input-comp
                        type="number"
                        label="phone"
                        :label_txt="$t('form.phone')"
                        icon="phone"
                        v-model="formData.phone"
                        :error="error.phone"
                        supclass="capitalize"
                        required
                    />
                </div>
                <div class="flex-1">
                    <input-comp
                        type="text"
                        label="subject"
                        :label_txt="$t('form.subject')"
                        icon="mail"
                        v-model="formData.subject"
                        :error="error.subject"
                        supclass="capitalize"
                        required
                    />
                </div>
                <div class="flex-1">
                    <textarea-comp
                        label="message"
                        :label_txt="$t('form.mail')"
                        icon="edit-2"
                        v-model="formData.message"
                        :error="error.message"
                        :placeholder="$t('form.message')"
                        limitmaxCount="5020"
                        required
                    />
                </div>
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
        </section>
        <section class="block w-full pt-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15635.572033140817!2d43.15542!3d11.5595272!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3f143f57ecc99ac!2shypercube!5e0!3m2!1sfr!2sdj!4v1663154403558!5m2!1sfr!2sdj"
                width="100%"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </section>
    </div>
</template>
<script>
import InputComp from "../components/InputComp.vue";
import TextareaComp from "../components/TextareaComp.vue";
export default {
    name: "contact",
    components: { InputComp, TextareaComp },
    data() {
        return {
            _token: document
                .querySelector('meta[name="_token"]')
                .getAttribute("content"),
            formData: {
                firstname: "",
                lastname: "",
                email: "",
                phone: "",
                subject: "",
                message: "",
            },
            error: {
                firstname: "",
                lastname: "",
                email: "",
                phone: "",
                subject: "",
                message: "",
            },
        };
    },
    methods: {
        contactUs: function () {
            this.$emit("loader", true);
            const header = {
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": this._token,
                },
            };

            const body = JSON.stringify(this.formData);

            const contactus = async () => {
                let data = await axios
                    .post("/contactus", body, header)
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

                    this.formData.firstname = "";
                    this.formData.lastname = "";
                    this.formData.email = "";
                    this.formData.phone = "";
                    this.formData.subject = "";
                    this.formData.message = "";

                    this.error.firstname = "";
                    this.formData.lastname = "";
                    this.error.email = "";
                    this.error.phone = "";
                    this.error.subject = "";
                    this.error.message = "";
                } else {
                    if (data.status == "error") {
                        const errors = Object.keys(data.info);
                        for (let i = 0; i < errors.length; i++) {
                            const errorTxt = data.info[errors[i]];
                            this.error[errors[i]] = this.$t(
                                "form.error." + errorTxt.toString()
                            );
                        }
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
            contactus();
        },
    },
};
</script>
