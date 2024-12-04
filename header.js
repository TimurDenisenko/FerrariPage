document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector('.main-header');
    header.classList.add('show');

    let lastScroll = 0;

    window.addEventListener('scroll', function () {
        const currentScroll = window.scrollY;

        if (currentScroll > lastScroll && currentScroll > 50) {
            header.classList.remove('show');
        } else {
            header.classList.add('show');
        }

        if (currentScroll <= 50) {
            header.classList.remove('scrolled');
        } else {
            header.classList.add('scrolled');
        }

        lastScroll = currentScroll;
        closeAllDropdowns();
    });

    const dropdownItems = document.querySelectorAll('.nav-item');
    const content = document.querySelector("#content");

    function isMobile() {
        return window.innerWidth < 768;
    }

    function closeAllDropdowns() {
        dropdownItems.forEach(item => {
            item.classList.remove('active');
            const dropdownMenu = item.querySelector('.dropdown-menu');
            if (dropdownMenu) {
                dropdownMenu.style.opacity = '0';
                dropdownMenu.style.visibility = 'hidden';
                dropdownMenu.style.display = 'none';
            }
            const dropdownItemsList = item.querySelectorAll('.dropdown-item');
            dropdownItemsList.forEach(model => model.classList.remove('show'));
        });
        content.style.filter = "blur(0)";
    }

    function openDropdown(item) {
        const dropdownMenu = item.querySelector('.dropdown-menu');
        const dropdownItemsList = item.querySelectorAll('.dropdown-item');

        if (dropdownMenu) {
            item.classList.add('active');
            dropdownMenu.style.display = 'block';
            setTimeout(() => {
                dropdownMenu.style.opacity = '1';
                dropdownMenu.style.visibility = 'visible';
                content.style.filter = "blur(10px)";
            }, 10);

            dropdownItemsList.forEach((model, index) => {
                setTimeout(() => {
                    model.classList.add('show');
                }, index * 150);
            });
        }
    }

    function closeDropdown(item) {
        const dropdownMenu = item.querySelector('.dropdown-menu');
        const dropdownItemsList = item.querySelectorAll('.dropdown-item');

        if (dropdownMenu) {
            item.classList.remove('active');
            dropdownMenu.style.opacity = '0';
            dropdownMenu.style.visibility = 'hidden';
            dropdownMenu.style.display = 'none';
            content.style.filter = "blur(0)";

            dropdownItemsList.forEach(model => model.classList.remove('show'));
        }
    }

    function handleClick(item) {
        const isActive = item.classList.contains('active');

        if (isActive) {
            closeDropdown(item);
        } else {
            closeAllDropdowns();
            openDropdown(item);
        }
    }

    dropdownItems.forEach(item => {
        const dropdownLink = item.querySelector('.nav-link');
        const dropdownMenu = item.querySelector('.dropdown-menu');

        if (!dropdownLink || !dropdownMenu) return;

        dropdownLink.setAttribute('aria-haspopup', 'true');
        dropdownLink.setAttribute('aria-expanded', 'false');

        if (!isMobile()) {
            item.addEventListener('mouseenter', () => {
                openDropdown(item);
                dropdownLink.setAttribute('aria-expanded', 'true');
            });

            item.addEventListener('mouseleave', () => {
                closeDropdown(item);
                dropdownLink.setAttribute('aria-expanded', 'false');
            });
        } else {
            dropdownLink.addEventListener('click', function() {
                handleClick(item);
            });
        }
    });

    window.addEventListener('resize', function() {
        dropdownItems.forEach(item => {
            const dropdownLink = item.querySelector('.nav-link');
            const dropdownMenu = item.querySelector('.dropdown-menu');

            if (!dropdownLink || !dropdownMenu) return;

            const newDropdownLink = dropdownLink.cloneNode(true);
            dropdownLink.parentNode.replaceChild(newDropdownLink, dropdownLink);

            newDropdownLink.setAttribute('aria-haspopup', 'true');
            newDropdownLink.setAttribute('aria-expanded', 'false');

            if (!isMobile()) {
                newDropdownLink.parentElement.addEventListener('mouseenter', () => {
                    openDropdown(newDropdownLink.parentElement);
                    newDropdownLink.setAttribute('aria-expanded', 'true');
                });

                newDropdownLink.parentElement.addEventListener('mouseleave', () => {
                    closeDropdown(newDropdownLink.parentElement);
                    newDropdownLink.setAttribute('aria-expanded', 'false');
                });
            } else {
                newDropdownLink.addEventListener('click', function() {
                    handleClick(newDropdownLink.parentElement);
                });
            }
        });

        if (!isMobile()) {
            closeAllDropdowns();
        }
    });

    document.addEventListener('click', function(event) {
        dropdownItems.forEach(item => {
            const dropdownLink = item.querySelector('.nav-link');
            if (isMobile()) {
                if (!item.contains(event.target)) {
                    if (item.classList.contains('active')) {
                        closeDropdown(item);
                        dropdownLink.setAttribute('aria-expanded', 'false');
                    }
                }
            }
        });
        if (isMobile()) {
            content.style.filter = "blur(0)";
        }
    });
});
