@include('admin.adheader') <!-- Sidebar + layout -->

<div class="page-wrapper mt-3">
  <div class="container-fluid">
    <h2 class="text-dark text-center mb-4">Admin Dashboard</h2>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <div class="row">

      <!-- User Count Card -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-lg text-center border-0" style="background: #f0f8ff;">
          <div class="card-body">
            <h5 class="card-title text-secondary mb-3">Users</h5>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <i class="bi bi-people-fill" style="font-size: 6rem; color: #007bff;"></i>
              <h3 class="rounded-pill bg-primary text-white px-5 py-3 mb-0" style="font-size: 2.5rem;">
                {{ $u_count }}
              </h3>
            </div>
            <a href="{{ route('admin.view_user') }}" class="btn btn-outline-primary btn-sm rounded-pill px-4">
              View Details
            </a>
          </div>
        </div>
      </div>

      <!-- CONTACT US -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-lg text-center border-0" style="background: #fff3e0;">
          <div class="card-body">
            <h5 class="card-title text-secondary mb-3">Contact Us</h5>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <i class="bi bi-envelope-fill" style="font-size: 6rem; color: #ff9800;"></i>
              <h3 class="rounded-pill bg-warning text-white px-5 py-3 mb-0" style="font-size: 2.5rem;">
                {{ $c_count }}
              </h3>
            </div>
            <a href="{{ route('view_contactus') }}" class="btn btn-outline-warning btn-sm rounded-pill px-4">
              View Details
            </a>
          </div>
        </div>
      </div>

      <!-- RETURN & EXCHANGE -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-lg text-center border-0" style="background: #f3e5f5;">
          <div class="card-body">
            <h5 class="card-title text-secondary mb-3">Return & Exchange</h5>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <i class="bi bi-arrow-repeat" style="font-size: 6rem; color: #9c27b0;"></i>
              <h3 class="rounded-pill text-white px-5 py-3 mb-0" style="background-color: #9c27b0; font-size: 2.5rem;">
                {{ $r_count }}
              </h3>
            </div>
            <a href="{{ route('view_return') }}" class="btn btn-outline-dark btn-sm rounded-pill px-4">
              View Details
            </a>
          </div>
        </div>
      </div>

      <!-- ADMIN USERS -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow-lg text-center border-0" style="background: #e8f5e9;">
          <div class="card-body">
            <h5 class="card-title text-secondary mb-3">Admin Users</h5>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <i class="bi bi-person-gear" style="font-size: 6rem; color: #4caf50;"></i>
              <h3 class="rounded-pill bg-success text-white px-5 py-3 mb-0" style="font-size: 2.5rem;">
                {{ $ad_count }}
              </h3>
            </div>
            <a href="{{ route('admin.view_user') }}" class="btn btn-outline-success btn-sm rounded-pill px-4">
              View Details
            </a>
          </div>
        </div>
      </div>

      <!-- Sales Chart -->
      <div class="col-xl-6 col-md-6 mb-4" id="salesChartContainer" style="background-color: #e0f7fa;">
        <div class="card shadow-sm rounded text-center">
          <div class="card-body">
            <h6 class="card-title mb-3">Sales</h6>
            <canvas id="salesChart" height="200"></canvas>
            <button class="btn btn-outline-primary btn-sm mt-3" id="toggleSalesChart">Hide Sales Chart</button>
          </div>
        </div>
      </div>

      <!-- Revenue Chart -->
      <div class="col-xl-6 col-md-6 mb-4" id="revenueChartContainer" style="background-color: #f1f8e9;">
        <div class="card shadow-sm rounded text-center">
          <div class="card-body">
            <h6 class="card-title mb-3">Revenue</h6>
            <canvas id="revenueChart" height="200"></canvas>
            <button class="btn btn-outline-warning btn-sm mt-3" id="toggleRevenueChart">Hide Revenue Chart</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart Initialization -->
<script>
  // Sales Chart
  new Chart(document.getElementById('salesChart'), {
    type: 'line',
    data: {
      labels: {!! json_encode($dates) !!},
      datasets: [{
        label: 'Sales',
        data: {!! json_encode($sales) !!},
        borderColor: 'rgba(54, 162, 235, 1)',
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        fill: true,
        tension: 0.4,
        borderWidth: 2,
        pointRadius: 4,
        pointBackgroundColor: '#36A2EB',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: '#36A2EB',
        hoverBackgroundColor: 'rgba(54, 162, 235, 0.5)'
      }]
    },
    options: {
      responsive: true,
      scales: {
        x: {
          grid: {
            color: 'rgba(255, 255, 255, 0.1)',
          },
          title: {
            display: true,
            text: 'Date'
          }
        },
        y: {
          grid: {
            color: 'rgba(255, 255, 255, 0.1)',
          },
          title: {
            display: true,
            text: 'Sales'
          }
        }
      }
    }
  });

  // Revenue Chart
  new Chart(document.getElementById('revenueChart'), {
    type: 'bar',
    data: {
      labels: {!! json_encode($r_dates) !!},
      datasets: [{
        label: 'Revenue ($)',
        data: {!! json_encode($r_price) !!},
        backgroundColor: 'linear-gradient(90deg, rgba(0, 204, 255, 1) 0%, rgba(0, 123, 255, 1) 100%)',
        borderRadius: 10,
        borderWidth: 0,
        hoverBackgroundColor: 'rgba(0, 123, 255, 0.7)',
        hoverBorderWidth: 2,
        hoverBorderColor: '#fff'
      }]
    },
    options: {
      responsive: true,
      scales: {
        x: {
          grid: {
            color: 'rgba(255, 255, 255, 0.1)',
          }
        },
        y: {
          grid: {
            color: 'rgba(255, 255, 255, 0.1)',
          }
        }
      }
    }
  });

  // Toggle Sales Chart
  document.getElementById('toggleSalesChart').addEventListener('click', function() {
    var salesChartContainer = document.getElementById('salesChartContainer');
    if (salesChartContainer.style.display === 'none') {
      salesChartContainer.style.display = 'block';
      this.textContent = 'Hide Sales Chart';
    } else {
      salesChartContainer.style.display = 'none';
      this.textContent = 'Show Sales Chart';
    }
  });

  // Toggle Revenue Chart
  document.getElementById('toggleRevenueChart').addEventListener('click', function() {
    var revenueChartContainer = document.getElementById('revenueChartContainer');
    if (revenueChartContainer.style.display === 'none') {
      revenueChartContainer.style.display = 'block';
      this.textContent = 'Hide Revenue Chart';
    } else {
      revenueChartContainer.style.display = 'none';
      this.textContent = 'Show Revenue Chart';
    }
  });
</script>
