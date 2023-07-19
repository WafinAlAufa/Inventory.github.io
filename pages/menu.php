<div class="side-bar">
    <div class="admin_menu_or_user">
        <h1 class="admin-or-user-inside">Admin tools</h1>
    </div>
    <div class="box-side-bar-1">
        <!-- dashboard -->
        <div class="logo-side-bar-1" id="logo-side-bar-1" onclick="location.href='index.php?nav=dashboard';">
            <div class="img-s-1">
                <i class="fa-solid fa-book"></i>
            </div>
            <div class="text-s-1">
                <h1 class="text-side-bar-1"><a href="index.php?nav=dashboard" class="s_1_t">Overview</a></h1>
            </div>
        </div>
        <!-- product -->
        <div class="logo-side-bar-2" id="logo-side-bar-2" onclick="location.href='index.php?nav=product';">
            <div class="img-s-2">
                <i class="fa-solid fa-box"></i>
            </div>
            <div class="text-s-2">
                <h1 class="text-side-bar-2"><a href="index.php?nav=product" class="s_2_t">Products</a></h1>
            </div>
        </div>
        <!-- data master -->
        <div class="dropdown-m-d-b">
            <div class="logo-side-bar-3" id="logo-side-bar-3" onclick="toggleDropdown('child'),toggleDropdown('child_2')">
                <div class="img-s-3">
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="text-s-3">
                    <h1 class="text-side-bar-3"><a href="#" class="s_3_t"> Data Master </a></h1>
                </div>
            </div>
            <!-- dropdown menu master data -->
            <div class="child" id="child" onclick="location.href='index.php?nav=master';">
                <div class="img-s-3">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <div class="text-s-3">
                    <h1 class="text-side-bar-3"><a href="#" class="s_3_t"> Vendor </a></h1>
                </div>
            </div>
            <div class="child_2" id="child_2" onclick="location.href='index.php?nav=client';">
                <div class="img-s-3">
                    <i class="fa-solid fa-person-running"></i>
                </div>
                <div class="text-s-3">
                    <h1 class="text-side-bar-3"><a href="#" class="s_3_t"> Client </a></h1>
                </div>
            </div>
        </div>
        <!-- data transaksi -->
        <div class="dropdown-m-d-b">
            <div class="logo-side-bar-3" id="logo-side-bar-3" onclick="toggleDropdown('money'),toggleDropdown('money_2')">
                <div class="img-s-3">
                    <i class="fa-solid fa-money-bill"></i>
                </div>
                <div class="text-s-3">
                    <h1 class="text-side-bar-3"><a href="#" class="s_3_t">Data Transaction</a></h1>
                </div>
            </div>
            <!-- dropdown menu transaksi data -->
            <div class="money" id="money" onclick="location.href='index.php?nav=transaction';">
                <div class="img-s-3">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <div class="text-s-3">
                    <h1 class="text-side-bar-3"><a href="#" class="s_3_t"> Vendor </a></h1>
                </div>
            </div>
            <div class="money_2" id="money_2" onclick="location.href='index.php?nav=transaction&client';">
                <div class="img-s-3">
                    <i class="fa-solid fa-person-running"></i>
                </div>
                <div class="text-s-3">
                    <h1 class="text-side-bar-3"><a href="#" class="s_3_t"> Client </a></h1>
                </div>
            </div>
        </div>

        <!--setting -->
        <div class="dropdown-s-b">
            <div class="logo-side-bar-4" id="logo-side-bar-4" onclick="toggleDropdown('hakAccess'),toggleDropdown('addUsers')">
                <div class="img-s-4">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="text-s-4">
                    <h1 class="text-side-bar-4"><a href="#" class="s_4_t"> Settings </a></h1>
                </div>
            </div>
            <!-- dropdown settings -->
            <div class="addUsers" id="addUsers">
                <div class="img-s-4">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div class="text-s-4">
                    <h1 class="text-side-bar-4"><a href="index.php?nav=setting" class="s_4_t"> Settings Users </a></h1>
                </div>
            </div>
            <div class="hakAccess" id="hakAccess">
                <div class="img-s-4">
                    <i class="fa-solid fa-universal-access"></i>
                </div>
                <div class="text-s-4">
                    <h1 class="text-side-bar-4"><a href="index.php?nav=access" class="s_4_t"> Access Rights </a></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleDropdown(elementId) {
        var element = document.getElementById(elementId);
        var computedStyle = window.getComputedStyle(element);
        if (computedStyle.display === "none") {
            element.style.display = "flex";
            element.offsetHeight;
            element.classList.add("downMaster");
        } else {
            element.style.display = "none";
            element.classList.remove("downMaster");
        }
    }
</script>