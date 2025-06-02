@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard-container">
    <!-- Header -->
    <div class="dashboard-header">
        <h1 class="page-title">
            <i class="material-icons">dashboard</i>
            Tableau de Bord
        </h1>
        <div class="header-actions">
            <button class="btn-refresh">
                <i class="material-icons">refresh</i>
                Actualiser
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="stats-grid">
        <!-- Produits Card -->
        <div class="stat-card">
            <div class="stat-icon bg-blue">
                <i class="material-icons">inventory</i>
            </div>
            <div class="stat-info">
                <h3>Medication</h3>
                <p class="stat-value">245</p>
                <p class="stat-change positive">
                    <i class="material-icons">trending_up</i>
                    12% ce mois
                </p>
            </div>
        </div>

        <!-- Commandes Card -->
        <div class="stat-card">
            <div class="stat-icon bg-green">
                <i class="material-icons">shopping_cart</i>
            </div>
            <div class="stat-info">
                <h3>Commandes</h3>
                <p class="stat-value">89</p>
                <p class="stat-change positive">
                    <i class="material-icons">trending_up</i>
                    8% ce mois
                </p>
            </div>
        </div>

        <!-- Clients Card -->
        <div class="stat-card">
            <div class="stat-icon bg-orange">
                <i class="material-icons">people</i>
            </div>
            <div class="stat-info">
                <h3>Clients</h3>
                <p class="stat-value">156</p>
                <p class="stat-change negative">
                    <i class="material-icons">trending_down</i>
                    3% ce mois
                </p>
            </div>
        </div>

        <!-- Revenus Card -->
        <div class="stat-card">
            <div class="stat-icon bg-purple">
                <i class="material-icons">euro</i>
            </div>
            <div class="stat-info">
                <h3>Revenus</h3>
                <p class="stat-value">12,450 €</p>
                <p class="stat-change positive">
                    <i class="material-icons">trending_up</i>
                    15% ce mois
                </p>
            </div>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="recent-orders">
        <div class="section-header">
            <h2>
                <i class="material-icons">receipt</i>
                Commandes Récentes
            </h2>
            <a href="#" class="view-all">
                Voir tout
                <i class="material-icons">chevron_right</i>
            </a>
        </div>

        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Client</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#PH-2023-001</td>
                        <td>Jean Dupont</td>
                        <td>15/06/2023</td>
                        <td>87,50 €</td>
                        <td><span class="badge success">Complété</span></td>
                        <td>
                            <button class="btn-action" title="Voir détails">
                                <i class="material-icons">visibility</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>#PH-2023-002</td>
                        <td>Marie Lambert</td>
                        <td>14/06/2023</td>
                        <td>124,90 €</td>
                        <td><span class="badge warning">En traitement</span></td>
                        <td>
                            <button class="btn-action" title="Voir détails">
                                <i class="material-icons">visibility</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>#PH-2023-003</td>
                        <td>Pharmacie Centrale</td>
                        <td>13/06/2023</td>
                        <td>356,20 €</td>
                        <td><span class="badge primary">Expédié</span></td>
                        <td>
                            <button class="btn-action" title="Voir détails">
                                <i class="material-icons">visibility</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>#PH-2023-004</td>
                        <td>Clinique Saint-Louis</td>
                        <td>12/06/2023</td>
                        <td>542,00 €</td>
                        <td><span class="badge danger">Annulé</span></td>
                        <td>
                            <button class="btn-action" title="Voir détails">
                                <i class="material-icons">visibility</i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Dashboard Styles */
    .dashboard-container {
        padding: 20px;
    }
    
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    
    .page-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 24px;
        color: #333;
    }
    
    .btn-refresh {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: #f0f2f5;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }
    
    .btn-refresh:hover {
        background: #e0e2e5;
    }
    
    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }
    
    .stat-card {
        display: flex;
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .stat-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        border-radius: 10px;
        margin-right: 15px;
        color: white;
    }
    
    .bg-blue { background: #4285f4; }
    .bg-green { background: #34a853; }
    .bg-orange { background: #fbbc05; }
    .bg-purple { background: #673ab7; }
    
    .stat-info h3 {
        margin: 0 0 5px 0;
        font-size: 16px;
        color: #666;
    }
    
    .stat-value {
        margin: 0;
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }
    
    .stat-change {
        display: flex;
        align-items: center;
        gap: 5px;
        margin: 5px 0 0 0;
        font-size: 13px;
    }
    
    .positive { color: #34a853; }
    .negative { color: #ea4335; }
    
    /* Recent Orders */
    .recent-orders {
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .section-header h2 {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 20px;
        margin: 0;
    }
    
    .view-all {
        display: flex;
        align-items: center;
        gap: 5px;
        color: #4285f4;
        text-decoration: none;
        font-size: 14px;
    }
    
    /* Table Styles */
    .data-table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .data-table th {
        text-align: left;
        padding: 12px 15px;
        background: #f5f7fa;
        color: #666;
        font-weight: 500;
    }
    
    .data-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
    }
    
    .badge {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 500;
    }
    
    .badge.success { background: #e6f4ea; color: #34a853; }
    .badge.warning { background: #fef7e0; color: #fbbc05; }
    .badge.primary { background: #e8f0fe; color: #4285f4; }
    .badge.danger { background: #fce8e6; color: #ea4335; }
    
    .btn-action {
        background: none;
        border: none;
        color: #666;
        cursor: pointer;
        padding: 5px;
    }
    
    .btn-action:hover {
        color: #4285f4;
    }
</style>
@endsection

@section('page-scripts')
<script src="/js/modules/dashboard.js"></script>
@endsection