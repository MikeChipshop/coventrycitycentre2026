jQuery(document).ready(function( $ ) {

    // Mobile Menu
    var $hamburger = $(".hamburger");
    $hamburger.on("click", function(e) {
        $('body').toggleClass('menu-open');
    });  
    
    // Cookie Popup
    var gdprnotice = localStorage.getItem('gdprnotice');
    if (gdprnotice == null) {
        $('.tfk_cookie-consent').fadeIn("slow");
    }
    $('.tfk_cookie-consent button').on('click', function(e) {
        $('.tfk_cookie-consent').fadeOut("slow");
        localStorage.setItem('gdprnotice', 1);
        e.preventDefault();
    });
    
});

/* Favourite Items Logic */




function getFavList() {
    const stored = localStorage.getItem("favelist");
    return stored ? JSON.parse(stored) : { ids: [] };
}

function saveFavList(list) {
    localStorage.setItem("favelist", JSON.stringify(list));
}

function toggleFav(id) {
    const list = getFavList();
    const index = list.ids.indexOf(id);

    if (index === -1) {
        list.ids.push(id);
    } else {
        list.ids.splice(index, 1);
    }

    saveFavList(list);
}

function updateFavButtons() {
    const list = getFavList();
    const buttons = document.querySelectorAll(".ccc26_toggle-favourite");

    buttons.forEach(btn => {
        const id = parseInt(btn.dataset.id, 10);
        if (list.ids.includes(id)) {
            btn.classList.add("is-fav");
        } else {
            btn.classList.remove("is-fav");
        }
    });
}

document.addEventListener("click", function (e) {
    const btn = e.target.closest(".ccc26_toggle-favourite");
    if (!btn) return;

    const id = parseInt(btn.dataset.id, 10);

    toggleFav(id);
    updateFavButtons();
    loadFavPosts(favOptions); // refresh favourites list immediately
});

document.addEventListener("DOMContentLoaded", () => {
    updateFavButtons();
    loadFavPosts(favOptions);
});
/***************************************************
/ Favourites List
/***************************************************/

function loadFavPosts(options = {}) {
    const {
        container = "#fav-posts",
        postType = "posts",
        fields = ["id", "title", "excerpt", "link"],
        emptyMessage = "<p>No favourites yet.</p>",
        fallbackImage = "https://2026.coventrycitycentre.co.uk/wp-content/themes/coventrycitycentre2026/img/placeholder.png"
    } = options;

    // Get favourites (you store numbers)
    const favList = JSON.parse(localStorage.getItem("favelist")) || { ids: [] };
    const ids = favList.ids; // keep as numbers

    const target = document.querySelector(container);
    if (!target) return;

    // CASE 1: no IDs at all → show message, no UL
    if (!ids || ids.length === 0) {
        target.innerHTML = `<div class="fav-empty">${emptyMessage}</div>`;
        return;
    }

    // Clear any previous empty message
    target.querySelector(".fav-empty")?.remove();

    // Ensure UL exists
    let list = target.querySelector("ul");
    if (!list) {
        list = document.createElement("ul");
        list.className = "fav-posts-list";
        target.appendChild(list);
    }

    const url = `/wp-json/wp/v2/${postType}?include=${ids.join(",")}&orderby=include&_embed=wp:featuredmedia`;

    fetch(url)
        .then(res => res.json())
        .then(posts => {
            // TEMP: log to see what's really happening
            console.log("Fav IDs:", ids);
            console.log("Posts from API:", posts);

            // If API returns nothing, show empty message
            if (!Array.isArray(posts) || posts.length === 0) {
                target.innerHTML = `<div class="fav-empty">${emptyMessage}</div>`;
                return;
            }

            // Store current items and their positions (FIRST)
            const currentItems = [...list.querySelectorAll(".fav-post:not(.removing)")];
            const firstPositions = new Map();

            currentItems.forEach(item => {
                const rect = item.getBoundingClientRect();
                firstPositions.set(item.dataset.id, {
                    top: rect.top,
                    left: rect.left,
                    height: rect.height
                });
            });

            // Find items to remove
            const postIds = new Set(posts.map(p => p.id)); // numbers
            const itemsToRemove = currentItems.filter(
                item => !postIds.has(parseInt(item.dataset.id, 10))
            );

            // Mark items for removal
            itemsToRemove.forEach(item => item.classList.add("removing"));

            setTimeout(() => {
                // Remove the items from DOM
                itemsToRemove.forEach(item => item.remove());

                // Get remaining items
                const remainingItems = [...list.querySelectorAll(".fav-post:not(.removing)")];

                // FLIP animation for remaining
                remainingItems.forEach(item => {
                    const firstPos = firstPositions.get(item.dataset.id);
                    if (!firstPos) return;

                    const lastPos = item.getBoundingClientRect();
                    const deltaY = firstPos.top - lastPos.top;
                    const deltaX = firstPos.left - lastPos.left;

                    if (deltaY !== 0 || deltaX !== 0) {
                        item.style.transition = "none";
                        item.style.transform = `translate(${deltaX}px, ${deltaY}px)`;
                        item.offsetHeight;
                        item.style.transition = "";
                        requestAnimationFrame(() => {
                            item.style.transform = "";
                        });
                    }
                });

                // Add new items
                const existingIds = new Set(
                    remainingItems.map(item => parseInt(item.dataset.id, 10))
                );

                posts.forEach(post => {
                    if (!existingIds.has(post.id)) {
                        let thumbnailUrl = fallbackImage;

                        if (
                            post._embedded &&
                            post._embedded["wp:featuredmedia"] &&
                            post._embedded["wp:featuredmedia"][0] &&
                            post._embedded["wp:featuredmedia"][0].source_url
                        ) {
                            thumbnailUrl = post._embedded["wp:featuredmedia"][0].source_url;
                        }

                        const html = `
                            <li class="fav-post" data-id="${post.id}">
                                <figure>
                                    <a href="${post.link}">
                                        <img src="${thumbnailUrl}" alt="${post.title.rendered}">
                                    </a>
                                    <button class="ccc26_favourite-button ccc26_toggle-favourite is-fav" data-id="${post.id}">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                            <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/>
                                        </svg>
                                    </button>
                                </figure>
                                <h2><a href="${post.link}">${post.title.rendered}</a></h2>
                                <div><a href="${post.link}">Find out more ></a></div>
                            </li>
                        `;

                        const temp = document.createElement("div");
                        temp.innerHTML = html;
                        const newItem = temp.firstElementChild;

                        list.appendChild(newItem);

                        requestAnimationFrame(() => {
                            newItem.classList.add("is-visible");
                        });
                    }
                });
            }, 350);
        })
        .catch(err => {
            console.error("Error loading favourite posts:", err);
        });
}

const favOptions = {
    container: "#fav-items",
    postType: "directory",
    emptyMessage: "<div><h2>Hey, You don't have any favourites yet!</h2><p>You haven't saved anything yet. Where ever you see a heart button around the website, you can click this and save a list of your favourite items for exploring later.</p></div>"
};


loadFavPosts(favOptions);

/***************************************************
/ Search Checkboxes
/***************************************************/
const allBox = document.getElementById("all");
const otherBoxes = [
    "whatson",
    "shop",
    "dine",
    "staying",
    "todo",
    "heritage"
].map(id => document.getElementById(id));

// When "All" is clicked → uncheck everything else
allBox.addEventListener("change", () => {
    if (allBox.checked) {
        otherBoxes.forEach(box => box.checked = false);
    }
});

// When any other box is clicked → uncheck "All"
otherBoxes.forEach(box => {
    box.addEventListener("change", () => {
        if (box.checked) {
            allBox.checked = false;
        }
    });
});