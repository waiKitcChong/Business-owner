
  const openBtn = document.querySelector('.btn-add');
  const overlay = document.getElementById('overlay');
  const closeBtn = document.getElementById('closeBtn');
  const cancelBtn = document.getElementById('cancelBtn');

  openBtn.addEventListener('click', () => {
    overlay.classList.add('active');
  });

  closeBtn.addEventListener('click', () => {
    overlay.classList.remove('active');
  });

  cancelBtn.addEventListener('click', () => {
    overlay.classList.remove('active');
  });

  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      overlay.classList.remove('active');
    }
  });
