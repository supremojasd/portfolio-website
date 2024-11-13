// Smooth scroll to #home section when logo is clicked
document.querySelector('.logo a').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('home').scrollIntoView({ behavior: 'smooth' });
});

/* ===================== TYPING ANIMATION =========================*/
var typed = new Typed(".typing", {
    strings: ["Computer Science Student","Web Developer", "Web Designer",],
    typeSpeed: 100,
    backSpeed: 60, // Corrected case
    loop: true
});

/* ===================== ASIDE =========================*/
const nav = document.querySelector(".nav"), 
    navList = nav.querySelectorAll("li"),
    totalNavList = navList.length,
    allSection = document.querySelectorAll(".section"),
    totalSection = allSection.length;

for(let i = 0; i < totalNavList; i++ ) {
    const a = navList[i].querySelector("a");
    a.addEventListener("click", function() {
        removeBackSection();
        // Manage active and back-section classes
        for(let j = 0; j < totalNavList; j++ ) {
            if(navList[j].querySelector("a").classList.contains("active")) {
                addBackSection(j);
                // allSection[j].classList.add("back-section");  // Use 'j' instead of 1
            }
            navList[j].querySelector("a").classList.remove("active");
        }
        this.classList.add("active");
        showSection(this);

        if(window.innerWidth < 1200) {
            asideSectionTogglerBtn();
        }
    });
}
function removeBackSection()
{
    for(let i = 0; i < totalSection; i++ ) 
    {
        allSection[i].classList.remove("back-section");  // Use 'i' instead of 1
    }
}
function addBackSection(num)
{
    allSection[num].classList.add("back-section");  // Use 'j' instead of 1
}
function showSection(element) {
    // Remove 'active' class from all sections
    for(let i = 0; i < totalSection; i++ ) {
        allSection[i].classList.remove("active");  // Use 'i' instead of 1
    }
    // Add 'active' class to the target section
    const target = element.getAttribute("href").split("#")[1];
    document.querySelector("#" + target).classList.add("active");
}

// Nav Toggler Button functionality
function updateNav(element)
{
    for(let i = 0;  i<totalNavList; i++ ) 
    {
        navList[i].querySelector("a").classList.remove("active");
        const target = element.getAttribute("href").split("#")[1];
        if (target === navList[1].querySelector("a").getAttribute("href").split("#")[1])
        {
            navList[i].querySelector("a").classList.add("active");
        }
    }
}
document.querySelector(".hire-me").addEventListener("click", function ()
{
    const sectionIndex = this.getAttribute("data-section-index");
    // console.log (sectionIndex);
    showSection(this);
    updateNav(this);
    removeBackSection();
    addBackSection(sectionIndex);
})
document.querySelector(".more-about-me").addEventListener("click", function ()
{
    const sectionIndex = this.getAttribute("data-section-index");
    // console.log (sectionIndex);
    showSection(this);
    updateNav(this);
    removeBackSection();
    addBackSection(sectionIndex);
})
// document.querySelector(".port").addEventListener("click", function ()
// {
//     const sectionIndex = this.getAttribute("data-section-index");
//     // console.log (sectionIndex);
//     showSection(this);
//     updateNav(this);
//     removeBackSection();
//     addBackSection(sectionIndex);
// })
const navTogglerBtn = document.querySelector(".nav-toggler"), 
    aside = document.querySelector(".aside");

navTogglerBtn.addEventListener("click", () => {
    asideSectionTogglerBtn();
});

function asideSectionTogglerBtn() {
    aside.classList.toggle("open");
    navTogglerBtn.classList.toggle("open");
    for(let i = 0; i < totalSection; i++ ) {
        allSection[i].classList.toggle("open");  // Use 'i' instead of 1
    }
}
