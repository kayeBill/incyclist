</main>
<!-- MAIN -->
</section>
<!-- NAVBAR -->

<!-- SCRIPT -->
<script>
    var loader = document.getElementById("preloader");

    window.addEventListener("load", function () {
        loader.style.display = "none";
    })
</script>
<script>
    // SEARCH FORM TOGGLE
    const searchForm = document.querySelector('.search-form');
    const searchBtn = document.querySelector('#search-btn');

    searchBtn.addEventListener('click', function () {
        searchForm.classList.toggle('active');
        console.log(searchForm);
    })

    // SIDEBAR DROPDOWN
    const allDropdwon = document.querySelectorAll('#sidebar .side-dropdown');
    const sidebar = document.getElementById('sidebar');

    allDropdwon.forEach(item => {
        const a = item.parentElement.querySelector('a:first-child');
        a.addEventListener('click', function (e) {
            e.preventDefault();

            if (!this.classList.contains('active')) {
                allDropdwon.forEach(i => {
                    const aLink = i.parentElement.querySelector('a:first-child');

                    aLink.classList.remove('active');
                    i.classList.remove('show');
                })
            }

            this.classList.toggle('active');
            item.classList.toggle('show');
        })
    })

    // SIDEBAR COLLAPSE
    const toggleSidebar = document.querySelector('nav .toggle-sidebar');
    const allSideDivider = document.querySelectorAll('#sidebar .divider')

    if (sidebar.classList.contains('hide')) {
        allSideDivider.forEach(item => {
            item.textContent = '-'
        })
        allDropdwon.forEach(item => {
            const a = item.parentElement.querySelector('a:first-child');
            a.classList.remove('active');
            item.classList.remove('show');
        })
    } else {
        allSideDivider.forEach(item => {
            item.textContent = item.dataset.text;
        })
    }

    toggleSidebar.addEventListener('click', function () {
        sidebar.classList.toggle('hide');

        if (sidebar.classList.contains('hide')) {
            allSideDivider.forEach(item => {
                item.textContent = '-'
            })
            allDropdwon.forEach(item => {
                const a = item.parentElement.querySelector('a:first-child');
                a.classList.remove('active');
                item.classList.remove('show');
            })
        } else {
            allSideDivider.forEach(item => {
                item.textContent = item.dataset.text;
            })
        }
    })

    sidebar.addEventListener('mouseleave', function () {
        if (this.classList.contains('hide')) {
            allDropdwon.forEach(item => {
                const a = item.parentElement.querySelector('a:first-child');
                a.classList.remove('active');
                item.classList.remove('show');
            })
            allSideDivider.forEach(item => {
                item.textContent = '-'
            })
        }
    })

    sidebar.addEventListener('mouseenter', function () {
        if (this.classList.contains('hide')) {
            allDropdwon.forEach(item => {
                const a = item.parentElement.querySelector('a:first-child');
                a.classList.remove('active');
                item.classList.remove('show');
            })
            allSideDivider.forEach(item => {
                item.textContent = item.dataset.text;
            })
        }
    })

    if (screen.width < 768) {
        sidebar.classList.toggle('hide');
        allDropdwon.forEach(item => {
            const a = item.parentElement.querySelector('a:first-child');
            a.classList.remove('active');
            item.classList.remove('show');
        })
        allSideDivider.forEach(item => {
            item.textContent = '-'
        })
    } else {
        sidebar.classList.remove('hide');
        allDropdwon.forEach(item => {
            const a = item.parentElement.querySelector('a:first-child');
            a.classList.remove('active');
            item.classList.remove('show');
        })
        allSideDivider.forEach(item => {
            item.textContent = item.dataset.text;
        })
    }

    // window.addEventListener("resize", function () {
    //     if (screen.width < 768) {
    //         console.log(screen.width);
    //         sidebar.classList.toggle('hide');
    //         allDropdwon.forEach(item => {
    //             const a = item.parentElement.querySelector('a:first-child');
    //             a.classList.remove('active');
    //             item.classList.remove('show');
    //         })
    //         allSideDivider.forEach(item => {
    //             item.textContent = '-'
    //         })
    //     } else {
    //         sidebar.classList.remove('hide');
    //         allDropdwon.forEach(item => {
    //             const a = item.parentElement.querySelector('a:first-child');
    //             a.classList.remove('active');
    //             item.classList.remove('show');
    //         })
    //         allSideDivider.forEach(item => {
    //             item.textContent = item.dataset.text;
    //         })
    //     }
    // })

    // PROFILE DROPDOWN
    const profile = document.querySelector('nav .profile');
    const imgProfile = profile.querySelector('img');
    const dropdownProfile = profile.querySelector('.profile-link');

    imgProfile.addEventListener('click', function () {
        dropdownProfile.classList.toggle('show');
    })

    window.addEventListener('click', function (e) {
        if (e.target !== imgProfile) {
            if (e.target !== dropdownProfile) {
                if (dropdownProfile.classList.contains('show')) {
                    dropdownProfile.classList.remove('show');
                }
            }
        }
    })
</script>
<!-- SCRIPT -->