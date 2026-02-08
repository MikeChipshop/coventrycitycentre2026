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

const favOptions = {
    container: "#fav-items",
    postType: "pages",
    emptyMessage: "<h2>Hey, You don't have any favourites yet!</h2><p>You haven't saved anything yet. Where ever you see a heart button around the website, you can click this and save a list of your favourite items for exploring later.</p>"
};


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



/* ------------------- */

function loadFavPosts(options = {}) {
    const {
        container = "#fav-posts",
        postType = "posts",
        fields = ["id", "title", "excerpt", "link"],
        emptyMessage = "<p>No favourites yet.</p>",
        fallbackImage = "https://2026.coventrycitycentre.co.uk/wp-content/themes/coventrycitycentre2026/img/placeholder.png"
    } = options;

    const favList = JSON.parse(localStorage.getItem("favelist")) || { ids: [] };
    const ids = favList.ids;

    const target = document.querySelector(container);
    if (!target) return;

    // Show empty message if no favourites
    if (ids.length === 0) {
        target.innerHTML = emptyMessage;
        return;
    }

    const url = `/wp-json/wp/v2/${postType}?include=${ids.join(",")}&orderby=include&_embed=wp:featuredmedia`;

    fetch(url)
        .then(res => res.json())
        .then(posts => {
            // Store current items and their positions (FIRST)
            const currentItems = [...target.querySelectorAll(".fav-post:not(.removing)")];
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
            const postIds = new Set(posts.map(p => String(p.id)));
            const itemsToRemove = currentItems.filter(item => !postIds.has(item.dataset.id));
            
            // Mark items for removal
            itemsToRemove.forEach(item => {
                item.classList.add("removing");
            });

            // Wait for removal animation, then actually remove and animate remaining
            setTimeout(() => {
                // Remove the items from DOM
                itemsToRemove.forEach(item => item.remove());

                // Get remaining items
                const remainingItems = [...target.querySelectorAll(".fav-post:not(.removing)")];

                // Measure new positions (LAST)
                remainingItems.forEach(item => {
                    const firstPos = firstPositions.get(item.dataset.id);
                    if (!firstPos) return;

                    const lastPos = item.getBoundingClientRect();

                    // Calculate difference (INVERT)
                    const deltaY = firstPos.top - lastPos.top;
                    const deltaX = firstPos.left - lastPos.left;

                    // Only animate if there's actually a change
                    if (deltaY !== 0 || deltaX !== 0) {
                        // Disable transitions temporarily
                        item.style.transition = 'none';
                        
                        // Apply inverse transform
                        item.style.transform = `translate(${deltaX}px, ${deltaY}px)`;
                        
                        // Force reflow
                        item.offsetHeight;
                        
                        // Re-enable transitions
                        item.style.transition = '';
                        
                        // Animate to natural position (PLAY)
                        requestAnimationFrame(() => {
                            item.style.transform = '';
                        });
                    }
                });

                // Add new items
                const existingIds = new Set(remainingItems.map(item => item.dataset.id));
                
                posts.forEach(post => {
                    if (!existingIds.has(String(post.id))) {
                        // Get thumbnail URL with fallback
                        let thumbnailUrl = fallbackImage;

                        if (post._embedded && 
                            post._embedded['wp:featuredmedia'] && 
                            post._embedded['wp:featuredmedia'][0] &&
                            post._embedded['wp:featuredmedia'][0].source_url) {
                            thumbnailUrl = post._embedded['wp:featuredmedia'][0].source_url;
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
                        
                        const temp = document.createElement('div');
                        temp.innerHTML = html;
                        const newItem = temp.firstElementChild;
                        
                        target.appendChild(newItem);
                        
                        // Trigger fade-in animation
                        requestAnimationFrame(() => {
                            newItem.classList.add("is-visible");
                        });
                    }
                });

            }, 350); // Match the CSS removal animation duration

        })
        .catch(err => {
            console.error("Error loading favourite posts:", err);
            target.innerHTML = `
                <h2>Error loading favourites</h2>
                <p>Could not load favourites. Please refresh the page and try again.</p>
            `;
        });
}

loadFavPosts();