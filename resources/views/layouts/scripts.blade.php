 <script>
        // Layout Toggle Logic
        function toggleSidebar() {
            const body = document.body;
            body.classList.toggle('sidebar-open');
        }

        function showPage(pageId) {
            // Hide all pages
            document.querySelectorAll('.page-content').forEach(p => p.classList.remove('active-page'));
            // Remove active style from all nav
            document.querySelectorAll('.sidebar-item').forEach(n => n.classList.remove('sidebar-item-active'));

            // Show target
            document.getElementById('page-' + pageId).classList.add('active-page');
            document.getElementById('nav-' + pageId).classList.add('sidebar-item-active');

            // Update title
            document.getElementById('current-page-title').innerText = pageId.charAt(0).toUpperCase() + pageId.slice(1);
        }

        // Charts Initialization (referencing image_bc2088.png)
        window.onload = function() {
            showPage('dashboard');

            // Sales Chart
            const salesCtx = document.getElementById('salesChart').getContext('2d');
            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['Aug 21', 'Aug 23', 'Aug 25', 'Aug 27', 'Aug 29', 'Aug 31'],
                    datasets: [{
                        label: 'Sales',
                        data: [30, 40, 35, 60, 100, 90],
                        borderColor: '#5d87ff',
                        backgroundColor: 'rgba(93, 135, 255, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 3,
                        pointRadius: 4,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#5d87ff',
                        pointBorderWidth: 2
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { border: { display: false }, grid: { color: '#f1f5f9' }, ticks: { font: { size: 10 } } },
                        x: { border: { display: false }, grid: { display: false }, ticks: { font: { size: 10 } } }
                    }
                }
            });

            // Performance Chart
            const perfCtx = document.getElementById('performanceChart').getContext('2d');
            new Chart(perfCtx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                    datasets: [
                        { label: 'Target', data: [5, 4, 3, 5, 4, 6, 5, 8], backgroundColor: '#5d87ff', borderRadius: 4 },
                        { label: 'Paid', data: [3, 2, 4, 3, 2, 4, 3, 5], backgroundColor: '#e2e8f0', borderRadius: 4 }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { border: { display: false }, grid: { color: '#f1f5f9' }, ticks: { font: { size: 10 } } },
                        x: { border: { display: false }, grid: { display: false }, ticks: { font: { size: 10 } } }
                    }
                }
            });
        };
    </script>
