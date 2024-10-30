<?php
$cek    = $user;
$nama   = $cek->nama_lengkap;
?>

<!-- <footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; <?php echo date('Y'); ?> <?= $nama ?>. Created with passion by Dimas & Muzhaffar.
  </div>
</footer> -->
</div>
</div>


<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="assets/assets_stisla/js/page/bootstrap-modal.js"></script>

<!-- JS Libraies -->
<script src="assets/assets_stisla/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
<script src="assets/assets_stisla/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="assets/assets_stisla/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/assets_stisla/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/assets_stisla/node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="assets/assets_stisla/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Template JS File -->
<script src="assets/assets_stisla/js/scripts.js"></script>
<script src="assets/assets_stisla/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="assets/assets_stisla/js/page/index-0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
  let currentPage = 1;
  let rowsPerPage = 10;

  document.getElementById('entries').addEventListener('change', function() {
    rowsPerPage = parseInt(this.value);
    currentPage = 1;
    paginateTable();
  });

  function paginateTable() {
    const table = document.getElementById('data-table');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    const totalRows = rows.length;
    const totalPages = Math.ceil(totalRows / rowsPerPage);
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    // Display rows for current page
    for (let i = 0; i < totalRows; i++) {
      rows[i].style.display = (i >= start && i < end) ? '' : 'none';
    }

    // Update showing info
    document.getElementById('showing-info').innerHTML = `Showing ${start + 1} to ${Math.min(end, totalRows)} of ${totalRows} entries`;

    // Create pagination buttons
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';
    for (let i = 1; i <= totalPages; i++) {
      const btn = document.createElement('button');
      btn.innerHTML = i;
      btn.classList.add('page-btn');
      if (i === currentPage) {
        btn.classList.add('active');
      }
      btn.onclick = function() {
        currentPage = i;
        paginateTable();
      };
      pagination.appendChild(btn);
    }
  }

  function initializeTable() {
    const headers = document.querySelectorAll('#data-table th');
    headers.forEach((header, index) => {
      // Set the initial sort order to ascending ('asc')
      header.setAttribute('data-sort-order', 'asc');

      // Set a default sort icon (up arrow) on load for sortable columns
      if (header.onclick) {
        header.innerHTML = header.innerText + ' \u25B2'; // Up arrow
      }
    });
  }

  function sortTable(columnIndex) {
    const table = document.getElementById('data-table');
    const headers = table.querySelectorAll('th');
    const rows = Array.from(table.querySelectorAll('tbody tr'));

    const currentHeader = headers[columnIndex];
    const isAscending = currentHeader.getAttribute('data-sort-order') === 'asc';

    headers.forEach((header, index) => {
      if (index !== columnIndex) {
        header.removeAttribute('data-sort-order');
        header.setAttribute('data-sort-order', 'asc');
        header.innerHTML = header.innerText.replace(/[\u25B2\u25BC]/g, '') + ' \u25B2'; // Reset other headers to ascending (up arrow)
      }
    });

    rows.sort((rowA, rowB) => {
      const cellA = rowA.querySelectorAll('td')[columnIndex].innerText;
      const cellB = rowB.querySelectorAll('td')[columnIndex].innerText;

      if (!isNaN(cellA) && !isNaN(cellB)) {
        return isAscending ? cellA - cellB : cellB - cellA;
      } else {
        return isAscending ?
          cellA.localeCompare(cellB) :
          cellB.localeCompare(cellA);
      }
    });

    const newSortOrder = isAscending ? 'desc' : 'asc';
    currentHeader.setAttribute('data-sort-order', newSortOrder);

    // Update the clicked header with the correct arrow icon
    currentHeader.innerHTML = currentHeader.innerText.replace(/[\u25B2\u25BC]/g, '') + (newSortOrder === 'asc' ? ' \u25B2' : ' \u25BC'); // Toggle between up (▲) and down (▼) arrow

    rows.forEach(row => table.querySelector('tbody').appendChild(row));
  }

  // Call the initializeTable function when the page loads
  window.onload = function() {
    initializeTable();
    paginateTable(); // If you have pagination function, call it here as well
  };


  function searchTable() {
    const searchTerm = document.getElementById('search').value.toLowerCase();
    const rows = document.querySelectorAll('#data-table tbody tr');

    rows.forEach(row => {
      const cells = row.querySelectorAll('td');
      const match = Array.from(cells).some(cell => cell.innerText.toLowerCase().includes(searchTerm));
      row.style.display = match ? '' : 'none';
    });
  }

  function thn() {
    var thn = $('[name="thn"]').val();
    window.location = "panel_admin/verifikasi/thn/" + thn;
  }

  $('[name="thn"]').select2({
    placeholder: "- Tahun -"
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    var url = window.location;
    $('li a[href="' + url + '"]').parent().addClass('active');
    $('li a').filter(function() {
      return this.href == url;
    }).parent().addClass('active');
  });
</script>
<script type="text/javascript">

</script>
<script type="text/javascript">
  const flashData = $('.flash-data').data('flashdata');
  const flashDataDaftar = $('.flash-data-daftar').data('flashdata');
  const flashDataProfil = $('.flash-data-profil').data('flashdata');

  if (flashDataProfil) {
    Swal.fire({
      title: 'Data Admin',
      text: 'Berhasil ' + flashData,
      icon: 'success'
    })
  }

  if (flashDataDaftar) {
    Swal.fire({
      title: flashDataDaftar,
      icon: 'success'
    })
  }

  if (flashData) {
    Swal.fire({
      title: 'Berhasil',
      text: flashData,
      icon: 'success'
    })
  }

  $('.tombol-hapus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Data akan dihapus!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus data!',
      cancelButtonText: 'Batal!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });

  $('.tombol-verifikasi').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Data akan Terverifikasi!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Verifikasi!',
      cancelButtonText: 'Batal!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });


  $('.tombol-batal-verifikasi').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Data akan batal Terverifikasi!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Batal Verifikasi!',
      cancelButtonText: 'Cancel!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });

  $('.tombol-tidak-lulus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Asesi akan Tidak Lulus!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Yakin!',
      cancelButtonText: 'Batal!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });

  $('.tombol-lulus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Asesi Akan Lulus!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Yakin!',
      cancelButtonText: 'Batal!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });

  $('.tombol-batal').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Status Asesi Sekarang Akan Dibatalkan!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Batalkan!',
      cancelButtonText: 'Cancel!'
    }).then((result) => {
      if (result.isConfirmed) {
        document.location.href = href;
      }
    })
  });

  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }

  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

<script>
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
  sidebar.addEventListener("mouseleave", hideSidebar);
  sidebar.addEventListener("mouseenter", showSidebar);
  sidebarCloseBtn.addEventListener("click", toggleSidebar);
</script>
</body>

</html>