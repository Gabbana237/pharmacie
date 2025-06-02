<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PharmaRoute - Espace Admin de Jeff</title>
<!-- Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   @yield('styles')
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f8f9fa;
    }
    .container {
      display: flex;
      height: 100vh;
    }
    .sidebar {
      width: 250px;
      background-color: #28a745;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .sidebar-top {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .logo {
      font-size: 22px;
      color: #000000;
      text-align: center;
    }
    .nav-link {
      display: block;
      padding: 12px;
      color: white;
      text-decoration: none;
      transition: background 0.3s;
    }
    .nav-link:hover, .nav-link.logout:hover {
      background-color: #012e5f;
      border-radius: 5px;
    }
    .logout {
      margin-top: auto;
      background-color: #c0392b;
      text-align: center;
      border-radius: 8px ;
    }
    .main {
      flex: 1;
      display: flex;
      flex-direction: column;
      padding: 20px;
    }
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      flex-wrap: wrap;
      gap: 10px;
    }
    .search-bar {
      padding: 10px;
      width: 300px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .actions {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .export-btn {
      padding: 10px 16px;
      background-color: #012e5f;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .avatar {
      border-radius: 50%;
      width: 40px;
      height: 40px;
    }
    .admin-name {
      margin-left: 8px;
      font-weight: 500;
      color: #012e5f;
    }
    .table-wrapper {
      overflow-x: auto;
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      padding: 20px;
    }
    .invoice-table {
      width: 100%;
      border-collapse: collapse;
    }
    .invoice-table th, .invoice-table td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    .invoice-table th {
      color: #333;
      font-weight: 600;
    }
    .invoice-table td:last-child {
      text-align: center;
    }
    .status-paid {
      color: green;
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }
      .sidebar {
        width: 100%;
        flex-direction: column;
        align-items: center;
      }
      .nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
      }
      .nav-link {
        flex: 1 1 45%;
        text-align: center;
      }
      .topbar {
        flex-direction: column;
        align-items: flex-start;
      }
      .search-bar {
        width: 100%;
      }
    }
  </style>
</head>
<div class="container">
  <style>
    .nav-link {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 12px 16px;
    }
    .material-icons {
      font-size: 24px;
      display: flex;
      align-items: center;
    }
    .logout {
      margin-top: auto; /* Place le bouton de déconnexion en bas */
    }
    .search-container {
      display: flex;
      align-items: center;
    }
    .search-icon {
      margin-right: 8px;
    }
    .export-btn {
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .profile {
      display: flex;
      align-items: center;
      gap: 8px;
    }
  </style>

  <aside class="sidebar">
    <div class="sidebar-top">
      <h2 class="logo">PharmaRoute</h2>
      <nav class="nav">
        <a href="{{ route("dashboad")}}" class="nav-link">
          <i class="material-icons">dashboard</i>
          <span>Dashboard</span>
        </a>
        <a href="{{ route("medicam")}}" class="nav-link">
          <i class="material-icons">medication</i>
          <span>Medication</span>
        </a>
        <a href="#" class="nav-link">
          <i class="material-icons">shopping_cart</i>
          <span>Commandes</span>
        </a>
        <a href="#" class="nav-link">
          <i class="material-icons">settings</i>
          <span>Paramètres</span>
        </a>
      </nav>
    </div>
    <a href="#" class="nav-link logout">
      <i class="material-icons">logout</i>
      <span>Se déconnecter</span>
    </a>
  </aside>

  <main class="main">
    <header class="topbar">
      <div class="search-container">
        <i class="material-icons search-icon">search</i>
        <input type="text" placeholder="Rechercher..." class="search-bar" />
      </div>
      <div class="actions">
        <button class="export-btn">
          <i class="material-icons">file_download</i>
          <span>Exporter</span>
        </button>
        <div class="profile">
          <img src="https://i.pravatar.cc/40" alt="admin avatar" class="avatar" />
          <span class="admin-name">Jeff</span>
          <i class="material-icons">arrow_drop_down</i>
        </div>
      </div>
    </header>

    <section class="content">
      @yield('content')
    </section>
  </main>
</div>
  
  @yield('scripts')
</body>
</html>