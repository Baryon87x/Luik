<template>
    <section class="container mx-auto p-5">
        <div class="grid grid-cols-12 gap-6 w-full">
            <div class="col-span-12 lg:col-span-7 bg-white box_shadow px-[30px] py-[24px]">
                <div>
                        <h4 class="text-lg lg:text-xl uppercase mb-1">Laissez-nous un message</h4>
                        <p class="mb-6 text-sm md:text-md lg:text-lg">Utilisez le formulaire ci-dessous pour prendre contact avec l'équipe de vente</p>
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 sm:col-span-6">
                                <div>
                                    <label for="first_name" class="block mb-1.5">Prénom <span
                                            class="text-[#fd3d57ad]">*</span></label>
                                    <input type="text"
                                        class="w-full border border-[#E9E4E4] rounded focus:border-[#fd3d57ad] focus:ring-0">
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <div class="single_billing_inp">
                                    <label for="last_name" class="block mb-1.5">Nom <span
                                            class="text-[#fd3d57ad]">*</span></label>
                                    <input type="text"
                                        class="w-full border border-[#E9E4E4] rounded focus:border-[#fd3d57ad] focus:ring-0">
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="single_billing_inp">
                                    <label for="email_addr" class="block mb-1.5">Adresse e-mail <span
                                            class="text-[#fd3d57ad]">*</span></label>
                                    <input type="text"
                                        class="w-full border border-[#E9E4E4] rounded focus:border-[#fd3d57ad] focus:ring-0">
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="single_billing_inp">
                                    <label for="company_name" class="block mb-1.5">Sujet</label>
                                    <input type="text"
                                        class="w-full border border-[#E9E4E4] rounded focus:border-[#fd3d57ad] focus:ring-0">
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="single_billing_inp">
                                    <label for="county_region" class="block mb-1.5">Votre message <span
                                            class="text-[#fd3d57ad]">*</span></label>
                                    <textarea type="text"
                                        class="w-full border border-[#E9E4E4] rounded focus:border-[#fd3d57ad] focus:ring-0"></textarea>
                                </div>
                            </div>
                            <div class="col-span-12 mt-4">
                                <button type="submit" class="bg-slate-900 text-sm md:text-md lg:text-lg text-white rounded py-3 px-5">envoyer un message</button>
                            </div>

                        </div>
                    </div>
                 </div>
                    <div class="col-span-12 lg:col-span-5 bg-white box_shadow px-[30px] py-[24px]">
                        <div class="padding_default border-0 shadow_sm">
                        <h4 class="text-lg lg:text-xl uppercase mb-[14px]">notre magasin</h4>
                        <div class="footer_contact">
                            <div class="relative pb-3">
                                <p class="absolute top-1 left-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M256 48c-79.5 0-144 61.39-144 137c0 87 96 224.87 131.25 272.49a15.77 15.77 0 0 0 25.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137Z" />
                                        <circle cx="256" cy="192" r="48" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32" /></svg>
                                </p>
                                <p class="pl-[32px] text-sm md:text-md lg:text-lg"> 7895 Dr New Albuquerue, NM 19800, nited
                                    States Of America </p>
                            </div>
                            <div class="relative pb-3">
                                <span class="absolute left-0 top-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m19.23 15.26l-2.54-.29a1.99 1.99 0 0 0-1.64.57l-1.84 1.84a15.045 15.045 0 0 1-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52a2.001 2.001 0 0 0-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07c.53 8.54 7.36 15.36 15.89 15.89c1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98z" />
                                    </svg>
                                </span>
                                <p class="pl-[32px] text-sm md:text-md lg:text-lg">+566 477 256, +566 254 575</p>
                            </div>
                            <div class="relative pb-3">
                                <span class="absolute left-0 top-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4 20q-.825 0-1.412-.587Q2 18.825 2 18V6q0-.825.588-1.412Q3.175 4 4 4h16q.825 0 1.413.588Q22 5.175 22 6v12q0 .825-.587 1.413Q20.825 20 20 20Zm8-7L4 8v10h16V8Zm0-2l8-5H4ZM4 8V6v12Z" />
                                    </svg>
                                </span>
                                <p class="pl-[32px] text-sm md:text-md lg:text-lg"> info@domain.com</p>
                            </div>
                        </div>

                        <h4 class="mt-4 mb-[14px] uppercase text-lg lg:text-xl">Hours of operation</h4>
                        <div class="space-y-2 text-sm md:text-md lg:text-lg">
                            <div class="flex justify-between">
                                <p>Samedi</p>
                                <p>12:00 PM</p>
                            </div>
                            <div class="flex justify-between">
                                <p>Dimanche</p>
                                <p>12:00 PM</p>
                            </div>
                            <div class="flex justify-between">
                                <p>Lundi</p>
                                <p>12:00 PM</p>
                            </div>
                            <div class="flex justify-between">
                                <p>Mardi</p>
                                <p>12:00 PM</p>
                            </div>
                            <div class="flex justify-between">
                                <p>Mercredi</p>
                                <p>12:00 PM</p>
                            </div>
                            <div class="flex justify-between">
                                <p>Mercredi</p>
                                <p>12:00 PM</p>
                            </div>
                            <div class="flex justify-between">
                                <p>Vendredi</p>
                                <p>12:00 PM</p>
                            </div>
                        </div>

                        <h4 class="text-lg lg:text-xl mt-4 mb-3 uppercase ">Carrières</h4>
                        <p class="text-sm md:text-md lg:text-lg mb-0">Si vous êtes intéressant dans l'emploi <br> Opportunités à Rafcarts. S'il te plaît
                            Envoyez-nous un courriel:
                        </p>
                        <a href="#" class="text-sm md:text-md lg:text-lg">contact@mail.com</a>

                    </div>
            </div>
        </div>
    </section>
</template>
