<div class="my-4">
    <div class="flex items-center space-x-3 mb-8">
        <div class="bg-sky-300 p-3 rounded flex items-center justify-center">
            <i class="fa-solid fa-basket-shopping text-2xl text-sky-700"></i>
        </div>
        <div class="flex flex-col">
            <span class="font-bold">FreshMarket</span>
            <span class="text-sm text-gray-600">Admin Panel</span>
        </div>
    </div>
    <div class="space-y-1">
        <x-navbar.nav-item name="Dashboard" icon="house"/>
        <x-navbar.nav-item name="Orders" icon="cart-shopping" route="admin.orders.get"/>
        <x-navbar.nav-item name="Product Catalog" icon="box-archive" route="admin.products.get"/>
        <x-navbar.nav-item name="Customers" icon="users"/>
        <x-navbar.nav-item name="Analytics and Reports" icon="chart-line"/>
        <x-navbar.nav-item name="Settings" icon="gear"/>
    </div>
</div>
<div class="w-full mb-5 pl-3 text-gray-600 hover:bg-sky-300 hover:rounded-lg hover:text-sky-700">
    <x-navbar.nav-item name="Logout" icon="logout"/>
</div>
