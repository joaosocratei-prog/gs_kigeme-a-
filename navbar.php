
<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$navItems = [
    'index.php'      => 'Home',
    'about.php'      => 'About',
    'academic.php'   => 'Academics',
    'staff.php'      => 'Staff',
    'activities.php' => 'Activities',
    'discover.php'   => 'Discover',
    'gallery.php'    => 'Gallery',
    'contact.php'    => 'Contact'
];
?>

<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">

<style>
:root {
    --primary: #104B32;
    --green: #176B46;
    --emerald: #21885B;
    --gold: #F2C45B;
    --white: #FFFFFF;
    --transition: all .3s ease;
}

/* HEADER - NORMAL POSITION, NOT STICKY */
.site-header {
    position: relative;
    width: 100%;
    z-index: 1000;
    background: linear-gradient(110deg, #103D2B, #176B46, #21885B);
    box-shadow: 0 5px 22px rgba(8, 48, 30, .25);
    border-bottom: 2px solid rgba(242,196,91,.65);
    border-radius: 12px;
}

/* MAIN NAVBAR */
.navbar {
    max-width: 1500px;
    min-height: 95px;
    margin: auto;
    padding: 0 4%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
}

/* LOGO */
.brand {
    display: flex;
    align-items: center;
    gap: 15px;
    text-decoration: none;
    flex-shrink: 0;
    margin-right: auto;
}

.brand-icon {
    width: 55px;
    height: 55px;
    display: grid;
    place-items: center;
    background: var(--gold);
    color: #103D2B;
    border: 2px solid rgba(255,255,255,.7);
    border-radius: 15px;
    font-size: 29px;
    font-weight: 800;
    font-family: 'Poppins', sans-serif;
}

.brand-text {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.brand-text strong {
    color: white;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    white-space: nowrap;
}

.brand-text strong span {
    color: var(--gold);
}

.brand-text small {
    color: #D5E9DC;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
}

/* NAVIGATION BUTTONS */
.nav-links {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-links a {
    display: block;
    padding: 13px 15px;
    color: white;
    text-decoration: none;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 700;
    border: 1px solid rgba(255,255,255,.18);
    border-radius: 12px;
    background: rgba(255,255,255,.08);
    transition: var(--transition);
}

.nav-links a:hover {
    background: white;
    color: var(--primary);
    border-color: white;
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0,0,0,.15);
}

/* ACTIVE PAGE */
.nav-links a.active {
    background: var(--gold);
    color: #103D2B;
    border-color: var(--gold);
    box-shadow: 0 4px 12px rgba(0,0,0,.12);
}

/* CONTACT BUTTON */
.nav-cta {
    flex-shrink: 0;
    padding: 14px 19px;
    background: var(--gold);
    color: #103D2B;
    border-radius: 12px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 800;
    transition: var(--transition);
}

.nav-cta:hover {
    background: white;
    transform: translateY(-3px);
}

/* HAMBURGER BUTTON */
.menu-btn {
    display: none;
    width: 45px;
    height: 45px;
    padding: 10px;
    border: 1px solid rgba(255,255,255,.4);
    border-radius: 11px;
    background: rgba(255,255,255,.1);
    cursor: pointer;
}

.menu-btn span {
    display: block;
    height: 2px;
    width: 100%;
    margin: 5px 0;
    background: white;
    border-radius: 5px;
    transition: var(--transition);
}

.menu-btn.open span:nth-child(1) {
    transform: translateY(7px) rotate(45deg);
}

.menu-btn.open span:nth-child(2) {
    opacity: 0;
}

.menu-btn.open span:nth-child(3) {
    transform: translateY(-7px) rotate(-45deg);
}

/* ACCESSIBILITY */
.navbar a:focus-visible,
.menu-btn:focus-visible {
    outline: 3px solid var(--gold);
    outline-offset: 4px;
}

/* TABLET */
@media(max-width: 1200px) {
    .navbar {
        gap: 18px;
        padding: 0 2%;
    }

    .nav-links {
        gap: 5px;
    }

    .nav-links a {
        padding: 12px 9px;
        font-size: 12px;
    }

    .brand-text strong {
        font-size: 15px;
    }

    .nav-cta {
        padding: 12px;
    }
}

/* MOBILE */
@media(max-width: 950px) {
    .navbar {
        min-height: 80px;
        padding: 0 5%;
    }

    .menu-btn {
        display: block;
        margin-left: auto;
    }

    .nav-cta {
        display: none;
    }

    .nav-links {
        position: absolute;
        top: 80px;
        left: 0;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        gap: 9px;
        padding: 20px 5%;
        background: #104B32;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: var(--transition);
        box-shadow: 0 12px 20px rgba(0,0,0,.2);
    }

    .nav-links.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .nav-links a {
        padding: 14px 18px;
        font-size: 14px;
    }
}

/* SMALL PHONES */
@media(max-width: 480px) {
    .brand-icon {
        width: 46px;
        height: 46px;
        font-size: 24px;
    }

    .brand-text strong {
        font-size: 14px;
    }

    .brand-text small {
        font-size: 8px;
    }
}
</style>

<!-- NAVBAR HTML -->
<header class="site-header">
    <nav class="navbar">

        <!-- SCHOOL BRAND -->
        <a href="index.php" class="brand">
            <div class="brand-icon">G</div>

            <div class="brand-text">
                <strong>GS KIGEME <span>-A-</span></strong>
                <small>GROUP SCOLAIRE KIGEME -A-</small>
            </div>
        </a>

        <!-- NAVIGATION LINKS -->
        <ul class="nav-links" id="navLinks">
            <?php foreach ($navItems as $file => $label): ?>
                <li>
                    <a href="<?php echo htmlspecialchars($file); ?>"
                       class="<?php echo ($currentPage === $file) ? 'active' : ''; ?>">
                        <?php echo htmlspecialchars($label); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- MOBILE MENU BUTTON -->
        <button class="menu-btn"
                id="menuBtn"
                type="button"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                aria-controls="navLinks">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </nav>
</header>

<!-- JAVASCRIPT -->
<script>
(function () {
    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    if (!menuBtn || !navLinks) return;

    function closeMenu() {
        navLinks.classList.remove("show");
        menuBtn.classList.remove("open");
        menuBtn.setAttribute("aria-expanded", "false");
    }

    menuBtn.addEventListener("click", function () {
        const isOpen = navLinks.classList.toggle("show");

        menuBtn.classList.toggle("open", isOpen);
        menuBtn.setAttribute("aria-expanded", isOpen);
    });

    navLinks.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", closeMenu);
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") closeMenu();
    });

    window.addEventListener("resize", function () {
        if (window.innerWidth > 950) closeMenu();
    });
})();
</script>
