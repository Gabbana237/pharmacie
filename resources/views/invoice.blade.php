<!-- resources/views/invoices.blade.php -->
@extends('layouts.app')

@section('content')
  <h3>Factures</h3>
  <div class="table-wrapper">
    <table class="invoice-table">
      <thead>
        <tr>
          <th>#</th>
          <th>FACTURE POUR</th>
          <th>DATE ÉMISSION</th>
          <th>DATE LIMITE</th>
          <th>TOTAL</th>
          <th>STATUT</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody id="invoice-body">
        <!-- Contenu injecté dynamiquement -->
      </tbody>
    </table>
  </div>
@endsection

@section('scripts')
  <script>
    // app.js
    const invoices = [
      {
        id: '100001',
        item: 'Abonnement Premium',
        issueDate: '01 Mai 2025',
        dueDate: '01 Juin 2025',
        total: '$199.00',
        status: 'Payée'
      },
      {
        id: '100002',
        item: 'Achat Médicaments',
        issueDate: '10 Mai 2025',
        dueDate: '10 Juin 2025',
        total: '$349.00',
        status: 'Payée'
      }
    ];

    const tbody = document.getElementById('invoice-body');
    invoices.forEach((invoice) => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td>${invoice.id}</td>
        <td>${invoice.item}</td>
        <td>${invoice.issueDate}</td>
        <td>${invoice.dueDate}</td>
        <td>${invoice.total}</td>
        <td class="status-paid">${invoice.status}</td>
        <td><button>...</button></td>
      `;
      tbody.appendChild(tr);
    });
  </script>
@endsection