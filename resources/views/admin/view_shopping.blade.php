@include('admin.adheader')

<style>
    /* Custom Admin Orders Table Styles */
    body {
        background-color: #f8f9fa; /* A light grey background for the page */
    }

    .orders-card {
        border: none; /* Remove default card border if using strong shadow */
        border-radius: 0.75rem; /* Softer corners */
        transition: all 0.3s ease-in-out;
    }

    .orders-card .card-header-custom { /* If you decide to add a distinct header */
        background-color: #343a40; /* Dark header */
        color: white;
        border-bottom: none;
        border-top-left-radius: 0.75rem;
        border-top-right-radius: 0.75rem;
        padding: 1rem 1.5rem;
    }

    .orders-card h2.card-title-custom {
        font-weight: 600;
        color: #333;
        margin-bottom: 1.5rem; /* More space below title */
    }

    .admin-orders-table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse; /* Ensures borders are clean */
    }

    .admin-orders-table thead th {
        background-color: #e9ecef; /* Lighter, professional header */
        color: #495057;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom-width: 2px !important; /* Bootstrap override for emphasis */
        border-color: #dee2e6 !important;
        padding: 0.9rem 0.75rem;
        vertical-align: middle;
    }

    .admin-orders-table tbody td {
        padding: 0.85rem 0.75rem;
        vertical-align: middle;
        border-top: 1px solid #dee2e6;
        color: #495057;
        font-size: 0.9rem; /* Slightly smaller font for data */
    }

    .admin-orders-table tbody tr:nth-child(even) {
        background-color: #f8f9fa; /* Subtle zebra striping */
    }

    .admin-orders-table tbody tr:hover {
        background-color: #e2e6ea; /* Hover effect */
        transition: background-color 0.2s ease-in-out;
    }

    /* Specific column alignments */
    .admin-orders-table .text-center-col { text-align: center !important; }
    .admin-orders-table .text-start-col { text-align: left !important; }
    .admin-orders-table .text-end-col { text-align: right !important; }


    .admin-orders-table .product-name-col {
        min-width: 180px; /* Ensure product name has enough space */
        font-weight: 500;
    }
    .admin-orders-table .customer-name-col {
        min-width: 150px;
    }

    .admin-orders-table .description-col {
        max-width: 250px; /* Limit description width */
        white-space: pre-wrap; /* Allow wrapping but preserve newlines */
        word-break: break-word;
        font-size: 0.85rem;
        color: #6c757d;
    }

    .action-buttons .btn {
        margin: 0 0.2rem; /* Spacing between buttons */
        padding: 0.375rem 0.75rem; /* Standard Bootstrap sm button padding */
        transition: all 0.2s ease-in-out;
    }
    .action-buttons .btn i {
        font-size: 0.9em; /* Adjust icon size relative to button text */
    }

    .action-buttons .btn-success:hover {
        background-color: #198754;
        border-color: #198754;
        transform: translateY(-1px);
    }
    .action-buttons .btn-danger:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        transform: translateY(-1px);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .admin-orders-table thead {
            display: none; /* Hide headers on small screens if using card layout */
        }
        .admin-orders-table, .admin-orders-table tbody, .admin-orders-table tr, .admin-orders-table td {
            display: block; /* Stack table cells */
            width: 100%;
        }
        .admin-orders-table tr {
            margin-bottom: 1rem;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
        }
        .admin-orders-table td {
            text-align: right; /* Align text to the right */
            padding-left: 50%; /* Create space for the label */
            position: relative;
            border-top: none; /* Remove default top border */
            border-bottom: 1px solid #e9ecef; /* Add bottom border for separation */
        }
        .admin-orders-table td:last-child {
            border-bottom: none;
        }
        .admin-orders-table td::before {
            content: attr(data-label); /* Use data-label for cell headers */
            position: absolute;
            left: 0.75rem;
            width: calc(50% - 1.5rem); /* Adjust width */
            padding-right: 0.75rem;
            font-weight: 600;
            text-align: left;
            white-space: nowrap;
        }
        .action-buttons {
            text-align: right !important; /* Align buttons to the right in stacked view */
            padding-top: 0.5rem;
        }
    }
</style>

<div id="layoutSidenav_content">
    <main> <!-- Added main tag for semantic HTML -->
        <div class="container-fluid py-5 px-md-4 px-sm-3">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-lg p-3 p-md-4 rounded orders-card">
                <h2 class="mb-4 text-center card-title-custom">Manage Orders</h2>

                <div class="table-responsive">
                    @if($products->count() > 0)
                        <table class="table table-hover align-middle admin-orders-table">
                            <thead class="thead-light"> <!-- a bit lighter than default bootstrap table-light -->
                                <tr>
                                    <th class="text-center-col">ID</th>
                                    <th class="text-start-col product-name-col">Product Name</th>
                                    <th class="text-center-col">Size</th>
                                    <th class="text-center-col">Order ID</th>
                                    <th class="text-start-col customer-name-col">Customer Name</th>
                                    <th class="text-start-col">Email</th>
                                    <th class="text-start-col">Phone</th>
                                    <th class="text-center-col">Date</th>
                                    <th class="text-center-col">Qty</th>
                                    <th class="text-start-col description-col">Description</th>
                                    <th class="text-center-col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td data-label="ID" class="text-center-col">{{ $product->id }}</td>
                                        <td data-label="Product" class="text-start-col product-name-col">{{ $product->name }}</td> {{-- Assuming this is product name --}}
                                        <td data-label="Size" class="text-center-col">{{ $product->size }}</td>
                                        <td data-label="Order ID" class="text-center-col">{{ $product->order_id }}</td>
                                      
                                        
                                        <td data-label="Customer" class="text-start-col customer-name-col">{{ $product->name }}</td> {{-- This should ideally be a customer name field --}}
                                        <td data-label="Email" class="text-start-col">{{ $product->email }}</td>
                                        <td data-label="Phone" class="text-start-col">{{ $product->phone }}</td>
                                        <td data-label="Date" class="text-center-col">{{ $product->date ? \Carbon\Carbon::parse($product->date)->format('d M Y') : 'N/A' }}</td>
                                        <td data-label="Qty" class="text-center-col">{{ $product->quantity }}</td>
                                        <td data-label="Description" class="text-start-col description-col">{{ $product->description ?? 'N/A' }}</td>
                                        <td data-label="Actions" class="text-center-col">
                                            <div class="action-buttons">
                                                <a href="{{ route('admin.invoice', ['order_id' => $product->order_id]) }}" class="btn btn-success btn-sm" title="Download Invoice">
                                                    <i class="fas fa-download"></i> <span class="d-none d-md-inline">Invoice</span>
                                                </a>
                                                <a href="{{ route('admin.send_bill', ['order_id' => $product->order_id]) }}" class="btn btn-primary btn-sm" title="Send Bill via Email">
                                                    <i class="fas fa-envelope"></i> <span class="d-none d-md-inline">Send</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-info text-center">
                            No orders found at the moment.
                        </div>
                    @endif
                </div> <!-- ./table-responsive -->

                
                

            </div> <!-- ./card -->
        </div> <!-- ./container-fluid -->
    </main> <!-- ./main -->

    
    

</div> <!-- ./layoutSidenav_content -->
</body>
</html>