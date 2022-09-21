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
                        {{ $t("header.about") }}
                    </h2>
                    <p class="px-5 mb-10 text-xl text-brand-secondary">
                        {{ $t("header.info") }}
                    </p>
                </div>
            </div>
        </section>
        <section class="block w-full pt-16 px-4">
            <div
                class="grid grid-flow-row sm:grid-flow-col grid-cols-1 md:grid-cols-2 gap-6 px-6 mt-12 md:mt-20"
            >
                <div
                    class="flex flex-col md:items-start justify-center w-full lg:w-9/12"
                >
                    <h3
                        class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                    >
                        {{ $t("business.title.beforeLast") }}
                    </h3>
                    <p class="my-2 text-gray-500">
                        {{ $t("business.info.beforeLast") }}
                    </p>
                </div>

                <div class="hidden md:flex w-full justify-end">
                    <div class="block w-96 h-96">
                        <img
                            src="imgs/svgs/wedo.svg"
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
                            src="imgs/svgs/purpose.svg"
                            alt="Hypercube "
                            class=""
                        />
                    </div>
                </div>
                <div
                    class="flex flex-col md:items-end justify-center ml-auto w-full lg:w-9/12"
                >
                    <h3
                        class="text-3xl lg:text-4xl leading-relaxed font-bold text-brand-primary"
                    >
                        {{ $t("business.title.last") }}
                    </h3>
                    <p class="my-2 text-gray-500">
                        {{ $t("business.info.last") }}
                    </p>
                </div>
            </div>
        </section>
        <section class="block w-full pt-16 px-4">
            <div class="block w-full pt-8 px-4">
                <div
                    class="relative text-gray-400 font-bold uppercase text-2xl text-center"
                >
                    <span
                        class="border border-gray-400 block w-1/2 mx-auto absolute top-1/2 left-0 right-0 z-10"
                    ></span>
                    <span
                        class="relative inline-block bg-white px-4 py-2 z-20"
                        >{{ $t("history.title") }}</span
                    >
                </div>
            </div>
            <div class="container mx-auto">
                <ol class="relative w-full md:w-5/6 xl:w-2/3 mx-auto border-l border-gray-200 my-20">
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-3 h-3 text-brand-primary"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </span>
                        <h3
                            class="flex items-center mb-1 text-lg font-semibold text-gray-900"
                        >
                            <span
                                class="bg-gray-100 text-brand-primary text-sm font-medium mr-2 px-2.5 py-0.5 rounded"
                                >{{ $t("history.info.highLight.second") }}</span
                            >
                        </h3>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-3 h-3 text-brand-primary"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900">
                            {{ $t("history.info.title.fifth") }}
                        </h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400"
                            >{{ $t("history.info.subtitle.fifth") }}</time
                        >
                        <p class="text-base font-normal text-gray-500">
                            {{ $t("history.info.description.fifth") }}
                        </p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-3 h-3 text-brand-primary"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900">
                            {{ $t("history.info.title.fourth") }}
                        </h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400"
                            >{{ $t("history.info.subtitle.fourth") }}</time
                        >
                        <p class="text-base font-normal text-gray-500">
                            {{ $t("history.info.description.fourth") }}
                        </p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-3 h-3 text-brand-primary"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900">
                            {{ $t("history.info.title.third") }}
                        </h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400"
                            >{{ $t("history.info.subtitle.third") }}</time
                        >
                        <p class="text-base font-normal text-gray-500">
                            {{ $t("history.info.description.third") }}
                        </p>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-3 h-3 text-brand-primary"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900">
                            {{ $t("history.info.title.second") }}
                        </h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400"
                            >{{ $t("history.info.subtitle.second") }}</time
                        >
                        <p class="text-base font-normal text-gray-500">
                            {{ $t("history.info.description.second") }}
                        </p>
                    </li>
                    <li class="ml-6">
                        <span
                            class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-gray-200 rounded-full ring-8 ring-white"
                        >
                            <svg
                                aria-hidden="true"
                                class="w-3 h-3 text-brand-primary"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </span>
                        <h3
                            class="flex items-center mb-1 text-lg font-semibold text-gray-900"
                        >
                        {{ $t("history.info.title.first") }}
                            <span
                                class="bg-gray-100 text-brand-primary text-sm font-medium mr-2 px-2.5 py-0.5 rounded ml-3"
                                >{{ $t("history.info.highLight.first") }}</span
                            >
                        </h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400"
                            >{{ $t("history.info.subtitle.first") }}</time
                        >
                        <p class="mb-4 text-base font-normal text-gray-500">
                            {{ $t("history.info.description.first") }}
                        </p>
                    </li>
                </ol>
            </div>
        </section>
        <section class="block w-full">
            <div class="block w-full pt-16 px-4">
                <div class="relative text-gray-400 font-bold uppercase text-2xl text-center">
                    <span
                        class="border border-gray-400 block w-1/2 mx-auto absolute top-1/2 left-0 right-0 z-10"></span>
                    <span class="relative inline-block bg-white px-4 py-2 z-20">{{ $t("business.philosophy") }}</span>
                </div>
                <div class="flex items-center justify-between flex-wrap lg:flex-nowrap py-20 lg:px-20">
                    <div
                        class="w-72 h-72 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg">
                        <span class="block w-full">
                            <i class="ri-focus-3-line text-7xl text-brand-primary"></i>
                            <h2 class="text-brand-primary text-3xl font-bold mt-2">
                                {{ $t('philosophy.mission.title') }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t('philosophy.mission.description') }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-72 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg">
                        <span class="block w-full">
                            <i class="ri-eye-2-line text-7xl text-brand-primary"></i>
                            <h2 class="text-brand-primary text-3xl font-bold mt-2">
                                {{ $t('philosophy.vision.title') }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t('philosophy.vision.description') }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-72 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg">
                        <span class="block w-full">
                            <i class="ri-medal-line text-7xl text-brand-primary"></i>
                            <h2 class="text-brand-primary text-3xl font-bold mt-2">
                                {{ $t('philosophy.value.title') }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t('philosophy.value.description') }}
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="block w-full">
            <div class="block w-full pt-16 px-4">
                <div class="relative text-gray-400 font-bold uppercase text-2xl text-center">
                    <span
                        class="border border-gray-400 block w-1/2 mx-auto absolute top-1/2 left-0 right-0 z-10"></span>
                    <span class="relative inline-block bg-white px-4 py-2 z-20">{{ $t("business.strength") }}</span>
                </div>
                <div class="flex items-center justify-between flex-wrap lg:flex-nowrap py-20 lg:px-10 2xl:px-20">
                    <div
                        class="w-72 h-96 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg">
                        <span class="block w-full">
                            <i class="ri-service-line text-7xl text-brand-primary"></i>
                            <h2 class="text-brand-primary text-3xl font-bold mt-2">
                                {{ $t('business.title.fourth') }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t('business.info.fourth') }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-96 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg">
                        <span class="block w-full">
                            <i class="ri-settings-4-line text-7xl text-brand-primary"></i>
                            <h2 class="text-brand-primary text-3xl font-bold mt-2">
                                {{ $t('business.title.fifth') }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t('business.info.fifth') }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-96 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg">
                        <span class="block w-full">
                            <i class="ri-shield-line text-7xl text-brand-primary"></i>
                            <h2 class="text-brand-primary text-3xl font-bold mt-2">
                                {{ $t('business.title.sixth') }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t('business.info.sixth') }}
                            </p>
                        </span>
                    </div>
                    <div
                        class="w-72 h-96 flex items-center px-6 mb-6 mx-auto text-center bg-white border shadow-lg rounded-lg">
                        <span class="block w-full">
                            <i class="ri-team-line text-7xl text-brand-primary"></i>
                            <h2 class="text-brand-primary text-3xl font-bold mt-2">
                                {{ $t('business.title.seventh') }}
                            </h2>
                            <p class="text-xl text-brand-secondary mt-2">
                                {{ $t('business.info.seventh') }}
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    name: "about",
};
</script>
