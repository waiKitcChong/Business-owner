<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TripMate Hotel Manager - Staff Management</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/navigation.css">
  <link rel="stylesheet" href="../css/page/staff.css">
  <style>
    nav a.active-st {
      background-color: white;
      color: #1e293b;
      font-weight: 600;
      box-shadow: 0 0 0 1px #e2e8f0;
    }

    nav a.active-st svg {
      stroke: #1e293b;
    }
  </style>
</head>

<body>
  <?php
  $allowed_roles = ["owner"];
  $i = 0;
  include "../auth/security/allow_roles.php";
  include '../form/add_staff.php';
  $staff = [];
  $user_staff = [];
  if (isset($data['Bussiness_Staff'])) {
    foreach ($data['Bussiness_Staff'] as $s) {
      if ($ownerID == $s['owner_id']) {
        $staff[] = new Bussiness_Staff($s);
      }
    }
    foreach ($data['User'] as $u) {
      foreach ($staff as $s) {
        if ($u['user_id'] == $s->user_id) {
          $user_staff[] = new User($u);
        }
      }
    }
  }
  ?>
  <main class="container" role="main">
    <div class="page-header">
      <div>
        <h1>Staff Management</h1>
        <p>Manage your hotel staff members</p>
      </div>
      <button class="btn-add" type="button" aria-label="Add Staff Member">
        <svg aria-hidden="true" focusable="false" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="14" height="14">
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
        Add Staff Member
      </button>
    </div>
    <section class="card" aria-labelledby="search-filter-title">
      <h2 id="search-filter-title">Search &amp; Filter</h2>
      <div class="search-filter">
        <div class="search-input-wrapper">
          <input type="search" aria-label="Search staff by name, email, or position" placeholder="Search staff by name, email, or position..." />
          <i class="fas fa-search" aria-hidden="true"></i>
        </div>
        <select class="select-department" aria-label="Filter by department">
          <option>All Departments</option>
          <option>Reception</option>
          <option>Housekeeping</option>
          <option>Kitchen</option>
          <option>Maintenance</option>
        </select>
      </div>
    </section>
    <section class="card" aria-labelledby="staff-members-title">
      <h2 id="staff-members-title">Staff Members (<?=count($staff)?>)</h2>
      <p>Manage your hotel staff members and their information</p>
      <table role="table" aria-describedby="staff-members-desc">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Location</th>
            <th scope="col">Contact</th>
            <th scope="col">Status</th>
            <th scope="col">Join Date</th>
            <th scope="col" colspan="2" style="text-align:right;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($staff as $s) {
          ?>
            <tr>
              <td>
                <div class="staff-name"><?= $user_staff[$i]->name ?></div>
                <div class="staff-email"><?= $user_staff[$i]->email ?></div>
              </td>
              <td><?= $s->country ?></td>
              <td><span class="badge reception" aria-label="Reception department"><?= $s->department ?></span></td>
              <td><?= $s->contact_number ?></td>

              <?php
              $status = strtolower($user_staff[$i]->status ?? 'inactive');
              $isActive = $status === 'active';
              ?>
              <td>
                <span class="status-badge <?= $isActive ? 'active' : 'inactive' ?>" aria-label="<?= ucfirst($status) ?> status">
                  <?php if ($isActive): ?>
                    <svg aria-hidden="true" focusable="false" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="12" height="12">
                      <path d="M9 12l2 2 4-4"></path>
                    </svg>
                  <?php else: ?>
                    <svg aria-hidden="true" focusable="false" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="12" height="12">
                      <circle cx="12" cy="12" r="3"></circle>
                      <line x1="12" y1="15" x2="12" y2="12"></line>
                      <line x1="12" y1="9" x2="12" y2="9"></line>
                    </svg>
                  <?php endif; ?>
                  <?= htmlspecialchars($status) ?>
                </span>
              </td>

              <td><?= $s->registration_date ?></td>
              <td><button class="btn-action" type="button" aria-label="Deactivate Sarah Johnson">Deactivate</button></td>
              <td>
                <button class="btn-icon" type="button" aria-label="Edit Sarah Johnson">
                  <svg aria-hidden="true" focusable="false" stroke="currentColor" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" width="16" height="16">
                    <path d="M12 20h9"></path>
                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"></path>
                  </svg>
                </button>
              </td>
            </tr>
          <?php
            $i++;
          }
          ?>
        </tbody>
      </table>
    </section>
  </main>
  <script src="../js/staff.js"></script>
</body>
</html>