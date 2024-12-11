<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            min-height: 100vh;
        }

        /* Dashboard Layout */
        .dashboard-container {
            display: flex;
            width: 100%;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #2C3E50;
            color: #fff;
            padding: 20px;
            height: 100vh;
        }

        .sidebar .logo img {
            width: 100%;
            max-width: 150px;
            display: block;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
        }

        .sidebar ul li {
            padding: 10px 0;
            font-size: 16px;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background-color: #34495E;
            padding-left: 10px;
            transition: 0.3s;
        }

        .sidebar ul li ul {
            padding-left: 20px;
        }

        .sidebar ul li ul li {
            font-size: 14px;
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            background-color: #ffffff;
            padding: 20px;
            position: relative;
        }

        .header {
            background-color: #fff;
            padding: 20px;
            border-bottom: 2px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            color: #333;
            margin-bottom: 5px;
        }

        .header span {
            color: #777;
        }

        .profile-menu {
            position: relative;
        }

        .profile-icon {
            font-size: 24px;
            color: #333;
            cursor: pointer;
        }

        .dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 50px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            width: 150px;
        }

        .dropdown button {
            width: 100%;
            padding: 10px;
            text-align: left;
            background-color: #e74c3c;
            color: white;
            border: none;
            font-size: 14px;
            cursor: pointer;
        }

        .dropdown button:hover {
            background-color: #c0392b;
        }

        .profile-menu:hover .dropdown {
            display: block;
        }

        .dashboard-section {
            margin-top: 20px;
        }

        .dashboard-section h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .buttons .btn {
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #0042C3;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .buttons .btn:hover {
            background-color: #0042C3;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .dashboard-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
            }

            .main-content {
                padding: 10px;
            }

            .profile-menu {
                right: 10px;
            }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const profileIcon = document.querySelector(".profile-icon");
            const dropdown = document.querySelector(".dropdown");

            // Toggle Dropdown
            profileIcon.addEventListener("click", () => {
                dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
            });

            // Close Dropdown when clicking outside
            document.addEventListener("click", (event) => {
                if (!profileIcon.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.style.display = "none";
                }
            });
        });

        // Logout Function
        function logout() {
            // Optional: Perform cleanup actions like removing tokens/sessions here
            window.location.href = 'login'; // Redirect to login page
        }
    </script>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png" alt="Logo">
            </div>
            <ul>
                <li>Home Super Admin</li>
                <li>Management Project
                    <ul>
                        <li>Daftar Project</li>
                        <li>Tambah Project</li>
                    </ul>
                </li>
                <li>Management Vendor
                    <ul>
                        <li>Daftar Vendor</li>
                        <li>Tambah Vendor</li>
                    </ul>
                </li>
                <li>Management Tim IT
                    <ul>
                        <li>Daftar Admin IT</li>
                        <li>Tambah Admin IT</li>
                    </ul>
                </li>
                <li>Laporan Project</li>
                <li>Laporan Vendor</li>
                <li>Laporan Tim IT</li>
                <li>Settings</li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <div>
                    <h1>Welcome Elsya!</h1>
                    <span>Halaman Super Admin</span>
                </div>
                <div class="profile-menu">
                    <span class="profile-icon">&#x1F464;</span>
                    <div class="dropdown">
                        <button onclick="logout()">Logout</button>
                    </div>
                </div>
            </header>
            <section class="dashboard-section">
                <h2>Home Super Admin</h2>
                <div class="buttons">
                    <button class="btn" onclick="window.location.href='buatakunbank'">Buat Akun Bank</button>
                    <button class="btn" onclick="window.location.href='buatakunvendor'">Buat Akun Vendor</button>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
