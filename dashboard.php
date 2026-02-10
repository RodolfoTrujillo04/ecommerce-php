<div style="background: white; padding: 25px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); max-width: 800px; margin: 20px auto;">
    <h3 style="color: #333; font-family: sans-serif; margin-bottom: 20px;">Reporte Mensual de Ventas</h3>
    <canvas id="ventasChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('ventasChart').getContext('2d');

// Creamos un gradiente para el relleno
const gradient = ctx.createLinearGradient(0, 0, 0, 400);
gradient.addColorStop(0, 'rgba(118, 75, 162, 0.4)');   // Color morado arriba
gradient.addColorStop(1, 'rgba(118, 75, 162, 0.0)');   // Transparente abajo

new Chart(ctx, {
    type: 'line', // 'line' se ve más premium con gradientes
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
        datasets: [{
            label: 'Ventas ($)',
            data: [1200, 1900, 3000, 1500, 2500, 3200],
            fill: true,
            backgroundColor: gradient, 
            borderColor: '#764ba2', // El color principal que usamos en el login
            borderWidth: 3,
            tension: 0.4, // Esto suaviza las líneas (curvas)
            pointBackgroundColor: '#764ba2',
            pointRadius: 5,
            pointHoverRadius: 8
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false // Ocultamos la leyenda para un look más limpio
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    display: true,
                    color: 'rgba(0,0,0,0.05)'
                },
                ticks: { color: '#888' }
            },
            x: {
                grid: {
                    display: false // Quitamos las líneas verticales para menos ruido visual
                },
                ticks: { color: '#888' }
            }
        }
    }
});
</script>