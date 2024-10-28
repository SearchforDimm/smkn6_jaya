// Selecting the sidebar and buttons
const sidebar = document.querySelector(".sidebar");
const sidebarOpenBtn = document.querySelector("#sidebar-open");
const sidebarCloseBtn = document.querySelector("#sidebar-close");
const sidebarLockBtn = document.querySelector("#lock-icon");
const searchBox = document.querySelector(".nav-wrapper");
const searchBar = document.querySelector(".search_absolute");
const profile = document.querySelector(".nav-absolute");
const sectionAct = document.querySelector(".section-act")
const openProfile = document.querySelector(".dropdown-profile-wrap");
const navDrop = document.querySelector(".nav-profile-dropdown")
const settings = document.querySelector(".sidebar-dropdown")
const settingsClick = document.querySelector(".sidebar-dropdown-wrap")
const toggleLock = () => {
  sidebar.classList.toggle("locked");
  // If the sidebar is not locked
  if (!sidebar.classList.contains("locked")) {
    sidebar.classList.add("hoverable");
    sidebarLockBtn.classList.replace("bx-lock-alt", "bx-lock-open-alt");
    searchBox.classList.remove("active-navbar");
    searchBar.classList.remove("active-search");
    sectionAct.classList.remove("active-section-act");
    
} else {
    sidebar.classList.remove("hoverable");
    sidebarLockBtn.classList.replace("bx-lock-open-alt", "bx-lock-alt");
    searchBox.classList.add("active-navbar");
    searchBar.classList.add("active-search");
    sectionAct.classList.add("active-section-act");
  }
};

const hideSidebar = () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
};


const showSidebar = () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
};

const toggleSidebar = () => {
  sidebar.classList.toggle("close");
};

sidebar.addEventListener("click", () => {
    if (sidebar.classList.contains("close")) {
      sidebar.classList.remove("close");
    }
})

document.addEventListener('click', function(event) {
  const link = event.target.closest('.link.dropdown');
  
  // Close all open dropdowns
  document.querySelectorAll('.dropdown-content.show').forEach(dropdown => {
    dropdown.classList.remove('show');
    dropdown.previousElementSibling.setAttribute('aria-expanded', 'false');
    
    // Disable focus for hidden dropdown
    dropdown.querySelectorAll('a').forEach(link => {
      link.setAttribute('tabindex', '-1');
    });
  });

  // Toggle the clicked dropdown
  if (link) {
    event.preventDefault();
    const dropdown = link.nextElementSibling;
    const isOpen = dropdown.classList.contains('show');
    
    if (!isOpen) {
      link.setAttribute('aria-expanded', 'true');
      dropdown.classList.add('show');

      // Enable focus for visible dropdown
      dropdown.querySelectorAll('a').forEach(link => {
        link.removeAttribute('tabindex');
      });
    }
  }
});

// Ensure dropdowns are closed when clicking outside
document.addEventListener('click', function(event) {
  if (!event.target.closest('.item')) {
    document.querySelectorAll('.dropdown-content.show').forEach(dropdown => {
      dropdown.classList.remove('show');
      dropdown.previousElementSibling.setAttribute('aria-expanded', 'false');

      // Disable focus for hidden dropdown
      dropdown.querySelectorAll('a').forEach(link => {
        link.setAttribute('tabindex', '-1');
      });
    });
  }
});

function toggleProfile() {
  openProfile.classList.toggle("open-profile");
}
settingsClick.addEventListener("click", () => {
  settings.classList.toggle("open-settings")
})

sidebarLockBtn.addEventListener("click", toggleLock);
sidebar.addEventListener("mouseleave", hideSidebar);
sidebar.addEventListener("mouseenter", showSidebar);
  sidebarCloseBtn.addEventListener("click", toggleSidebar);