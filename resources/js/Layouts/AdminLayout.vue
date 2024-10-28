<script setup>
    import NavLink from '@/Components/NavLink.vue'
</script>

<template>
    <!-- Main -->
    <div class="grow">
        <!-- Sidebar -->
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>

        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fas fa-th-large mr-2"></i>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-box mr-2"></i>Produkter</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-box mr-2"></i>Kategorier</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-cart-shopping mr-2"></i>Ordrar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-tags mr-2"></i>Rabattkoder *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-users mr-2"></i>Kunder</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-tags mr-2"></i>Betalningsmetoder *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-credit-card mr-2"></i>Leveransmetoder *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-coins mr-2"></i>Lojalitetsprogram *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-chart-line mr-2"></i>Försäljningsstatistik *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fa-solid fa-gear mr-2"></i>Inställningar</span>
                        </a>
                    </li>
                </ul>
                <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200">
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><i class="fas fa-user mr-2"></i>Profil</span>
                        </a>
                    </li>
                    <li>
                        <span class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <NavLink
                                :href="route('logout')"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </NavLink>
                        </span>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="sm:ml-64">
            <div class="p-5 bg-gray-100">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                </svg>
                                Hem
                            </a>
                        </li>
                       breadcrumbs
                    </ol>
                </nav>
            </div>
            <div class="flex">
                <div class="grow p-5">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>
