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
            <form action="" class="block container mx-auto" method="post">
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
                        supclass="capitalize"
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
        <section class="block w-full pt-16">
            <GoogleMap
                api-key="AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg"
                style="width: 100%; height: 500px"
                :center="center"
                :zoom="15"
            >
                <Marker :options="markerOptions" />
            </GoogleMap>
        </section>
    </div>
</template>
<script>
import InputComp from "../components/InputComp.vue";
import TextareaComp from "../components/TextareaComp.vue";
import { GoogleMap, Marker } from "vue3-google-map";
export default {
    name: "contact",
    components: { InputComp, TextareaComp, GoogleMap, Marker },
    setup() {
        const center = { lat: 40.689247, lng: -74.044502 };
        const markerOptions = {
            position: center,
            label: "L",
            title: "LADY LIBERTY",
        };
        return { markerOptions, center };
    },
    data() {
        return {
            formData: {
                fullname: "",
                email: "",
                phone: "",
                subject: "",
                message: "",
            },
            error: {
                fullname: "",
                email: "",
                phone: "",
                subject: "",
                message: "",
            },
            map: null,
        };
    },
    methods: {
        //
    },
};
</script>
