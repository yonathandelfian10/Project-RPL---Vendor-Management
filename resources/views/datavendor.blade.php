<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyek</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
        }

        /* Styling untuk header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 15px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            max-width: 1800px;
            margin: 0 auto;
        }

        .header img {
            height: 45px;
            transition: transform 0.3s ease;
        }

        .header img:hover {
            transform: scale(1.1);
        }

        .user-info {
            display: flex;
            align-items: center;
            background-color: #0048BA;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .user-info:hover {
            background-color: #00337A;
        }

        .user-info span {
            margin-left: 10px;
            font-size: 16px;
        }

        .role {
            font-size: 12px;
            font-weight: bold;
            background-color: white;
            color: #0048BA;
            padding: 4px 12px;
            border-radius: 15px;
            margin-left: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .role:hover {
            background-color: #00337A;
            color: white;
        }

        /* Dropdown Menu */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 70px;
            right: 0;
            background-color: white;
            min-width: 170px;
            box-shadow: 0px 18px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .user-info.active + .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #ddd;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Menambahkan ruang pada body untuk menghindari overlap dengan header */
        body {
            margin-top: 90px;
        }

        .table-container {
            width: 100%;
            max-width: 1200px;
            margin: 20px 0;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
        }

        thead {
            background-color: #0033a0;
            color: white;
        }

        th,
        td {
            padding: 14px 20px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            font-weight: bold;
            font-size: 15px;
        }

        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:nth-child(even) {
            background-color: #f0f0f5;
        }

        .status-icon {
            color: green;
            font-size: 18px;
            text-align: center;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .action-buttons button {
            padding: 6px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .action-buttons .edit-btn {
            background-color: #ffc107;
            color: black;
        }

        .action-buttons .detail-btn {
            background-color: #007bff;
            color: white;
        }

        .action-buttons .hapus-btn {
            background-color: #e74c3c;
            color: white;
        }

        .action-buttons button:hover {
            opacity: 0.8;
        }

        .add-button {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .add-button button {
            background-color: #0033a0;
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .add-button button:hover {
            background-color: #002a80;
        }

        /* Logout Button Style */
        .logout-btn {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            font-size: 14px;
            text-align: center;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png" alt="BCA Logo">
        <div class="user-info" onclick="toggleDropdown()">
            <span class="name">Yonathan Delfian</span>
            <button class="role">Tim IT</button>
        </div>

        <!-- Dropdown Content -->
        <div class="dropdown-content">
            <a href="javascript:void(0)" onclick="logout()" class="logout-btn">Logout</a>
        </div>
    </div>

    <!-- Table Container -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA PROYEK</th>
                    <th>PENANGGUNG JAWAB</th>
                    <th>EMAIL</th>
                    <th>TANGGAL MULAI</th>
                    <th>TANGGAL SELESAI</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>PROYEK SATU</td>
                    <td>ROLITA</td>
                    <td>Rolia@gmail.com</td>
                    <td>10/02/2023</td>
                    <td>10/04/2023</td>
                    <td class="status-icon">✔</td>
                    <td class="action-buttons">
                        <button class="edit-btn">Edit</button>
                        <button class="detail-btn">Detail</button>
                        <button class="hapus-btn">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PROYEK DUA</td>
                    <td>DELFI</td>
                    <td>Delfi@gmail.com</td>
                    <td>19/04/2023</td>
                    <td>19/06/2023</td>
                    <td class="status-icon">✔</td>
                    <td class="action-buttons">
                        <button class="edit-btn">Edit</button>
                        <button class="detail-btn">Detail</button>
                        <button class="hapus-btn">Hapus</button>
                    </td>
                </tr>
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>

    <div class="add-button">
        <button>Tambah Vendor</button>
    </div>

    <script>
        function toggleDropdown() {
            document.querySelector('.user-info').classList.toggle('active');
        }

        function logout() {
            // Optional: You can clear session data or perform other logout actions here
            window.location.href = "login"; // Redirect to the login page
        }
    </script>
</body>

</html>
