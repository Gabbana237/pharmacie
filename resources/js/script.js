const meds = [
  {
    id: 1,
    name: "Paracétamol",
    quantity: 120,
    expiration: "2025-08-30",
    price: "$5.00",
    status: "Disponible"
  },
  {
    id: 2,
    name: "Ibuprofène",
    quantity: 0,
    expiration: "2024-12-12",
    price: "$8.50",
    status: "Épuisé"
  }
];

const tbody = document.getElementById('table-body');

meds.forEach(med => {
  const tr = document.createElement('tr');
  tr.innerHTML = `
    <td>${med.id}</td>
    <td>${med.name}</td>
    <td>${med.quantity}</td>
    <td>${med.expiration}</td>
    <td>${med.price}</td>
    <td class="status ${med.status === 'Disponible' ? 'available' : 'out-of-stock'}">${med.status}</td>
    <td class="action-menu">⋮</td>
  `;
  tbody.appendChild(tr);
});
