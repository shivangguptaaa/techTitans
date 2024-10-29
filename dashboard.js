// // For the charts
// const hoursChart = document.getElementById('hoursChart').getContext('2d');
// const performanceChart = document.getElementById('performanceChart').getContext('2d');

// // Dummy Data for charts
// const hoursData = {
//     labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
//     datasets: [{
//         label: 'Hours',
//         data: [2, 4, 6, 4, 5, 7, 3],
//         backgroundColor: '#6c5ce7'
//     }]
// };

// const performanceData = {
//     labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
//     datasets: [{
//         label: 'Performance',
//         data: [30, 50, 40, 60, 50],
//         backgroundColor: '#74b9ff',
//         borderColor: '#0984e3',
//         fill: false
//     }]
// };

// // Chart initialization
// new Chart(hoursChart, {
//     type: 'bar',
//     data: hoursData
// });

// new Chart(performanceChart, {
//     type: 'line',
//     data: performanceData
// });
// For the charts
const hoursChartCtx = document.getElementById('hoursChart').getContext('2d');
const performanceChartCtx = document.getElementById('performanceChart').getContext('2d');

// Data for actively hours chart
const hoursData = {
    labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    datasets: [{
        label: 'Hours spent',
        data: [2, 4, 6, 4, 5, 7, 3],
        backgroundColor: '#6c5ce7',
        borderColor: '#6c5ce7',
        borderWidth: 1,
        borderRadius: 5,
        barThickness: 30,
    }]
};

// Data for performance chart
const performanceData = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
    datasets: [{
        label: 'Performance',
        data: [30, 50, 40, 60, 50],
        backgroundColor: 'rgba(116, 185, 255, 0.5)',
        borderColor: '#0984e3',
        borderWidth: 2,
        tension: 0.3,
        fill: true,
        pointBackgroundColor: '#0984e3',
        pointBorderColor: '#fff',
        pointRadius: 5,
    }]
};

// Options for actively hours chart
const hoursChartOptions = {
    scales: {
        y: {
            beginAtZero: true
        }
    },
    plugins: {
        legend: {
            display: false
        }
    }
};

// Options for performance chart
const performanceChartOptions = {
    scales: {
        y: {
            beginAtZero: true,
            max: 100
        }
    },
    plugins: {
        legend: {
            display: false
        }
    }
};

// Chart initialization
const hoursChart = new Chart(hoursChartCtx, {
    type: 'bar',
    data: hoursData,
    options: hoursChartOptions
});

const performanceChart = new Chart(performanceChartCtx, {
    type: 'line',
    data: performanceData,
    options: performanceChartOptions
});
