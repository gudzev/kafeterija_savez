// Otvaranje razlicitih menija
function openMenu(n)
{
    for(var i = 1; i <= 8; i++)
    {
        document.getElementById("btn-" + i).classList.remove("active-btn");
        document.getElementById("drinks-" + i).classList.add("hidden-drink");
    }

    document.getElementById("btn-" + n).classList.add("active-btn");
    document.getElementById("drinks-" + n).classList.remove("hidden-drink");
}


// Otvaranje navbar menija
const mobileMenuBtn = document.getElementById("mobile-menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

mobileMenuBtn.addEventListener("click", (event) => 
{
    mobileMenu.classList.toggle("nav-active");
    // toggle moze da pali i gasi klasu, bolje je ovako nego uz dodatne promenljive npr isActive = 0 i 1
});

document.addEventListener("click", (event) => 
{
    // Ako je meni aktivan, klik nije na mobileMenu i nije na dugmetu za zatvaranje: skida se klasa
    if (mobileMenu.classList.contains("nav-active") && !mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) 
    {
        mobileMenu.classList.remove("nav-active");
    }
});


