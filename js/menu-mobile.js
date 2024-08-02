(() => {

    const header = document.querySelector('.header-area');
    const openNavMenu = document.querySelector(".open-nav-menu"),
        closeNavMenu = document.querySelector(".close-nav-menu"),
        navMenu = document.querySelector(".nav-menu"),
        menuOverlay = document.querySelector(".menu-overlay"),
        mediaSize = 991;

    openNavMenu.addEventListener("click", toggleNav);
    closeNavMenu.addEventListener("click", toggleNav);
    // close the navMenu by clicking outside
    menuOverlay.addEventListener("click", toggleNav);

    function toggleNav() {
        navMenu.classList.toggle("open");
        menuOverlay.classList.toggle("active");
        document.body.classList.toggle("hidden-scrolling");
    }

    let mainSubMenu = document.querySelector('.main-sub-menu')

    var mainSubMenuHeight;
    var mainAltura = 0;
    navMenu.addEventListener("click", (event) => {
        // event.preventDefault();
        // console.log(event.target);
        if (event.target.hasAttribute("data-toggle") &&
            window.innerWidth <= mediaSize) {
            // prevent default anchor click behavior
            event.preventDefault();

            const mainSubMenu = document.querySelector('.main-sub-menu')
            const menuItemHasChildren = event.target.parentElement;


            // console.log(menuItemHasChildren.classList);
            if (menuItemHasChildren.classList.contains("main-sub-menu") && menuItemHasChildren.classList.contains("active")) {
                const allSubMenus = navMenu.querySelectorAll('.menu-item.has-children');
                allSubMenus.forEach((e) => {
                    e.classList.remove('active')
                    e.querySelector('ul').style.maxHeight = 0
                })
            } else {
                menuItemHasChildren.classList.toggle('active')

                if (menuItemHasChildren.classList.contains("main-sub-menu") && menuItemHasChildren.classList.contains("active")) {
                    mainSubMenuHeight = menuItemHasChildren.querySelector(".main-sub-menu .sub-menu");
                    mainSubMenuHeight.style.maxHeight = mainSubMenuHeight.scrollHeight + "px";
                    mainAltura = mainSubMenuHeight.scrollHeight;
                } else {
                    let subMenuHeight = menuItemHasChildren.querySelector(".sub-menu");

                    if(!menuItemHasChildren.classList.contains("active")) {
                        mainAltura -= subMenuHeight.scrollHeight;
                        subMenuHeight.style.maxHeight = 0;
                    } else {
                        mainAltura += subMenuHeight.scrollHeight;
                        subMenuHeight.style.maxHeight = subMenuHeight.scrollHeight + "px";
                    }

                    mainSubMenuHeight.style.maxHeight = mainAltura + "px";

                }
            }

            // console.log(event.target, 'target');
            // if menuItemHasChildren is already expanded, collapse it
            // if (menuItemHasChildren.classList.contains("active")) {
            //     // collapseSubMenu();
            // } else {
            //     // collapse existing expanded menuItemHasChildren
            //     // if (navMenu.querySelector(".has-children.active")) {
            //         // collapseSubMenu();
            //     // }
            //     // expand new menuItemHasChildren
            //     menuItemHasChildren.classList.add("active");
            //     const subMenu = menuItemHasChildren.querySelector(".sub-menu");
            //     // console.log(subMenu.parentElement, 'ELSE');
            //     subMenu.style.maxHeight = subMenu.scrollHeight + "px";
            //     // mainSubMenu.style.maxHeight = subMenu.scrollHeight + "px";

            // }
        }
    });

    function collapseSubMenu() {
        navMenu.querySelector(".has-children.active .sub-menu").removeAttribute("style");
        navMenu.querySelector(".has-children.active").classList.remove("active");
    }

    function resizeFix() {
        // if navMenu is open ,close it
        if (navMenu.classList.contains("open")) {
            toggleNav();
        }
        // if menuItemHasChildren is expanded , collapse it
        if (navMenu.querySelector(".has-children.active")) {
            collapseSubMenu();
        }
    }

    window.addEventListener("resize", function () {
        if (this.innerWidth > mediaSize) {
            resizeFix();
        }
    });

    window.addEventListener('scroll', () => {
        header.classList.toggle('sticky', window.scrollY > 0);
    });


})();
