{{-- <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary fs-4">ENTERPRISE</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="about" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="job-list" class="dropdown-item">Job List</a>
                    <a href="job-details" class="dropdown-item">Job Detail</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="category" class="dropdown-item">Job Category</a>
                    <a href="testimonial" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404</a>
                </div>
            </div>
            <a href="contact" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav> --}}


<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary fs-4">ENTERPRISE</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" id="navbarToggler">
        <span class="fas fa-bars"></span>
    </button>
    <div class="navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <a href="/job-list" class="nav-item nav-link">Job list</a>
            <a href="/category" class="nav-item nav-link">Job Category</a>
            <a href="/testimonial" class="nav-item nav-link">Testimonial</a>



            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="jobsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Jobs</a>
                <div class="dropdown-menu" aria-labelledby="jobsDropdown">
                    <a href="/job-list" class="dropdown-item">Job List</a>
                    <a href="/job-details" class="dropdown-item">Job Detail</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a href="/category" class="dropdown-item">Job Category</a>
                    <a href="/testimonial" class="dropdown-item">Testimonial</a>
                    <a href="/404.html" class="dropdown-item">404</a>
                </div>
            </div> --}}
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Jobs</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="job-list">Job List</a></li>
                    <li><a class="dropdown-item" href="job-details">Job Detail</a></li>
                </ul>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="category">Job Category</a></li>
                    <li><a class="dropdown-item" href="testimonial">Testimonial</a></li>
                    <li><a class="dropdown-item" href="404.html">404</a></li>
                </ul>
            </div> --}}
            
            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
        <a href="/post-job" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">
            Post A Job<i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>


<style>
    /* Fix dropdown overflow */
.nav-item .dropdown-menu {
    position: absolute;
    top: 100%; /* Place below the parent link */
    left: 0;
    z-index: 1050; /* Ensure it's above other elements */
    margin-top: 0.5rem; /* Add space between link and dropdown */
    width: auto; /* Default width */
    min-width: 200px; /* Set a minimum width */
}

/* Prevent navbar overflow caused by dropdowns */
.navbar-nav {
    overflow: visible !important;
}

/* Prevent scrollbars in the navbar */
.navbar-collapse {
    overflow: hidden !important;
}


    /* Ensure navbar stays within view on desktop */
.navbar {
    overflow: visible !important; /* Prevent scrollbars */
}

   /* Slide-in Navbar for Mobile */
   /* Slide-in Navbar for Mobile */
.navbar-collapse {
    position: fixed;
    top: 0;
    right: -300px;
    height: 100%;
    width: 300px;
    background: #fff;
    transition: right 0.3s ease-in-out;
    z-index: 1050;
    box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
    overflow-y: auto;
}

.navbar-collapse.show {
    right: 0;
    z-index: 1040; 
}

/* Ensure Navbar Links are Visible on Desktop */
@media (min-width: 992px) {
    .navbar-collapse {
        position: static;
        height: auto;
        width: auto;
        box-shadow: none;
        transition: none;
        right: 0;
    }
}

/* Adjust Navbar Toggler */
.navbar-toggler {
    z-index: 1050; 
    border: none;
    outline: none;
}

.navbar-toggler .fas {
    font-size: 24px;
}

/* Dropdown Styles */
.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.15);
    z-index: 1000;
    padding: 0.5rem 0;
}

.dropdown-menu.show {
    display: block;
}

.nav-item.dropdown {
    position: relative;
}

/* Adjust dropdown display for larger screens */
@media (min-width: 992px) {
    .navbar-nav .dropdown:hover .dropdown-menu {
        display: block;
    }
}

</style>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const toggler = document.getElementById("navbarToggler");
    const collapse = document.getElementById("navbarCollapse");
    const links = document.querySelectorAll(".nav-link");
    const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

    // Toggle Navbar
    toggler.addEventListener("click", () => {
        const icon = toggler.querySelector(".fas");
        collapse.classList.toggle("show");
        if (collapse.classList.contains("show")) {
            icon.classList.remove("fa-bars");
            icon.classList.add("fa-times");
        } else {
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
        }
    });

    // Dropdown Toggle Logic for Mobile
    dropdownToggles.forEach((dropdownToggle) => {
        dropdownToggle.addEventListener("click", (e) => {
            e.preventDefault(); // Prevent link navigation
            const dropdownMenu = dropdownToggle.nextElementSibling;
            if (dropdownMenu.classList.contains("show")) {
                dropdownMenu.classList.remove("show");
            } else {
                // Close other dropdowns
                document.querySelectorAll(".dropdown-menu").forEach((menu) => menu.classList.remove("show"));
                dropdownMenu.classList.add("show");
            }
        });
    });

    // Set Active Class
    const currentPath = window.location.pathname;
    links.forEach((link) => {
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });

    // Close Dropdowns When Clicking Outside
    document.addEventListener("click", (e) => {
        if (!e.target.closest(".nav-item.dropdown")) {
            document.querySelectorAll(".dropdown-menu").forEach((menu) => menu.classList.remove("show"));
        }
    });
});


</script>