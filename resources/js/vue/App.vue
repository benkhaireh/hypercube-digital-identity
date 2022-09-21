<template>
    <div class="block w-full">
        <nav-comp></nav-comp>
        <router-view
            :loader="loader"
            @loader="setLoader"
            @alert="theAlert"
            @altType="setAltType"
            @altTxt="setAltTxt"
            @altLang="setAltLang"
        ></router-view>
        <footer-comp
            @loader="setLoader"
            @alert="theAlert"
            @altType="setAltType"
            @altTxt="setAltTxt"
            @altLang="setAltLang"
        ></footer-comp>
        <div
            class="fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center z-50"
            v-if="loader"
        >
            <div class="absolute top-0 left-0 right-0 bottom-0 backdrop"></div>
            <div class="lds-ripple z-10">
                <div></div>
                <div></div>
            </div>
        </div>
        <div v-if="hasAlert">
            <alert-comp
                :alertType="altType"
                :alertTxt="altTxt"
                :alertLang="altLang"
                @alert="theAlert"
            />
        </div>
    </div>
</template>
<script>
import AlertComp from "./components/AlertComp.vue";
import NavComp from "./components/NavComp.vue";
import FooterComp from "./components/FooterComp.vue";
export default {
    name: "app",
    components: { AlertComp, NavComp, FooterComp },
    data() {
        return {
            loader: false,
            hasAlert: false,
            altType: "",
            altTxt: "",
            altLang: localStorage.getItem("locale"),
        };
    },
    methods: {
        setLoader(load) {
            this.loader = load;
        },
        theAlert(e) {
            this.hasAlert = e;
        },
        setAltType(e) {
            this.altType = e;
        },
        setAltTxt(e) {
            this.altTxt = e;
        },
        setAltLang(e) {
            this.altLang = e;
        },
    },
    mounted() {
        localStorage.getItem("locale") == undefined
            ? localStorage.setItem("locale", document.documentElement.lang)
            : "";
    },
};
</script>
