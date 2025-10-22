
<style>
  * {
    box-sizing: border-box;
  }


  /* Trigger button */
  .open-modal-btn {
    background-color: #3b82f6;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    font-size: 14px;
    color: white;
    padding: 10px 18px;
    cursor: pointer;
    transition: background-color 0.2s ease;
    margin-bottom: 20px;
  }
  .open-modal-btn:hover {
    background-color: #2563eb;
  }

  /* Overlay background */
  .overlay {
    display: flex;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    z-index: 99;
    justify-content: center;
    align-items: center;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
  }

  .overlay.active {
    opacity: 1;
    pointer-events: auto;
  }

  /* Modal animation */
  .modal {
    background-color: #f5f8fc;
    border-radius: 12px;
    width: 320px;
    padding: 24px 24px 32px 24px;
    box-shadow: 0 0 12px rgb(0 0 0 / 0.15);
    position: relative;
    transform: scale(0.8);
    opacity: 0;
    transition: all 0.3s ease;
  }

  .overlay.active .modal {
    transform: scale(1);
    opacity: 1;
  }

  .modal-header {
    margin-bottom: 8px;
  }
  .modal-header h2 {
    font-weight: 600;
    font-size: 15px;
    line-height: 20px;
    color: #0f172a;
    margin: 0;
  }
  .modal-header p {
    font-weight: 400;
    font-size: 12px;
    line-height: 16px;
    color: #94a3b8;
    margin: 4px 0 0 0;
  }
  .close-btn {
    position: absolute;
    top: 16px;
    right: 16px;
    font-size: 16px;
    color: #94a3b8;
    cursor: pointer;
    user-select: none;
    border: none;
    background: none;
    padding: 0;
    line-height: 1;
  }
  .form-group {
    margin-top: 16px;
  }
  label {
    display: block;
    font-weight: 600;
    font-size: 12px;
    line-height: 16px;
    color: #0f172a;
    margin-bottom: 6px;
  }
  input[type="text"],
  input[type="email"],
  select {
    width: 100%;
    height: 36px;
    padding: 8px 12px;
    font-size: 13px;
    line-height: 18px;
    color: #475569;
    background-color: #f5f8fc;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    outline-offset: 2px;
    outline-color: transparent;
    transition: outline-color 0.2s ease;
  }
  input[type="text"]::placeholder,
  input[type="email"]::placeholder {
    color: #94a3b8;
  }
  input[type="text"]:focus,
  input[type="email"]:focus,
  select:focus {
    outline-color: #3b82f6;
  }
  select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url("data:image/svg+xml,%3csvg fill='none' stroke='%2394a3b8' stroke-width='2' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'%3e%3c/path%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 16px 16px;
    cursor: pointer;
  }
  .modal-footer {
    margin-top: 24px;
    display: flex;
    justify-content: flex-end;
    gap: 12px;
  }
  .btn-cancel {
    background-color: transparent;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    font-weight: 400;
    font-size: 13px;
    line-height: 18px;
    color: #475569;
    padding: 8px 16px;
    cursor: pointer;
    transition: background-color 0.2s ease;
  }
  .btn-cancel:hover {
    background-color: #e2e8f0;
  }
  .btn-submit {
    background-color: #3b82f6;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    font-size: 13px;
    line-height: 18px;
    color: white;
    padding: 8px 16px;
    cursor: pointer;
    transition: background-color 0.2s ease;
  }
  .btn-submit:hover {
    background-color: #2563eb;
  }
  @media (max-width: 360px) {
    .modal {
      width: 90vw;
      padding: 20px 20px 28px 20px;
    }
  }
</style>


  <!-- Trigger Button -->
    

  <!-- Overlay & Modal -->
  <div class="overlay" id="overlay">
    <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle" aria-describedby="modalDesc">
      <button class="close-btn" aria-label="Close modal" type="button" id="closeBtn">×</button>
      <div class="modal-header">
        <h2 id="modalTitle">Add New Staff Member</h2>
        <p id="modalDesc">Add a new team member to your hotel staff.</p>
      </div>
      <form>
        <div class="form-group">
          <label for="fullName">Full Name</label>
          <input id="fullName" name="fullName" type="text" placeholder="Enter full name" autocomplete="off" />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="Enter email address" autocomplete="off" />
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input id="phone" name="phone" type="text" placeholder="Enter phone number" autocomplete="off" />
        </div>
        <div class="form-group">
          <label for="position">Position</label>
          <input id="position" name="position" type="text" placeholder="Enter position/role" autocomplete="off" />
        </div>
        <div class="form-group">
          <label for="department">Department</label>
          <select id="department" name="department" aria-label="Select department">
            <option value="" disabled selected>Select department</option>
            <option value="frontdesk">Front Desk</option>
            <option value="housekeeping">Housekeeping</option>
            <option value="maintenance">Maintenance</option>
            <option value="management">Management</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-cancel" id="cancelBtn">Cancel</button>
          <button type="submit" class="btn-submit">Add Staff Member</button>
        </div>
      </form>
    </div>
  </div>



