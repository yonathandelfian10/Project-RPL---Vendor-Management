<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Vendor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 10px 30px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        header img {
            height: 40px;
        }

        .user-info {
            display: flex;
            align-items: center;
            background-color: #0048BA;
            color: white;
            padding: 8px 15px;
            border-radius: 30px;
            font-size: 14px;
            cursor: pointer;
        }

        .user-info span {
            margin-left: 10px;
        }

        .role {
            font-size: 12px;
            font-weight: bold;
            background-color: white;
            color: #0048BA;
            padding: 3px 8px;
            border-radius: 15px;
            margin-left: 10px;
        }

        /* Dropdown Menu */
        .profile-menu {
            position: relative;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 40px;
            right: 0;
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

        .profile-menu.active .dropdown {
            display: block;
        }

        /* Container */
        .container {
            margin: 50px auto;
            max-width: 600px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .container h1 {
            text-align: center;
            color: #0048BA;
            margin-bottom: 20px;
        }

        .container form {
            display: flex;
            flex-direction: column;
        }

        .container form label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .container form input {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container form button {
            background-color: #0048BA;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .container form button:hover {
            background-color: #00337a;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png" alt="BCA Logo">
        <div class="profile-menu">
            <div class="user-info">
                <span>Elsya Rolita</span>
                <span class="role">Super Admin</span>
            </div>
            <div class="dropdown">
                <button onclick="logout()">Logout</button>
            </div>
        </div>
    </header>

    <!-- Form Container -->
    <div class="container">
        <h1>Tambah Vendor</h1>
        <form action="proses_tambah_vendor.php" method="post">
            <label for="nama-vendor">Nama Vendor</label>
            <input type="text" id="nama-vendor" name="nama_vendor" required>

            <label for="penanggung-jawab">Penanggung Jawab</label>
            <input type="text" id="penanggung-jawab" name="penanggung_jawab" required>

            <label for="tanggal-mulai">Tanggal Mulai</label>
            <input type="date" id="tanggal-mulai" name="tanggal_mulai" required>

            <label for="tanggal-selesai">Tanggal Selesai</label>
            <input type="date" id="tanggal-selesai" name="tanggal_selesai" required>

            <label for="status">Status</label>
            <input type="text" id="status" name="status" required>

            <button type="submit">Tambah Vendor</button>
        </form>
    </div>

    <script>
        // Toggle the profile menu when user clicks on user-info
        document.addEventListener("DOMContentLoaded", () => {
            const userInfo = document.querySelector(".user-info");
            const profileMenu = document.querySelector(".profile-menu");

            userInfo.addEventListener("click", () => {
                profileMenu.classList.toggle("active");
            });

            // Close the dropdown if clicked outside
            document.addEventListener("click", (event) => {
                if (!profileMenu.contains(event.target)) {
                    profileMenu.classList.remove("active");
                }
            });
        });

        // Logout function
        function logout() {
            // Optional: Perform any session/token cleanup if needed
            window.location.href = 'login'; // Redirect to login page
        }
    </script>
</body>

</html>
