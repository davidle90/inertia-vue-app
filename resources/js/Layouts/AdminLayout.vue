<script setup>
    import NavLink from '@/Components/NavLink.vue'
    import Breadcrumbs from '@/Components/Breadcrumbs.vue';
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
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'box']" /> Produkter</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'table-cells-large']" /> Kategorier</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'cart-shopping']" /> Ordrar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'tags']" /> Rabattkoder *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'users']" /> Kunder</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'credit-card']" /> Betalningsmetoder *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'truck']" /> Leveransmetoder *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'coins']" /> Lojalitetsprogram *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'chart-line']" /> Försäljningsstatistik *</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <span class="whitespace-nowrap"><font-awesome-icon :icon="['fas', 'gear']" /> Inställningar</span>
                        </a>
                    </li>
                </ul>
                <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200">
                    <li>
                        <span class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <NavLink
                                :href="route('admin.profile.edit')"
                                method="get"
                                as="button"
                            >
                                Profile
                            </NavLink>
                        </span>
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
                    <li>
                        <span class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <NavLink
                                :href="route('dashboard')"
                                method="get"
                                as="button"
                            >
                                Go to public
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
                            <a href="#" class="inline-flex text-sm font-medium text-gray-700 hover:text-blue-600">
                                <font-awesome-icon :icon="['fas', 'home']" class="mr-1"/> Home
                            </a>
                        </li>
                       <Breadcrumbs />
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
