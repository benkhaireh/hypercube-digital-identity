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
                        {{ $t("header.project") }}
                    </h2>
                    <p class="px-5 mb-10 text-xl text-brand-secondary">
                        {{ $t("header.project_description") }}
                    </p>
                </div>
            </div>
        </section>
        <section class="my-32">
            <div class="container max-w-5xl px-4 py-12 mx-auto">
                <div class="grid gap-4 mx-4 sm:grid-cols-12">
                    <div class="col-span-12 sm:col-span-4">
                        <div
                            class="text-center sm:text-left mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:bg-brand-primary"
                        >
                            <h3 class="text-3xl font-semibold uppercase">
                                {{ $t("projects.title") }}
                            </h3>
                            <span
                                class="text-sm font-bold tracking-wider text-gray-400"
                                >{{ $t("projects.description") }}</span
                            >
                        </div>
                    </div>
                    <div
                        class="relative col-span-12 px-4 space-y-6 sm:col-span-8"
                    >
                        <div
                            class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:bg-gray-700"
                        >
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    {{ $t("projects.cert.title") }}
                                </h3>
                                <time
                                    class="text-xs tracking-wide uppercase text-gray-400"
                                    >{{ $t("projects.cert.subtitle") }}</time
                                >
                                <p class="mt-3">
                                    {{ $t("projects.cert.description") }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    {{ $t("projects.pki.title") }}
                                </h3>
                                <time
                                    class="text-xs tracking-wide uppercase text-gray-400"
                                    >{{ $t("projects.pki.subtitle") }}</time
                                >
                                <p class="mt-3">
                                    {{ $t("projects.pki.description") }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    {{ $t("projects.atsplus.title") }}
                                </h3>
                                <time
                                    class="text-xs tracking-wide uppercase text-gray-400"
                                    >{{ $t("projects.atsplus.subtitle") }}</time
                                >
                                <p class="mt-3">
                                    {{ $t("projects.atsplus.description") }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    {{ $t("projects.sigtas.title") }}
                                </h3>
                                <time
                                    class="text-xs tracking-wide uppercase text-gray-400"
                                    >{{ $t("projects.sigtas.subtitle") }}</time
                                >
                                <p class="mt-3">
                                    {{ $t("projects.sigtas.description") }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    {{ $t("projects.fiberoptic.title") }}
                                </h3>
                                <time
                                    class="text-xs tracking-wide uppercase text-gray-400"
                                    >{{
                                        $t("projects.fiberoptic.subtitle")
                                    }}</time
                                >
                                <p class="mt-3">
                                    {{ $t("projects.fiberoptic.description") }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    {{ $t("projects.ecertificat.title") }}
                                </h3>
                                <time
                                    class="text-xs tracking-wide uppercase text-gray-400"
                                    >{{
                                        $t("projects.ecertificat.subtitle")
                                    }}</time
                                >
                                <p class="mt-3">
                                    {{ $t("projects.ecertificat.description") }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    {{ $t("projects.evisa.title") }}
                                </h3>
                                <time
                                    class="text-xs tracking-wide uppercase text-gray-400"
                                    >{{ $t("projects.evisa.subtitle") }}</time
                                >
                                <p class="mt-3">
                                    {{ $t("projects.evisa.description") }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    {{ $t("projects.interconnexion.title") }}
                                </h3>
                                <time
                                    class="text-xs tracking-wide uppercase text-gray-400"
                                    >{{
                                        $t("projects.interconnexion.subtitle")
                                    }}</time
                                >
                                <p class="mt-3">
                                    {{
                                        $t(
                                            "projects.interconnexion.description"
                                        )
                                    }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    {{ $t("projects.lan.title") }}
                                </h3>
                                <time
                                    class="text-xs tracking-wide uppercase text-gray-400"
                                    >{{ $t("projects.lan.subtitle") }}</time
                                >
                                <p class="mt-3">
                                    {{ $t("projects.lan.description") }}
                                </p>
                            </div>
                            <div
                                class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-brand-primary"
                            >
                                <h3 class="text-xl font-semibold tracking-wide">
                                    <span class="px-2 text-sm text-white bg-brand-primary">{{ $t("projects.morecoming") }}</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    name: "projects",
};
</script>
