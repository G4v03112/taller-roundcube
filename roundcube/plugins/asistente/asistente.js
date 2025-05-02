window.rcmail && rcmail.addEventListener('init', function () {
    rcmail.register_command('asistente', function () {
      const sidebar = document.getElementById('layout-sidebar');
      if (sidebar) {
        sidebar.style.display = (sidebar.style.display === 'none' || sidebar.style.display === '') ? 'block' : 'none';
      }
    }, true);
  });
  